<?php

namespace App\Http\Controllers;

use App\Mail\QuizResultUnlockedMail;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Stripe\Exception\SignatureVerificationException;
use Stripe\Webhook;

class StripeWebhookController extends Controller
{
    /**
     * Fonte da verdade para liberar o resultado pago do quiz. A verificação
     * síncrona em StyleQuizController::result() só existe para dar feedback
     * instantâneo — se o comprador fechar a aba antes de voltar ao site,
     * este webhook é o único jeito do link pago ser gerado e enviado por
     * e-mail.
     */
    public function handle(Request $request): Response
    {
        $webhookSecret = (string) config('services.stripe.webhook_secret');

        // Com o segredo vazio, a assinatura vira um HMAC com chave vazia que
        // qualquer um consegue calcular — ou seja, qualquer pessoa poderia
        // forjar um "pagamento confirmado". Sem segredo, recusa tudo (500 faz
        // a Stripe tentar de novo depois, quando o segredo estiver configurado).
        if ($webhookSecret === '') {
            Log::error('Stripe webhook received but STRIPE_WEBHOOK_SECRET is not configured.');

            return response('', 500);
        }

        try {
            $event = Webhook::constructEvent(
                $request->getContent(),
                (string) $request->header('Stripe-Signature'),
                $webhookSecret,
            );
        } catch (\UnexpectedValueException|SignatureVerificationException $e) {
            Log::warning('Stripe webhook signature verification failed.', ['error' => $e->getMessage()]);

            return response('', 400);
        }

        if (!in_array($event->type, ['checkout.session.completed', 'checkout.session.async_payment_succeeded'], true)) {
            return response('', 200);
        }

        $session = $event->data->object;

        if ($session->payment_status !== 'paid') {
            return response('', 200);
        }

        $originalToken = $session->metadata->quiz_token ?? null;
        $payload = null;

        if (!$originalToken) {
            Log::warning('Stripe checkout.session.completed without quiz_token metadata.', ['session_id' => $session->id]);
        } else {
            $payload = quiz_decode_token($originalToken);

            if (!$payload) {
                Log::warning('Stripe webhook: quiz_token failed to decrypt.', ['session_id' => $session->id]);
            }
        }

        $buyerEmail = $session->customer_details->email ?? null;
        $locale = $payload ? ($payload['locale'] ?? config('app.fallback_locale')) : null;
        $winnerKey = $payload ? quiz_score_answers($payload['answers'])['winner'] : null;

        // O pagamento é gravado mesmo sem quiz_token/e-mail, para ficar
        // registrado; o e-mail só sai quando os dois existem. Qualquer erro
        // (banco fora do ar, falha no envio do e-mail) desfaz a transação e
        // responde 500, para a Stripe tentar de novo mais tarde.
        try {
            DB::transaction(function () use ($event, $session, $payload, $buyerEmail, $locale, $winnerKey) {
                $payment = $this->lockPayment($session->id);

                $payment->fill([
                    'stripe_event_id' => $event->id,
                    'stripe_payment_intent_id' => is_string($session->payment_intent ?? null)
                        ? $session->payment_intent
                        : ($session->payment_intent->id ?? null),
                    'status' => $session->payment_status,
                    'amount' => (int) ($session->amount_total ?? 0),
                    'currency' => strtolower((string) ($session->currency ?? 'usd')),
                    'buyer_email' => $buyerEmail,
                    'locale' => $locale,
                    'winning_style' => $winnerKey,
                ]);
                $payment->paid_at ??= now();
                $payment->save();

                // A Stripe reentregou um evento já processado: nada a fazer.
                if ($payment->result_email_sent_at !== null || !$payload || !$buyerEmail) {
                    return;
                }

                $paidToken = quiz_mint_paid_token($payload, $session->id);

                App::setLocale($locale);

                $resultUrl = mail_locale_url($locale, '/style-quiz/result') . '?r=' . urlencode($paidToken);

                Mail::to($buyerEmail)->send(new QuizResultUnlockedMail(
                    resultUrl: $resultUrl,
                    winningStyleName: __("quiz.styles.{$winnerKey}.name"),
                    locale: $locale,
                ));

                $payment->forceFill(['result_email_sent_at' => now()])->save();
            });
        } catch (\Throwable $e) {
            Log::error('Stripe webhook: failed to record payment or send result e-mail.', [
                'session_id' => $session->id,
                'event_id' => $event->id,
                'error' => $e->getMessage(),
            ]);

            return response('', 500);
        }

        return response('', 200);
    }

    /**
     * Busca o pagamento desta sessão de checkout, criando a linha se ainda
     * não existir, e trava a linha até o fim da transação. Se a Stripe
     * entregar o mesmo evento duas vezes ao mesmo tempo, a segunda entrega
     * espera aqui e, quando continua, já vê result_email_sent_at preenchido.
     *
     * O insertOrIgnore (em vez de firstOrCreate) evita que as duas entregas
     * tentem inserir juntas e uma delas quebre no índice único.
     */
    private function lockPayment(string $checkoutSessionId): Payment
    {
        Payment::query()->insertOrIgnore([
            'stripe_checkout_session_id' => $checkoutSessionId,
            'status' => 'pending',
            'amount' => 0,
            'currency' => 'usd',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return Payment::query()
            ->where('stripe_checkout_session_id', $checkoutSessionId)
            ->lockForUpdate()
            ->firstOrFail();
    }
}

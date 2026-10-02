<?php

namespace App\Http\Controllers;

use App\Mail\QuizResultUnlockedMail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
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
        try {
            $event = Webhook::constructEvent(
                $request->getContent(),
                (string) $request->header('Stripe-Signature'),
                config('services.stripe.webhook_secret'),
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

        // Best-effort: evita reenviar o e-mail se a Stripe reentregar o mesmo
        // evento. Não é uma garantia (cache em arquivo, sem banco), só reduz
        // a chance de duplicidade — aceito como trade-off da arquitetura sem
        // banco de dados.
        $dedupeKey = "stripe_webhook_event_{$event->id}";

        if (Cache::has($dedupeKey)) {
            return response('', 200);
        }

        $originalToken = $session->metadata->quiz_token ?? null;

        if (!$originalToken) {
            Log::warning('Stripe checkout.session.completed without quiz_token metadata.', ['session_id' => $session->id]);

            return response('', 200);
        }

        $payload = quiz_decode_token($originalToken);

        if (!$payload) {
            Log::warning('Stripe webhook: quiz_token failed to decrypt.', ['session_id' => $session->id]);

            return response('', 200);
        }

        $buyerEmail = $session->customer_details->email ?? null;

        if ($buyerEmail) {
            $paidToken = quiz_mint_paid_token($payload, $session->id);
            $locale = $payload['locale'] ?? config('app.fallback_locale');

            ['winner' => $winnerKey] = quiz_score_answers($payload['answers']);

            App::setLocale($locale);

            $resultUrl = locale_url_to($locale, '/style-quiz/result') . '?r=' . urlencode($paidToken);

            Mail::to($buyerEmail)->send(new QuizResultUnlockedMail(
                resultUrl: $resultUrl,
                winningStyleName: __("quiz.styles.{$winnerKey}.name"),
                locale: $locale,
            ));
        }

        Cache::put($dedupeKey, true, now()->addDay());

        return response('', 200);
    }
}

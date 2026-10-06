<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Stripe\Checkout\Session as StripeCheckoutSession;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

class StyleQuizController extends Controller
{
    public function show(): View
    {
        return view('quiz.show', [
            'totalQuestions' => config('quiz.total_questions'),
            'styles' => config('quiz.styles'),
        ]);
    }

    public function submit(Request $request): RedirectResponse
    {
        $styles = config('quiz.styles');
        $totalQuestions = config('quiz.total_questions');
        $letters = range('A', chr(ord('A') + count($styles) - 1));

        $messages = [
            'required' => __('quiz.ui.validation_required'),
        ];

        $rules = [];
        for ($i = 1; $i <= $totalQuestions; $i++) {
            $rules["answer_{$i}"] = ['required', 'string', 'in:' . implode(',', $letters)];
        }

        $validated = $request->validate($rules, $messages);

        $answers = [];
        for ($i = 1; $i <= $totalQuestions; $i++) {
            $answers[] = $validated["answer_{$i}"];
        }

        $token = quiz_mint_unpaid_token($answers);

        return redirect(locale_url('/style-quiz/result') . '?r=' . urlencode($token));
    }

    public function result(Request $request): View|RedirectResponse
    {
        $token = (string) $request->query('r', '');
        $payload = $token !== '' ? quiz_decode_token($token) : null;

        if (!$payload) {
            return redirect(locale_url('/style-quiz'))->with('quiz_invalid_token', true);
        }

        $sessionId = $request->query('session_id');

        if (is_string($sessionId) && str_starts_with($sessionId, 'cs_') && !$payload['paid']) {
            $verifiedToken = $this->verifyAndMintIfPaid($sessionId, $token, $payload);

            if ($verifiedToken) {
                return redirect(locale_url('/style-quiz/result') . '?r=' . urlencode($verifiedToken));
            }
        }

        ['winner' => $winnerKey] = quiz_score_answers($payload['answers']);

        $matchingProjects = collect(config('portfolio.completed_projects'))
            ->filter(fn (array $project) => in_array($winnerKey, $project['styles'] ?? [], true))
            ->map(fn (array $project) => portfolio_translate($project, 'completed_projects'))
            ->values();

        // TEMPORÁRIO: wireframe da seção de projetos enquanto nenhum projeto
        // estiver vinculado ao estilo (mesma chave dos marcadores de texto —
        // ver quiz_fill_placeholders() em app/helpers.php).
        if ($matchingProjects->isEmpty() && config('quiz.content_placeholders')) {
            $matchingProjects = collect(array_fill(0, 3, ['title' => '[projeto pendente]', 'slug' => null, 'image' => null]));
        }

        return view('quiz.result', [
            'winnerKey' => $winnerKey,
            'style' => quiz_style_content($winnerKey),
            'dimensions' => quiz_dimensions($payload['answers']),
            'unlocked' => (bool) $payload['paid'],
            'token' => $token,
            'matchingProjects' => $matchingProjects,
            'checkoutCancelled' => $request->query('checkout') === 'cancelled',
        ]);
    }

    public function checkout(Request $request): RedirectResponse
    {
        $token = (string) $request->input('r', '');
        $payload = $token !== '' ? quiz_decode_token($token) : null;

        if (!$payload) {
            return redirect(locale_url('/style-quiz'))->with('quiz_invalid_token', true);
        }

        $resultUrl = locale_url('/style-quiz/result') . '?r=' . urlencode($token);

        if ($payload['paid']) {
            return redirect($resultUrl);
        }

        // A Stripe aceita no máximo 500 caracteres por valor de metadata; se o
        // token passar disso o checkout falharia de qualquer jeito.
        if (strlen($token) > 500) {
            report(new \RuntimeException('Quiz token exceeds Stripe metadata limit (' . strlen($token) . ' chars).'));

            return redirect($resultUrl)->with('quiz_checkout_error', true);
        }

        try {
            Stripe::setApiKey(config('services.stripe.secret'));

            $session = StripeCheckoutSession::create([
                'mode' => 'payment',
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'quantity' => 1,
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => (int) round(config('quiz.price_usd') * 100),
                        'product_data' => [
                            'name' => __('quiz.checkout.product_name'),
                        ],
                    ],
                ]],
                'metadata' => [
                    'quiz_token' => $token,
                ],
                'success_url' => $resultUrl . '&session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => $resultUrl . '&checkout=cancelled',
            ]);
        } catch (ApiErrorException $e) {
            report($e);

            return redirect($resultUrl)->with('quiz_checkout_error', true);
        }

        return redirect($session->url, 303);
    }

    /**
     * Verificação síncrona usada só para dar feedback instantâneo ao voltar
     * do Checkout (o webhook continua sendo a fonte de verdade — ver
     * StripeWebhookController). Retorna o novo token pago, ou null se o
     * pagamento ainda não estiver confirmado/algo falhar.
     *
     * O session_id vem da URL (o usuário controla), então além de confirmar
     * que ele foi pago, conferimos que o pagamento foi feito PARA ESTE token:
     * sem isso, um único session_id pago desbloquearia o resultado de
     * qualquer pessoa (IDOR).
     */
    private function verifyAndMintIfPaid(string $sessionId, string $token, array $payload): ?string
    {
        try {
            Stripe::setApiKey(config('services.stripe.secret'));
            $session = StripeCheckoutSession::retrieve($sessionId);
        } catch (ApiErrorException) {
            return null;
        }

        if ($session->payment_status !== 'paid') {
            return null;
        }

        $paidForToken = (string) ($session->metadata->quiz_token ?? '');

        if ($paidForToken === '' || !hash_equals($paidForToken, $token)) {
            return null;
        }

        return quiz_mint_paid_token($payload, $session->id);
    }
}

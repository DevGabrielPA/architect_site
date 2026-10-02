<?php

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Crypt;

if (!function_exists('locale_url_to')) {
    /**
     * Builds an internal URL under a specific locale. English has no prefix;
     * pt/fr/es/it get their locale segment prepended.
     */
    function locale_url_to(string $locale, string $path = '/'): string
    {
        $path = '/' . ltrim($path, '/');

        if ($locale === 'en') {
            return url($path);
        }

        return url('/' . $locale . ($path === '/' ? '' : $path));
    }
}

if (!function_exists('locale_url')) {
    /**
     * Builds an internal URL that keeps the visitor in the current locale.
     */
    function locale_url(string $path = '/'): string
    {
        return locale_url_to(App::getLocale(), $path);
    }
}

if (!function_exists('current_path_without_locale')) {
    /**
     * Current request path with any leading locale segment (pt/fr/es/it)
     * stripped off, e.g. "pt/portfolio/contact" -> "/portfolio/contact".
     * Used to build the language switcher links and locale-safe active-nav checks.
     */
    function current_path_without_locale(): string
    {
        $segments = explode('/', trim(request()->path(), '/'));

        if (in_array($segments[0] ?? '', ['pt', 'fr', 'es', 'it'], true)) {
            array_shift($segments);
        }

        $rest = implode('/', array_filter($segments));

        return '/' . $rest;
    }
}

if (!function_exists('portfolio_translate')) {
    /**
     * Overlays the current locale's translated title/description/etc. (from
     * lang/{locale}/portfolio.php) onto a config/portfolio.php item. Structural
     * fields (slug, image, ratio, video, images) are locale-independent and
     * always come from config.
     */
    function portfolio_translate(array $item, string $collection): array
    {
        $translated = trans("portfolio.{$collection}.{$item['slug']}");

        return is_array($translated) ? array_merge($item, $translated) : $item;
    }
}

if (!function_exists('portfolio_translate_all')) {
    function portfolio_translate_all(array $items, string $collection): array
    {
        return array_map(fn (array $item) => portfolio_translate($item, $collection), $items);
    }
}

if (!function_exists('quiz_score_answers')) {
    /**
     * Calcula a porcentagem de cada estilo e o estilo vencedor a partir das
     * respostas brutas (letras A–G). As respostas mapeiam para os estilos na
     * ordem fixa de config('quiz.styles'): A -> primeiro estilo, B -> segundo,
     * etc. Nunca confiar em porcentagens vindas do cliente — este é o único
     * lugar do app onde o score é calculado, sempre a partir das respostas.
     *
     * @param  string[]  $answers  20 letras 'A'..'G', uma por pergunta.
     * @return array{scores: array<string, float>, winner: string}
     */
    function quiz_score_answers(array $answers): array
    {
        $styles = config('quiz.styles');
        $letters = range('A', chr(ord('A') + count($styles) - 1));
        $total = count($answers);

        $counts = array_fill_keys($styles, 0);

        foreach ($answers as $answer) {
            $index = array_search($answer, $letters, true);

            if ($index !== false) {
                $counts[$styles[$index]]++;
            }
        }

        $scores = array_map(fn (int $count) => $total > 0 ? round($count / $total, 4) : 0.0, $counts);

        $winner = array_search(max($scores), $scores, true);

        return ['scores' => $scores, 'winner' => $winner];
    }
}

if (!function_exists('quiz_decode_token')) {
    /**
     * Decripta um token de resultado do quiz (?r=...). Retorna null se o
     * token for inválido/adulterado — nunca deixa uma DecryptException
     * vazar para um erro 500, e nunca "conserta" ou confia parcialmente
     * num token que falhou a verificação de autenticidade.
     *
     * @return array{v: int, answers: string[], locale: string, created_at: string, paid: bool, paid_at?: string, checkout_session_id?: string}|null
     */
    function quiz_decode_token(string $token): ?array
    {
        try {
            $payload = json_decode(Crypt::decryptString($token), true);
        } catch (DecryptException) {
            return null;
        }

        if (!is_array($payload) || !isset($payload['answers']) || !is_array($payload['answers'])) {
            return null;
        }

        return $payload;
    }
}

if (!function_exists('quiz_mint_unpaid_token')) {
    /**
     * Gera o token inicial (não pago) a partir das respostas brutas do quiz.
     * Carrega só as respostas — nunca porcentagens — que são sempre
     * recalculadas a partir daqui por quiz_score_answers().
     *
     * @param  string[]  $answers
     */
    function quiz_mint_unpaid_token(array $answers): string
    {
        $payload = [
            'v' => 1,
            'answers' => $answers,
            'locale' => App::getLocale(),
            'created_at' => now()->toIso8601String(),
            'paid' => false,
        ];

        return Crypt::encryptString(json_encode($payload));
    }
}

if (!function_exists('quiz_mint_paid_token')) {
    /**
     * Único ponto do app que gera um token com paid=true. Só deve ser chamado
     * depois que o chamador já confirmou o pagamento diretamente com a Stripe
     * (webhook com assinatura verificada, ou Session::retrieve confirmando
     * payment_status === 'paid'). Nunca chamar isso a partir de um dado vindo
     * direto do cliente sem essa confirmação.
     */
    function quiz_mint_paid_token(array $payload, string $checkoutSessionId): string
    {
        $payload['paid'] = true;
        $payload['paid_at'] = now()->toIso8601String();
        $payload['checkout_session_id'] = $checkoutSessionId;

        return Crypt::encryptString(json_encode($payload));
    }
}

if (!function_exists('quiz_option_image')) {
    /**
     * Caminho público da imagem de uma opção do quiz (pergunta N, estilo X),
     * ou null se o arquivo ainda não existir — mesma convenção de fallback
     * "Image Coming Soon" usada pelo grid do portfólio.
     */
    function quiz_option_image(int $questionNumber, string $styleKey): ?string
    {
        $folder = 'q' . str_pad((string) $questionNumber, 2, '0', STR_PAD_LEFT);

        foreach (['jpg', 'jpeg', 'png', 'webp'] as $extension) {
            $relative = "images/quiz/{$folder}/{$styleKey}.{$extension}";

            if (file_exists(public_path($relative))) {
                return $relative;
            }
        }

        return null;
    }
}

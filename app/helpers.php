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

if (!function_exists('quiz_dimensions')) {
    /**
     * Calcula as 5 dimensões do resultado (tons, cor, linhas, caráter,
     * materiais) a partir de TODAS as respostas, não só do estilo vencedor:
     * valor = soma(respostas do estilo × peso do estilo no eixo) ÷ total de
     * respostas, arredondado. valor >= 50 → predomina o polo direito (exibe
     * valor%); < 50 → polo esquerdo (exibe 100 − valor%). Pesos em
     * config('quiz.dimensions').
     *
     * @param  string[]  $answers
     * @return array<int, array{key: string, value: int, side: 'left'|'right', percent: int}>
     */
    function quiz_dimensions(array $answers): array
    {
        $styles = config('quiz.styles');
        $letters = range('A', chr(ord('A') + count($styles) - 1));

        $counts = array_fill_keys($styles, 0);

        foreach ($answers as $answer) {
            $index = array_search($answer, $letters, true);

            if ($index !== false) {
                $counts[$styles[$index]]++;
            }
        }

        $total = array_sum($counts);
        $dimensions = [];

        foreach (config('quiz.dimensions') as $axis => $weights) {
            $weighted = 0;

            foreach ($counts as $style => $count) {
                $weighted += $count * ($weights[$style] ?? 0);
            }

            $value = $total > 0 ? (int) round($weighted / $total) : 50;
            $side = $value >= 50 ? 'right' : 'left';

            $dimensions[] = [
                'key' => $axis,
                'value' => $value,
                'side' => $side,
                'percent' => $side === 'right' ? $value : 100 - $value,
            ];
        }

        return $dimensions;
    }
}

if (!function_exists('quiz_style_content')) {
    /**
     * Conteúdo de um estilo (lang/*\/quiz.php → 'styles.{key}') já com todos
     * os campos preenchidos com valores vazios por padrão, para a página de
     * resultado nunca quebrar enquanto um estilo ainda não tiver texto.
     *
     * @return array{name: string, hero_text: string[], practice: array, works: array, watch_outs: array}
     */
    function quiz_style_content(string $styleKey): array
    {
        $content = trans("quiz.styles.{$styleKey}");
        $content = is_array($content) ? $content : [];

        $block = fn (string $name, string $listKey) => [
            'text' => (string) ($content['practice'][$name]['text'] ?? ''),
            $listKey => array_values(array_filter((array) ($content['practice'][$name][$listKey] ?? []))),
        ];

        $style = [
            'name' => (string) ($content['name'] ?? $styleKey),
            'hero_text' => array_values(array_filter((array) ($content['hero_text'] ?? []))),
            'practice' => [
                'characteristics' => $block('characteristics', 'items'),
                'materials' => $block('materials', 'items'),
                'palette' => $block('palette', 'colors'),
            ],
            'works' => array_values(array_filter((array) ($content['works'] ?? []), fn ($item) => !empty($item['title']))),
            'watch_outs' => array_values(array_filter((array) ($content['watch_outs'] ?? []), fn ($item) => !empty($item['title']))),
        ];

        return config('quiz.content_placeholders') ? quiz_fill_placeholders($style) : $style;
    }
}

if (!function_exists('quiz_fill_placeholders')) {
    /**
     * TEMPORÁRIO (só para visualizar o layout enquanto os textos não chegam):
     * preenche cada campo vazio do estilo com um marcador "[... pendente]".
     * Ligado por QUIZ_CONTENT_PLACEHOLDERS=true no .env (padrão: desligado,
     * então nunca aparece em produção). Para remover de vez: apagar esta
     * função, a linha que a chama em quiz_style_content(), o bloco do
     * wireframe de projetos em StyleQuizController::result(), a chave
     * 'content_placeholders' em config/quiz.php e a classe .qzr-pending na view.
     */
    function quiz_fill_placeholders(array $style): array
    {
        $text = '[texto pendente]';
        $item = '[item pendente]';
        $pendingEntry = ['title' => '[título pendente]', 'text' => $text];

        $style['hero_text'] = $style['hero_text'] ?: [$text, $text];

        foreach (['characteristics', 'materials'] as $name) {
            $style['practice'][$name]['text'] = $style['practice'][$name]['text'] ?: $text;
            $style['practice'][$name]['items'] = $style['practice'][$name]['items'] ?: [$item, $item, $item];
        }

        $style['practice']['palette']['text'] = $style['practice']['palette']['text'] ?: $text;
        $style['practice']['palette']['colors'] = $style['practice']['palette']['colors']
            ?: array_fill(0, 3, ['name' => '[cor pendente]', 'hex' => '#DDDDDD']);

        $style['works'] = $style['works'] ?: array_fill(0, 3, $pendingEntry);
        $style['watch_outs'] = $style['watch_outs'] ?: array_fill(0, 3, $pendingEntry);

        return $style;
    }
}

if (!function_exists('quiz_is_pending')) {
    /** True para os marcadores "[... pendente]" de quiz_fill_placeholders() (destacados na view). */
    function quiz_is_pending(mixed $value): bool
    {
        return is_string($value) && str_starts_with($value, '[') && str_ends_with($value, 'pendente]');
    }
}

if (!function_exists('quiz_decode_token')) {
    /**
     * Decripta um token de resultado do quiz (?r=...). Retorna null se o
     * token for inválido/adulterado — nunca deixa uma DecryptException
     * vazar para um erro 500, e nunca "conserta" ou confia parcialmente
     * num token que falhou a verificação de autenticidade.
     *
     * Aceita o formato compacto atual (v2) e o formato antigo (v1, chaves
     * por extenso) e devolve sempre o mesmo formato normalizado.
     *
     * @return array{answers: string[], locale: string, paid: bool, checkout_session_id: ?string}|null
     */
    function quiz_decode_token(string $token): ?array
    {
        try {
            $raw = json_decode(Crypt::decryptString($token), true);
        } catch (DecryptException) {
            return null;
        }

        if (!is_array($raw)) {
            return null;
        }

        if (($raw['v'] ?? null) === 2) {
            if (!isset($raw['a']) || !is_string($raw['a'])) {
                return null;
            }

            return [
                'answers' => str_split($raw['a']),
                'locale' => $raw['l'] ?? config('app.fallback_locale'),
                'paid' => (bool) ($raw['p'] ?? false),
                'checkout_session_id' => $raw['s'] ?? null,
            ];
        }

        if (!isset($raw['answers']) || !is_array($raw['answers'])) {
            return null;
        }

        return [
            'answers' => $raw['answers'],
            'locale' => $raw['locale'] ?? config('app.fallback_locale'),
            'paid' => (bool) ($raw['paid'] ?? false),
            'checkout_session_id' => $raw['checkout_session_id'] ?? null,
        ];
    }
}

if (!function_exists('quiz_encode_token')) {
    /**
     * Serializa um payload normalizado no formato compacto v2 (respostas como
     * uma string "ABCG...", chaves de uma letra, data em timestamp). Mantém o
     * token curto: ele precisa caber no limite de 500 caracteres do metadata
     * da Stripe (ver StyleQuizController::checkout()) e deixa a URL menor.
     */
    function quiz_encode_token(array $payload): string
    {
        $compact = [
            'v' => 2,
            'a' => implode('', $payload['answers']),
            'l' => $payload['locale'],
            't' => now()->getTimestamp(),
            'p' => $payload['paid'] ? 1 : 0,
        ];

        if (!empty($payload['checkout_session_id'])) {
            $compact['s'] = $payload['checkout_session_id'];
        }

        return Crypt::encryptString(json_encode($compact));
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
        return quiz_encode_token([
            'answers' => $answers,
            'locale' => App::getLocale(),
            'paid' => false,
            'checkout_session_id' => null,
        ]);
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
        $payload['checkout_session_id'] = $checkoutSessionId;

        return quiz_encode_token($payload);
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

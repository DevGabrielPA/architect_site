<?php

// Configuração do Teste de Estilo de Decoração. As 7 chaves em 'styles' seguem
// a mesma ordem fixa A–G das opções de cada pergunta (Google Forms original) —
// nunca reordenar, isso é o contrato entre as imagens em public/images/quiz/
// e o cálculo de porcentagem em quiz_score_answers() (ver app/helpers.php).
return [

    'price_usd' => 3.00,

    'total_questions' => 20,

    // TEMPORÁRIO: mostra "[texto pendente]" nos campos ainda vazios de cada
    // estilo na página de resultado, só para visualizar o layout. Ligar apenas
    // no .env local (QUIZ_CONTENT_PLACEHOLDERS=true) — nunca em produção.
    'content_placeholders' => (bool) env('QUIZ_CONTENT_PLACEHOLDERS', false),

    'styles' => [
        'classic',
        'minimalist',
        'rustic',
        'industrial',
        'scandinavian',
        'bohemian',
        'contemporary',
    ],

    // Dimensões do resultado (seção 1 da página de resultado). Cada eixo vai
    // de um polo esquerdo (0) a um polo direito (100); o peso de cada estilo
    // (0–100) diz o quanto ele puxa para o polo DIREITO. O valor da pessoa é
    // a média ponderada desses pesos por todas as respostas — ver
    // quiz_dimensions() em app/helpers.php. A ordem aqui é a ordem na tela;
    // nomes dos polos e textos dos cards ficam em lang/*/quiz.php ('dimensions').
    'dimensions' => [
        'tones'     => ['classic' => 40, 'minimalist' => 15, 'rustic' => 70, 'industrial' => 90, 'scandinavian' => 5,  'bohemian' => 60, 'contemporary' => 30], // tons claros → tons escuros
        'color'     => ['classic' => 30, 'minimalist' => 5,  'rustic' => 35, 'industrial' => 15, 'scandinavian' => 20, 'bohemian' => 95, 'contemporary' => 35], // neutro → colorido
        'lines'     => ['classic' => 80, 'minimalist' => 5,  'rustic' => 55, 'industrial' => 15, 'scandinavian' => 35, 'bohemian' => 85, 'contemporary' => 25], // linhas retas → linhas curvas
        'character' => ['classic' => 10, 'minimalist' => 30, 'rustic' => 90, 'industrial' => 45, 'scandinavian' => 75, 'bohemian' => 85, 'contemporary' => 25], // sofisticado → aconchegante
        'materials' => ['classic' => 30, 'minimalist' => 70, 'rustic' => 5,  'industrial' => 95, 'scandinavian' => 20, 'bohemian' => 15, 'contemporary' => 65], // naturais → industriais
    ],

];

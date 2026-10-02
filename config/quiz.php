<?php

// Configuração do Teste de Estilo de Decoração. As 7 chaves em 'styles' seguem
// a mesma ordem fixa A–G das opções de cada pergunta (Google Forms original) —
// nunca reordenar, isso é o contrato entre as imagens em public/images/quiz/
// e o cálculo de porcentagem em quiz_score_answers() (ver app/helpers.php).
return [

    'price_usd' => 3.00,

    'total_questions' => 20,

    'styles' => [
        'classic',
        'minimalist',
        'rustic',
        'industrial',
        'scandinavian',
        'bohemian',
        'contemporary',
    ],

];

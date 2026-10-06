<?php

return [

    'meta' => [
        'title' => 'Teste de Estilo de Decoração | Larissa Vasconcellos',
        'description' => 'Descubra em poucos minutos qual estilo de decoração combina mais com você: Clássico, Minimalista, Rústico, Industrial, Escandinavo, Boêmio ou Contemporâneo.',
    ],

    'intro' => [
        'heading' => 'Qual é o seu estilo de decoração?',
        'subheading' => 'Responda 20 perguntas rápidas com imagens e descubra qual dos 7 estilos combina mais com você — e como o seu gosto se divide entre paleta, formas e materiais.',
        'start_button' => 'Começar o Teste',
    ],

    'ui' => [
        'question_progress' => 'Pergunta :current de :total',
        'next' => 'Próxima',
        'back' => 'Voltar',
        'submit' => 'Enviar',
        'validation_required' => 'Escolha uma opção para continuar.',
        'incomplete_message' => 'Marque todas as perguntas antes de enviar.',
    ],

    'questions' => [
        1 => 'Qual sala de estar te agrada mais?',
        2 => 'Em qual quarto de hotel você gostaria de acordar?',
        3 => 'Qual cozinha combina com você?',
        4 => 'Qual bar/restaurante você escolheria pra uma noite especial?',
        5 => 'Qual cama você escolheria pro seu quarto?',
        6 => 'Qual piso você prefere?',
        7 => 'Qual revestimento de parede te atrai?',
        8 => 'Qual iluminação/luminária você escolheria?',
        9 => 'Qual mesa de jantar combina com você?',
        10 => 'Qual paleta de cores mais te agrada?',
        11 => 'Qual cortina você escolheria?',
        12 => 'Qual tapete combina com você?',
        13 => 'Qual objeto decorativo você penduraria na parede?',
        14 => 'Para qual desses lugares você mais gostaria de viajar de férias?',
        15 => 'Qual varanda/área externa você gostaria de ter?',
        16 => 'Qual poltrona te chama atenção?',
        17 => 'Qual banheiro você escolheria?',
        18 => 'Qual estante/prateleira combina com você?',
        19 => 'Qual porta você escolheria para sua casa?',
        20 => 'Qual fachada de casa mais te agrada?',
    ],

    'result' => [
        'ready_heading' => 'Seu Resultado Está Pronto!',
        'ready_body' => 'Você respondeu todas as 20 perguntas. Desbloqueie agora o seu Relatório Completo de Estilo por um valor único de US$ 3.',
        'unlock_heading' => 'Relatório Completo de Estilo',
        'unlock_body' => 'Por apenas US$ 3, você desbloqueia o resultado detalhado do seu teste: qual dos 7 estilos combina mais com você, as cinco dimensões do seu gosto (paleta, formas e materiais) calculadas a partir de todas as suas respostas, como o seu estilo aparece na prática — características, materiais e paleta de cores — e o que funciona para você, junto com os pontos de atenção.',
        'unlock_cta' => 'Ver Meu Resultado',
        'checkout_cancelled' => 'O pagamento foi cancelado. Desbloqueie novamente quando quiser ver o seu resultado.',
        'checkout_error' => 'Não foi possível iniciar o pagamento agora. Tente novamente em instantes.',
        'invalid_token' => 'Este link de resultado é inválido ou expirou. Refaça o teste para gerar um novo resultado.',
        'hero_label' => 'Seu estilo arquitetônico é',
        'dimensions_heading' => 'Dimensões do seu estilo',
        'dimensions_intro' => 'Estas cinco dimensões são calculadas a partir de todas as suas respostas, e não só do estilo que ficou em primeiro lugar. Elas mostram para que lado o seu gosto pende em paleta, formas e materiais, e com que intensidade. Passe o mouse ou toque em cada uma para ver o que ela diz sobre você.',
        'practice_heading' => 'Seu estilo na prática',
        'practice_characteristics' => 'Características',
        'practice_materials' => 'Materiais principais',
        'practice_palette' => 'Paleta de cores',
        'fit_heading' => 'O que funciona e pontos de atenção',
        'works_heading' => 'O que funciona para você',
        'watch_outs_heading' => 'Pontos de atenção',
        'projects_heading' => 'Projetos nesse estilo',
        'sidebar_label' => 'Seu estilo é:',
        'sections_nav_label' => 'Seções da página',
        'on_this_page' => 'Nesta página',
        'share' => 'Compartilhar',
        'share_copied' => 'Link copiado!',
        'share_text' => 'Meu estilo de decoração é :style. Faça o teste e descubra o seu:',
    ],

    // Seção "Dimensões do seu estilo": nomes dos polos (esquerdo = 0,
    // direito = 100) e o texto do card de cada polo. Pesos e cálculo em
    // config/quiz.php ('dimensions') e quiz_dimensions() em app/helpers.php.
    'dimensions' => [
        'tones' => [
            'group' => 'Paleta',
            'left' => 'Tons claros',
            'right' => 'Tons escuros',
            'left_text' => 'Você tem os tons claros como traço marcante. Gosta de ambientes luminosos e arejados, em que branco, bege e madeiras claras ampliam o espaço e trazem leveza.',
            'right_text' => 'Seu traço mais marcante aqui são os tons escuros. Você gosta de ambientes com profundidade e personalidade, em que marrom, grafite e preto criam uma atmosfera intimista.',
        ],
        'color' => [
            'group' => 'Paleta',
            'left' => 'Neutro',
            'right' => 'Colorido',
            'left_text' => 'Você prefere uma paleta neutra. Poucas cores, bem combinadas, deixam o ambiente calmo e dão destaque às formas e aos materiais.',
            'right_text' => 'A cor é parte importante do seu gosto. Você se sente bem em ambientes vibrantes, com estampas e combinações que expressam personalidade.',
        ],
        'lines' => [
            'group' => 'Características',
            'left' => 'Linhas retas',
            'right' => 'Linhas curvas',
            'left_text' => 'Você tem as linhas retas como traço marcante. Gosta de formas simples e geométricas, que deixam o ambiente organizado e com visual limpo.',
            'right_text' => 'Você se identifica com linhas curvas. Formas arredondadas, arcos e detalhes ornamentados trazem movimento e suavidade ao ambiente.',
        ],
        'character' => [
            'group' => 'Características',
            'left' => 'Sofisticado',
            'right' => 'Aconchegante',
            'left_text' => 'Seu traço mais marcante aqui é a sofisticação. Você valoriza ambientes elegantes e bem acabados, em que cada detalhe parece ter sido pensado.',
            'right_text' => 'Você prioriza o aconchego. Para você, um ambiente bom é aquele que convida a ficar, com texturas macias, luz quente e clima de casa vivida.',
        ],
        'materials' => [
            'group' => 'Materiais',
            'left' => 'Materiais naturais',
            'right' => 'Materiais industriais',
            'left_text' => 'Você prefere materiais naturais. Madeira, pedra, fibras e tecidos como linho e algodão trazem a textura e o calor que você procura.',
            'right_text' => 'Você se identifica com materiais industriais. Concreto, aço e vidro dão ao ambiente o visual urbano e atual que combina com você.',
        ],
    ],

    'checkout' => [
        'product_name' => 'Resultado Completo — Teste de Estilo de Decoração',
    ],

    'mail' => [
        'unlocked_subject' => 'Seu Resultado Completo do Teste de Estilo Já Está Pronto',
        'unlocked_heading' => 'Seu resultado completo está liberado!',
        'unlocked_body' => 'O pagamento foi confirmado e o resultado completo do seu Teste de Estilo de Decoração já está disponível. Seu estilo predominante é <strong>:style</strong> — clique no botão abaixo para ver as dimensões do seu gosto, como o seu estilo aparece na prática e muito mais.',
        'unlocked_cta' => 'Ver Meu Resultado Completo',
    ],

    // Conteúdo da página de resultado de cada estilo. Campos vazios ficam
    // ocultos na página (ela continua funcionando) — preencher um estilo por vez.
    //   hero_text  → 2 parágrafos, começando por "Sendo do estilo [nome], você…"
    //   practice   → characteristics/materials: 'text' (2–3 frases) + 'items' (lista curta);
    //                palette: 'text' + 'colors' => [['name' => 'Bege', 'hex' => '#E8DCC4'], ...]
    //   works      → 4 a 6 itens ['title' => '...', 'text' => '...'] (O que funciona para você)
    //   watch_outs → 3 a 5 itens ['title' => '...', 'text' => '...'] (Pontos de atenção)
    'styles' => [

        'classic' => [
            'name' => 'Clássico',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'minimalist' => [
            'name' => 'Minimalista',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'rustic' => [
            'name' => 'Rústico',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'industrial' => [
            'name' => 'Industrial',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'scandinavian' => [
            'name' => 'Escandinavo',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'bohemian' => [
            'name' => 'Boêmio',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

        'contemporary' => [
            'name' => 'Contemporâneo',
            'hero_text' => [],
            'practice' => [
                'characteristics' => ['text' => '', 'items' => []],
                'materials' => ['text' => '', 'items' => []],
                'palette' => ['text' => '', 'colors' => []],
            ],
            'works' => [],
            'watch_outs' => [],
        ],

    ],

];

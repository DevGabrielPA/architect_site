<?php

return [

    'meta' => [
        'title' => 'Decor Style Quiz | Larissa Vasconcellos',
        'description' => 'Find out in a few minutes which decor style suits you best: Classic, Minimalist, Rustic, Industrial, Scandinavian, Bohemian, or Contemporary.',
    ],

    'intro' => [
        'heading' => 'What Is Your Decor Style?',
        'subheading' => 'Answer 20 quick, image-based questions and discover which of the 7 styles suits you the most — and how your taste breaks down across palette, shapes and materials.',
        'start_button' => 'Start the Quiz',
    ],

    'ui' => [
        'question_progress' => 'Question :current of :total',
        'next' => 'Next',
        'back' => 'Back',
        'submit' => 'Submit',
        'validation_required' => 'Please choose an option to continue.',
        'incomplete_message' => 'Please answer all the questions before submitting.',
    ],

    'questions' => [
        1 => 'Which living room do you like the most?',
        2 => 'Which hotel room would you like to wake up in?',
        3 => 'Which kitchen suits you?',
        4 => 'Which bar/restaurant would you pick for a special night out?',
        5 => 'Which bed would you choose for your bedroom?',
        6 => 'Which flooring do you prefer?',
        7 => 'Which wall covering appeals to you?',
        8 => 'Which lighting/fixture would you choose?',
        9 => 'Which dining table suits you?',
        10 => 'Which color palette do you like the most?',
        11 => 'Which curtains would you choose?',
        12 => 'Which rug suits you?',
        13 => 'Which decorative object would you hang on the wall?',
        14 => 'Which of these places would you most like to travel to on vacation?',
        15 => 'Which balcony/outdoor area would you like to have?',
        16 => 'Which armchair catches your eye?',
        17 => 'Which bathroom would you choose?',
        18 => 'Which shelving unit suits you?',
        19 => 'Which door would you choose for your home?',
        20 => 'Which house facade do you like the most?',
    ],

    'result' => [
        'ready_heading' => 'Your Result Is Ready!',
        'ready_body' => 'You\'ve answered all 20 questions. Unlock your Full Style Report now for a one-time $3.',
        'unlock_heading' => 'Full Style Report',
        'unlock_body' => 'For just $3, you\'ll unlock the detailed result of your quiz: which of the 7 styles suits you the most, the five dimensions of your taste (palette, shapes and materials) calculated from all of your answers, how your style looks in practice — characteristics, materials and color palette — and what works for you, along with the points to watch.',
        'unlock_cta' => 'See My Result',
        'checkout_cancelled' => 'Payment was cancelled. Unlock again whenever you\'re ready to see your result.',
        'checkout_error' => 'We couldn\'t start the payment right now. Please try again in a moment.',
        'invalid_token' => 'This result link is invalid or has expired. Please retake the quiz to get a new result.',
        'hero_label' => 'Your architectural style is',
        'dimensions_heading' => 'Your style dimensions',
        'dimensions_intro' => 'These five dimensions are calculated from all of your answers, not just the style that came out on top. They show which way your taste leans in palette, shapes and materials, and how strongly. Hover over or tap each one to see what it says about you.',
        'practice_heading' => 'Your style in practice',
        'practice_characteristics' => 'Characteristics',
        'practice_materials' => 'Key materials',
        'practice_palette' => 'Color palette',
        'fit_heading' => 'What works and points to watch',
        'works_heading' => 'What works for you',
        'watch_outs_heading' => 'Points to watch',
        'projects_heading' => 'Projects in this style',
        'sidebar_label' => 'Your style is:',
        'sections_nav_label' => 'Page sections',
        'on_this_page' => 'On this page',
        'share' => 'Share',
        'share_copied' => 'Link copied!',
        'share_text' => 'My decor style is :style. Take the quiz and discover yours:',
    ],

    // Seção "Dimensões do seu estilo": nomes dos polos (esquerdo = 0,
    // direito = 100) e o texto do card de cada polo. Pesos e cálculo em
    // config/quiz.php ('dimensions') e quiz_dimensions() em app/helpers.php.
    'dimensions' => [
        'tones' => [
            'group' => 'Palette',
            'left' => 'Light tones',
            'right' => 'Dark tones',
            'left_text' => 'Light tones are a defining trait for you. You enjoy bright, airy spaces where white, beige and light woods open up the room and bring lightness.',
            'right_text' => 'Your most defining trait here is dark tones. You like spaces with depth and personality, where brown, graphite and black create an intimate atmosphere.',
        ],
        'color' => [
            'group' => 'Palette',
            'left' => 'Neutral',
            'right' => 'Colorful',
            'left_text' => 'You prefer a neutral palette. A few well-matched colors keep the space calm and let shapes and materials stand out.',
            'right_text' => 'Color is an important part of your taste. You feel good in vibrant spaces, with patterns and combinations that express personality.',
        ],
        'lines' => [
            'group' => 'Characteristics',
            'left' => 'Straight lines',
            'right' => 'Curved lines',
            'left_text' => 'Straight lines are a defining trait for you. You like simple, geometric shapes that keep the space organized and visually clean.',
            'right_text' => 'You connect with curved lines. Rounded shapes, arches and ornate details bring movement and softness to a space.',
        ],
        'character' => [
            'group' => 'Characteristics',
            'left' => 'Sophisticated',
            'right' => 'Cozy',
            'left_text' => 'Your most defining trait here is sophistication. You value elegant, well-finished spaces where every detail seems to have been thought through.',
            'right_text' => 'You put coziness first. For you, a good space is one that invites you to stay, with soft textures, warm light and a lived-in feel.',
        ],
        'materials' => [
            'group' => 'Materials',
            'left' => 'Natural materials',
            'right' => 'Industrial materials',
            'left_text' => 'You prefer natural materials. Wood, stone, fibers and fabrics like linen and cotton bring the texture and warmth you look for.',
            'right_text' => 'You connect with industrial materials. Concrete, steel and glass give the space the urban, current look that suits you.',
        ],
    ],

    'checkout' => [
        'product_name' => 'Full Result — Decor Style Quiz',
    ],

    'mail' => [
        'unlocked_subject' => 'Your Full Style Quiz Result Is Ready',
        'unlocked_heading' => 'Your full result is unlocked!',
        'unlocked_body' => 'Your payment was confirmed and the full result of your Decor Style Quiz is now available. Your dominant style is <strong>:style</strong> — click the button below to see the dimensions of your taste, how your style looks in practice, and more.',
        'unlocked_cta' => 'See My Full Result',
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
            'name' => 'Classic',
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
            'name' => 'Minimalist',
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
            'name' => 'Rustic',
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
            'name' => 'Scandinavian',
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
            'name' => 'Bohemian',
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
            'name' => 'Contemporary',
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

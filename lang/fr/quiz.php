<?php

return [

    'meta' => [
        'title' => 'Test de Style de Décoration | Larissa Vasconcellos',
        'description' => 'Découvrez en quelques minutes quel style de décoration vous correspond le mieux : Classique, Minimaliste, Rustique, Industriel, Scandinave, Bohème ou Contemporain.',
    ],

    'intro' => [
        'heading' => 'Quel Est Votre Style de Décoration ?',
        'subheading' => 'Répondez à 20 questions rapides illustrées et découvrez lequel des 7 styles vous correspond le plus — et comment votre goût se répartit entre palette, formes et matériaux.',
        'start_button' => 'Commencer le Test',
    ],

    'ui' => [
        'question_progress' => 'Question :current sur :total',
        'next' => 'Suivant',
        'back' => 'Retour',
        'submit' => 'Envoyer',
        'validation_required' => 'Choisissez une option pour continuer.',
        'incomplete_message' => 'Répondez à toutes les questions avant d\'envoyer.',
    ],

    'questions' => [
        1 => 'Quel salon préférez-vous ?',
        2 => 'Dans quelle chambre d\'hôtel aimeriez-vous vous réveiller ?',
        3 => 'Quelle cuisine vous correspond ?',
        4 => 'Quel bar/restaurant choisiriez-vous pour une soirée spéciale ?',
        5 => 'Quel lit choisiriez-vous pour votre chambre ?',
        6 => 'Quel revêtement de sol préférez-vous ?',
        7 => 'Quel revêtement mural vous attire ?',
        8 => 'Quel éclairage/luminaire choisiriez-vous ?',
        9 => 'Quelle table à manger vous correspond ?',
        10 => 'Quelle palette de couleurs préférez-vous ?',
        11 => 'Quels rideaux choisiriez-vous ?',
        12 => 'Quel tapis vous correspond ?',
        13 => 'Quel objet décoratif accrocheriez-vous au mur ?',
        14 => 'Vers lequel de ces endroits aimeriez-vous le plus voyager en vacances ?',
        15 => 'Quel balcon/espace extérieur aimeriez-vous avoir ?',
        16 => 'Quel fauteuil attire votre attention ?',
        17 => 'Quelle salle de bain choisiriez-vous ?',
        18 => 'Quelle étagère vous correspond ?',
        19 => 'Quelle porte choisiriez-vous pour votre maison ?',
        20 => 'Quelle façade de maison préférez-vous ?',
    ],

    'result' => [
        'ready_heading' => 'Votre Résultat Est Prêt !',
        'ready_body' => 'Vous avez répondu aux 20 questions. Débloquez dès maintenant votre Rapport de Style Complet pour un paiement unique de 3 $.',
        'unlock_heading' => 'Rapport de Style Complet',
        'unlock_body' => 'Pour seulement 3 $, débloquez le résultat détaillé de votre test : lequel des 7 styles vous correspond le plus, les cinq dimensions de votre goût (palette, formes et matériaux) calculées à partir de toutes vos réponses, votre style en pratique — caractéristiques, matériaux et palette de couleurs — ainsi que ce qui fonctionne pour vous et les points d\'attention.',
        'unlock_cta' => 'Voir Mon Résultat',
        'checkout_cancelled' => 'Le paiement a été annulé. Débloquez à nouveau dès que vous êtes prêt à voir votre résultat.',
        'checkout_error' => 'Impossible de démarrer le paiement pour le moment. Veuillez réessayer dans un instant.',
        'invalid_token' => 'Ce lien de résultat est invalide ou a expiré. Refaites le test pour obtenir un nouveau résultat.',
        'hero_label' => 'Votre style architectural est',
        'dimensions_heading' => 'Les dimensions de votre style',
        'dimensions_intro' => 'Ces cinq dimensions sont calculées à partir de toutes vos réponses, et pas seulement du style arrivé en tête. Elles montrent de quel côté penche votre goût en matière de palette, de formes et de matériaux, et avec quelle intensité. Survolez ou touchez chacune d\'elles pour découvrir ce qu\'elle dit de vous.',
        'practice_heading' => 'Votre style en pratique',
        'practice_characteristics' => 'Caractéristiques',
        'practice_materials' => 'Matériaux principaux',
        'practice_palette' => 'Palette de couleurs',
        'fit_heading' => 'Ce qui fonctionne et points d\'attention',
        'works_heading' => 'Ce qui fonctionne pour vous',
        'watch_outs_heading' => 'Points d\'attention',
        'projects_heading' => 'Projets dans ce style',
        'sidebar_label' => 'Votre style est :',
        'sections_nav_label' => 'Sections de la page',
        'on_this_page' => 'Sur cette page',
        'share' => 'Partager',
        'share_copied' => 'Lien copié !',
        'share_text' => 'Mon style de décoration est :style. Faites le test et découvrez le vôtre :',
    ],

    // Seção "Dimensões do seu estilo": nomes dos polos (esquerdo = 0,
    // direito = 100) e o texto do card de cada polo. Pesos e cálculo em
    // config/quiz.php ('dimensions') e quiz_dimensions() em app/helpers.php.
    'dimensions' => [
        'tones' => [
            'group' => 'Palette',
            'left' => 'Tons clairs',
            'right' => 'Tons foncés',
            'left_text' => 'Les tons clairs sont un trait marquant chez vous. Vous aimez les espaces lumineux et aérés, où le blanc, le beige et les bois clairs agrandissent la pièce et apportent de la légèreté.',
            'right_text' => 'Votre trait le plus marquant ici, ce sont les tons foncés. Vous aimez les espaces qui ont de la profondeur et de la personnalité, où le brun, le graphite et le noir créent une atmosphère intime.',
        ],
        'color' => [
            'group' => 'Palette',
            'left' => 'Neutre',
            'right' => 'Coloré',
            'left_text' => 'Vous préférez une palette neutre. Peu de couleurs, bien assorties, rendent l\'espace apaisant et mettent en valeur les formes et les matériaux.',
            'right_text' => 'La couleur occupe une place importante dans vos goûts. Vous vous sentez bien dans des espaces vibrants, avec des motifs et des associations qui expriment une personnalité.',
        ],
        'lines' => [
            'group' => 'Caractéristiques',
            'left' => 'Lignes droites',
            'right' => 'Lignes courbes',
            'left_text' => 'Les lignes droites sont un trait marquant chez vous. Vous aimez les formes simples et géométriques, qui rendent l\'espace ordonné et visuellement épuré.',
            'right_text' => 'Vous vous reconnaissez dans les lignes courbes. Les formes arrondies, les arches et les détails ornementés apportent du mouvement et de la douceur à l\'espace.',
        ],
        'character' => [
            'group' => 'Caractéristiques',
            'left' => 'Sophistiqué',
            'right' => 'Chaleureux',
            'left_text' => 'Votre trait le plus marquant ici, c\'est la sophistication. Vous appréciez les espaces élégants et soignés, où chaque détail semble avoir été pensé.',
            'right_text' => 'Vous privilégiez la chaleur. Pour vous, un bon espace est celui qui donne envie de rester, avec des textures douces, une lumière chaude et une ambiance de maison vécue.',
        ],
        'materials' => [
            'group' => 'Matériaux',
            'left' => 'Matériaux naturels',
            'right' => 'Matériaux industriels',
            'left_text' => 'Vous préférez les matériaux naturels. Le bois, la pierre, les fibres et les tissus comme le lin et le coton apportent la texture et la chaleur que vous recherchez.',
            'right_text' => 'Vous vous reconnaissez dans les matériaux industriels. Le béton, l\'acier et le verre donnent à l\'espace l\'allure urbaine et actuelle qui vous correspond.',
        ],
    ],

    'checkout' => [
        'product_name' => 'Résultat Complet — Test de Style de Décoration',
    ],

    'mail' => [
        'unlocked_subject' => 'Votre Résultat Complet du Test de Style Est Prêt',
        'unlocked_heading' => 'Votre résultat complet est débloqué !',
        'unlocked_body' => 'Votre paiement a été confirmé et le résultat complet de votre Test de Style de Décoration est maintenant disponible. Votre style dominant est <strong>:style</strong> — cliquez sur le bouton ci-dessous pour découvrir les dimensions de votre goût, votre style en pratique et bien plus encore.',
        'unlocked_cta' => 'Voir Mon Résultat Complet',
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
            'name' => 'Classique',
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
            'name' => 'Minimaliste',
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
            'name' => 'Rustique',
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
            'name' => 'Industriel',
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
            'name' => 'Scandinave',
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
            'name' => 'Bohème',
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
            'name' => 'Contemporain',
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

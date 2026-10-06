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
        'dimensions_intro' => 'Ces cinq dimensions sont calculées à partir de toutes vos réponses, et pas seulement du style arrivé en tête. Elles montrent de quel côté penche votre goût sur chaque aspect, et avec quelle intensité. Survolez ou touchez chacune d\'elles pour découvrir ce qu\'elle dit de vous.',
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
        'tempo' => [
            'group' => 'Époque',
            'left' => 'Traditionnel',
            'right' => 'Moderne',
            'left_text' => 'Le traditionnel est un trait marquant chez vous. Vous aimez les formes et les références qui ont résisté à l\'épreuve du temps, et vous voyez de la beauté dans ce qui a une histoire.',
            'right_text' => 'Votre trait le plus marquant ici, c\'est le moderne. Vous aimez les solutions actuelles, le design récent et les espaces qui semblent faits pour la façon de vivre d\'aujourd\'hui.',
        ],
        'elementos' => [
            'group' => 'Composition',
            'left' => 'Épuré',
            'right' => 'Détaillé',
            'left_text' => 'Vous aimez les espaces épurés, avec peu d\'éléments en vue. L\'espace libre et les surfaces dégagées apportent le calme visuel que vous recherchez.',
            'right_text' => 'Vous aimez les espaces riches en détails. Textures, objets, tableaux et couches de tissus donnent à l\'espace la vie et la personnalité que vous recherchez.',
        ],
        'cor' => [
            'group' => 'Palette',
            'left' => 'Neutre',
            'right' => 'Coloré',
            'left_text' => 'Vous préférez une palette neutre. Peu de couleurs, bien assorties, rendent l\'espace apaisant et mettent en valeur les formes et les matériaux.',
            'right_text' => 'La couleur occupe une place importante dans vos goûts. Vous vous sentez bien dans des espaces vibrants, avec des motifs et des associations qui expriment une personnalité.',
        ],
        'linhas' => [
            'group' => 'Caractéristiques',
            'left' => 'Lignes droites',
            'right' => 'Lignes courbes',
            'left_text' => 'Les lignes droites sont un trait marquant chez vous. Vous aimez les formes simples et géométriques, qui rendent l\'espace ordonné et visuellement épuré.',
            'right_text' => 'Vous vous reconnaissez dans les lignes courbes. Les formes arrondies, les arches et les détails ornementés apportent du mouvement et de la douceur à l\'espace.',
        ],
        'materiais' => [
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
                'characteristics' => [
                    'text' => 'Le classique part de la symétrie et de la proportion. Les pièces s\'organisent autour d\'un point central, comme une cheminée ou une console, et les détails travaillés apportent la finition.',
                    'items' => [
                        'Symétrie et proportion',
                        'Moulures, boiseries et plinthes hautes',
                        'Meubles imposants, au dessin traditionnel',
                        'Lustres en cristal et tapis ornementés',
                        'Miroirs, sculptures et œuvres d\'art mis en valeur',
                    ],
                ],
                'materials' => [
                    'text' => 'Les matériaux sont nobles et choisis pour durer. C\'est un style où la qualité se perçoit au toucher.',
                    'items' => [
                        'Bois noble et massif',
                        'Marbre',
                        'Velours, soie et lin',
                        'Laiton et détails dorés',
                        'Cristal',
                    ],
                ],
                'palette' => [
                    'text' => 'La base est claire et chaude, avec du doré dans les détails. Des tons profonds, comme le bleu marine, apparaissent en des points choisis.',
                    'colors' => [
                        ['name' => 'Blanc cassé', 'hex' => '#F4EFE6'],
                        ['name' => 'Beige', 'hex' => '#D9C7A8'],
                        ['name' => 'Or vieilli', 'hex' => '#B8975A'],
                        ['name' => 'Brun', 'hex' => '#5C4033'],
                        ['name' => 'Bleu marine', 'hex' => '#1F2A44'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'La symétrie comme point de départ', 'text' => 'Organisez la pièce à partir d\'un axe. Un canapé centré, des fauteuils par paire et des lampes identiques de chaque côté règlent une bonne partie de la composition.'],
                ['title' => 'Peu de matériaux, tous de qualité', 'text' => 'Le vrai bois, la pierre et le métal vieillissent bien. Deux ou trois bons choix valent mieux que beaucoup de choix moyens.'],
                ['title' => 'Moulures et boiseries', 'text' => 'Elles donnent du dessin à un mur lisse et fonctionnent même dans des appartements neufs, sans aucun détail d\'origine.'],
                ['title' => 'Un éclairage en couches', 'text' => 'Lustre, appliques et lampes sur des circuits séparés permettent de changer l\'ambiance de la pièce au fil de la journée.'],
            ],
            'watch_outs' => [
                ['title' => 'Excès d\'ornements', 'text' => 'Quand tout a du détail, rien ne ressort. Choisissez un ou deux éléments forts par pièce et laissez le reste plus calme.'],
                ['title' => 'Les proportions dans les petits espaces', 'text' => 'Les meubles classiques sont souvent volumineux. Dans les petites pièces ou sous un plafond bas, les grands lustres et les moulures lourdes écrasent l\'espace.'],
                ['title' => 'Les imitations', 'text' => 'Le stratifié imitation marbre et le doré trop brillant affaiblissent l\'ensemble. Dans le classique, mieux vaut avoir moins et avoir du vrai.'],
            ],
        ],

        'minimalist' => [
            'name' => 'Minimaliste',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Le minimalisme réduit la pièce au nécessaire. Chaque meuble a une fonction et une place définies, et l\'espace vide fait partie du projet.',
                    'items' => [
                        'Lignes droites et formes simples',
                        'Surfaces dégagées',
                        'Peu de meubles, de grande qualité',
                        'Mobilier multifonction',
                        'Rangements intégrés et discrets',
                    ],
                ],
                'materials' => [
                    'text' => 'Peu de matériaux, répétés dans toute la pièce, créent une unité. Les finitions sont lisses et sans ornement.',
                    'items' => [
                        'Verre',
                        'Métal, comme l\'acier brossé et l\'aluminium',
                        'Bois clair',
                        'Grès cérame ou pierre à motif uni',
                        'Tissus unis, sans motif',
                    ],
                ],
                'palette' => [
                    'text' => 'La palette est courte et neutre. Le contraste entre le blanc et le noir dessine les formes, et le bois clair évite que la pièce paraisse froide.',
                    'colors' => [
                        ['name' => 'Blanc', 'hex' => '#FFFFFF'],
                        ['name' => 'Gris clair', 'hex' => '#D9D9D9'],
                        ['name' => 'Gris moyen', 'hex' => '#8C8C8C'],
                        ['name' => 'Noir', 'hex' => '#1A1A1A'],
                        ['name' => 'Bois clair', 'hex' => '#D8C3A5'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Des rangements fermés', 'text' => 'Des portes lisses, sans poignée apparente, rangent le quotidien et gardent les surfaces dégagées.'],
                ['title' => 'Peu de pièces, bien choisies', 'text' => 'Avec moins d\'objets, chacun ressort davantage. Il vaut la peine d\'investir dans le canapé, la table et le luminaire principal.'],
                ['title' => 'La répétition des matériaux', 'text' => 'Le même sol et le même bois dans plusieurs pièces créent une continuité et agrandissent l\'espace.'],
                ['title' => 'La lumière comme élément du projet', 'text' => 'La lumière naturelle sans obstacle et l\'éclairage encastré prennent la place des objets décoratifs.'],
            ],
            'watch_outs' => [
                ['title' => 'Une pièce froide', 'text' => 'Sans texture, le minimalisme devient impersonnel. Le bois, la laine et le lin apportent de la chaleur sans ajouter d\'objets.'],
                ['title' => 'Le manque de rangements', 'text' => 'L\'aspect épuré dépend d\'endroits où ranger. Sans assez de rangements, les affaires reviennent sur les plans de travail.'],
                ['title' => 'Les finitions exposées', 'text' => 'Avec peu d\'éléments, le moindre défaut se voit : une plinthe de travers, un joint mal fait, un mur irrégulier.'],
            ],
        ],

        'rustic' => [
            'name' => 'Rustique',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Le rustique fait entrer la nature dans la maison. Les matériaux se montrent tels qu\'ils sont, avec leurs veines, leurs nœuds et leurs marques, et la pièce invite à rester.',
                    'items' => [
                        'Poutres et structures en bois apparentes',
                        'Textures naturelles visibles',
                        'Meubles robustes',
                        'Pièces artisanales et de récupération',
                        'Cheminée ou poêle à bois comme lieu de rassemblement',
                    ],
                ],
                'materials' => [
                    'text' => 'Tout est naturel et peu transformé. L\'imperfection fait partie du style.',
                    'items' => [
                        'Bois brut ou de récupération',
                        'Pierre naturelle',
                        'Fer',
                        'Lin et coton',
                        'Paille, osier et céramique',
                    ],
                ],
                'palette' => [
                    'text' => 'Des tons terreux, tirés des matériaux eux-mêmes. Le vert arrive par les plantes et par des détails couleur mousse.',
                    'colors' => [
                        ['name' => 'Écru', 'hex' => '#EDE6D6'],
                        ['name' => 'Sable', 'hex' => '#D8C4A0'],
                        ['name' => 'Terre cuite', 'hex' => '#C1693C'],
                        ['name' => 'Brun bois', 'hex' => '#6B4A2F'],
                        ['name' => 'Vert mousse', 'hex' => '#6B705C'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Le bois de récupération', 'text' => 'Sur une table, un panneau ou les poutres, il crée à lui seul une bonne partie de l\'ambiance de la pièce.'],
                ['title' => 'Le mélange des textures', 'text' => 'Pierre, bois, lin et paille ensemble créent de l\'intérêt sans dépendre de la couleur.'],
                ['title' => 'Les pièces artisanales', 'text' => 'Céramique, vannerie et meubles faits main renforcent le caractère du style.'],
                ['title' => 'Une lumière chaude', 'text' => 'Des ampoules aux tons jaunes et des points lumineux bas, comme des lampes et des appliques, renforcent la chaleur.'],
            ],
            'watch_outs' => [
                ['title' => 'Une pièce sombre', 'text' => 'Beaucoup de bois foncé et de pierre absorbent la lumière. Des murs clairs et de bonnes ouvertures compensent.'],
                ['title' => 'Le poids visuel', 'text' => 'Trop de meubles robustes alourdissent la pièce, surtout dans les petits espaces.'],
                ['title' => 'L\'entretien des matériaux', 'text' => 'Le bois et la pierre naturelle demandent un traitement contre l\'humidité, les taches et les termites.'],
            ],
        ],

        'industrial' => [
            'name' => 'Industriel',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Inspiré des anciens entrepôts et lofts de New York, le style industriel montre ce que les autres styles cachent : la structure, les tuyaux et les installations restent apparents.',
                    'items' => [
                        'Tuyaux et chemins de câbles apparents',
                        'Briques apparentes',
                        'Espaces ouverts et hauts plafonds',
                        'Luminaires et suspensions en métal',
                        'Meubles en fer et en bois',
                    ],
                ],
                'materials' => [
                    'text' => 'Des matériaux bruts, d\'aspect résistant, à la finition mate.',
                    'items' => [
                        'Béton et béton ciré',
                        'Acier et fer noir',
                        'Cuir',
                        'Brique apparente',
                        'Bois foncé ou de récupération',
                    ],
                ],
                'palette' => [
                    'text' => 'Les gris et le noir forment la base. Le brun du cuir et la teinte brique réchauffent l\'ensemble.',
                    'colors' => [
                        ['name' => 'Gris béton', 'hex' => '#9A9A96'],
                        ['name' => 'Graphite', 'hex' => '#3A3A3C'],
                        ['name' => 'Noir', 'hex' => '#1C1C1C'],
                        ['name' => 'Brun cuir', 'hex' => '#7B4B2A'],
                        ['name' => 'Brique', 'hex' => '#9C4A33'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'La structure apparente', 'text' => 'Dalle, poutres et tuyaux apparents font partie de la décoration et dispensent du faux plafond.'],
                ['title' => 'Les espaces ouverts', 'text' => 'Salon, cuisine et salle à manger sans cloisons mettent en valeur l\'ampleur que le style demande.'],
                ['title' => 'Rails et suspensions', 'text' => 'L\'éclairage sur rail permet d\'orienter la lumière et s\'accorde avec l\'aspect technique.'],
                ['title' => 'Cuir et bois pour réchauffer', 'text' => 'Un canapé en cuir ou une table en bois équilibrent la froideur du béton et du métal.'],
            ],
            'watch_outs' => [
                ['title' => 'Une pièce froide et sombre', 'text' => 'Trop de gris et de noir alourdissent. Un éclairage bien pensé, du bois et des tissus évitent cet effet.'],
                ['title' => 'L\'acoustique', 'text' => 'Les surfaces dures et les espaces ouverts créent de l\'écho. Tapis, rideaux et meubles rembourrés aident à absorber le son.'],
                ['title' => 'Les installations apparentes exigent du soin', 'text' => 'Tuyaux et câbles visibles demandent un tracé planifié et une exécution propre. L\'improvisation se voit.'],
            ],
        ],

        'scandinavian' => [
            'name' => 'Scandinave',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Le scandinave est né dans des pays aux longs hivers et à la lumière rare, c\'est pourquoi il valorise la clarté et le confort. Il est fonctionnel comme le minimaliste, mais plus accueillant.',
                    'items' => [
                        'Lumière naturelle exploitée au maximum',
                        'Meubles légers, aux lignes simples',
                        'Plaids, coussins et tapis',
                        'Plantes',
                        'Décoration sobre et fonctionnelle',
                    ],
                ],
                'materials' => [
                    'text' => 'Le bois clair et les tissus naturels donnent le ton. Les textures douces jouent le rôle que la couleur jouerait dans d\'autres styles.',
                    'items' => [
                        'Bois clair, comme le pin et le chêne',
                        'Laine et tricot',
                        'Lin et coton',
                        'Céramique mate',
                        'Fibres naturelles',
                    ],
                ],
                'palette' => [
                    'text' => 'Le blanc et le gris clair amplifient la lumière. Le bleu clair et le bois apportent de la douceur, et le graphite apparaît dans de petits détails.',
                    'colors' => [
                        ['name' => 'Blanc', 'hex' => '#FAFAF7'],
                        ['name' => 'Gris clair', 'hex' => '#DADDE0'],
                        ['name' => 'Bleu clair', 'hex' => '#BFD3DF'],
                        ['name' => 'Bois clair', 'hex' => '#D9C4A1'],
                        ['name' => 'Graphite', 'hex' => '#3F4448'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Des fenêtres dégagées', 'text' => 'Des rideaux légers et translucides, ou pas de rideaux du tout, laissent entrer la lumière toute la journée.'],
                ['title' => 'Des couches de textiles', 'text' => 'Plaids, coussins et tapis de textures différentes apportent le confort qui définit le style.'],
                ['title' => 'Du bois clair au sol et sur les meubles', 'text' => 'Il réchauffe la base blanche sans assombrir la pièce.'],
                ['title' => 'Des plantes', 'text' => 'Le vert est la principale source de couleur et de vie dans la pièce.'],
            ],
            'watch_outs' => [
                ['title' => 'Trop de blanc', 'text' => 'Sans bois ni texture, la pièce devient fade et semble inachevée.'],
                ['title' => 'Le climat brésilien', 'text' => 'La laine et les tapis à poils longs ont été pensés pour le froid. Dans les régions chaudes, le lin et le coton jouent le même rôle.'],
                ['title' => 'Les surfaces claires', 'text' => 'Les canapés, tapis et murs clairs montrent facilement la saleté. Les tissus lavables et les housses amovibles aident.'],
            ],
        ],

        'bohemian' => [
            'name' => 'Bohème',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Le bohème est libre et personnel. Il mélange les époques, les cultures et les motifs, et chaque objet a souvent une histoire : un voyage, une brocante, un héritage.',
                    'items' => [
                        'Mélange de motifs et de textures',
                        'Meubles vintage et chinés',
                        'Beaucoup de plantes',
                        'Coussins, tapis et poufs superposés',
                        'Objets de voyage et art exposés',
                    ],
                ],
                'materials' => [
                    'text' => 'Le fait main et les fibres naturelles dominent. Rien n\'a besoin d\'être parfaitement assorti.',
                    'items' => [
                        'Tissus ethniques et brodés',
                        'Macramé et crochet',
                        'Rotin, osier et paille',
                        'Bois',
                        'Céramique artisanale',
                    ],
                ],
                'palette' => [
                    'text' => 'Des couleurs chaudes et intenses sur une base claire. C\'est la base neutre qui permet de mélanger autant de couleurs sans lasser.',
                    'colors' => [
                        ['name' => 'Écru', 'hex' => '#EFE6D5'],
                        ['name' => 'Terre cuite', 'hex' => '#C1693C'],
                        ['name' => 'Moutarde', 'hex' => '#D1A23A'],
                        ['name' => 'Vert émeraude', 'hex' => '#2F6F5E'],
                        ['name' => 'Bleu indigo', 'hex' => '#2E4374'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Une base neutre', 'text' => 'Des murs et un canapé écrus laissent ressortir les couleurs et les motifs sans qu\'ils se fassent concurrence.'],
                ['title' => 'Un fil conducteur', 'text' => 'Répéter deux ou trois couleurs sur différents objets donne de l\'unité au mélange.'],
                ['title' => 'Des plantes à différentes hauteurs', 'text' => 'Au sol, sur des étagères et suspendues, elles remplissent la pièce et relient les éléments.'],
                ['title' => 'Des pièces chinées', 'text' => 'Les meubles d\'antiquaire, de brocante et de voyage apportent l\'authenticité que le style demande.'],
            ],
            'watch_outs' => [
                ['title' => 'Un mélange sans critère', 'text' => 'Sans fil conducteur de couleur ou de matière, la pièce paraît désordonnée.'],
                ['title' => 'Nettoyage et entretien', 'text' => 'Beaucoup d\'objets, de tissus et de plantes accumulent la poussière et demandent plus de soin au quotidien.'],
                ['title' => 'Les petits espaces', 'text' => 'Dans les pièces compactes, de nombreuses couches réduisent la sensation d\'espace. Mieux vaut concentrer le mélange dans un coin ou sur un mur.'],
            ],
        ],

        'contemporary' => [
            'name' => 'Contemporain',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Le contemporain est le style du présent. Il suit ce qui se fait d\'actuel en design et en technologie et associe avec équilibre des références modernes et classiques.',
                    'items' => [
                        'Lignes droites, avec quelques courbes douces',
                        'Espaces ouverts',
                        'Peu de pièces, dont une qui se démarque',
                        'Éclairage encastré et planifié',
                        'Technologie et domotique discrètes',
                    ],
                ],
                'materials' => [
                    'text' => 'Il n\'y a pas de matériau obligatoire. Ce qui définit le style, c\'est l\'association équilibrée de finitions actuelles.',
                    'items' => [
                        'Grès cérame grand format',
                        'Menuiserie sur mesure, laquée ou en placage bois',
                        'Verre',
                        'Métaux noirs ou brossés',
                        'Quartz et autres surfaces synthétiques',
                    ],
                ],
                'palette' => [
                    'text' => 'Une base neutre, du blanc au gris anthracite, avec une touche de couleur choisie. Ici, l\'exemple est le bleu pétrole, mais ce peut être n\'importe quelle teinte utilisée avec modération.',
                    'colors' => [
                        ['name' => 'Blanc glacier', 'hex' => '#F2F2F0'],
                        ['name' => 'Greige', 'hex' => '#B8B0A5'],
                        ['name' => 'Gris anthracite', 'hex' => '#4A4E54'],
                        ['name' => 'Noir', 'hex' => '#1E1E1E'],
                        ['name' => 'Bleu pétrole (touche de couleur)', 'hex' => '#1F5F6B'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Une base neutre avec une touche de couleur', 'text' => 'Un fauteuil, un tableau ou un mur coloré suffisent à donner de la personnalité.'],
                ['title' => 'Une pièce maîtresse', 'text' => 'Un luminaire design ou une œuvre d\'art donnent de l\'identité à une pièce aux lignes simples.'],
                ['title' => 'Une menuiserie sur mesure', 'text' => 'Panneaux et placards sur mesure organisent l\'espace et cachent appareils et câbles.'],
                ['title' => 'Un éclairage par scénarios', 'text' => 'La lumière encastrée, indirecte et avec variateur adapte la pièce à chaque moment de la journée.'],
            ],
            'watch_outs' => [
                ['title' => 'Un air de showroom', 'text' => 'Trop neutre et sans objets personnels, la pièce devient impersonnelle.'],
                ['title' => 'Les tendances passagères', 'text' => 'Comme il suit l\'actualité, le style peut vite se démoder. Gardez neutre ce qui coûte cher à changer et réservez les tendances à ce qui se remplace facilement.'],
                ['title' => 'Un mélange sans unité', 'text' => 'Avec autant de matériaux disponibles, il est facile d\'en faire trop. Deux ou trois finitions principales suffisent.'],
            ],
        ],

    ],

];

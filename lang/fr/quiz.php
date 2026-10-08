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
    //   hero_text  → 3 parágrafos, começando por "Sendo do estilo [nome], você…"
    //   practice   → characteristics/materials: 'text' (2–3 frases) + 'items' (lista curta);
    //                palette: 'text' + 'colors' => [['name' => 'Bege', 'hex' => '#E8DCC4'], ...]
    //   works      → 4 a 6 itens ['title' => '...', 'text' => '...'] (O que funciona para você)
    //   watch_outs → 3 a 5 itens ['title' => '...', 'text' => '...'] (Pontos de atenção)
    'styles' => [

        'classic' => [
            'name' => 'Classique',
            'hero_text' => [
                'Avec un style Classique, vous avez des goûts raffinés et appréciez la sophistication dans chaque pièce. Les espaces qui vous ressemblent le plus impressionnent au premier regard, par la noblesse des matériaux et la présence imposante de l\'architecture. Pour vous, une belle pièce est une pièce où rien ne semble improvisé : les proportions ont du sens, les meubles dialoguent entre eux et chaque détail a été choisi avec soin.',
                'Vous aimez les intérieurs qui surprennent le regard et révèlent quelque chose de nouveau à chaque visite. Vous remarquez le dessin d\'une moulure, l\'éclat d\'un lustre en cristal, le toucher d\'un velours ou le doré discret d\'une poignée. Vous appréciez ce qui est bien fait et fait pour durer, et préférez investir dans quelques pièces de qualité plutôt que suivre la tendance du moment. Votre maison a tendance à raconter une histoire, avec des meubles de famille, des œuvres d\'art et des objets qui prennent de la valeur avec le temps.',
                'Paris est peut-être la ville qui traduit le mieux vos goûts. Les appartements haussmanniens du XIXe siècle réunissent presque tout ce que vous admirez : hauteur sous plafond, murs à boiseries, parquet en point de Hongrie, cheminées en marbre et hautes fenêtres ouvrant sur des balcons en fer forgé. Ils sont la preuve que la tradition, lorsqu\'elle est bien entretenue, ne se démode pas. Et ce même esprit trouve sa place dans un appartement d\'aujourd\'hui, avec les bons choix de matériaux, de proportions et de détails.',
            ],
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
            'hero_text' => [
                'Avec un style Minimaliste, vous avez des goûts clairs et affirmés et appréciez la simplicité dans chaque pièce. Les espaces qui vous ressemblent le plus impressionnent par leur calme : peu de meubles, des lignes épurées et de l\'espace libre pour circuler. Pour vous, une belle pièce est une pièce où tout a une fonction et une place, et où rien n\'est là juste pour remplir l\'espace.',
                'Vous aimez les intérieurs qui reposent le regard. Vous remarquez la précision de la jonction entre le mur et le sol, la lumière qui entre sans obstacle, la texture d\'un bois clair ou la légèreté d\'un plateau en verre. Vous privilégiez la qualité à la quantité, et préférez posséder moins de choses, pourvu qu\'elles soient choisies avec discernement. Votre maison a tendance à être ordonnée et silencieuse, un lieu où l\'esprit ralentit après la journée.',
                'Le Japon est peut-être le lieu qui traduit le mieux vos goûts. Là-bas, le vide est considéré comme une partie de l\'architecture. Les maisons traditionnelles de Kyoto, avec leurs panneaux coulissants en papier, leurs sols en tatami et presque aucun meuble, et les œuvres de l\'architecte Tadao Ando, faites de béton lisse et de lumière naturelle, montrent comment quelques éléments bien choisis peuvent marquer autant qu\'une pièce pleine de détails. Et ce même esprit trouve sa place dans un appartement d\'aujourd\'hui, avec une menuiserie bien pensée, des matériaux bien maîtrisés et de l\'espace pour respirer.',
            ],
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
            'hero_text' => [
                'Avec un style Rustique, vous avez des goûts chaleureux et appréciez le naturel dans chaque pièce. Les espaces qui vous ressemblent le plus impressionnent par leur douceur de vivre : du bois, de la pierre et des tissus qui invitent à rester. Pour vous, une belle pièce est une pièce qui semble habitée, où les matériaux se montrent tels qu\'ils sont, avec leurs marques, et où la maison ne semble pas mise en scène pour une photo.',
                'Vous aimez les intérieurs qui éveillent les sens. Vous remarquez les veines d\'une table en bois massif, la texture irrégulière d\'un mur en pierre, l\'odeur d\'un poêle à bois ou le toucher d\'un plaid en coton brut. Vous appréciez le fait main et ce qui vieillit bien, et trouvez plus belle une pièce marquée par l\'usage qu\'une autre tout juste sortie du magasin. Votre maison a tendance à être un lieu de rencontre, avec une grande table, une cuisine animée et de la place pour accueillir ceux qui arrivent.',
                'Les anciennes fazendas du Minas Gerais, au Brésil, sont peut-être le lieu qui traduit le mieux vos goûts. Des murs épais, des poutres en bois apparentes, des planchers en larges lames, un fourneau à bois au cœur de la cuisine et une véranda ouverte sur la campagne réunissent presque tout ce que vous admirez. Elles montrent comment des matériaux simples, utilisés tels quels, créent une chaleur qu\'aucune finition sophistiquée ne remplace. Et ce même esprit trouve sa place dans un appartement d\'aujourd\'hui, avec du vrai bois, des textures naturelles et une lumière chaude.',
            ],
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
            'hero_text' => [
                'Avec un style Industriel, vous avez des goûts urbains et authentiques et appréciez la vérité des matériaux dans chaque pièce. Les espaces qui vous ressemblent le plus impressionnent par leur atmosphère : béton, métal et brique apparents, tons sombres et une lumière qui semble dessiner la pièce. Pour vous, une belle pièce est une pièce qui ne cache pas comment elle a été construite et qui fait de sa propre structure un élément du décor.',
                'Vous aimez les intérieurs qui ont un air de grande ville, et ils sont encore plus beaux la nuit. Vous remarquez la lumière indirecte qui découpe un mur en béton, le tracé d\'une tuyauterie apparente, l\'éclat du métal sous une lampe ou le cuir patiné d\'un fauteuil. Vous appréciez ce qui est robuste et fonctionnel, même marqué par l\'usage, et aimez que la technologie fasse partie de l\'espace : son, écrans et éclairage intégrés au projet, et non cachés. Votre maison a tendance à être ouverte et décloisonnée, avec le salon, la cuisine et l\'espace de travail réunis dans une même pièce.',
                'Les lofts de SoHo, à New York, sont peut-être le lieu qui traduit le mieux vos goûts. Dans les années 1960 et 1970, des artistes se sont installés dans les anciennes usines et entrepôts du quartier et ont gardé ce qu\'ils y ont trouvé : brique apparente, colonnes en fonte, grandes verrières à châssis métallique et hauts plafonds. C\'est là qu\'est née l\'idée qu\'un espace conçu pour le travail peut devenir une maison pleine de caractère. Et ce même esprit trouve sa place dans un appartement d\'aujourd\'hui, avec une dalle en béton apparente, un éclairage sur rail, des touches de lumière colorée et des fenêtres qui laissent entrer la ville.',
            ],
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
            'hero_text' => [
                'Avec un style Scandinave, vous avez des goûts légers et naturels et appréciez la lumière, l\'air et la simplicité dans chaque pièce. Les espaces qui vous ressemblent le plus procurent une sensation de liberté : murs clairs, peu de meubles et larges fenêtres qui font entrer le paysage. Pour vous, une belle pièce est une pièce simple sans être froide, où rien n\'est de trop et où tout invite à respirer profondément.',
                'Vous aimez les intérieurs qui ressemblent à une pause dans le tourbillon du quotidien. Vous remarquez la lumière du matin à travers un voilage, la ligne épurée d\'une chaise en bois clair, le toucher d\'un plaid en laine ou la verdure dehors, encadrée par la fenêtre. Vous appréciez une vie plus simple et proche de la nature, avec peu de choses, bien dessinées et choisies avec soin. Votre maison a tendance à être lumineuse et silencieuse, avec un coin lecture près de la fenêtre et de l\'espace libre pour que le regard porte loin.',
                'Les maisons nordiques au bord des fjords et des lacs de Norvège et de Suède sont peut-être le lieu qui traduit le mieux vos goûts. Dehors, elles se trouvent au milieu d\'une nature immense ; dedans, elles sont blanches, lumineuses et ordonnées, avec du bois clair, peu d\'objets et de grandes fenêtres qui font du paysage l\'élément principal de la maison. Dans ces pays où la lumière d\'hiver est rare, profiter de chaque rayon de soleil est devenu presque une philosophie. Et ce même esprit trouve sa place dans un appartement d\'aujourd\'hui, avec une lumière naturelle bien exploitée, des couleurs claires, des tissus naturels et des plantes.',
            ],
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
            'hero_text' => [
                'Avec un style Bohème, vous avez des goûts libres et créatifs et appréciez la personnalité dans chaque pièce. Les espaces qui vous ressemblent le plus impressionnent par leur énergie : couleurs, motifs, plantes et objets qui semblent venir des quatre coins du monde. Pour vous, une belle pièce est une pièce qui raconte qui y vit, où rien n\'a besoin d\'être parfaitement assorti et où chaque chose a une raison d\'être là.',
                'Vous aimez les intérieurs qui éveillent la curiosité. Vous remarquez la trame d\'un tapis tissé à la main, le motif d\'un coussin brodé, la lumière filtrée par une lampe en rotin ou une plante qui retombe le long d\'une étagère. Vous appréciez les pièces qui ont une histoire, chinées dans des marchés, en voyage ou chez des antiquaires, et préférez un objet unique à un ensemble acheté d\'un coup. Votre maison a tendance à être un lieu d\'expression, avec des coussins au sol, de la musique et des conversations qui se prolongent tard dans la nuit.',
                'Marrakech, au Maroc, est peut-être la ville qui traduit le mieux vos goûts. Ses riads, maisons traditionnelles tournées vers un patio intérieur, réunissent presque tout ce que vous admirez : zelliges colorés, bois sculpté, lanternes en métal ajouré, tapis superposés et coussins éparpillés sur le sol. Là-bas, couleurs et cultures se mêlent avec naturel, et chaque recoin semble avoir été composé au fil du temps. Et ce même esprit trouve sa place dans un appartement d\'aujourd\'hui, avec une base neutre, des pièces chinées, des plantes et des couleurs choisies pour dialoguer entre elles.',
            ],
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
            'hero_text' => [
                'Avec un style Contemporain, vous avez des goûts actuels, chics et audacieux, et appréciez les dernières nouveautés du design dans chaque pièce. Les espaces qui vous ressemblent le plus impressionnent par leur effet de surprise : formes inattendues, matériaux nobles utilisés d\'une manière nouvelle et pièces qui ressemblent à des sculptures. Pour vous, une belle pièce est une pièce qui a du caractère, moderne sans être froide et sophistiquée sans être prévisible.',
                'Vous aimez les intérieurs qui font de l\'effet. Vous remarquez un fauteuil aux courbes audacieuses, une lampe qui ressemble à une œuvre d\'art, le veinage marqué d\'une pierre en grand format ou une seule touche de couleur qui transforme tout le salon. Vous appréciez la créativité et l\'innovation, aimez voir la technologie et le design travailler ensemble et n\'avez pas peur d\'une pièce extravagante, tant que l\'ensemble reste équilibré. Votre maison a tendance à être ouverte et fluide, chaque pièce étant pensée comme une composition.',
                'Dubaï est peut-être la ville qui traduit le mieux vos goûts. En quelques décennies, elle est devenue un laboratoire d\'architecture audacieuse : la Burj Khalifa, haute de plus de 800 mètres, et le Musée du Futur, de forme ovale avec un vide en son centre et une façade couverte de calligraphie arabe, montrent comment la créativité peut devenir le symbole d\'une ville. À l\'intérieur, hôtels et appartements suivent la même ligne, avec du marbre en grands panneaux, un éclairage scénographique et des pièces de design qui ressemblent à des sculptures. Là-bas, luxe et innovation vont de pair. Et ce même esprit trouve sa place dans un appartement d\'aujourd\'hui, avec une base neutre, des pièces de design marquantes et des matériaux utilisés de façon créative.',
            ],
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

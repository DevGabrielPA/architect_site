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
        'dimensions_intro' => 'These five dimensions are calculated from all of your answers, not just the style that came out on top. They show which way your taste leans in each aspect, and how strongly. Hover over or tap each one to see what it says about you.',
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
        'tempo' => [
            'group' => 'Era',
            'left' => 'Traditional',
            'right' => 'Modern',
            'left_text' => 'Traditional is a defining trait for you. You like shapes and references that have stood the test of time, and you see beauty in things that have a history.',
            'right_text' => 'Your most defining trait here is modern. You like current solutions, recent design and spaces that seem made for the way we live today.',
        ],
        'elementos' => [
            'group' => 'Composition',
            'left' => 'Clean',
            'right' => 'Detailed',
            'left_text' => 'You like clean spaces, with few elements on display. Free space and uncluttered surfaces bring the visual calm you are looking for.',
            'right_text' => 'You like spaces rich in detail. Textures, objects, pictures and layers of fabric give the space the life and personality you are looking for.',
        ],
        'cor' => [
            'group' => 'Palette',
            'left' => 'Neutral',
            'right' => 'Colorful',
            'left_text' => 'You prefer a neutral palette. A few well-matched colors keep the space calm and let shapes and materials stand out.',
            'right_text' => 'Color is an important part of your taste. You feel good in vibrant spaces, with patterns and combinations that express personality.',
        ],
        'linhas' => [
            'group' => 'Characteristics',
            'left' => 'Straight lines',
            'right' => 'Curved lines',
            'left_text' => 'Straight lines are a defining trait for you. You like simple, geometric shapes that keep the space organized and visually clean.',
            'right_text' => 'You connect with curved lines. Rounded shapes, arches and ornate details bring movement and softness to a space.',
        ],
        'materiais' => [
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
                'characteristics' => [
                    'text' => 'Classic style starts from symmetry and proportion. Rooms are organized around a focal point, such as a fireplace or a sideboard, and crafted details provide the finishing touch.',
                    'items' => [
                        'Symmetry and proportion',
                        'Moldings, boiseries and tall baseboards',
                        'Imposing furniture with a traditional design',
                        'Crystal chandeliers and ornate rugs',
                        'Mirrors, sculptures and artwork on display',
                    ],
                ],
                'materials' => [
                    'text' => 'The materials are noble and chosen to last. It is a style in which quality can be felt to the touch.',
                    'items' => [
                        'Solid hardwood',
                        'Marble',
                        'Velvet, silk and linen',
                        'Brass and gold details',
                        'Crystal',
                    ],
                ],
                'palette' => [
                    'text' => 'The base is light and warm, with gold in the details. Deep tones, such as navy blue, come in at chosen points.',
                    'colors' => [
                        ['name' => 'Off-white', 'hex' => '#F4EFE6'],
                        ['name' => 'Beige', 'hex' => '#D9C7A8'],
                        ['name' => 'Antique gold', 'hex' => '#B8975A'],
                        ['name' => 'Brown', 'hex' => '#5C4033'],
                        ['name' => 'Navy blue', 'hex' => '#1F2A44'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Symmetry as a starting point', 'text' => 'Organize the room around an axis. A centered sofa, a pair of armchairs and matching lamps on both sides take care of most of the composition.'],
                ['title' => 'Few materials, all of them good', 'text' => 'Real wood, stone and metal age well. Two or three good choices are worth more than many average ones.'],
                ['title' => 'Moldings and boiseries', 'text' => 'They give shape to a plain wall and work even in new apartments with no original details.'],
                ['title' => 'Layered lighting', 'text' => 'A chandelier, wall sconces and table lamps on separate circuits let you change the mood of the room throughout the day.'],
            ],
            'watch_outs' => [
                ['title' => 'Too much ornament', 'text' => 'When everything has detail, nothing stands out. Choose one or two protagonists per room and keep the rest calmer.'],
                ['title' => 'Proportion in compact spaces', 'text' => 'Classic furniture tends to be bulky. In small rooms or rooms with low ceilings, large chandeliers and heavy moldings flatten the space.'],
                ['title' => 'Imitations', 'text' => 'Laminate that imitates marble and overly shiny gold weaken the whole. In classic style, it is better to have less and have the real thing.'],
            ],
        ],

        'minimalist' => [
            'name' => 'Minimalist',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Minimalism reduces the room to what is necessary. Every piece has a defined function and place, and empty space is part of the design.',
                    'items' => [
                        'Straight lines and simple shapes',
                        'Clear surfaces',
                        'Few pieces of furniture, of high quality',
                        'Multifunctional furniture',
                        'Built-in, discreet storage',
                    ],
                ],
                'materials' => [
                    'text' => 'A few materials, repeated throughout the room, create unity. Finishes are smooth and unadorned.',
                    'items' => [
                        'Glass',
                        'Metal, such as brushed steel and aluminum',
                        'Light wood',
                        'Porcelain tile or stone with a plain pattern',
                        'Plain fabrics, without prints',
                    ],
                ],
                'palette' => [
                    'text' => 'The palette is short and neutral. The contrast between white and black defines the shapes, and light wood keeps the room from feeling cold.',
                    'colors' => [
                        ['name' => 'White', 'hex' => '#FFFFFF'],
                        ['name' => 'Light gray', 'hex' => '#D9D9D9'],
                        ['name' => 'Medium gray', 'hex' => '#8C8C8C'],
                        ['name' => 'Black', 'hex' => '#1A1A1A'],
                        ['name' => 'Light wood', 'hex' => '#D8C3A5'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Closed cabinetry', 'text' => 'Flat doors with no visible handles store everyday items and keep surfaces clear.'],
                ['title' => 'Few pieces, well chosen', 'text' => 'With fewer objects, each one stands out more. It is worth investing in the sofa, the table and the main light fixture.'],
                ['title' => 'Repeated materials', 'text' => 'The same flooring and the same wood in several rooms create continuity and make the space feel larger.'],
                ['title' => 'Light as part of the design', 'text' => 'Unobstructed natural light and built-in lighting take the place of decorative objects.'],
            ],
            'watch_outs' => [
                ['title' => 'Cold rooms', 'text' => 'Without texture, minimalism feels impersonal. Wood, wool and linen bring warmth without adding objects.'],
                ['title' => 'Lack of storage', 'text' => 'The clean look depends on having somewhere to put things away. Without enough cabinetry, things end up back on the countertops.'],
                ['title' => 'Exposed finishes', 'text' => 'With few elements, any flaw shows: a crooked baseboard, a badly finished joint, an uneven wall.'],
            ],
        ],

        'rustic' => [
            'name' => 'Rustic',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Rustic style brings nature indoors. Materials appear as they are, with grain, knots and marks, and the room invites you to stay.',
                    'items' => [
                        'Exposed wooden beams and structures',
                        'Natural textures on display',
                        'Sturdy furniture',
                        'Handcrafted and reclaimed pieces',
                        'A fireplace or wood-burning stove as a gathering point',
                    ],
                ],
                'materials' => [
                    'text' => 'Everything is natural and minimally processed. Imperfection is part of the look.',
                    'items' => [
                        'Raw or reclaimed wood',
                        'Natural stone',
                        'Iron',
                        'Linen and cotton',
                        'Straw, wicker and ceramics',
                    ],
                ],
                'palette' => [
                    'text' => 'Earthy tones, drawn from the materials themselves. Green comes in through plants and moss-toned details.',
                    'colors' => [
                        ['name' => 'Ecru', 'hex' => '#EDE6D6'],
                        ['name' => 'Sand', 'hex' => '#D8C4A0'],
                        ['name' => 'Terracotta', 'hex' => '#C1693C'],
                        ['name' => 'Wood brown', 'hex' => '#6B4A2F'],
                        ['name' => 'Moss green', 'hex' => '#6B705C'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Reclaimed wood', 'text' => 'In a table, a panel or the beams, it sets much of the room\'s mood on its own.'],
                ['title' => 'Mixed textures', 'text' => 'Stone, wood, linen and straw together create interest without relying on color.'],
                ['title' => 'Handcrafted pieces', 'text' => 'Ceramics, basketry and handmade furniture reinforce the character of the style.'],
                ['title' => 'Warm light', 'text' => 'Yellowish bulbs and low light points, such as table lamps and wall sconces, reinforce the coziness.'],
            ],
            'watch_outs' => [
                ['title' => 'Dark rooms', 'text' => 'Lots of dark wood and stone absorb light. Light-colored walls and good openings make up for it.'],
                ['title' => 'Visual weight', 'text' => 'Too much sturdy furniture makes a room feel heavy, especially in small spaces.'],
                ['title' => 'Material upkeep', 'text' => 'Wood and natural stone need treatment against moisture, stains and termites.'],
            ],
        ],

        'industrial' => [
            'name' => 'Industrial',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Inspired by the old warehouses and lofts of New York, industrial style shows what other styles hide: structure, pipes and fittings are left exposed.',
                    'items' => [
                        'Exposed pipes and cable trays',
                        'Exposed brick',
                        'Open-plan spaces and high ceilings',
                        'Metal light fixtures and pendants',
                        'Iron and wood furniture',
                    ],
                ],
                'materials' => [
                    'text' => 'Raw materials with a sturdy look and a matte finish.',
                    'items' => [
                        'Concrete and burnished cement',
                        'Steel and black iron',
                        'Leather',
                        'Exposed brick',
                        'Dark or reclaimed wood',
                    ],
                ],
                'palette' => [
                    'text' => 'Grays and black form the base. The brown of leather and the brick tone warm up the whole.',
                    'colors' => [
                        ['name' => 'Concrete gray', 'hex' => '#9A9A96'],
                        ['name' => 'Graphite', 'hex' => '#3A3A3C'],
                        ['name' => 'Black', 'hex' => '#1C1C1C'],
                        ['name' => 'Leather brown', 'hex' => '#7B4B2A'],
                        ['name' => 'Brick', 'hex' => '#9C4A33'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Exposed structure', 'text' => 'Slab, beams and exposed pipes become part of the decor and make a false ceiling unnecessary.'],
                ['title' => 'Open-plan spaces', 'text' => 'Living room, kitchen and dining area without walls highlight the spaciousness the style calls for.'],
                ['title' => 'Tracks and pendants', 'text' => 'Track lighting lets you direct the light and suits the technical look.'],
                ['title' => 'Leather and wood to warm things up', 'text' => 'A leather sofa or a wooden table balances the coldness of concrete and metal.'],
            ],
            'watch_outs' => [
                ['title' => 'Cold, dark rooms', 'text' => 'Too much gray and black feels heavy. Well-planned lighting, wood and fabrics prevent this effect.'],
                ['title' => 'Acoustics', 'text' => 'Hard surfaces and open spaces create echo. Rugs, curtains and upholstery help absorb sound.'],
                ['title' => 'Exposed fittings require care', 'text' => 'Visible pipes and wiring need a planned layout and clean execution. Improvisation shows.'],
            ],
        ],

        'scandinavian' => [
            'name' => 'Scandinavian',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Scandinavian style was born in countries with long winters and little light, which is why it values brightness and comfort. It is functional like minimalism, but more welcoming.',
                    'items' => [
                        'Natural light used to the fullest',
                        'Light furniture with simple lines',
                        'Throws, cushions and rugs',
                        'Plants',
                        'Pared-back, functional decor',
                    ],
                ],
                'materials' => [
                    'text' => 'Light wood and natural fabrics set the tone. Soft textures play the role that color would play in other styles.',
                    'items' => [
                        'Light wood, such as pine and oak',
                        'Wool and knits',
                        'Linen and cotton',
                        'Matte ceramics',
                        'Natural fibers',
                    ],
                ],
                'palette' => [
                    'text' => 'White and light gray amplify the light. Light blue and wood bring softness, and graphite appears in small details.',
                    'colors' => [
                        ['name' => 'White', 'hex' => '#FAFAF7'],
                        ['name' => 'Light gray', 'hex' => '#DADDE0'],
                        ['name' => 'Light blue', 'hex' => '#BFD3DF'],
                        ['name' => 'Light wood', 'hex' => '#D9C4A1'],
                        ['name' => 'Graphite', 'hex' => '#3F4448'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Unobstructed windows', 'text' => 'Light, sheer curtains, or none at all, let the light in all day long.'],
                ['title' => 'Layers of fabric', 'text' => 'Throws, cushions and rugs in different textures bring the coziness that defines the style.'],
                ['title' => 'Light wood on floors and furniture', 'text' => 'It warms up the white base without darkening the room.'],
                ['title' => 'Plants', 'text' => 'Green is the main source of color and life in the room.'],
            ],
            'watch_outs' => [
                ['title' => 'Too much white', 'text' => 'Without wood and texture, the room looks dull and unfinished.'],
                ['title' => 'Brazilian climate', 'text' => 'Wool and shaggy rugs were designed for the cold. In warm regions, linen and cotton play the same role.'],
                ['title' => 'Light surfaces', 'text' => 'Light-colored sofas, rugs and walls show dirt easily. Washable fabrics and removable covers help.'],
            ],
        ],

        'bohemian' => [
            'name' => 'Bohemian',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Bohemian style is free and personal. It mixes eras, cultures and patterns, and each object usually has a story: a trip, a market, an heirloom.',
                    'items' => [
                        'Mix of patterns and textures',
                        'Vintage and thrifted furniture',
                        'Lots of plants',
                        'Layered cushions, rugs and poufs',
                        'Travel objects and art on display',
                    ],
                ],
                'materials' => [
                    'text' => 'Handmade pieces and natural fibers predominate. Nothing needs to match perfectly.',
                    'items' => [
                        'Ethnic and embroidered fabrics',
                        'Macramé and crochet',
                        'Rattan, wicker and straw',
                        'Wood',
                        'Handmade ceramics',
                    ],
                ],
                'palette' => [
                    'text' => 'Warm, intense colors over a light base. It is the neutral base that allows so many colors to be mixed without becoming tiring.',
                    'colors' => [
                        ['name' => 'Ecru', 'hex' => '#EFE6D5'],
                        ['name' => 'Terracotta', 'hex' => '#C1693C'],
                        ['name' => 'Mustard', 'hex' => '#D1A23A'],
                        ['name' => 'Emerald green', 'hex' => '#2F6F5E'],
                        ['name' => 'Indigo blue', 'hex' => '#2E4374'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Neutral base', 'text' => 'Ecru walls and sofa let colors and patterns show without competing with each other.'],
                ['title' => 'A common thread', 'text' => 'Repeating two or three colors on different objects gives the mix unity.'],
                ['title' => 'Plants at different heights', 'text' => 'On the floor, on shelves and hanging, they fill the room and tie the elements together.'],
                ['title' => 'Thrifted pieces', 'text' => 'Furniture from antique shops, markets and travels gives the authenticity the style calls for.'],
            ],
            'watch_outs' => [
                ['title' => 'Mixing without criteria', 'text' => 'Without a common thread of color or material, the room looks disorganized.'],
                ['title' => 'Cleaning and upkeep', 'text' => 'Lots of objects, fabrics and plants gather dust and need more day-to-day care.'],
                ['title' => 'Small spaces', 'text' => 'In compact rooms, many layers reduce the sense of space. It is worth concentrating the mix in one corner or on one wall.'],
            ],
        ],

        'contemporary' => [
            'name' => 'Contemporary',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Contemporary is the style of the present. It keeps up with what is current in design and technology and combines modern and classic references with balance.',
                    'items' => [
                        'Straight lines, with a few soft curves',
                        'Open-plan spaces',
                        'Few pieces, with one standout',
                        'Built-in, planned lighting',
                        'Discreet technology and automation',
                    ],
                ],
                'materials' => [
                    'text' => 'There is no mandatory material. What defines the style is a balanced combination of current finishes.',
                    'items' => [
                        'Large-format porcelain tile',
                        'Custom cabinetry, in lacquer or wood veneer',
                        'Glass',
                        'Black or brushed metals',
                        'Quartz and other engineered surfaces',
                    ],
                ],
                'palette' => [
                    'text' => 'A neutral base, from white to charcoal, with one chosen accent color. Here the example is petrol blue, but it can be any shade used in moderation.',
                    'colors' => [
                        ['name' => 'Ice white', 'hex' => '#F2F2F0'],
                        ['name' => 'Greige', 'hex' => '#B8B0A5'],
                        ['name' => 'Charcoal gray', 'hex' => '#4A4E54'],
                        ['name' => 'Black', 'hex' => '#1E1E1E'],
                        ['name' => 'Petrol blue (accent color)', 'hex' => '#1F5F6B'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Neutral base with one accent color', 'text' => 'An armchair, a painting or a colored wall is enough to add personality.'],
                ['title' => 'One standout piece', 'text' => 'A design light fixture or a work of art gives identity to a room with simple lines.'],
                ['title' => 'Custom cabinetry', 'text' => 'Made-to-measure panels and cabinets organize the space and hide equipment and cables.'],
                ['title' => 'Lighting scenes', 'text' => 'Built-in, indirect and dimmable lighting adapts the room to every moment of the day.'],
            ],
            'watch_outs' => [
                ['title' => 'Showroom look', 'text' => 'Too neutral and without personal objects, the room feels impersonal.'],
                ['title' => 'Passing trends', 'text' => 'Because it follows what is current, the style can date quickly. Keep neutral what is expensive to change and leave trends for what is easy to replace.'],
                ['title' => 'Mixing without unity', 'text' => 'With so many materials available, it is easy to overdo it. Two or three main finishes are enough.'],
            ],
        ],

    ],

];

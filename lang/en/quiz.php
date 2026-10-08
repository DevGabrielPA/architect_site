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
    //   hero_text  → 3 parágrafos, começando por "Sendo do estilo [nome], você…"
    //   practice   → characteristics/materials: 'text' (2–3 frases) + 'items' (lista curta);
    //                palette: 'text' + 'colors' => [['name' => 'Bege', 'hex' => '#E8DCC4'], ...]
    //   works      → 4 a 6 itens ['title' => '...', 'text' => '...'] (O que funciona para você)
    //   watch_outs → 3 a 5 itens ['title' => '...', 'text' => '...'] (Pontos de atenção)
    'styles' => [

        'classic' => [
            'name' => 'Classic',
            'hero_text' => [
                'As someone with a Classic style, you have refined taste and value sophistication in every room. The spaces that suit you best make an impression at first sight, through the nobility of their materials and the commanding presence of their architecture. To you, a beautiful room is one where nothing feels improvised: the proportions make sense, the pieces speak to each other and every detail has been chosen with care.',
                'You like rooms that catch the eye and reveal something new with every visit. You notice the profile of a moulding, the sparkle of a crystal chandelier, the feel of velvet or the subtle gold of a handle. You value what is well made and made to last, and would rather invest in a few quality pieces than follow the trend of the moment. Your home tends to tell a story, with family furniture, works of art and objects that gain value over time.',
                'Paris may be the city that best captures your taste. Nineteenth-century Parisian apartments bring together almost everything you admire: high ceilings, panelled boiserie walls, herringbone wood floors, marble fireplaces and tall windows opening onto wrought-iron balconies. They are proof that tradition, when well cared for, never goes out of style. And that same spirit fits in a modern apartment, with the right choices of materials, proportions and details.',
            ],
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
            'hero_text' => [
                'As someone with a Minimalist style, you have clear, decisive taste and value simplicity in every room. The spaces that suit you best make an impression through their calm: few pieces, clean lines and open space to move around. To you, a beautiful room is one where everything has a purpose and a place, and nothing is there just to fill space.',
                'You like rooms that give the eye a rest. You notice the precision where wall meets floor, light coming in unobstructed, the texture of pale wood or the lightness of a glass tabletop. You value quality over quantity, and prefer to own fewer things, as long as they are chosen with care. Your home tends to be organized and quiet, a place where your mind slows down after the day.',
                'Japan may be the place that best captures your taste. There, empty space is treated as part of the architecture. The traditional houses of Kyoto, with sliding paper panels, tatami floors and almost no furniture, and the work of architect Tadao Ando, made of smooth concrete and natural light, show how a few well-chosen elements can make as strong an impression as a room full of detail. And that same spirit fits in a modern apartment, with well-planned joinery, well-resolved materials and room to breathe.',
            ],
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
            'hero_text' => [
                'As someone with a Rustic style, you have warm, welcoming taste and value what is natural in every room. The spaces that suit you best make an impression through their coziness: wood, stone and fabrics that invite you to stay. To you, a beautiful room is one that feels lived in, where materials show up as they are, marks and all, and the house does not look staged for a photo.',
                'You like rooms that awaken the senses. You notice the grain of a solid wood table, the uneven texture of a stone wall, the smell of a wood-burning stove or the feel of a raw cotton throw. You value the handmade and things that age well, and find a piece with signs of use more beautiful than one fresh from the store. Your home tends to be a gathering place, with a big table, a busy kitchen and room to welcome whoever arrives.',
                'The old farmhouses of Minas Gerais, in Brazil, may be the place that best captures your taste. Thick walls, exposed wooden beams, wide plank floors, a wood-burning stove at the heart of the kitchen and a veranda open to the countryside bring together almost everything you admire. They show how simple materials, used as they are, create a warmth that no sophisticated finish can replace. And that same spirit fits in a modern apartment, with real wood, natural textures and warm light.',
            ],
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
            'hero_text' => [
                'As someone with an Industrial style, you have urban, authentic taste and value honesty of materials in every room. The spaces that suit you best make an impression through their atmosphere: exposed concrete, metal and brick, dark tones and light that seems to draw the room. To you, a beautiful room is one that does not hide how it was built and turns the structure itself into part of the decor.',
                'You like rooms that feel like a big city, and they get even better at night. You notice indirect light grazing a concrete wall, the path of exposed piping, the gleam of metal under a lamp or the worn leather of an armchair. You value what is sturdy and functional, even with signs of use, and you like it when technology is part of the space: sound, screens and lighting built into the design, not hidden from it. Your home tends to be open and integrated, with living room, kitchen and workspace sharing the same space.',
                'The lofts of SoHo, in New York, may be the place that best captures your taste. In the 1960s and 1970s, artists began living in the neighborhood\'s old factories and warehouses and kept what they found: exposed brick, cast-iron columns, large steel-framed windows and high ceilings. That is where the idea was born that a space made for work can become a home full of character. And that same spirit fits in a modern apartment, with an exposed concrete ceiling, track lighting, touches of colored light and windows that let the city in.',
            ],
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
            'hero_text' => [
                'As someone with a Scandinavian style, you have light, natural taste and value light, air and simplicity in every room. The spaces that suit you best bring a sense of freedom: pale walls, few pieces of furniture and wide windows that bring the landscape inside. To you, a beautiful room is one that is simple without being cold, where nothing is superfluous and everything invites you to take a deep breath.',
                'You like rooms that feel like a pause from the rush. You notice morning light coming through a sheer curtain, the clean outline of a pale wood chair, the feel of a wool throw or the green outside, framed by the window. You value a simpler life, closer to nature, with few things, well designed and carefully chosen. Your home tends to be bright and quiet, with a reading nook by the window and open space for the eye to wander.',
                'The Nordic houses on the fjords and lakes of Norway and Sweden may be the place that best captures your taste. Outside, they sit in the middle of vast nature; inside, they are white, bright and orderly, with pale wood, few objects and large windows that make the landscape the main feature of the house. In countries where winter light is scarce, making the most of every ray of sun has become almost a philosophy. And that same spirit fits in a modern apartment, with well-used natural light, pale colors, natural fabrics and plants.',
            ],
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
            'hero_text' => [
                'As someone with a Bohemian style, you have free, creative taste and value personality in every room. The spaces that suit you best make an impression through their energy: colors, patterns, plants and objects that seem to come from different corners of the world. To you, a beautiful room is one that tells who lives there, where nothing has to match perfectly and everything has a reason to be there.',
                'You like rooms that spark curiosity. You notice the weave of a handmade rug, the pattern of an embroidered cushion, light filtered through a rattan lamp or a plant trailing down a bookcase. You value pieces with a story, found at markets, on trips and in antique shops, and prefer a one-of-a-kind object to a set bought all at once. Your home tends to be a place of self-expression, with cushions on the floor, music playing and conversations that run late into the night.',
                'Marrakech, in Morocco, may be the city that best captures your taste. Its riads, traditional houses built around an inner courtyard, bring together almost everything you admire: colorful tiles, carved wood, pierced metal lanterns, layered rugs and cushions scattered across the floor. There, colors and cultures blend naturally, and every corner seems to have been put together over time. And that same spirit fits in a modern apartment, with a neutral base, found pieces, plants and colors chosen to work together.',
            ],
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
            'hero_text' => [
                'As someone with a Contemporary style, you have current, chic and daring taste, and value the latest in design in every room. The spaces that suit you best make an impression through surprise: unexpected shapes, fine materials used in new ways and pieces that look like sculptures. To you, a beautiful room is one with attitude, modern without being cold and sophisticated without being predictable.',
                'You like rooms that make an impact. You notice an armchair with bold curves, a lamp that looks like a work of art, the striking veining of a large-format stone slab or a single touch of color that changes the whole room. You value creativity and innovation, like to see technology and design working together and are not afraid of an extravagant piece, as long as the whole stays balanced. Your home tends to be open and fluid, with each room conceived as a composition.',
                'Dubai may be the city that best captures your taste. In just a few decades, it has become a laboratory of daring architecture: the Burj Khalifa, more than 800 meters tall, and the Museum of the Future, an oval form with a void at its center and a facade covered in Arabic calligraphy, show how creativity can become the symbol of a city. Inside, hotels and apartments follow the same line, with large marble panels, theatrical lighting and design pieces that look like sculptures. There, luxury and innovation go hand in hand. And that same spirit fits in a modern apartment, with a neutral base, striking design pieces and materials used creatively.',
            ],
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

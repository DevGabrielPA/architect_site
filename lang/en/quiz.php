<?php

return [

    'meta' => [
        'title' => 'Decor Style Quiz | Larissa Vasconcellos',
        'description' => 'Find out in a few minutes which decor style suits you best: Classic, Minimalist, Rustic, Industrial, Scandinavian, Bohemian, or Contemporary.',
    ],

    'intro' => [
        'heading' => 'What Is Your Decor Style?',
        'subheading' => 'Answer 20 quick, image-based questions and discover which of the 7 styles suits you the most — plus how much of your result reflects each of the others.',
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
        'winner_heading' => 'Your dominant style is:',
        'breakdown_heading' => 'Your Full Style Breakdown',
        'unlock_heading' => 'Full Style Report',
        'unlock_body' => 'For just $3, you\'ll unlock the detailed result of your quiz, with important insights about your style: which of the 7 styles suits you the most and the full compatibility breakdown, a detailed description of your style, famous people who share it, portfolio projects that match your taste, and how this style fits your home, your work, and your tastes in general.',
        'unlock_cta' => 'See My Result',
        'checkout_cancelled' => 'Payment was cancelled. Unlock again whenever you\'re ready to see your result.',
        'checkout_error' => 'We couldn\'t start the payment right now. Please try again in a moment.',
        'invalid_token' => 'This result link is invalid or has expired. Please retake the quiz to get a new result.',
        'matching_projects_heading' => 'Our Projects In This Style',
        'no_matching_projects' => 'We\'re still curating the portfolio projects that best match this style — in the meantime, check out our full portfolio.',
        'view_all_projects' => 'View all projects',
        'famous_people_heading' => 'Famous People With This Style',
        'home_fit_heading' => 'At Home',
        'work_fit_heading' => 'At Work',
        'taste_fit_heading' => 'In Your Tastes Overall',
        'retake_cta' => 'Retake the quiz',
    ],

    'checkout' => [
        'product_name' => 'Full Result — Decor Style Quiz',
    ],

    'mail' => [
        'unlocked_subject' => 'Your Full Style Quiz Result Is Ready',
        'unlocked_heading' => 'Your full result is unlocked!',
        'unlocked_body' => 'Your payment was confirmed and the full result of your Decor Style Quiz is now available. Your dominant style is <strong>:style</strong> — click the button below to see the full description, famous people who share this style, matching projects, and more.',
        'unlocked_cta' => 'See My Full Result',
    ],

    'styles' => [

        'classic' => [
            'name' => 'Classic',
            'description' => 'The classic style values symmetry, proportion, and refined details: moldings, boiserie, columns, noble fabrics like velvet and linen, and a palette that ranges from neutrals to gold and deep tones like wine and dark green. It doesn\'t chase trends — it aims for timeless elegance, quality pieces that last for generations, and impeccable finishing in every detail.',
            'home_fit' => 'At home, the classic style calls for well-defined, formal spaces: living rooms with upholstered armchairs, solid wood dining tables, and lighting from ornate chandeliers or sconces. It suits people who love hosting with sophistication and value a home that conveys tradition and solidity.',
            'work_fit' => 'At work, the classic style shows up in offices with floor-to-ceiling wooden bookshelves, sturdy desks, and an aesthetic that projects authority and trust — very common in law firms, consultancies, and executive spaces.',
            'taste_fit' => 'Outside the home, people drawn to the classic style tend to enjoy timeless fashion, museums and traditional art, restaurants with French-style service, and trips to historic cities like Paris, Rome, or Vienna.',
            'famous_people' => [
                ['name' => 'Ralph Lauren', 'note' => 'The American designer whose brand is synonymous with timeless classic elegance, with collections inspired by English manors and American "old money."'],
                ['name' => 'Jackie Kennedy', 'note' => 'Restored the White House\'s reception rooms with period furniture, symmetry, and classic taste, becoming a style reference to this day.'],
                ['name' => 'Aerin Lauder', 'note' => 'Granddaughter of Estée Lauder and an interior designer, she built her personal brand entirely around classic, timeless glamour.'],
            ],
        ],

        'minimalist' => [
            'name' => 'Minimalist',
            'description' => 'Minimalism is the art of stripping away everything superfluous until only the essential remains: clean lines, neutral palettes (white, gray, black), smooth surfaces, and functional furniture without ornamentation. Every object has a clear purpose, and empty space matters as much as the furniture — the result is a sense of calm, order, and mental clarity.',
            'home_fit' => 'At home, minimalism means built-in storage that hides the clutter, very few decorative pieces (but of the highest quality), and a constant habit of tidying up. It\'s the ideal style for people who value open space to breathe and dislike accumulation.',
            'work_fit' => 'At work, minimalism shows up as clean desks, very few visible objects, and environments built for focus — very common in tech offices, design studios, and startups.',
            'taste_fit' => 'In general, people with this style tend to prefer capsule wardrobes, discreet technology, traveling light, and a daily life with fewer, more intentional belongings.',
            'famous_people' => [
                ['name' => 'Kim Kardashian', 'note' => 'Her California mansion, all in neutral tones and with almost no decorative objects, is one of the most talked-about examples of minimalism in the media.'],
                ['name' => 'Steve Jobs', 'note' => 'Lived — and designed — by the maxim "less is more"; his house was famous for having almost no furniture.'],
                ['name' => 'Jony Ive', 'note' => 'Apple\'s former design chief turned minimalism into a global visual language through products and spaces.'],
            ],
        ],

        'rustic' => [
            'name' => 'Rustic',
            'description' => 'The rustic style celebrates natural, imperfect materials: reclaimed wood, raw stone, fabrics like linen and jute, and an earthy palette reminiscent of the countryside. It\'s a warm, welcoming style that values the marks of time and craftsmanship over a perfect industrial finish.',
            'home_fit' => 'At home, rustic shows up as exposed wooden beams, solid tables with visible wear, fireplaces, and decor full of natural elements like plants, woven baskets, and handmade ceramics. It suits people who dream of a countryside home, even while living in the city.',
            'work_fit' => 'At work, rustic appears in cafés, inns, and spaces aiming to feel cozy and authentic — less common in traditional corporate offices, but increasingly present in coworking spaces with a more human, organic approach.',
            'taste_fit' => 'In general, this style pairs with a love of home cooking, local farmers markets, natural-fabric clothing, and trips to the countryside, farms, and nature destinations.',
            'famous_people' => [
                ['name' => 'Joanna and Chip Gaines', 'note' => 'Hosts of "Fixer Upper" and founders of Magnolia, they turned the farmhouse/rustic style into a worldwide phenomenon.'],
                ['name' => 'Ree Drummond', 'note' => 'Known as "The Pioneer Woman," she lives on a ranch and celebrates rustic American style in everything she does.'],
                ['name' => 'Amber Lewis', 'note' => 'American interior designer known for creating so-called "California rustic," blending wood, linen, and earthy tones.'],
            ],
        ],

        'industrial' => [
            'name' => 'Industrial',
            'description' => 'The industrial style was born from converting old factories and warehouses into homes, and it still carries that aesthetic today: exposed brick, visible metal pipes and beams, polished concrete, and a balance between raw and refined. It\'s an urban, laid-back style with strong personality.',
            'home_fit' => 'At home, industrial shows up as high ceilings, iron window frames, factory-style pendant lights, and furniture that mixes reclaimed wood with metal. It suits people who enjoy open, integrated spaces with a more laid-back, less traditional feel.',
            'work_fit' => 'At work, it\'s one of the most popular styles in creative offices, advertising agencies, and coworking spaces — the "factory" look conveys informality, creativity, and an unpretentious air, even in professional settings.',
            'taste_fit' => 'In general, people drawn to industrial tend to enjoy urban fashion, alternative music, craft beer, and the creative/bohemian neighborhoods of big cities.',
            'famous_people' => [
                ['name' => 'Andy Warhol', 'note' => 'His studio, "The Factory," in New York, is still synonymous with an industrial loft with exposed brick and metal structure.'],
                ['name' => 'Diane Keaton', 'note' => 'An actress and architecture enthusiast, she has renovated several homes exploring exposed concrete and raw materials — the subject of a book she wrote on the topic.'],
                ['name' => 'Anderson Cooper', 'note' => 'Bought an old industrial building in Brooklyn to renovate as his home, keeping the pipes and beams exposed.'],
            ],
        ],

        'scandinavian' => [
            'name' => 'Scandinavian',
            'description' => 'The Scandinavian style is synonymous with functional simplicity: light wood, white walls, plenty of natural light, and a spare yet cozy decor — the famous Nordic concept of "hygge." It\'s a practical, everyday style that never sacrifices visual comfort.',
            'home_fit' => 'At home, Scandinavian style shows up as simple-lined furniture, wool throws, candles, plants, and a light palette that visually opens up the space. It\'s the ideal style for people who want a home that\'s functional, organized, and cozy at the same time.',
            'work_fit' => 'At work, Scandinavian style translates into bright offices with plenty of natural light, ergonomic furniture, and a neutral aesthetic that helps maintain focus without feeling cold or impersonal — very common in design and tech companies.',
            'taste_fit' => 'In general, it suits people who value quality of life, a balance between work and rest, functional Nordic design, and a slower, more mindful lifestyle.',
            'famous_people' => [
                ['name' => 'Alvar Aalto', 'note' => 'A Finnish architect and designer, one of the creators of the Scandinavian aesthetic: functional, bright, and in natural wood.'],
                ['name' => 'Ingvar Kamprad', 'note' => 'Founder of IKEA, he brought accessible, functional Scandinavian design to the whole world.'],
                ['name' => 'Ilse Crawford', 'note' => 'A British interior designer known for blending Nordic comfort ("hygge") with a contemporary aesthetic.'],
            ],
        ],

        'bohemian' => [
            'name' => 'Bohemian',
            'description' => 'Bohemian is the freest, most expressive style of all: a mix of patterns, textures, vibrant colors, thrifted finds, handcrafted pieces, and objects from different cultures and travels. There\'s no fixed rulebook — what matters is that every piece tells a story and reflects the personality of the person who lives there.',
            'home_fit' => 'At home, bohemian shows up as layered rugs, patterned cushions, an abundance of plants, macramé, and furniture found at flea markets and thrift shops. It suits people who love a home that feels alive, full of layers and sentimental memories.',
            'work_fit' => 'At work, bohemian style tends to show up in art studios, creative studios, and artists\' spaces — places where creativity and personal expression are valued more than formality.',
            'taste_fit' => 'In general, this style pairs with a love of fashion with varied patterns and textures, indie/world music, travel to exotic places, and a more spontaneous, creative lifestyle.',
            'famous_people' => [
                ['name' => 'Frida Kahlo', 'note' => 'Her "Casa Azul" in Mexico City is still one of the greatest references for the artistic-bohemian style.'],
                ['name' => 'Florence Welch', 'note' => 'The lead singer of Florence + The Machine, known for an aesthetic universe full of vintage, natural, and bohemian references.'],
                ['name' => 'Sienna Miller', 'note' => 'A 2000s fashion icon who helped popularize the boho-chic look both in fashion and at home.'],
            ],
        ],

        'contemporary' => [
            'name' => 'Contemporary',
            'description' => 'Contemporary is the style of the "here and now": clean lines, integrated technology, materials like glass, steel, and concrete, and an aesthetic always in dialogue with the latest trends in architecture and design. Unlike modern (tied to a specific historical period), contemporary is always reinventing itself.',
            'home_fit' => 'At home, contemporary shows up as integrated planting, built-in LED lighting, home automation, and a design that blends comfort with cutting-edge technology. It suits people who like staying up to date and value innovation in everyday life.',
            'work_fit' => 'At work, it\'s the dominant style in modern corporate offices, commercial towers, and spaces aiming to convey innovation, efficiency, and a cutting-edge image to the market.',
            'taste_fit' => 'In general, it suits people who follow design and technology trends, enjoy bold architecture, travel to metropolises like New York, Tokyo, or Dubai, and lead a connected, fast-paced life.',
            'famous_people' => [
                ['name' => 'Zaha Hadid', 'note' => 'An architect who became a symbol of contemporary design, with fluid forms and projects that broke with traditional architecture.'],
                ['name' => 'Norman Foster', 'note' => 'A British architect and reference point for contemporary design, blending technology, glass, and extremely clean forms.'],
                ['name' => 'Beyoncé and Jay-Z', 'note' => 'They collect ultra-contemporary mansions around the world, always featuring bold architecture and cutting-edge technology.'],
            ],
        ],

    ],

];

<?php

return [

    'meta' => [
        'title' => 'Test de Estilo de Decoración | Larissa Vasconcellos',
        'description' => 'Descubre en pocos minutos qué estilo de decoración te queda mejor: Clásico, Minimalista, Rústico, Industrial, Escandinavo, Bohemio o Contemporáneo.',
    ],

    'intro' => [
        'heading' => '¿Cuál Es Tu Estilo de Decoración?',
        'subheading' => 'Responde 20 preguntas rápidas con imágenes y descubre cuál de los 7 estilos combina más contigo — y cómo se reparte tu gusto entre paleta, formas y materiales.',
        'start_button' => 'Comenzar el Test',
    ],

    'ui' => [
        'question_progress' => 'Pregunta :current de :total',
        'next' => 'Siguiente',
        'back' => 'Atrás',
        'submit' => 'Enviar',
        'validation_required' => 'Elige una opción para continuar.',
        'incomplete_message' => 'Responde todas las preguntas antes de enviar.',
    ],

    'questions' => [
        1 => '¿Qué sala de estar te gusta más?',
        2 => '¿En qué habitación de hotel te gustaría despertar?',
        3 => '¿Qué cocina combina contigo?',
        4 => '¿Qué bar/restaurante elegirías para una noche especial?',
        5 => '¿Qué cama elegirías para tu habitación?',
        6 => '¿Qué piso prefieres?',
        7 => '¿Qué revestimiento de pared te atrae?',
        8 => '¿Qué iluminación/lámpara elegirías?',
        9 => '¿Qué mesa de comedor combina contigo?',
        10 => '¿Qué paleta de colores te gusta más?',
        11 => '¿Qué cortinas elegirías?',
        12 => '¿Qué alfombra combina contigo?',
        13 => '¿Qué objeto decorativo colgarías en la pared?',
        14 => '¿A cuál de estos lugares te gustaría más viajar de vacaciones?',
        15 => '¿Qué balcón/área externa te gustaría tener?',
        16 => '¿Qué sillón te llama la atención?',
        17 => '¿Qué baño elegirías?',
        18 => '¿Qué estantería combina contigo?',
        19 => '¿Qué puerta elegirías para tu casa?',
        20 => '¿Qué fachada de casa te gusta más?',
    ],

    'result' => [
        'ready_heading' => '¡Tu Resultado Está Listo!',
        'ready_body' => 'Has respondido las 20 preguntas. Desbloquea ahora tu Informe Completo de Estilo por un pago único de US$ 3.',
        'unlock_heading' => 'Informe Completo de Estilo',
        'unlock_body' => 'Por solo US$ 3, desbloqueas el resultado detallado de tu test: cuál de los 7 estilos combina más contigo, las cinco dimensiones de tu gusto (paleta, formas y materiales) calculadas a partir de todas tus respuestas, cómo se ve tu estilo en la práctica — características, materiales y paleta de colores — y lo que funciona para ti, junto con los puntos de atención.',
        'unlock_cta' => 'Ver Mi Resultado',
        'checkout_cancelled' => 'El pago fue cancelado. Desbloquéalo de nuevo cuando quieras ver tu resultado.',
        'checkout_error' => 'No pudimos iniciar el pago en este momento. Inténtalo de nuevo en unos instantes.',
        'invalid_token' => 'Este enlace de resultado no es válido o ha caducado. Vuelve a hacer el test para obtener un nuevo resultado.',
        'hero_label' => 'Tu estilo arquitectónico es',
        'dimensions_heading' => 'Dimensiones de tu estilo',
        'dimensions_intro' => 'Estas cinco dimensiones se calculan a partir de todas tus respuestas, y no solo del estilo que quedó en primer lugar. Muestran hacia qué lado se inclina tu gusto en paleta, formas y materiales, y con qué intensidad. Pasa el ratón o toca cada una para ver lo que dice sobre ti.',
        'practice_heading' => 'Tu estilo en la práctica',
        'practice_characteristics' => 'Características',
        'practice_materials' => 'Materiales principales',
        'practice_palette' => 'Paleta de colores',
        'fit_heading' => 'Lo que funciona y puntos de atención',
        'works_heading' => 'Lo que funciona para ti',
        'watch_outs_heading' => 'Puntos de atención',
        'projects_heading' => 'Proyectos en este estilo',
        'sidebar_label' => 'Tu estilo es:',
        'sections_nav_label' => 'Secciones de la página',
        'on_this_page' => 'En esta página',
        'share' => 'Compartir',
        'share_copied' => '¡Enlace copiado!',
        'share_text' => 'Mi estilo de decoración es :style. Haz el test y descubre el tuyo:',
    ],

    // Seção "Dimensões do seu estilo": nomes dos polos (esquerdo = 0,
    // direito = 100) e o texto do card de cada polo. Pesos e cálculo em
    // config/quiz.php ('dimensions') e quiz_dimensions() em app/helpers.php.
    'dimensions' => [
        'tones' => [
            'group' => 'Paleta',
            'left' => 'Tonos claros',
            'right' => 'Tonos oscuros',
            'left_text' => 'Los tonos claros son un rasgo marcado en ti. Te gustan los ambientes luminosos y aireados, en los que el blanco, el beige y las maderas claras amplían el espacio y aportan ligereza.',
            'right_text' => 'Tu rasgo más marcado aquí son los tonos oscuros. Te gustan los ambientes con profundidad y personalidad, en los que el marrón, el grafito y el negro crean una atmósfera íntima.',
        ],
        'color' => [
            'group' => 'Paleta',
            'left' => 'Neutro',
            'right' => 'Colorido',
            'left_text' => 'Prefieres una paleta neutra. Pocos colores, bien combinados, dejan el ambiente en calma y destacan las formas y los materiales.',
            'right_text' => 'El color es una parte importante de tu gusto. Te sientes bien en ambientes vibrantes, con estampados y combinaciones que expresan personalidad.',
        ],
        'lines' => [
            'group' => 'Características',
            'left' => 'Líneas rectas',
            'right' => 'Líneas curvas',
            'left_text' => 'Las líneas rectas son un rasgo marcado en ti. Te gustan las formas simples y geométricas, que dejan el ambiente ordenado y con un aspecto limpio.',
            'right_text' => 'Te identificas con las líneas curvas. Las formas redondeadas, los arcos y los detalles ornamentados aportan movimiento y suavidad al ambiente.',
        ],
        'character' => [
            'group' => 'Características',
            'left' => 'Sofisticado',
            'right' => 'Acogedor',
            'left_text' => 'Tu rasgo más marcado aquí es la sofisticación. Valoras los ambientes elegantes y bien acabados, en los que cada detalle parece haber sido pensado.',
            'right_text' => 'Priorizas la calidez. Para ti, un buen ambiente es el que invita a quedarse, con texturas suaves, luz cálida y sensación de casa vivida.',
        ],
        'materials' => [
            'group' => 'Materiales',
            'left' => 'Materiales naturales',
            'right' => 'Materiales industriales',
            'left_text' => 'Prefieres los materiales naturales. La madera, la piedra, las fibras y tejidos como el lino y el algodón aportan la textura y la calidez que buscas.',
            'right_text' => 'Te identificas con los materiales industriales. El hormigón, el acero y el vidrio le dan al ambiente el aspecto urbano y actual que va contigo.',
        ],
    ],

    'checkout' => [
        'product_name' => 'Resultado Completo — Test de Estilo de Decoración',
    ],

    'mail' => [
        'unlocked_subject' => 'Tu Resultado Completo del Test de Estilo Ya Está Listo',
        'unlocked_heading' => '¡Tu resultado completo está desbloqueado!',
        'unlocked_body' => 'Tu pago fue confirmado y el resultado completo de tu Test de Estilo de Decoración ya está disponible. Tu estilo predominante es <strong>:style</strong> — haz clic en el botón de abajo para ver las dimensiones de tu gusto, cómo se ve tu estilo en la práctica y mucho más.',
        'unlocked_cta' => 'Ver Mi Resultado Completo',
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
            'name' => 'Clásico',
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
            'name' => 'Bohemio',
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
            'name' => 'Contemporáneo',
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

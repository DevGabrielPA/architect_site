<?php

return [

    'meta' => [
        'title' => 'Test de Estilo de Decoración | Larissa Vasconcellos',
        'description' => 'Descubre en pocos minutos qué estilo de decoración te queda mejor: Clásico, Minimalista, Rústico, Industrial, Escandinavo, Bohemio o Contemporáneo.',
    ],

    'intro' => [
        'heading' => '¿Cuál Es Tu Estilo de Decoración?',
        'subheading' => 'Responde 20 preguntas rápidas con imágenes y descubre cuál de los 7 estilos combina más contigo — y cuánto de tu resultado refleja cada uno de los demás.',
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
        'winner_heading' => 'Tu estilo predominante es:',
        'breakdown_heading' => 'Tu Perfil Completo de Estilo',
        'unlock_heading' => 'Informe Completo de Estilo',
        'unlock_body' => 'Por solo US$ 3, desbloqueas el resultado detallado de tu test, con información importante sobre tu estilo: cuál de los 7 estilos combina más contigo y el gráfico completo de compatibilidad, la descripción detallada de tu estilo, personas famosas que lo comparten, proyectos de nuestro portafolio que combinan contigo, y cómo este estilo encaja en tu casa, tu trabajo y tus gustos en general.',
        'unlock_cta' => 'Ver Mi Resultado',
        'checkout_cancelled' => 'El pago fue cancelado. Desbloquéalo de nuevo cuando quieras ver tu resultado.',
        'checkout_error' => 'No pudimos iniciar el pago en este momento. Inténtalo de nuevo en unos instantes.',
        'invalid_token' => 'Este enlace de resultado no es válido o ha caducado. Vuelve a hacer el test para obtener un nuevo resultado.',
        'matching_projects_heading' => 'Nuestros Proyectos En Este Estilo',
        'no_matching_projects' => 'Todavía estamos seleccionando los proyectos del portafolio que mejor combinan con este estilo — mientras tanto, revisa todo nuestro portafolio.',
        'view_all_projects' => 'Ver todos los proyectos',
        'famous_people_heading' => 'Famosos Con Este Estilo',
        'home_fit_heading' => 'En Casa',
        'work_fit_heading' => 'En El Trabajo',
        'taste_fit_heading' => 'En Tus Gustos En General',
        'retake_cta' => 'Repetir el test',
    ],

    'checkout' => [
        'product_name' => 'Resultado Completo — Test de Estilo de Decoración',
    ],

    'mail' => [
        'unlocked_subject' => 'Tu Resultado Completo del Test de Estilo Ya Está Listo',
        'unlocked_heading' => '¡Tu resultado completo está desbloqueado!',
        'unlocked_body' => 'Tu pago fue confirmado y el resultado completo de tu Test de Estilo de Decoración ya está disponible. Tu estilo predominante es <strong>:style</strong> — haz clic en el botón de abajo para ver la descripción completa, personas famosas que comparten este estilo, proyectos que combinan contigo y mucho más.',
        'unlocked_cta' => 'Ver Mi Resultado Completo',
    ],

    'styles' => [

        'classic' => [
            'name' => 'Clásico',
            'description' => 'El estilo clásico valora la simetría, la proporción y los detalles refinados: molduras, boiserie, columnas, telas nobles como el terciopelo y el lino, y una paleta que va de los neutros al dorado y tonos profundos como el vino y el verde oscuro. No persigue tendencias: busca una elegancia atemporal, piezas de calidad que perduran generaciones y un acabado impecable en cada detalle.',
            'home_fit' => 'En casa, el estilo clásico pide espacios bien definidos y formales: salas de estar con sillones tapizados, mesas de comedor de madera maciza e iluminación con lámparas de araña o apliques trabajados. Combina con quien ama recibir con sofisticación y valora un hogar que transmita tradición y solidez.',
            'work_fit' => 'En el trabajo, el clásico aparece en oficinas con estanterías de madera hasta el techo, escritorios robustos y una estética que transmite autoridad y confianza — muy común en bufetes de abogados, consultorías y espacios ejecutivos.',
            'taste_fit' => 'Fuera de casa, quienes se identifican con el clásico suelen disfrutar de la moda atemporal, los museos y el arte tradicional, restaurantes con servicio al estilo francés y viajes a ciudades históricas como París, Roma o Viena.',
            'famous_people' => [
                ['name' => 'Ralph Lauren', 'note' => 'Diseñador estadounidense cuya marca es sinónimo de elegancia clásica atemporal, con colecciones inspiradas en mansiones inglesas y el "old money" estadounidense.'],
                ['name' => 'Jackie Kennedy', 'note' => 'Restauró los salones de recepción de la Casa Blanca con muebles de época, simetría y buen gusto clásico, convirtiéndose en una referencia de estilo hasta hoy.'],
                ['name' => 'Aerin Lauder', 'note' => 'Nieta de Estée Lauder y diseñadora de interiores, construyó su marca personal en torno al glamour clásico y atemporal.'],
            ],
        ],

        'minimalist' => [
            'name' => 'Minimalista',
            'description' => 'El minimalismo es el arte de eliminar todo lo superfluo hasta que solo quede lo esencial: líneas rectas, paletas neutras (blanco, gris, negro), superficies lisas y muebles funcionales sin ornamentos. Cada objeto tiene un propósito claro, y el espacio vacío importa tanto como el mobiliario — el resultado es una sensación de calma, orden y claridad mental.',
            'home_fit' => 'En casa, el minimalismo se traduce en armarios empotrados que esconden el desorden, muy pocas piezas decorativas (pero de altísima calidad) y el hábito constante de mantener todo ordenado. Es el estilo ideal para quien valora el espacio libre para respirar y no le gusta acumular.',
            'work_fit' => 'En el trabajo, el minimalismo aparece en escritorios limpios, muy pocos objetos a la vista y ambientes pensados para el enfoque — muy presente en oficinas de tecnología, estudios de diseño y startups.',
            'taste_fit' => 'En general, quienes tienen este estilo suelen preferir armarios cápsula, tecnología discreta, viajar con poco equipaje y una vida diaria con menos objetos, pero más intencionales.',
            'famous_people' => [
                ['name' => 'Kim Kardashian', 'note' => 'Su mansión en California, toda en tonos neutros y prácticamente sin objetos decorativos, es uno de los ejemplos de minimalismo más comentados en los medios.'],
                ['name' => 'Steve Jobs', 'note' => 'Vivía — y diseñaba — bajo la máxima de que "menos es más"; su casa era famosa por tener casi ningún mueble.'],
                ['name' => 'Jony Ive', 'note' => 'Exdirector de diseño de Apple, convirtió el minimalismo en un lenguaje visual global a través de productos y espacios.'],
            ],
        ],

        'rustic' => [
            'name' => 'Rústico',
            'description' => 'El estilo rústico celebra los materiales naturales e imperfectos: madera reciclada, piedra en bruto, telas como el lino y la yute, y una paleta terrosa que recuerda al campo. Es un estilo cálido y acogedor, que valora las marcas del tiempo y lo artesanal por encima de un acabado industrial perfecto.',
            'home_fit' => 'En casa, lo rústico aparece en vigas de madera vista, mesas macizas con marcas de uso, chimeneas y una decoración llena de elementos naturales como plantas, cestas de fibra y cerámica artesanal. Es el estilo de quien sueña con una casa de campo, incluso viviendo en la ciudad.',
            'work_fit' => 'En el trabajo, lo rústico surge en cafés, posadas y espacios que buscan transmitir calidez y autenticidad — menos común en oficinas corporativas tradicionales, pero cada vez más presente en coworkings con una propuesta más humana y orgánica.',
            'taste_fit' => 'En general, este estilo combina con el gusto por la cocina casera, los mercados de productores locales, la ropa de tejidos naturales y los viajes al campo, granjas y destinos de naturaleza.',
            'famous_people' => [
                ['name' => 'Joanna y Chip Gaines', 'note' => 'Presentadores del programa "Fixer Upper" y fundadores de Magnolia, convirtieron el estilo granja/rústico en un fenómeno mundial.'],
                ['name' => 'Ree Drummond', 'note' => 'Conocida como "The Pioneer Woman", vive en un rancho y celebra el estilo rústico estadounidense en todo lo que hace.'],
                ['name' => 'Amber Lewis', 'note' => 'Diseñadora de interiores estadounidense conocida por crear el llamado "rústico californiano", que mezcla madera, lino y tonos terrosos.'],
            ],
        ],

        'industrial' => [
            'name' => 'Industrial',
            'description' => 'El estilo industrial nació de la transformación de antiguas fábricas y almacenes en viviendas, y hoy sigue llevando esa estética: ladrillo visto, tuberías y vigas metálicas a la vista, concreto pulido y un equilibrio entre lo bruto y lo refinado. Es un estilo urbano, desenfadado y con mucha personalidad.',
            'home_fit' => 'En casa, lo industrial aparece en techos altos, ventanas de hierro, lámparas colgantes tipo fábrica y muebles que combinan madera reciclada con metal. Combina con quien disfruta de espacios amplios e integrados, con un aire más desenfadado que tradicional.',
            'work_fit' => 'En el trabajo, es uno de los estilos más populares en oficinas creativas, agencias de publicidad y coworkings — el look "de fábrica" transmite informalidad, creatividad y un aire desenfadado, incluso en entornos profesionales.',
            'taste_fit' => 'En general, quienes se identifican con lo industrial suelen disfrutar de la moda urbana, la música alternativa, la cerveza artesanal y los barrios creativos/bohemios de las grandes ciudades.',
            'famous_people' => [
                ['name' => 'Andy Warhol', 'note' => 'Su estudio, "The Factory", en Nueva York, sigue siendo sinónimo de loft industrial con ladrillo visto y estructura metálica.'],
                ['name' => 'Diane Keaton', 'note' => 'Actriz y entusiasta de la arquitectura, ha renovado varias casas explorando el concreto visto y los materiales en bruto — tema de un libro que escribió al respecto.'],
                ['name' => 'Anderson Cooper', 'note' => 'Compró un antiguo edificio industrial en Brooklyn para renovarlo como su vivienda, dejando a la vista tuberías y vigas.'],
            ],
        ],

        'scandinavian' => [
            'name' => 'Escandinavo',
            'description' => 'El estilo escandinavo es sinónimo de simplicidad funcional: madera clara, paredes blancas, mucha luz natural y una decoración sobria pero acogedora — el famoso concepto nórdico de "hygge". Es un estilo práctico, pensado para el día a día, sin renunciar al confort visual.',
            'home_fit' => 'En casa, lo escandinavo aparece en muebles de líneas simples, mantas de lana, velas, plantas y una paleta clara que amplía visualmente los espacios. Es el estilo ideal para quien quiere un hogar funcional, ordenado y acogedor a la vez.',
            'work_fit' => 'En el trabajo, lo escandinavo se traduce en oficinas luminosas, con mucha luz natural, mobiliario ergonómico y una estética neutra que ayuda a mantener el enfoque sin sentirse fría ni impersonal — muy común en empresas de diseño y tecnología.',
            'taste_fit' => 'En general, combina con quien valora la calidad de vida, el equilibrio entre trabajo y descanso, el diseño funcional nórdico y un estilo de vida más pausado y consciente.',
            'famous_people' => [
                ['name' => 'Alvar Aalto', 'note' => 'Arquitecto y diseñador finlandés, uno de los creadores de la estética escandinava: funcional, luminosa y en madera natural.'],
                ['name' => 'Ingvar Kamprad', 'note' => 'Fundador de IKEA, llevó el diseño funcional y accesible escandinavo a todo el mundo.'],
                ['name' => 'Ilse Crawford', 'note' => 'Diseñadora de interiores británica reconocida por unir el confort nórdico ("hygge") con una estética contemporánea.'],
            ],
        ],

        'bohemian' => [
            'name' => 'Bohemio',
            'description' => 'Lo bohemio es el estilo más libre y expresivo de todos: una mezcla de estampados, texturas, colores vibrantes, piezas de segunda mano, artesanías y objetos de distintas culturas y viajes. No hay una regla fija — lo que importa es que cada pieza cuente una historia y refleje la personalidad de quien vive allí.',
            'home_fit' => 'En casa, lo bohemio aparece en alfombras superpuestas, cojines estampados, plantas en abundancia, macramé y muebles encontrados en mercadillos y tiendas de segunda mano. Es el estilo de quien ama un hogar vivo, lleno de capas y recuerdos afectivos.',
            'work_fit' => 'En el trabajo, lo bohemio suele aparecer en talleres, estudios creativos y espacios de artistas — lugares donde la creatividad y la expresión personal se valoran más que la formalidad.',
            'taste_fit' => 'En general, este estilo combina con el gusto por la moda con estampados y texturas variadas, la música indie/world, los viajes a lugares exóticos y un estilo de vida más espontáneo y creativo.',
            'famous_people' => [
                ['name' => 'Frida Kahlo', 'note' => 'Su "Casa Azul" en Ciudad de México sigue siendo una de las mayores referencias del estilo bohemio-artístico.'],
                ['name' => 'Florence Welch', 'note' => 'Vocalista de Florence + The Machine, conocida por un universo estético lleno de referencias vintage, naturales y bohemias.'],
                ['name' => 'Sienna Miller', 'note' => 'Icono de la moda de los años 2000 que ayudó a popularizar el look boho-chic tanto en la moda como en el hogar.'],
            ],
        ],

        'contemporary' => [
            'name' => 'Contemporáneo',
            'description' => 'Lo contemporáneo es el estilo del "aquí y ahora": líneas limpias, tecnología integrada, materiales como el vidrio, el acero y el concreto, y una estética siempre en diálogo con las últimas tendencias de arquitectura y diseño. A diferencia de lo moderno (ligado a un período histórico específico), lo contemporáneo se reinventa constantemente.',
            'home_fit' => 'En casa, lo contemporáneo aparece en jardines integrados, iluminación LED empotrada, domótica y un diseño que combina confort con tecnología de punta. Combina con quien le gusta estar siempre actualizado y valora la innovación en el día a día.',
            'work_fit' => 'En el trabajo, es el estilo predominante en oficinas corporativas modernas, torres comerciales y espacios que buscan transmitir innovación, eficiencia y una imagen vanguardista ante el mercado.',
            'taste_fit' => 'En general, combina con quien sigue las tendencias de diseño y tecnología, disfruta de la arquitectura audaz, viaja a metrópolis como Nueva York, Tokio o Dubái, y lleva una vida conectada y dinámica.',
            'famous_people' => [
                ['name' => 'Zaha Hadid', 'note' => 'Arquitecta que se convirtió en símbolo del diseño contemporáneo, con formas fluidas y proyectos que rompieron con la arquitectura tradicional.'],
                ['name' => 'Norman Foster', 'note' => 'Arquitecto británico y referente del diseño contemporáneo, que combina tecnología, vidrio y formas extremadamente limpias.'],
                ['name' => 'Beyoncé y Jay-Z', 'note' => 'Coleccionan mansiones ultracontemporáneas en todo el mundo, siempre con arquitectura audaz y tecnología de punta.'],
            ],
        ],

    ],

];

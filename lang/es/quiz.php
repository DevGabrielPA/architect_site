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
        'dimensions_intro' => 'Estas cinco dimensiones se calculan a partir de todas tus respuestas, y no solo del estilo que quedó en primer lugar. Muestran hacia qué lado se inclina tu gusto en cada aspecto, y con qué intensidad. Pasa el ratón o toca cada una para ver lo que dice sobre ti.',
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
        'tempo' => [
            'group' => 'Época',
            'left' => 'Tradicional',
            'right' => 'Moderno',
            'left_text' => 'Lo tradicional es un rasgo marcado en ti. Te gustan las formas y referencias que ya pasaron la prueba del tiempo, y ves belleza en lo que tiene historia.',
            'right_text' => 'Tu rasgo más marcado aquí es lo moderno. Te gustan las soluciones actuales, el diseño reciente y los ambientes que parecen hechos para la forma de vivir de hoy.',
        ],
        'elementos' => [
            'group' => 'Composición',
            'left' => 'Limpio',
            'right' => 'Detallado',
            'left_text' => 'Te gustan los ambientes limpios, con pocos elementos a la vista. El espacio libre y las superficies despejadas aportan la calma visual que buscas.',
            'right_text' => 'Te gustan los ambientes ricos en detalles. Texturas, objetos, cuadros y capas de tejido dan al espacio la vida y la personalidad que buscas.',
        ],
        'cor' => [
            'group' => 'Paleta',
            'left' => 'Neutro',
            'right' => 'Colorido',
            'left_text' => 'Prefieres una paleta neutra. Pocos colores, bien combinados, dejan el ambiente en calma y destacan las formas y los materiales.',
            'right_text' => 'El color es una parte importante de tu gusto. Te sientes bien en ambientes vibrantes, con estampados y combinaciones que expresan personalidad.',
        ],
        'linhas' => [
            'group' => 'Características',
            'left' => 'Líneas rectas',
            'right' => 'Líneas curvas',
            'left_text' => 'Las líneas rectas son un rasgo marcado en ti. Te gustan las formas simples y geométricas, que dejan el ambiente ordenado y con un aspecto limpio.',
            'right_text' => 'Te identificas con las líneas curvas. Las formas redondeadas, los arcos y los detalles ornamentados aportan movimiento y suavidad al ambiente.',
        ],
        'materiais' => [
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
                'characteristics' => [
                    'text' => 'El clásico parte de la simetría y la proporción. Los ambientes se organizan en torno a un punto central, como una chimenea o un aparador, y los detalles trabajados dan el acabado.',
                    'items' => [
                        'Simetría y proporción',
                        'Molduras, boiseries y zócalos altos',
                        'Muebles imponentes, de diseño tradicional',
                        'Lámparas de araña de cristal y alfombras ornamentadas',
                        'Espejos, esculturas y obras de arte destacadas',
                    ],
                ],
                'materials' => [
                    'text' => 'Los materiales son nobles y elegidos para durar. Es un estilo en el que la calidad se percibe al tacto.',
                    'items' => [
                        'Madera noble y maciza',
                        'Mármol',
                        'Terciopelo, seda y lino',
                        'Latón y detalles dorados',
                        'Cristal',
                    ],
                ],
                'palette' => [
                    'text' => 'La base es clara y cálida, con dorado en los detalles. Los tonos profundos, como el azul marino, entran en puntos elegidos.',
                    'colors' => [
                        ['name' => 'Blanco roto', 'hex' => '#F4EFE6'],
                        ['name' => 'Beige', 'hex' => '#D9C7A8'],
                        ['name' => 'Dorado envejecido', 'hex' => '#B8975A'],
                        ['name' => 'Marrón', 'hex' => '#5C4033'],
                        ['name' => 'Azul marino', 'hex' => '#1F2A44'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'La simetría como punto de partida', 'text' => 'Organiza el ambiente a partir de un eje. Un sofá centrado, sillones en pareja y lámparas iguales a ambos lados resuelven buena parte de la composición.'],
                ['title' => 'Pocos materiales, todos buenos', 'text' => 'La madera, la piedra y el metal auténticos envejecen bien. Dos o tres buenas elecciones valen más que muchas medianas.'],
                ['title' => 'Molduras y boiseries', 'text' => 'Dan diseño a una pared lisa y funcionan incluso en apartamentos nuevos, sin ningún detalle original.'],
                ['title' => 'Luz en capas', 'text' => 'Lámpara de araña, apliques y lámparas de mesa en circuitos separados permiten cambiar el clima del ambiente a lo largo del día.'],
            ],
            'watch_outs' => [
                ['title' => 'Exceso de ornamento', 'text' => 'Cuando todo tiene detalle, nada destaca. Elige uno o dos protagonistas por ambiente y deja el resto más tranquilo.'],
                ['title' => 'Proporción en espacios compactos', 'text' => 'Los muebles clásicos suelen ser voluminosos. En ambientes pequeños o de techo bajo, las lámparas grandes y las molduras pesadas achatan el espacio.'],
                ['title' => 'Imitaciones', 'text' => 'El laminado que imita mármol y el dorado demasiado brillante debilitan el conjunto. En el clásico, es mejor tener menos y tener lo auténtico.'],
            ],
        ],

        'minimalist' => [
            'name' => 'Minimalista',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'El minimalismo reduce el ambiente a lo necesario. Cada pieza tiene una función y un lugar definidos, y el espacio vacío forma parte del proyecto.',
                    'items' => [
                        'Líneas rectas y formas simples',
                        'Superficies despejadas',
                        'Pocos muebles, de alta calidad',
                        'Mobiliario multifuncional',
                        'Almacenaje empotrado y discreto',
                    ],
                ],
                'materials' => [
                    'text' => 'Pocos materiales, repetidos en todo el ambiente, crean unidad. Los acabados son lisos y sin adornos.',
                    'items' => [
                        'Vidrio',
                        'Metal, como acero cepillado y aluminio',
                        'Madera clara',
                        'Porcelanato o piedra de diseño liso',
                        'Telas lisas, sin estampado',
                    ],
                ],
                'palette' => [
                    'text' => 'La paleta es corta y neutra. El contraste entre blanco y negro marca las formas, y la madera clara evita que el ambiente se vuelva frío.',
                    'colors' => [
                        ['name' => 'Blanco', 'hex' => '#FFFFFF'],
                        ['name' => 'Gris claro', 'hex' => '#D9D9D9'],
                        ['name' => 'Gris medio', 'hex' => '#8C8C8C'],
                        ['name' => 'Negro', 'hex' => '#1A1A1A'],
                        ['name' => 'Madera clara', 'hex' => '#D8C3A5'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Carpintería cerrada', 'text' => 'Puertas lisas, sin tirador a la vista, guardan lo cotidiano y mantienen las superficies despejadas.'],
                ['title' => 'Pocas piezas, bien elegidas', 'text' => 'Con menos objetos, cada uno destaca más. Vale la pena invertir en el sofá, la mesa y la lámpara principal.'],
                ['title' => 'Repetición de materiales', 'text' => 'El mismo suelo y la misma madera en varios ambientes dan continuidad y amplían el espacio.'],
                ['title' => 'La luz como parte del proyecto', 'text' => 'La luz natural sin barreras y la iluminación empotrada ocupan el lugar de los objetos decorativos.'],
            ],
            'watch_outs' => [
                ['title' => 'Ambiente frío', 'text' => 'Sin textura, el minimalismo se vuelve impersonal. La madera, la lana y el lino aportan calidez sin añadir objetos.'],
                ['title' => 'Falta de almacenaje', 'text' => 'El aspecto limpio depende de tener dónde guardar. Sin suficiente carpintería, las cosas vuelven a las encimeras.'],
                ['title' => 'Acabados a la vista', 'text' => 'Con pocos elementos, cualquier defecto se nota: un zócalo torcido, una junta mal hecha, una pared irregular.'],
            ],
        ],

        'rustic' => [
            'name' => 'Rústico',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'El rústico lleva la naturaleza al interior de la casa. Los materiales aparecen tal como son, con vetas, nudos y marcas, y el ambiente invita a quedarse.',
                    'items' => [
                        'Vigas y estructuras de madera a la vista',
                        'Texturas naturales expuestas',
                        'Muebles robustos',
                        'Piezas artesanales y de reaprovechamiento',
                        'Chimenea o cocina de leña como punto de encuentro',
                    ],
                ],
                'materials' => [
                    'text' => 'Todo es natural y poco procesado. La imperfección forma parte del aspecto.',
                    'items' => [
                        'Madera en bruto o de demolición',
                        'Piedra natural',
                        'Hierro',
                        'Lino y algodón',
                        'Paja, mimbre y cerámica',
                    ],
                ],
                'palette' => [
                    'text' => 'Tonos tierra, tomados de los propios materiales. El verde entra a través de las plantas y de detalles en tono musgo.',
                    'colors' => [
                        ['name' => 'Crudo', 'hex' => '#EDE6D6'],
                        ['name' => 'Arena', 'hex' => '#D8C4A0'],
                        ['name' => 'Terracota', 'hex' => '#C1693C'],
                        ['name' => 'Marrón madera', 'hex' => '#6B4A2F'],
                        ['name' => 'Verde musgo', 'hex' => '#6B705C'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Madera de demolición', 'text' => 'En una mesa, un panel o las vigas, resuelve por sí sola buena parte del clima del ambiente.'],
                ['title' => 'Mezcla de texturas', 'text' => 'Piedra, madera, lino y paja juntos crean interés sin depender del color.'],
                ['title' => 'Piezas artesanales', 'text' => 'La cerámica, la cestería y los muebles hechos a mano refuerzan el carácter del estilo.'],
                ['title' => 'Luz cálida', 'text' => 'Bombillas de tono amarillento y puntos de luz bajos, como lámparas de mesa y apliques, refuerzan la calidez.'],
            ],
            'watch_outs' => [
                ['title' => 'Ambiente oscuro', 'text' => 'Mucha madera oscura y piedra absorben la luz. Las paredes claras y las buenas aberturas lo compensan.'],
                ['title' => 'Peso visual', 'text' => 'El exceso de muebles robustos hace que el ambiente se vea pesado, sobre todo en espacios pequeños.'],
                ['title' => 'Mantenimiento de los materiales', 'text' => 'La madera y la piedra natural necesitan tratamiento contra la humedad, las manchas y las termitas.'],
            ],
        ],

        'industrial' => [
            'name' => 'Industrial',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'Inspirado en los antiguos galpones y lofts de Nueva York, el industrial muestra lo que otros estilos esconden: la estructura, las tuberías y las instalaciones quedan a la vista.',
                    'items' => [
                        'Tuberías y bandejas portacables a la vista',
                        'Ladrillo visto',
                        'Ambientes integrados y techos altos',
                        'Lámparas y colgantes de metal',
                        'Muebles de hierro y madera',
                    ],
                ],
                'materials' => [
                    'text' => 'Materiales en bruto, de aspecto resistente, con acabado mate.',
                    'items' => [
                        'Hormigón y cemento pulido',
                        'Acero y hierro negro',
                        'Cuero',
                        'Ladrillo visto',
                        'Madera oscura o de demolición',
                    ],
                ],
                'palette' => [
                    'text' => 'Los grises y el negro forman la base. El marrón del cuero y el tono ladrillo dan calidez al conjunto.',
                    'colors' => [
                        ['name' => 'Gris hormigón', 'hex' => '#9A9A96'],
                        ['name' => 'Grafito', 'hex' => '#3A3A3C'],
                        ['name' => 'Negro', 'hex' => '#1C1C1C'],
                        ['name' => 'Marrón cuero', 'hex' => '#7B4B2A'],
                        ['name' => 'Ladrillo', 'hex' => '#9C4A33'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Estructura a la vista', 'text' => 'La losa, las vigas y las tuberías expuestas pasan a formar parte de la decoración y hacen innecesario el falso techo.'],
                ['title' => 'Ambientes integrados', 'text' => 'Sala, cocina y comedor sin paredes valorizan la amplitud que pide el estilo.'],
                ['title' => 'Rieles y colgantes', 'text' => 'La iluminación en riel permite dirigir la luz y combina con el aspecto técnico.'],
                ['title' => 'Cuero y madera para dar calidez', 'text' => 'Un sofá de cuero o una mesa de madera equilibran la frialdad del hormigón y del metal.'],
            ],
            'watch_outs' => [
                ['title' => 'Ambiente frío y oscuro', 'text' => 'El exceso de gris y negro pesa. Una iluminación bien planificada, la madera y los textiles evitan ese efecto.'],
                ['title' => 'Acústica', 'text' => 'Las superficies duras y los ambientes abiertos generan eco. Alfombras, cortinas y tapizados ayudan a absorber el sonido.'],
                ['title' => 'Las instalaciones a la vista exigen esmero', 'text' => 'Las tuberías y el cableado expuestos necesitan un trazado planificado y una ejecución limpia. La improvisación se nota.'],
            ],
        ],

        'scandinavian' => [
            'name' => 'Escandinavo',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'El escandinavo nació en países de inviernos largos y poca luz, y por eso valora la claridad y el confort. Es funcional como el minimalista, pero más acogedor.',
                    'items' => [
                        'Luz natural aprovechada al máximo',
                        'Muebles ligeros, de líneas simples',
                        'Mantas, cojines y alfombras',
                        'Plantas',
                        'Decoración sencilla y funcional',
                    ],
                ],
                'materials' => [
                    'text' => 'La madera clara y los tejidos naturales marcan el tono. Las texturas suaves cumplen el papel que el color cumpliría en otros estilos.',
                    'items' => [
                        'Madera clara, como pino y roble',
                        'Lana y punto',
                        'Lino y algodón',
                        'Cerámica mate',
                        'Fibras naturales',
                    ],
                ],
                'palette' => [
                    'text' => 'El blanco y el gris claro amplían la luz. El azul claro y la madera aportan suavidad, y el grafito entra en pequeños detalles.',
                    'colors' => [
                        ['name' => 'Blanco', 'hex' => '#FAFAF7'],
                        ['name' => 'Gris claro', 'hex' => '#DADDE0'],
                        ['name' => 'Azul claro', 'hex' => '#BFD3DF'],
                        ['name' => 'Madera clara', 'hex' => '#D9C4A1'],
                        ['name' => 'Grafito', 'hex' => '#3F4448'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Ventanas despejadas', 'text' => 'Cortinas ligeras y translúcidas, o ninguna, dejan entrar la luz todo el día.'],
                ['title' => 'Capas de tejido', 'text' => 'Mantas, cojines y alfombras de distintas texturas aportan la calidez que define el estilo.'],
                ['title' => 'Madera clara en el suelo y los muebles', 'text' => 'Da calidez a la base blanca sin oscurecer el ambiente.'],
                ['title' => 'Plantas', 'text' => 'El verde es la principal fuente de color y de vida del ambiente.'],
            ],
            'watch_outs' => [
                ['title' => 'Demasiado blanco', 'text' => 'Sin madera ni textura, el ambiente queda soso y parece inacabado.'],
                ['title' => 'Clima brasileño', 'text' => 'La lana y las alfombras de pelo largo fueron pensadas para el frío. En regiones cálidas, el lino y el algodón cumplen el mismo papel.'],
                ['title' => 'Superficies claras', 'text' => 'Los sofás, alfombras y paredes claros muestran la suciedad con facilidad. Las telas lavables y las fundas removibles ayudan.'],
            ],
        ],

        'bohemian' => [
            'name' => 'Bohemio',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'El bohemio es libre y personal. Mezcla épocas, culturas y estampados, y cada objeto suele tener una historia: un viaje, una feria, una herencia.',
                    'items' => [
                        'Mezcla de estampados y texturas',
                        'Muebles vintage y de segunda mano',
                        'Muchas plantas',
                        'Cojines, alfombras y pufs en capas',
                        'Objetos de viaje y arte a la vista',
                    ],
                ],
                'materials' => [
                    'text' => 'Predominan lo hecho a mano y las fibras naturales. Nada tiene que combinar a la perfección.',
                    'items' => [
                        'Tejidos étnicos y bordados',
                        'Macramé y crochet',
                        'Ratán, mimbre y paja',
                        'Madera',
                        'Cerámica artesanal',
                    ],
                ],
                'palette' => [
                    'text' => 'Colores cálidos e intensos sobre una base clara. Es la base neutra la que permite mezclar tantos colores sin cansar.',
                    'colors' => [
                        ['name' => 'Crudo', 'hex' => '#EFE6D5'],
                        ['name' => 'Terracota', 'hex' => '#C1693C'],
                        ['name' => 'Mostaza', 'hex' => '#D1A23A'],
                        ['name' => 'Verde esmeralda', 'hex' => '#2F6F5E'],
                        ['name' => 'Azul índigo', 'hex' => '#2E4374'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Base neutra', 'text' => 'Las paredes y el sofá en tono crudo dejan que los colores y estampados aparezcan sin competir entre sí.'],
                ['title' => 'Un hilo conductor', 'text' => 'Repetir dos o tres colores en objetos diferentes da unidad a la mezcla.'],
                ['title' => 'Plantas a distintas alturas', 'text' => 'En el suelo, en estantes y colgadas, llenan el ambiente y conectan los elementos.'],
                ['title' => 'Piezas de segunda mano', 'text' => 'Los muebles de anticuario, de ferias y de viajes dan la autenticidad que pide el estilo.'],
            ],
            'watch_outs' => [
                ['title' => 'Mezcla sin criterio', 'text' => 'Sin un hilo conductor de color o de material, el ambiente parece desordenado.'],
                ['title' => 'Limpieza y mantenimiento', 'text' => 'Muchos objetos, telas y plantas acumulan polvo y piden más cuidado en el día a día.'],
                ['title' => 'Espacios pequeños', 'text' => 'En ambientes compactos, muchas capas reducen la sensación de espacio. Conviene concentrar la mezcla en un rincón o en una pared.'],
            ],
        ],

        'contemporary' => [
            'name' => 'Contemporáneo',
            'hero_text' => [],
            'practice' => [
                'characteristics' => [
                    'text' => 'El contemporáneo es el estilo del presente. Acompaña lo más actual en diseño y tecnología y combina referencias modernas y clásicas con equilibrio.',
                    'items' => [
                        'Líneas rectas, con algunas curvas suaves',
                        'Ambientes integrados',
                        'Pocas piezas, con una destacada',
                        'Iluminación empotrada y planificada',
                        'Tecnología y domótica discretas',
                    ],
                ],
                'materials' => [
                    'text' => 'No hay un material obligatorio. Lo que define el estilo es la combinación equilibrada de acabados actuales.',
                    'items' => [
                        'Porcelanato de gran formato',
                        'Carpintería a medida, en laca o chapa de madera',
                        'Vidrio',
                        'Metales en negro o cepillados',
                        'Cuarzo y otras superficies sintéticas',
                    ],
                ],
                'palette' => [
                    'text' => 'Base neutra, del blanco al gris plomo, con un punto de color elegido. Aquí el ejemplo es el azul petróleo, pero puede ser cualquier tono usado con moderación.',
                    'colors' => [
                        ['name' => 'Blanco hielo', 'hex' => '#F2F2F0'],
                        ['name' => 'Greige', 'hex' => '#B8B0A5'],
                        ['name' => 'Gris plomo', 'hex' => '#4A4E54'],
                        ['name' => 'Negro', 'hex' => '#1E1E1E'],
                        ['name' => 'Azul petróleo (punto de color)', 'hex' => '#1F5F6B'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Base neutra con un punto de color', 'text' => 'Un sillón, un cuadro o una pared de color bastan para dar personalidad.'],
                ['title' => 'Una pieza destacada', 'text' => 'Una lámpara de diseño o una obra de arte dan identidad a un ambiente de líneas simples.'],
                ['title' => 'Carpintería a medida', 'text' => 'Paneles y armarios a medida organizan el espacio y esconden equipos y cables.'],
                ['title' => 'Iluminación por escenas', 'text' => 'La luz empotrada, indirecta y con regulador adapta el ambiente a cada momento del día.'],
            ],
            'watch_outs' => [
                ['title' => 'Aspecto de showroom', 'text' => 'Demasiado neutro y sin objetos personales, el ambiente resulta impersonal.'],
                ['title' => 'Tendencias pasajeras', 'text' => 'Al seguir lo actual, el estilo puede pasar de moda rápido. Mantén neutro lo que es caro de cambiar y deja la tendencia para lo que es fácil de sustituir.'],
                ['title' => 'Mezcla sin unidad', 'text' => 'Con tantos materiales disponibles, es fácil exagerar. Dos o tres acabados principales son suficientes.'],
            ],
        ],

    ],

];

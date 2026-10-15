<?php

// Dados exibidos nas páginas do dropdown "Portfolio" (Completed Projects e Design Insights)
// e na prévia da home. Imagens ficam em public/images/{pasta}/;
// enquanto o arquivo não existir, o grid mostra automaticamente um placeholder "Image Coming Soon".
return [

    // 'styles' abaixo é usado pelo Teste de Estilo de Decoração (/style-quiz)
    // para mostrar projetos que combinam com o estilo vencedor de quem fez o
    // teste. Chaves válidas: classic, minimalist, rustic, industrial,
    // scandinavian, bohemian, contemporary (config/quiz.php). Preenchidos
    // como [] por enquanto — TODO: Larissa precisa revisar as fotos de cada
    // projeto e marcar com o(s) estilo(s) que realmente combinam (pode marcar
    // mais de um por projeto).
    'completed_projects' => [
        ['title' => 'Casa Branca', 'slug' => 'casa-branca', 'image' => 'casa-branca.webp', 'ratio' => '3 / 2', 'styles' => []],
        ['title' => 'Cozinha', 'slug' => 'cozinha', 'image' => 'cozinha.webp', 'ratio' => '3 / 2', 'styles' => []],
        ['title' => 'Cozinha Adriana', 'slug' => 'cozinha-adriana', 'image' => 'cozinha-adriana.webp', 'ratio' => '16 / 9', 'styles' => []],
        ['title' => 'Quarto Alice', 'slug' => 'quarto-alice', 'image' => 'quarto-alice.webp', 'ratio' => '1 / 1', 'styles' => []],
        ['title' => 'Quarto Eva', 'slug' => 'quarto-eva', 'image' => 'quarto-eva.webp', 'ratio' => '16 / 9', 'styles' => []],
        ['title' => 'Quarto Pê e Lu', 'slug' => 'quarto-pe-e-lu', 'image' => 'quarto-pe-e-lu.webp', 'ratio' => '16 / 9', 'styles' => []],
        ['title' => 'Quarto Betina', 'slug' => 'quarto-betina', 'image' => 'quarto-betina.webp', 'ratio' => '3 / 2', 'styles' => []],
        ['title' => 'Sala', 'slug' => 'sala', 'image' => 'sala.webp', 'ratio' => '3 / 4', 'styles' => []],
        ['title' => 'Suíte Master', 'slug' => 'suite-master', 'image' => 'suite-master.webp', 'ratio' => '7 / 5', 'styles' => []],
    ],

    // TODO: títulos e imagens abaixo são placeholders — substituir pelas peças reais do portfólio de design.
    'design_insights' => [
        [
            'title' => 'Saturnos Chandelier',
            'slug' => 'lustre-saturnos',
            'image' => 'saturnos.webp',
            'ratio' => '1 / 1',
            'video' => 'yReftZmOR2k',
            'quote' => 'Known as a "gas giant" — it stands out for the beauty of its ring system.',
            'description' => [
                'The Saturnos Chandelier is another original creation by the architect, composed of a sculptural metal plate that lifts three softly frosted glass globes into the air.',
                'A sophisticated fixture designed to fit seamlessly into the modern atmosphere our clients had long envisioned for their home.',
            ],
            'images' => [
                'saturnos/saturnos1.webp',
                'saturnos/saturnos2.webp',
                'saturnos/saturnos3.webp',
                'saturnos/saturnos4.webp',
                'saturnos/saturnos5.webp',
                'saturnos/saturnos6.webp',
                'saturnos/saturnos7.webp',
                'saturnos/saturnos8.webp',
            ],
        ],
        [
            'title' => 'Vínculo Lamp',
            'slug' => 'vinculo-lamp',
            'image' => 'vinculo.webp',
            'ratio' => '4 / 5',
            'video' => 'hJlfz7mNlCc',
            'description' => [
                'The Vínculo lamp collection is the embodiment of this very union, where the light in one\'s eyes illuminates and completes the other\'s.',
                'The stone base is available in Branco Espírito Santo marble or Preto Via Láctea granite, with triangular accents in Louro Freijó or Imbuia MDF. The brushed aluminum stem comes in aluminum, champagne, copper, gold, or onyx finishes.',
            ],
            'images' => [
                'vinculo/vinculo12.webp',
                'vinculo/vinculo11.webp',
                'vinculo/vinculo10.webp',
                'vinculo/vinculo9.webp',
                'vinculo/vinculo8.webp',
                'vinculo/vinculo7.webp',
                'vinculo/vinculo6.webp',
                'vinculo/vinculo5.webp',
                'vinculo/vinculo4.webp',
                'vinculo/vinculo3.webp',
                'vinculo/vinculo2.webp',
                'vinculo/vinculo1.webp',
            ],
        ],
        [
            'title' => 'Brisa Side Table',
            'slug' => 'brisa-side-table',
            'image' => 'brisa.webp',
            'ratio' => '3 / 2',
            'images' => [
                'brisa/brisa1.webp',
                'brisa/brisa2.webp',
                'brisa/brisa3.webp',
                'brisa/brisa4.webp',
                'brisa/brisa5.webp',
                'brisa/brisa6.webp',
            ],
        ],
        ['title' => 'Custom Lounge Chair Concept', 'slug' => 'custom-lounge-chair-concept', 'image' => 'custom-lounge-chair-concept.webp', 'ratio' => '3 / 4'],
        ['title' => 'Sculptural Coffee Table', 'slug' => 'sculptural-coffee-table', 'image' => 'sculptural-coffee-table.webp', 'ratio' => '4 / 3'],
        ['title' => 'Handcrafted Lighting Fixture', 'slug' => 'handcrafted-lighting-fixture', 'image' => 'handcrafted-lighting-fixture.webp', 'ratio' => '3 / 4'],
        ['title' => 'Bespoke Console Cabinet', 'slug' => 'bespoke-console-cabinet', 'image' => 'bespoke-console-cabinet.webp', 'ratio' => '4 / 3'],
    ],

];

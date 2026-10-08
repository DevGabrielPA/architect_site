<?php

return [

    'meta' => [
        'title' => 'Teste de Estilo de Decoração | Larissa Vasconcellos',
        'description' => 'Descubra em poucos minutos qual estilo de decoração combina mais com você: Clássico, Minimalista, Rústico, Industrial, Escandinavo, Boêmio ou Contemporâneo.',
    ],

    'intro' => [
        'heading' => 'Qual é o seu estilo de decoração?',
        'subheading' => 'Responda 20 perguntas rápidas com imagens e descubra qual dos 7 estilos combina mais com você — e como o seu gosto se divide entre paleta, formas e materiais.',
        'start_button' => 'Começar o Teste',
    ],

    'ui' => [
        'question_progress' => 'Pergunta :current de :total',
        'next' => 'Próxima',
        'back' => 'Voltar',
        'submit' => 'Enviar',
        'validation_required' => 'Escolha uma opção para continuar.',
        'incomplete_message' => 'Marque todas as perguntas antes de enviar.',
    ],

    'questions' => [
        1 => 'Qual sala de estar te agrada mais?',
        2 => 'Em qual quarto de hotel você gostaria de acordar?',
        3 => 'Qual cozinha combina com você?',
        4 => 'Qual bar/restaurante você escolheria pra uma noite especial?',
        5 => 'Qual cama você escolheria pro seu quarto?',
        6 => 'Qual piso você prefere?',
        7 => 'Qual revestimento de parede te atrai?',
        8 => 'Qual iluminação/luminária você escolheria?',
        9 => 'Qual mesa de jantar combina com você?',
        10 => 'Qual paleta de cores mais te agrada?',
        11 => 'Qual cortina você escolheria?',
        12 => 'Qual tapete combina com você?',
        13 => 'Qual objeto decorativo você penduraria na parede?',
        14 => 'Para qual desses lugares você mais gostaria de viajar de férias?',
        15 => 'Qual varanda/área externa você gostaria de ter?',
        16 => 'Qual poltrona te chama atenção?',
        17 => 'Qual banheiro você escolheria?',
        18 => 'Qual estante/prateleira combina com você?',
        19 => 'Qual porta você escolheria para sua casa?',
        20 => 'Qual fachada de casa mais te agrada?',
    ],

    'result' => [
        'ready_heading' => 'Seu Resultado Está Pronto!',
        'ready_body' => 'Você respondeu todas as 20 perguntas. Desbloqueie agora o seu Relatório Completo de Estilo por um valor único de US$ 3.',
        'unlock_heading' => 'Relatório Completo de Estilo',
        'unlock_body' => 'Por apenas US$ 3, você desbloqueia o resultado detalhado do seu teste: qual dos 7 estilos combina mais com você, as cinco dimensões do seu gosto (paleta, formas e materiais) calculadas a partir de todas as suas respostas, como o seu estilo aparece na prática — características, materiais e paleta de cores — e o que funciona para você, junto com os pontos de atenção.',
        'unlock_cta' => 'Ver Meu Resultado',
        'checkout_cancelled' => 'O pagamento foi cancelado. Desbloqueie novamente quando quiser ver o seu resultado.',
        'checkout_error' => 'Não foi possível iniciar o pagamento agora. Tente novamente em instantes.',
        'invalid_token' => 'Este link de resultado é inválido ou expirou. Refaça o teste para gerar um novo resultado.',
        'hero_label' => 'Seu estilo arquitetônico é',
        'dimensions_heading' => 'Dimensões do seu estilo',
        'dimensions_intro' => 'Estas cinco dimensões são calculadas a partir de todas as suas respostas, e não só do estilo que ficou em primeiro lugar. Elas mostram para que lado o seu gosto pende em cada aspecto, e com que intensidade. Passe o mouse ou toque em cada uma para ver o que ela diz sobre você.',
        'practice_heading' => 'Seu estilo na prática',
        'practice_characteristics' => 'Características',
        'practice_materials' => 'Materiais principais',
        'practice_palette' => 'Paleta de cores',
        'fit_heading' => 'O que funciona e pontos de atenção',
        'works_heading' => 'O que funciona para você',
        'watch_outs_heading' => 'Pontos de atenção',
        'projects_heading' => 'Projetos nesse estilo',
        'sidebar_label' => 'Seu estilo é:',
        'sections_nav_label' => 'Seções da página',
        'on_this_page' => 'Nesta página',
        'share' => 'Compartilhar',
        'share_copied' => 'Link copiado!',
        'share_text' => 'Meu estilo de decoração é :style. Faça o teste e descubra o seu:',
    ],

    // Seção "Dimensões do seu estilo": nomes dos polos (esquerdo = 0,
    // direito = 100) e o texto do card de cada polo. Pesos e cálculo em
    // config/quiz.php ('dimensions') e quiz_dimensions() em app/helpers.php.
    'dimensions' => [
        'tempo' => [
            'group' => 'Época',
            'left' => 'Tradicional',
            'right' => 'Moderno',
            'left_text' => 'Você tem o tradicional como traço marcante. Gosta de formas e referências que já passaram pelo teste do tempo, e vê beleza no que tem história.',
            'right_text' => 'Seu traço mais marcante aqui é o moderno. Você gosta de soluções atuais, design recente e ambientes que parecem feitos para o jeito de viver de hoje.',
        ],
        'elementos' => [
            'group' => 'Composição',
            'left' => 'Clean',
            'right' => 'Detalhado',
            'left_text' => 'Você gosta de ambientes limpos, com poucos elementos à vista. Espaço livre e superfícies desocupadas trazem a calma visual que você procura.',
            'right_text' => 'Você gosta de ambientes ricos em detalhes. Texturas, objetos, quadros e camadas de tecido dão ao espaço a vida e a personalidade que você procura.',
        ],
        'cor' => [
            'group' => 'Paleta',
            'left' => 'Neutro',
            'right' => 'Colorido',
            'left_text' => 'Você prefere uma paleta neutra. Poucas cores, bem combinadas, deixam o ambiente calmo e dão destaque às formas e aos materiais.',
            'right_text' => 'A cor é parte importante do seu gosto. Você se sente bem em ambientes vibrantes, com estampas e combinações que expressam personalidade.',
        ],
        'linhas' => [
            'group' => 'Características',
            'left' => 'Linhas retas',
            'right' => 'Linhas curvas',
            'left_text' => 'Você tem as linhas retas como traço marcante. Gosta de formas simples e geométricas, que deixam o ambiente organizado e com visual limpo.',
            'right_text' => 'Você se identifica com linhas curvas. Formas arredondadas, arcos e detalhes ornamentados trazem movimento e suavidade ao ambiente.',
        ],
        'materiais' => [
            'group' => 'Materiais',
            'left' => 'Materiais naturais',
            'right' => 'Materiais industriais',
            'left_text' => 'Você prefere materiais naturais. Madeira, pedra, fibras e tecidos como linho e algodão trazem a textura e o calor que você procura.',
            'right_text' => 'Você se identifica com materiais industriais. Concreto, aço e vidro dão ao ambiente o visual urbano e atual que combina com você.',
        ],
    ],

    'checkout' => [
        'product_name' => 'Resultado Completo — Teste de Estilo de Decoração',
    ],

    'mail' => [
        'unlocked_subject' => 'Seu Resultado Completo do Teste de Estilo Já Está Pronto',
        'unlocked_heading' => 'Seu resultado completo está liberado!',
        'unlocked_body' => 'O pagamento foi confirmado e o resultado completo do seu Teste de Estilo de Decoração já está disponível. Seu estilo predominante é <strong>:style</strong> — clique no botão abaixo para ver as dimensões do seu gosto, como o seu estilo aparece na prática e muito mais.',
        'unlocked_cta' => 'Ver Meu Resultado Completo',
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
            'name' => 'Clássico',
            'hero_text' => [
                'Sendo do estilo Clássico, você tem um gosto refinado e valoriza a sofisticação em cada ambiente. Os espaços que mais combinam com você impressionam logo à primeira vista, pela nobreza dos materiais e pela presença imponente da arquitetura. Para você, um ambiente bonito é aquele em que nada parece improvisado: as proporções fazem sentido, as peças conversam entre si e cada detalhe foi escolhido com cuidado.',
                'Você gosta de ambientes que surpreendem o olhar e revelam algo novo a cada visita. Repara no desenho de uma moldura, no brilho de um lustre de cristal, no toque de um veludo ou no dourado discreto de um puxador. Valoriza o que é bem feito e feito para durar, e prefere investir em poucas peças de qualidade a acompanhar a tendência da vez. Sua casa tende a contar uma história, com móveis de família, obras de arte e objetos que ganham valor com o tempo.',
                'Paris talvez seja a cidade que melhor traduz o seu gosto. Os apartamentos parisienses do século XIX reúnem quase tudo o que você admira: pé-direito alto, paredes com boiseries, piso de madeira em espinha de peixe, lareiras de mármore e janelas altas que se abrem para sacadas de ferro trabalhado. São a prova de que a tradição, quando bem cuidada, não sai de moda. E esse mesmo espírito cabe em um apartamento atual, com as escolhas certas de materiais, proporções e detalhes.',
            ],
            'practice' => [
                'characteristics' => [
                    'text' => 'O clássico parte da simetria e da proporção. Os ambientes se organizam em torno de um ponto central, como uma lareira ou um aparador, e os detalhes trabalhados dão o acabamento.',
                    'items' => [
                        'Simetria e proporção',
                        'Molduras, boiseries e rodapés altos',
                        'Móveis imponentes, de desenho tradicional',
                        'Lustres de cristal e tapetes ornamentados',
                        'Espelhos, esculturas e obras de arte em destaque',
                    ],
                ],
                'materials' => [
                    'text' => 'Os materiais são nobres e escolhidos para durar. É um estilo em que a qualidade se percebe ao toque.',
                    'items' => [
                        'Madeira nobre e maciça',
                        'Mármore',
                        'Veludo, seda e linho',
                        'Latão e detalhes dourados',
                        'Cristal',
                    ],
                ],
                'palette' => [
                    'text' => 'A base é clara e quente, com dourado nos detalhes. Tons profundos, como o azul-marinho, entram em pontos escolhidos.',
                    'colors' => [
                        ['name' => 'Off-white', 'hex' => '#F4EFE6'],
                        ['name' => 'Bege', 'hex' => '#D9C7A8'],
                        ['name' => 'Dourado envelhecido', 'hex' => '#B8975A'],
                        ['name' => 'Marrom', 'hex' => '#5C4033'],
                        ['name' => 'Azul-marinho', 'hex' => '#1F2A44'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Simetria como ponto de partida', 'text' => 'Organize o ambiente a partir de um eixo. Sofá centralizado, poltronas em par e abajures iguais dos dois lados resolvem boa parte da composição.'],
                ['title' => 'Poucos materiais, todos bons', 'text' => 'Madeira, pedra e metal de verdade envelhecem bem. Duas ou três boas escolhas valem mais do que muitas medianas.'],
                ['title' => 'Molduras e boiseries', 'text' => 'Dão desenho a uma parede lisa e funcionam até em apartamentos novos, sem nenhum detalhe original.'],
                ['title' => 'Luz em camadas', 'text' => 'Lustre, arandelas e abajures em circuitos separados permitem mudar o clima do ambiente ao longo do dia.'],
            ],
            'watch_outs' => [
                ['title' => 'Excesso de ornamento', 'text' => 'Quando tudo tem detalhe, nada se destaca. Escolha um ou dois protagonistas por ambiente e deixe o resto mais calmo.'],
                ['title' => 'Proporção em espaços compactos', 'text' => 'Móveis clássicos costumam ser volumosos. Em ambientes pequenos ou de pé-direito baixo, lustres grandes e molduras pesadas achatam o espaço.'],
                ['title' => 'Imitações', 'text' => 'Laminado que imita mármore e dourado muito brilhante enfraquecem o conjunto. No clássico, é melhor ter menos e ter o verdadeiro.'],
            ],
        ],

        'minimalist' => [
            'name' => 'Minimalista',
            'hero_text' => [
                'Sendo do estilo Minimalista, você tem um gosto claro e decidido e valoriza a simplicidade em cada ambiente. Os espaços que mais combinam com você impressionam pela calma: poucas peças, linhas limpas e espaço livre para circular. Para você, um ambiente bonito é aquele em que tudo tem função e lugar, e nada está ali só para preencher espaço.',
                'Você gosta de ambientes que descansam o olhar. Repara na precisão do encontro entre a parede e o piso, na luz que entra sem obstáculos, na textura de uma madeira clara ou na leveza de um tampo de vidro. Valoriza a qualidade mais do que a quantidade, e prefere ter menos coisas, desde que escolhidas com critério. Sua casa tende a ser organizada e silenciosa, um lugar onde a cabeça desacelera depois do dia.',
                'O Japão talvez seja o lugar que melhor traduz o seu gosto. Lá, o espaço vazio é tratado como parte da arquitetura. As casas tradicionais de Quioto, com painéis de correr em papel, piso de tatame e quase nenhum móvel, e as obras do arquiteto Tadao Ando, feitas de concreto liso e luz natural, mostram como poucos elementos bem escolhidos podem marcar tanto quanto um ambiente cheio de detalhes. E esse mesmo espírito cabe em um apartamento atual, com marcenaria bem planejada, materiais bem resolvidos e espaço para respirar.',
            ],
            'practice' => [
                'characteristics' => [
                    'text' => 'O minimalismo reduz o ambiente ao que é necessário. Cada peça tem função e lugar definidos, e o espaço vazio faz parte do projeto.',
                    'items' => [
                        'Linhas retas e formas simples',
                        'Superfícies livres',
                        'Poucos móveis, de alta qualidade',
                        'Mobiliário multifuncional',
                        'Armazenamento embutido e discreto',
                    ],
                ],
                'materials' => [
                    'text' => 'Poucos materiais, repetidos em todo o ambiente, criam unidade. Os acabamentos são lisos e sem enfeite.',
                    'items' => [
                        'Vidro',
                        'Metal, como aço escovado e alumínio',
                        'Madeira clara',
                        'Porcelanato ou pedra de padrão liso',
                        'Tecidos lisos, sem estampa',
                    ],
                ],
                'palette' => [
                    'text' => 'A paleta é curta e neutra. O contraste entre branco e preto marca as formas, e a madeira clara evita que o ambiente fique frio.',
                    'colors' => [
                        ['name' => 'Branco', 'hex' => '#FFFFFF'],
                        ['name' => 'Cinza-claro', 'hex' => '#D9D9D9'],
                        ['name' => 'Cinza médio', 'hex' => '#8C8C8C'],
                        ['name' => 'Preto', 'hex' => '#1A1A1A'],
                        ['name' => 'Madeira clara', 'hex' => '#D8C3A5'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Marcenaria fechada', 'text' => 'Portas lisas, sem puxador aparente, guardam o dia a dia e mantêm as superfícies livres.'],
                ['title' => 'Poucas peças, bem escolhidas', 'text' => 'Com menos objetos, cada um aparece mais. Vale investir no sofá, na mesa e na luminária principal.'],
                ['title' => 'Repetição de materiais', 'text' => 'O mesmo piso e a mesma madeira em vários ambientes dão continuidade e ampliam o espaço.'],
                ['title' => 'Luz como parte do projeto', 'text' => 'Luz natural sem barreiras e iluminação embutida ocupam o lugar dos objetos decorativos.'],
            ],
            'watch_outs' => [
                ['title' => 'Ambiente frio', 'text' => 'Sem textura, o minimalismo fica impessoal. Madeira, lã e linho trazem calor sem acrescentar objetos.'],
                ['title' => 'Falta de armazenamento', 'text' => 'O visual limpo depende de ter onde guardar. Sem marcenaria suficiente, as coisas voltam para as bancadas.'],
                ['title' => 'Acabamento à mostra', 'text' => 'Com poucos elementos, qualquer defeito aparece: um rodapé torto, uma junta mal feita, uma parede irregular.'],
            ],
        ],

        'rustic' => [
            'name' => 'Rústico',
            'hero_text' => [
                'Sendo do estilo Rústico, você tem um gosto acolhedor e valoriza o natural em cada ambiente. Os espaços que mais combinam com você impressionam pelo aconchego: madeira, pedra e tecidos que convidam a ficar. Para você, um ambiente bonito é aquele que parece vivido, em que os materiais aparecem como são, com suas marcas, e a casa não parece montada para uma foto.',
                'Você gosta de ambientes que despertam os sentidos. Repara nos veios de uma mesa de madeira maciça, na textura irregular de uma parede de pedra, no cheiro de um fogão a lenha ou no toque de uma manta de algodão cru. Valoriza o feito à mão e o que envelhece bem, e acha mais bonita uma peça com marcas de uso do que uma recém-saída da loja. Sua casa tende a ser um ponto de encontro, com mesa grande, cozinha movimentada e lugar para receber quem chega.',
                'As antigas fazendas de Minas Gerais talvez sejam o lugar que melhor traduz o seu gosto. Paredes grossas, vigas de madeira aparentes, piso de tábuas largas, fogão a lenha no centro da cozinha e uma varanda aberta para o campo reúnem quase tudo o que você admira. Mostram como materiais simples, usados como são, criam um aconchego que nenhum acabamento sofisticado substitui. E esse mesmo espírito cabe em um apartamento atual, com madeira de verdade, texturas naturais e luz quente.',
            ],
            'practice' => [
                'characteristics' => [
                    'text' => 'O rústico traz a natureza para dentro de casa. Os materiais aparecem como são, com veios, nós e marcas, e o ambiente convida a ficar.',
                    'items' => [
                        'Vigas e estruturas de madeira aparentes',
                        'Texturas naturais à mostra',
                        'Móveis robustos',
                        'Peças artesanais e de reaproveitamento',
                        'Lareira ou fogão a lenha como ponto de encontro',
                    ],
                ],
                'materials' => [
                    'text' => 'Tudo é natural e pouco processado. A imperfeição faz parte do visual.',
                    'items' => [
                        'Madeira bruta ou de demolição',
                        'Pedra natural',
                        'Ferro',
                        'Linho e algodão',
                        'Palha, vime e cerâmica',
                    ],
                ],
                'palette' => [
                    'text' => 'Tons terrosos, tirados dos próprios materiais. O verde entra pelas plantas e por detalhes em tom de musgo.',
                    'colors' => [
                        ['name' => 'Cru', 'hex' => '#EDE6D6'],
                        ['name' => 'Areia', 'hex' => '#D8C4A0'],
                        ['name' => 'Terracota', 'hex' => '#C1693C'],
                        ['name' => 'Marrom-madeira', 'hex' => '#6B4A2F'],
                        ['name' => 'Verde-musgo', 'hex' => '#6B705C'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Madeira de demolição', 'text' => 'Em uma mesa, um painel ou nas vigas, ela resolve boa parte do clima do ambiente sozinha.'],
                ['title' => 'Mistura de texturas', 'text' => 'Pedra, madeira, linho e palha juntos criam interesse sem depender de cor.'],
                ['title' => 'Peças artesanais', 'text' => 'Cerâmica, cestaria e móveis feitos à mão reforçam o caráter do estilo.'],
                ['title' => 'Luz quente', 'text' => 'Lâmpadas de tom amarelado e pontos de luz baixos, como abajures e arandelas, reforçam o aconchego.'],
            ],
            'watch_outs' => [
                ['title' => 'Ambiente escuro', 'text' => 'Muita madeira escura e pedra absorvem a luz. Paredes claras e boas aberturas compensam.'],
                ['title' => 'Peso visual', 'text' => 'Móveis robustos em excesso deixam o ambiente pesado, principalmente em espaços pequenos.'],
                ['title' => 'Manutenção dos materiais', 'text' => 'Madeira e pedra natural pedem tratamento contra umidade, manchas e cupim.'],
            ],
        ],

        'industrial' => [
            'name' => 'Industrial',
            'hero_text' => [
                'Sendo do estilo Industrial, você tem um gosto urbano e autêntico e valoriza a verdade dos materiais em cada ambiente. Os espaços que mais combinam com você impressionam pela atmosfera: concreto, metal e tijolo à mostra, tons escuros e uma luz que parece desenhar o ambiente. Para você, um ambiente bonito é aquele que não esconde como foi construído e transforma a própria estrutura em parte da decoração.',
                'Você gosta de ambientes com cara de cidade grande, e eles ficam ainda melhores à noite. Repara na luz indireta que recorta uma parede de concreto, no traçado de uma tubulação aparente, no brilho do metal sob uma luminária ou no couro gasto de uma poltrona. Valoriza o que é resistente e funcional, mesmo com marcas de uso, e gosta quando a tecnologia faz parte do espaço: som, telas e iluminação integrados ao projeto, e não escondidos dele. Sua casa tende a ser aberta e integrada, com sala, cozinha e espaço de trabalho dividindo o mesmo ambiente.',
                'Os lofts do SoHo, em Nova York, talvez sejam o lugar que melhor traduz o seu gosto. Nos anos 1960 e 1970, artistas passaram a morar em antigas fábricas e galpões do bairro e mantiveram o que encontraram: tijolo aparente, colunas de ferro, janelões de caixilho metálico e pé-direito alto. Ali nasceu a ideia de que um espaço feito para o trabalho pode virar uma casa cheia de caráter. E esse mesmo espírito cabe em um apartamento atual, com laje aparente, iluminação em trilho, pontos de luz colorida e janelas que deixam a cidade entrar.',
            ],
            'practice' => [
                'characteristics' => [
                    'text' => 'Inspirado nos antigos galpões e lofts de Nova York, o industrial mostra o que outros estilos escondem: estrutura, tubulação e instalações ficam aparentes.',
                    'items' => [
                        'Tubulações e eletrocalhas aparentes',
                        'Tijolo à vista',
                        'Ambientes integrados e pé-direito alto',
                        'Luminárias e pendentes de metal',
                        'Móveis de ferro e madeira',
                    ],
                ],
                'materials' => [
                    'text' => 'Materiais crus, de aparência resistente, com acabamento fosco.',
                    'items' => [
                        'Concreto e cimento queimado',
                        'Aço e ferro preto',
                        'Couro',
                        'Tijolo aparente',
                        'Madeira escura ou de demolição',
                    ],
                ],
                'palette' => [
                    'text' => 'Cinzas e preto formam a base. O marrom do couro e o tom de tijolo aquecem o conjunto.',
                    'colors' => [
                        ['name' => 'Cinza-concreto', 'hex' => '#9A9A96'],
                        ['name' => 'Grafite', 'hex' => '#3A3A3C'],
                        ['name' => 'Preto', 'hex' => '#1C1C1C'],
                        ['name' => 'Marrom-couro', 'hex' => '#7B4B2A'],
                        ['name' => 'Tijolo', 'hex' => '#9C4A33'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Estrutura à mostra', 'text' => 'Laje, vigas e tubulações aparentes passam a fazer parte da decoração e dispensam o forro.'],
                ['title' => 'Ambientes integrados', 'text' => 'Sala, cozinha e jantar sem paredes valorizam a amplitude que o estilo pede.'],
                ['title' => 'Trilhos e pendentes', 'text' => 'A iluminação em trilho permite direcionar a luz e combina com o visual técnico.'],
                ['title' => 'Couro e madeira para aquecer', 'text' => 'Um sofá de couro ou uma mesa de madeira equilibram o frio do concreto e do metal.'],
            ],
            'watch_outs' => [
                ['title' => 'Ambiente frio e escuro', 'text' => 'Cinza e preto em excesso pesam. Luz bem planejada, madeira e tecidos evitam esse efeito.'],
                ['title' => 'Acústica', 'text' => 'Superfícies duras e ambientes abertos geram eco. Tapetes, cortinas e estofados ajudam a absorver o som.'],
                ['title' => 'Instalações aparentes exigem capricho', 'text' => 'Tubulação e fiação à vista precisam de traçado planejado e execução limpa. Improviso aparece.'],
            ],
        ],

        'scandinavian' => [
            'name' => 'Escandinavo',
            'hero_text' => [
                'Sendo do estilo Escandinavo, você tem um gosto leve e natural e valoriza a luz, o ar e a simplicidade em cada ambiente. Os espaços que mais combinam com você trazem uma sensação de liberdade: paredes claras, poucos móveis e janelas amplas que trazem a paisagem para dentro. Para você, um ambiente bonito é aquele que é simples sem ser frio, em que nada sobra e tudo convida a respirar fundo.',
                'Você gosta de ambientes que parecem uma pausa na correria. Repara na luz da manhã atravessando uma cortina fina, no desenho limpo de uma cadeira de madeira clara, no toque de uma manta de lã ou no verde lá fora, emoldurado pela janela. Valoriza uma vida mais simples e próxima da natureza, com poucas coisas, bem desenhadas e escolhidas com cuidado. Sua casa tende a ser clara e silenciosa, com um canto de leitura perto da janela e espaço livre para o olhar ir longe.',
                'As casas nórdicas à beira dos fiordes e lagos da Noruega e da Suécia talvez sejam o lugar que melhor traduz o seu gosto. Por fora, ficam no meio de uma natureza imensa; por dentro, são brancas, luminosas e organizadas, com madeira clara, poucos objetos e grandes janelas que transformam a paisagem no principal elemento da casa. Em países onde a luz do inverno é rara, aproveitar cada raio de sol virou quase uma filosofia. E esse mesmo espírito cabe em um apartamento atual, com luz natural bem aproveitada, cores claras, tecidos naturais e plantas.',
            ],
            'practice' => [
                'characteristics' => [
                    'text' => 'O escandinavo nasceu em países de inverno longo e pouca luz, e por isso valoriza a claridade e o conforto. É funcional como o minimalista, mas mais acolhedor.',
                    'items' => [
                        'Luz natural aproveitada ao máximo',
                        'Móveis leves, de linhas simples',
                        'Mantas, almofadas e tapetes',
                        'Plantas',
                        'Decoração enxuta e funcional',
                    ],
                ],
                'materials' => [
                    'text' => 'Madeira clara e tecidos naturais dão o tom. As texturas macias fazem o papel que a cor faria em outros estilos.',
                    'items' => [
                        'Madeira clara, como pinus e carvalho',
                        'Lã e tricô',
                        'Linho e algodão',
                        'Cerâmica fosca',
                        'Fibras naturais',
                    ],
                ],
                'palette' => [
                    'text' => 'Branco e cinza-claro ampliam a luz. O azul-claro e a madeira trazem suavidade, e o grafite entra em pequenos detalhes.',
                    'colors' => [
                        ['name' => 'Branco', 'hex' => '#FAFAF7'],
                        ['name' => 'Cinza-claro', 'hex' => '#DADDE0'],
                        ['name' => 'Azul-claro', 'hex' => '#BFD3DF'],
                        ['name' => 'Madeira clara', 'hex' => '#D9C4A1'],
                        ['name' => 'Grafite', 'hex' => '#3F4448'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Janelas livres', 'text' => 'Cortinas leves e translúcidas, ou nenhuma, deixam a luz entrar o dia todo.'],
                ['title' => 'Camadas de tecido', 'text' => 'Mantas, almofadas e tapetes de texturas diferentes trazem o aconchego que define o estilo.'],
                ['title' => 'Madeira clara no piso e nos móveis', 'text' => 'Aquece a base branca sem escurecer o ambiente.'],
                ['title' => 'Plantas', 'text' => 'O verde é a principal fonte de cor e de vida no ambiente.'],
            ],
            'watch_outs' => [
                ['title' => 'Branco demais', 'text' => 'Sem madeira e textura, o ambiente fica sem graça e parece inacabado.'],
                ['title' => 'Clima brasileiro', 'text' => 'Lã e tapetes felpudos foram pensados para o frio. Em regiões quentes, linho e algodão cumprem o mesmo papel.'],
                ['title' => 'Superfícies claras', 'text' => 'Sofás, tapetes e paredes claros mostram sujeira com facilidade. Tecidos laváveis e capas removíveis ajudam.'],
            ],
        ],

        'bohemian' => [
            'name' => 'Boêmio',
            'hero_text' => [
                'Sendo do estilo Boêmio, você tem um gosto livre e criativo e valoriza a personalidade em cada ambiente. Os espaços que mais combinam com você impressionam pela energia: cores, estampas, plantas e objetos que parecem ter vindo de diferentes cantos do mundo. Para você, um ambiente bonito é aquele que conta quem mora ali, em que nada precisa combinar perfeitamente e tudo tem um motivo para estar.',
                'Você gosta de ambientes que despertam a curiosidade. Repara na trama de um tapete feito à mão, no desenho de uma almofada bordada, na luz filtrada por uma luminária de palha ou numa planta que desce pela estante. Valoriza peças com história, garimpadas em feiras, viagens e antiquários, e prefere um objeto único a um conjunto comprado de uma vez. Sua casa tende a ser um lugar de expressão, com almofadas pelo chão, música tocando e conversas que se estendem até tarde.',
                'Marrakech, no Marrocos, talvez seja a cidade que melhor traduz o seu gosto. Seus riads, casas tradicionais voltadas para um pátio interno, reúnem quase tudo o que você admira: azulejos coloridos, madeira entalhada, lanternas de metal recortado, tapetes sobrepostos e almofadas espalhadas pelo chão. Ali, cores e culturas se misturam com naturalidade, e cada canto parece ter sido montado ao longo do tempo. E esse mesmo espírito cabe em um apartamento atual, com uma base neutra, peças garimpadas, plantas e cores escolhidas para conversar entre si.',
            ],
            'practice' => [
                'characteristics' => [
                    'text' => 'O boêmio é livre e pessoal. Mistura épocas, culturas e estampas, e cada objeto costuma ter uma história: uma viagem, uma feira, uma herança.',
                    'items' => [
                        'Mistura de estampas e texturas',
                        'Móveis vintage e garimpados',
                        'Muitas plantas',
                        'Almofadas, tapetes e pufes em camadas',
                        'Objetos de viagem e arte à vista',
                    ],
                ],
                'materials' => [
                    'text' => 'Predominam o feito à mão e as fibras naturais. Nada precisa combinar perfeitamente.',
                    'items' => [
                        'Tecidos étnicos e bordados',
                        'Macramê e crochê',
                        'Rattan, vime e palha',
                        'Madeira',
                        'Cerâmica artesanal',
                    ],
                ],
                'palette' => [
                    'text' => 'Cores quentes e intensas sobre uma base clara. É a base neutra que permite misturar tantas cores sem cansar.',
                    'colors' => [
                        ['name' => 'Cru', 'hex' => '#EFE6D5'],
                        ['name' => 'Terracota', 'hex' => '#C1693C'],
                        ['name' => 'Mostarda', 'hex' => '#D1A23A'],
                        ['name' => 'Verde-esmeralda', 'hex' => '#2F6F5E'],
                        ['name' => 'Azul-índigo', 'hex' => '#2E4374'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Base neutra', 'text' => 'Paredes e sofá em tom cru deixam as cores e estampas aparecerem sem competir entre si.'],
                ['title' => 'Um fio condutor', 'text' => 'Repetir duas ou três cores em objetos diferentes dá unidade à mistura.'],
                ['title' => 'Plantas em várias alturas', 'text' => 'No chão, em prateleiras e suspensas, elas preenchem o ambiente e ligam os elementos.'],
                ['title' => 'Peças garimpadas', 'text' => 'Móveis de antiquário, de feiras e de viagens dão a autenticidade que o estilo pede.'],
            ],
            'watch_outs' => [
                ['title' => 'Mistura sem critério', 'text' => 'Sem um fio condutor de cor ou de material, o ambiente parece desorganizado.'],
                ['title' => 'Limpeza e manutenção', 'text' => 'Muitos objetos, tecidos e plantas acumulam pó e pedem mais cuidado no dia a dia.'],
                ['title' => 'Espaços pequenos', 'text' => 'Em ambientes compactos, muitas camadas reduzem a sensação de espaço. Vale concentrar a mistura em um canto ou em uma parede.'],
            ],
        ],

        'contemporary' => [
            'name' => 'Contemporâneo',
            'hero_text' => [
                'Sendo do estilo Contemporâneo, você tem um gosto atual, chique e ousado, e valoriza o que há de mais novo em design em cada ambiente. Os espaços que mais combinam com você impressionam pela surpresa: formas inesperadas, materiais nobres usados de um jeito novo e peças que parecem esculturas. Para você, um ambiente bonito é aquele que tem atitude, moderno sem ser frio e sofisticado sem ser previsível.',
                'Você gosta de ambientes que causam impacto. Repara numa poltrona de curvas ousadas, numa luminária que parece uma obra de arte, no veio marcante de uma pedra em grande formato ou num único ponto de cor que muda a sala inteira. Valoriza a criatividade e a inovação, gosta de ver tecnologia e design trabalhando juntos e não tem medo de uma peça extravagante, desde que o conjunto continue equilibrado. Sua casa tende a ser integrada e fluida, com cada ambiente pensado como uma composição.',
                'Dubai talvez seja a cidade que melhor traduz o seu gosto. Em poucas décadas, ela se tornou um laboratório de arquitetura ousada: o Burj Khalifa, com mais de 800 metros de altura, e o Museu do Futuro, de forma oval com um vazio no centro e fachada coberta de caligrafia árabe, mostram como a criatividade pode virar símbolo de uma cidade. Por dentro, hotéis e apartamentos seguem a mesma linha, com mármore em grandes painéis, iluminação cenográfica e peças de design que parecem esculturas. Ali, luxo e inovação andam juntos. E esse mesmo espírito cabe em um apartamento atual, com uma base neutra, peças de design marcantes e materiais usados de forma criativa.',
            ],
            'practice' => [
                'characteristics' => [
                    'text' => 'O contemporâneo é o estilo do presente. Acompanha o que há de atual em design e tecnologia e combina referências modernas e clássicas com equilíbrio.',
                    'items' => [
                        'Linhas retas, com algumas curvas suaves',
                        'Ambientes integrados',
                        'Poucas peças, com uma de destaque',
                        'Iluminação embutida e planejada',
                        'Tecnologia e automação discretas',
                    ],
                ],
                'materials' => [
                    'text' => 'Não há um material obrigatório. O que define o estilo é a combinação equilibrada de acabamentos atuais.',
                    'items' => [
                        'Porcelanato de grande formato',
                        'Marcenaria planejada, em laca ou lâmina de madeira',
                        'Vidro',
                        'Metais em preto ou escovado',
                        'Quartzo e outras superfícies sintéticas',
                    ],
                ],
                'palette' => [
                    'text' => 'Base neutra, do branco ao chumbo, com um ponto de cor escolhido. Aqui o exemplo é o azul-petróleo, mas pode ser qualquer tom usado com moderação.',
                    'colors' => [
                        ['name' => 'Branco-gelo', 'hex' => '#F2F2F0'],
                        ['name' => 'Greige', 'hex' => '#B8B0A5'],
                        ['name' => 'Cinza-chumbo', 'hex' => '#4A4E54'],
                        ['name' => 'Preto', 'hex' => '#1E1E1E'],
                        ['name' => 'Azul-petróleo (ponto de cor)', 'hex' => '#1F5F6B'],
                    ],
                ],
            ],
            'works' => [
                ['title' => 'Base neutra com um ponto de cor', 'text' => 'Uma poltrona, um quadro ou uma parede colorida bastam para dar personalidade.'],
                ['title' => 'Uma peça de destaque', 'text' => 'Uma luminária de design ou uma obra de arte dão identidade a um ambiente de linhas simples.'],
                ['title' => 'Marcenaria planejada', 'text' => 'Painéis e armários sob medida organizam o espaço e escondem equipamentos e fios.'],
                ['title' => 'Iluminação em cenas', 'text' => 'Luz embutida, indireta e com dimmer adapta o ambiente a cada momento do dia.'],
            ],
            'watch_outs' => [
                ['title' => 'Aparência de showroom', 'text' => 'Neutro demais e sem objetos pessoais, o ambiente fica impessoal.'],
                ['title' => 'Tendências passageiras', 'text' => 'Por seguir o que é atual, o estilo pode datar rápido. Mantenha neutro o que é caro de trocar e deixe a tendência para o que é fácil de substituir.'],
                ['title' => 'Mistura sem unidade', 'text' => 'Com tantos materiais disponíveis, é fácil exagerar. Dois ou três acabamentos principais são suficientes.'],
            ],
        ],

    ],

];

<?php

// Resposta automática enviada a quem preenche o formulário de contato
// (ver ContactAutoReplyMail). O texto em português é o original da Larissa;
// os outros idiomas são traduções dele. :name = primeiro nome da pessoa.
return [
    'subject' => 'Sobre o seu projeto',

    // A saudação depende da hora no fuso horário de quem preencheu.
    'greeting_morning' => 'Bom dia, :name, tudo bem?',
    'greeting_afternoon' => 'Boa tarde, :name, tudo bem?',
    'greeting_evening' => 'Boa noite, :name, tudo bem?',

    'intro' => 'Que bom que você entrou em contato! Vi que você já nos passou um orçamento estimado. Para entender melhor o que você tem em mente e já te orientar direitinho, pode me contar um pouco mais sobre o projeto?',

    'points_intro' => 'Alguns pontos que ajudam bastante:',
    'points' => [
        'Que tipo de espaço é (casa, apartamento, escritório...) e a metragem aproximada',
        'Se é um projeto do zero, uma reforma ou só a parte de decoração/interiores',
        'Se já tem um prazo em mente para começar',
    ],

    'next_step' => 'Com essas informações, já consigo te dar um retorno para seguirmos com o projeto.',

    'quiz_pitch' => 'Por fim, gostaria de te indicar uma etapa que torna o projeto muito mais assertivo: o nosso Teste de Estilo. Em poucos minutos, ele identifica o seu estilo de decoração, as cores, os materiais e as formas com que você mais se identifica e também o que não combina com você. Assim, alinhamos as expectativas desde o início e desenvolvemos um projeto fiel ao seu gosto, com mais precisão e sem retrabalho. O resultado também pode te ajudar a enxergar com mais clareza o que você quer para o seu espaço.',

    'quiz_link_intro' => 'O teste é opcional e custa apenas US$ 3:',

    'sign_off' => 'Fico no aguardo!',
];

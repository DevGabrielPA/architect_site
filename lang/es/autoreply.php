<?php

// Respuesta automática enviada a quien completa el formulario de contacto
// (ver ContactAutoReplyMail). Traducción del original en portugués de
// Larissa. :name = nombre de la persona.
return [
    'subject' => 'Sobre tu proyecto',

    'greeting_morning' => 'Buenos días, :name, ¿cómo estás?',
    'greeting_afternoon' => 'Buenas tardes, :name, ¿cómo estás?',
    'greeting_evening' => 'Buenas noches, :name, ¿cómo estás?',

    'intro' => '¡Qué bueno que te pusiste en contacto! Vi que ya nos indicaste un presupuesto estimado. Para entender mejor lo que tienes en mente y orientarte bien desde ya, ¿puedes contarme un poco más sobre el proyecto?',

    'points_intro' => 'Algunos puntos que ayudan mucho:',
    'points' => [
        'Qué tipo de espacio es (casa, apartamento, oficina...) y los metros cuadrados aproximados',
        'Si es un proyecto desde cero, una reforma o solo la parte de decoración/interiorismo',
        'Si ya tienes un plazo en mente para empezar',
    ],

    'next_step' => 'Con esta información, ya puedo darte una respuesta para seguir adelante con el proyecto.',

    'quiz_pitch' => 'Por último, me gustaría recomendarte una etapa que hace el proyecto mucho más acertado: nuestro Test de Estilo. En pocos minutos, identifica tu estilo arquitectónico, los colores, los materiales y las formas con los que más te identificas, y también lo que no va contigo. Así, alineamos las expectativas desde el principio y desarrollamos un proyecto fiel a tu gusto, con más precisión y sin retrabajo. El resultado también puede ayudarte a ver con más claridad lo que quieres para tu espacio.',

    'quiz_link_intro' => 'El test es opcional y cuesta solo US$ 3:',

    'sign_off' => '¡Quedo atenta a tu respuesta!',
];

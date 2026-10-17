<?php

// Política de Privacidad (resources/views/privacy.blade.php) y los avisos
// cortos que enlazan a ella en el formulario de contacto y en el pago del quiz.
// Traducido del original en portugués (lang/pt/privacy.php).
// :email = canal de contacto para privacidad (config mail.contact_to).
return [
    'meta_title' => 'Política de Privacidad | Larissa Vasconcellos Arquitectura',
    'meta_description' => 'Cómo Larissa Vasconcellos Arquitectura recopila, usa y protege tus datos personales, y cómo ejercer tus derechos.',
    'heading' => 'Política de Privacidad',
    'updated' => 'Última actualización: 17 de octubre de 2026',
    'intro' => 'Esta política explica qué datos personales recopilamos cuando usas este sitio, para qué los usamos, con quién los compartimos y cómo puedes ejercer tus derechos, de acuerdo con la Ley General de Protección de Datos de Brasil (LGPD, Ley nº 13.709/2018) y, cuando corresponda, el Reglamento General de Protección de Datos de la Unión Europea (RGPD).',

    'sections' => [
        [
            'title' => '1. Responsable de tus datos',
            'paragraphs' => [
                'La responsable del tratamiento es Larissa Vasconcellos Arquitetura, con sede en Belo Horizonte, MG, Brasil. Para cualquier asunto relacionado con la privacidad, escribe a :email.',
            ],
        ],
        [
            'title' => '2. Qué datos recopilamos',
            'paragraphs' => [],
            'items' => [
                'Formulario de contacto: nombre, apellido, correo electrónico, teléfono (con código de país), país y presupuesto estimado del proyecto. También recibimos la zona horaria de tu navegador, usada solo para elegir entre «buenos días», «buenas tardes» o «buenas noches» en la respuesta automática.',
                'Test de Estilo Arquitectónico: no pedimos nombre ni correo para hacer el test. Tus respuestas no se guardan en nuestro servidor: quedan solo en tu navegador (se borran al cerrar la pestaña) y en un enlace cifrado que solo tú tienes.',
                'Compra del Informe Completo de Estilo: el pago lo procesa Stripe y nunca recibimos los datos de tu tarjeta. Stripe solo nos informa la confirmación del pago y el correo indicado en el checkout, que usamos para enviarte el enlace de tu informe.',
                'Datos técnicos: al visitar el sitio, tu dirección IP y la información del navegador se procesan temporalmente por seguridad (límite de intentos y bloqueo de spam) y para registrar errores. En esos registros, el correo aparece enmascarado (por ejemplo, «pe***@gmail.com»).',
            ],
        ],
        [
            'title' => '3. Para qué usamos tus datos y con qué base legal',
            'paragraphs' => [],
            'items' => [
                'Responder a tu consulta, enviar la respuesta automática y preparar una propuesta de proyecto: medidas precontractuales a petición tuya (art. 7, V, LGPD; art. 6(1)(b) RGPD).',
                'Procesar el pago y entregar el informe comprado: ejecución de un contrato (art. 7, V, LGPD; art. 6(1)(b) RGPD).',
                'Proteger el sitio contra abusos, spam y fraude y corregir errores: interés legítimo (art. 7, IX, LGPD; art. 6(1)(f) RGPD).',
                'Cumplir obligaciones legales y fiscales relacionadas con los pagos: obligación legal (art. 7, II, LGPD; art. 6(1)(c) RGPD).',
            ],
            'closing' => 'No usamos tus datos para publicidad, no creamos perfiles de comportamiento y no vendemos datos personales.',
        ],
        [
            'title' => '4. Con quién los compartimos',
            'paragraphs' => [
                'Solo compartimos datos con los proveedores necesarios para que el sitio funcione, que los tratan en nuestro nombre:',
            ],
            'items' => [
                'Resend: envío de los correos del sitio (mensaje de contacto, respuesta automática y enlace del informe).',
                'Google (Gmail): bandeja de entrada donde recibimos los mensajes de contacto.',
                'Stripe: procesamiento de pagos.',
                'Render: alojamiento del sitio.',
                'Google Fonts y Cloudflare (cdnjs): proporcionan las fuentes y los iconos del sitio y reciben tu dirección IP al cargar la página.',
                'YouTube: vídeos insertados en algunas páginas de proyecto, cargados en modo de privacidad mejorada.',
            ],
            'closing' => 'También podemos compartir datos cuando lo exija la ley o una autoridad competente.',
        ],
        [
            'title' => '5. Transferencias internacionales',
            'paragraphs' => [
                'Algunos de estos proveedores almacenan datos fuera de Brasil, principalmente en Estados Unidos. Estas transferencias siguen el artículo 33 de la LGPD y se apoyan en las garantías contractuales y de seguridad que ofrece cada proveedor.',
            ],
        ],
        [
            'title' => '6. Cookies y almacenamiento en el navegador',
            'paragraphs' => [
                'Usamos solo cookies estrictamente necesarias: una cookie de sesión cifrada y una cookie que protege los formularios contra envíos falsificados (CSRF). El Test de Estilo usa el almacenamiento de la pestaña (sessionStorage) para no perder tu progreso si la página se recarga. No usamos cookies de análisis, publicidad ni seguimiento.',
            ],
        ],
        [
            'title' => '7. Cuánto tiempo los conservamos',
            'paragraphs' => [],
            'items' => [
                'Mensajes de contacto: mientras sean necesarios para atenderte y para una eventual relación de proyecto, o hasta que solicites su eliminación.',
                'Datos de pago: conservados por Stripe durante el plazo que exigen las obligaciones legales y fiscales.',
                'Datos técnicos y de seguridad: por periodos cortos (los controles contra abusos caducan en 24 horas y los registros de errores se eliminan periódicamente).',
            ],
        ],
        [
            'title' => '8. Tus derechos',
            'paragraphs' => [
                'Puedes solicitar, en cualquier momento y de forma gratuita:',
            ],
            'items' => [
                'confirmación de que tratamos tus datos y acceso a ellos;',
                'corrección de datos incompletos, inexactos o desactualizados;',
                'anonimización, bloqueo o eliminación de datos innecesarios o tratados de forma ilícita;',
                'portabilidad de tus datos a otro proveedor;',
                'información sobre con quién compartimos tus datos;',
                'eliminación de tus datos y retirada del consentimiento, cuando el tratamiento se base en él;',
                'oposición a un tratamiento que consideres irregular.',
            ],
            'closing' => 'Para ejercer estos derechos, escribe a :email. Responderemos en un plazo de 15 días. También puedes presentar una reclamación ante la Autoridad Nacional de Protección de Datos de Brasil (ANPD) o, si estás en la Unión Europea, ante la autoridad de protección de datos de tu país (en España, la AEPD).',
        ],
        [
            'title' => '9. Seguridad',
            'paragraphs' => [
                'El sitio usa conexión cifrada (HTTPS), no mantiene una base de datos de clientes y protege los enlaces del Test de Estilo con cifrado. Ningún sistema es totalmente inmune a fallos, pero adoptamos medidas técnicas y organizativas razonables para proteger tus datos.',
            ],
        ],
        [
            'title' => '10. Menores de edad',
            'paragraphs' => [
                'Este sitio no está dirigido a menores de 18 años y no recopilamos intencionadamente datos de niños o adolescentes.',
            ],
        ],
        [
            'title' => '11. Cambios en esta política',
            'paragraphs' => [
                'Podemos actualizar esta política para reflejar cambios en el sitio o en la legislación. La fecha de la última actualización aparece al principio de esta página.',
            ],
        ],
    ],

    'link_text' => 'Política de Privacidad',
    'footer_link' => 'Política de Privacidad',
    'contact_notice' => 'Al enviar, aceptas que tus datos se usen para responder a tu consulta, según nuestra :link.',
    'checkout_notice' => 'El pago lo procesa Stripe de forma segura; nunca recibimos los datos de tu tarjeta. Más información en nuestra :link.',
];

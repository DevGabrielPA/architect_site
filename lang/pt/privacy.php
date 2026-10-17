<?php

// Política de Privacidade (resources/views/privacy.blade.php) e os avisos
// curtos que apontam para ela no formulário de contato e no checkout do quiz.
// :email = canal de contato para assuntos de privacidade (config mail.contact_to).
// Cada seção: 'title', 'paragraphs' e, opcionalmente, 'items' (lista) e 'closing'.
return [
    'meta_title' => 'Política de Privacidade | Larissa Vasconcellos Arquitetura',
    'meta_description' => 'Como Larissa Vasconcellos Arquitetura coleta, usa e protege seus dados pessoais, e como exercer seus direitos.',
    'heading' => 'Política de Privacidade',
    'updated' => 'Última atualização: 17 de outubro de 2026',
    'intro' => 'Esta política explica quais dados pessoais coletamos quando você usa este site, para que os usamos, com quem os compartilhamos e como você pode exercer seus direitos, de acordo com a Lei Geral de Proteção de Dados (LGPD, Lei nº 13.709/2018) e, quando aplicável, o Regulamento Geral sobre a Proteção de Dados da União Europeia (GDPR).',

    'sections' => [
        [
            'title' => '1. Quem é responsável pelos seus dados',
            'paragraphs' => [
                'A controladora dos dados é Larissa Vasconcellos Arquitetura, com sede em Belo Horizonte, MG, Brasil. Para qualquer assunto relacionado a privacidade, escreva para :email.',
            ],
        ],
        [
            'title' => '2. Quais dados coletamos',
            'paragraphs' => [],
            'items' => [
                'Formulário de contato: nome, sobrenome, e-mail, telefone (com código do país), país e orçamento estimado do projeto. Também recebemos o fuso horário do seu navegador, usado apenas para escolher entre "bom dia", "boa tarde" ou "boa noite" na resposta automática.',
                'Teste de Estilo Arquitetônico: não pedimos nome nem e-mail para fazer o teste. Suas respostas não são guardadas em nosso servidor: ficam apenas no seu navegador (apagadas ao fechar a aba) e em um link criptografado que só você tem.',
                'Compra do Relatório Completo de Estilo: o pagamento é processado pela Stripe e nós nunca recebemos os dados do seu cartão. A Stripe nos informa apenas a confirmação do pagamento e o e-mail informado no checkout, que usamos para enviar o link do seu relatório.',
                'Dados técnicos: ao acessar o site, seu endereço IP e informações do navegador são processados temporariamente para segurança (limite de tentativas e bloqueio de spam) e para registrar erros. Nesses registros, o e-mail aparece mascarado (por exemplo, "pe***@gmail.com").',
            ],
        ],
        [
            'title' => '3. Para que usamos seus dados e com qual base legal',
            'paragraphs' => [],
            'items' => [
                'Responder ao seu contato, enviar a resposta automática e preparar uma proposta de projeto: procedimentos preliminares a um contrato, a seu pedido (art. 7º, V, da LGPD).',
                'Processar o pagamento e entregar o relatório comprado: execução de contrato (art. 7º, V, da LGPD).',
                'Proteger o site contra abuso, spam e fraude e corrigir erros: legítimo interesse (art. 7º, IX, da LGPD).',
                'Cumprir obrigações legais e fiscais relacionadas a pagamentos: cumprimento de obrigação legal (art. 7º, II, da LGPD).',
            ],
            'closing' => 'Não usamos seus dados para publicidade, não criamos perfis de comportamento e não vendemos dados pessoais.',
        ],
        [
            'title' => '4. Com quem compartilhamos',
            'paragraphs' => [
                'Compartilhamos dados apenas com os prestadores de serviço necessários para o site funcionar, que os tratam em nosso nome:',
            ],
            'items' => [
                'Resend: envio dos e-mails do site (mensagem de contato, resposta automática e link do relatório).',
                'Google (Gmail): caixa de entrada onde recebemos as mensagens de contato.',
                'Stripe: processamento de pagamentos.',
                'Render: hospedagem do site.',
                'Google Fonts e Cloudflare (cdnjs): fornecem as fontes e os ícones do site e recebem seu endereço IP quando a página é carregada.',
                'YouTube: vídeos incorporados em algumas páginas de projeto, carregados no modo de privacidade aprimorada.',
            ],
            'closing' => 'Também podemos compartilhar dados quando exigido por lei ou por ordem de autoridade competente.',
        ],
        [
            'title' => '5. Transferência internacional',
            'paragraphs' => [
                'Alguns desses prestadores armazenam dados fora do Brasil, principalmente nos Estados Unidos. Essas transferências seguem o art. 33 da LGPD e se apoiam nas garantias contratuais e de segurança oferecidas por cada prestador.',
            ],
        ],
        [
            'title' => '6. Cookies e armazenamento no navegador',
            'paragraphs' => [
                'Usamos apenas cookies estritamente necessários: um cookie de sessão criptografado e um cookie de proteção contra envios forjados de formulário (CSRF). O Teste de Estilo usa o armazenamento da aba (sessionStorage) para não perder seu progresso se a página for recarregada. Não usamos cookies de análise, publicidade ou rastreamento.',
            ],
        ],
        [
            'title' => '7. Por quanto tempo guardamos',
            'paragraphs' => [],
            'items' => [
                'Mensagens de contato: enquanto forem necessárias para atender você e para uma eventual relação de projeto, ou até você pedir a exclusão.',
                'Dados de pagamento: mantidos pela Stripe pelo prazo exigido pelas obrigações legais e fiscais.',
                'Dados técnicos e de segurança: por curtos períodos (os controles contra abuso expiram em até 24 horas e os registros de erro são descartados periodicamente).',
            ],
        ],
        [
            'title' => '8. Seus direitos',
            'paragraphs' => [
                'Você pode, a qualquer momento e gratuitamente, solicitar:',
            ],
            'items' => [
                'confirmação de que tratamos seus dados e acesso a eles;',
                'correção de dados incompletos, inexatos ou desatualizados;',
                'anonimização, bloqueio ou eliminação de dados desnecessários ou tratados em desconformidade com a lei;',
                'portabilidade dos dados a outro fornecedor;',
                'informação sobre com quem compartilhamos seus dados;',
                'eliminação dos dados e revogação do consentimento, quando o tratamento se basear nele;',
                'oposição a um tratamento que considere irregular.',
            ],
            'closing' => 'Para exercer esses direitos, escreva para :email. Responderemos em até 15 dias. Você também pode apresentar reclamação à Autoridade Nacional de Proteção de Dados (ANPD) ou, se estiver na União Europeia, à autoridade de proteção de dados do seu país.',
        ],
        [
            'title' => '9. Segurança',
            'paragraphs' => [
                'O site usa conexão criptografada (HTTPS), não mantém banco de dados de clientes e protege os links do Teste de Estilo com criptografia. Nenhum sistema é totalmente imune a falhas, mas adotamos medidas técnicas e administrativas razoáveis para proteger seus dados.',
            ],
        ],
        [
            'title' => '10. Menores de idade',
            'paragraphs' => [
                'Este site não é direcionado a menores de 18 anos e não coletamos intencionalmente dados de crianças ou adolescentes.',
            ],
        ],
        [
            'title' => '11. Alterações nesta política',
            'paragraphs' => [
                'Podemos atualizar esta política para refletir mudanças no site ou na legislação. A data da última atualização aparece no topo desta página.',
            ],
        ],
    ],

    // Avisos curtos com link (:link = "Política de Privacidade" já com o <a>).
    'link_text' => 'Política de Privacidade',
    'footer_link' => 'Política de Privacidade',
    'contact_notice' => 'Ao enviar, você concorda que seus dados sejam usados para responder ao seu contato, conforme nossa :link.',
    'checkout_notice' => 'O pagamento é processado com segurança pela Stripe; não recebemos os dados do seu cartão. Saiba mais na nossa :link.',
];

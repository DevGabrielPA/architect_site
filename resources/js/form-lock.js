// Trava o botão de envio de formulários marcados com data-lock-on-submit
// assim que o envio começa, evitando duplo clique (dois e-mails de contato,
// duas sessões de pagamento na Stripe etc.).
export function initFormLock() {
    // Escuta no document (fase de bubbling): roda DEPOIS dos listeners do
    // próprio formulário, então respeita quem já cancelou o envio — ex.: a
    // checagem de "faltam perguntas" do quiz chama preventDefault().
    document.addEventListener('submit', (event) => {
        const form = event.target;
        if (!form.matches('form[data-lock-on-submit]') || event.defaultPrevented) return;

        form.querySelectorAll('button[type="submit"]').forEach((button) => {
            button.disabled = true;
            button.classList.add('is-submitting');
        });
    });

    // Voltar pelo botão do navegador (ex.: desistir no checkout da Stripe)
    // pode restaurar a página do cache com o botão ainda travado — destrava.
    window.addEventListener('pageshow', (event) => {
        if (!event.persisted) return;

        document.querySelectorAll('form[data-lock-on-submit] button[type="submit"]').forEach((button) => {
            button.disabled = false;
            button.classList.remove('is-submitting');
        });
    });
}

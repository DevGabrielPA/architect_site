// Botão flutuante "voltar ao topo": aparece ao rolar a página e faz scroll suave até o início.
export function initBackToTop() {
    const button = document.getElementById('back-to-top');
    if (!button) return;

    const SHOW_AFTER_PX = 400;
    let ticking = false;

    function updateVisibility() {
        button.classList.toggle('is-visible', window.scrollY > SHOW_AFTER_PX);
        ticking = false;
    }

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateVisibility);
            ticking = true;
        }
    }, { passive: true });

    button.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    updateVisibility();
}

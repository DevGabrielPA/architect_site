// Agrupa qualquer elemento com [data-lightbox-group] pelo valor do atributo e
// abre um overlay com setas para navegar entre as imagens do mesmo grupo.
export function initLightbox() {
    const overlay = document.getElementById('lightbox-overlay');
    if (!overlay) return;

    const imgEl = overlay.querySelector('.lightbox-image');
    const titleEl = overlay.querySelector('.lightbox-title');
    const counterEl = overlay.querySelector('.lightbox-counter');
    const prevBtn = overlay.querySelector('.lightbox-prev');
    const nextBtn = overlay.querySelector('.lightbox-next');
    const closeBtn = overlay.querySelector('.lightbox-close');

    const groups = {};
    let currentGroup = null;
    let currentIndex = 0;

    document.querySelectorAll('[data-lightbox-group]').forEach((el) => {
        const group = el.getAttribute('data-lightbox-group');
        groups[group] = groups[group] || [];
        const index = groups[group].length;
        groups[group].push({
            src: el.getAttribute('data-lightbox-src'),
            title: el.getAttribute('data-lightbox-title') || '',
        });

        el.addEventListener('click', (event) => {
            event.preventDefault();
            currentGroup = group;
            currentIndex = index;
            open();
        });
    });

    function render() {
        const items = groups[currentGroup];
        const item = items[currentIndex];
        imgEl.src = item.src;
        imgEl.alt = item.title;
        titleEl.textContent = item.title;
        counterEl.textContent = items.length > 1 ? `${currentIndex + 1} / ${items.length}` : '';

        const hasMultiple = items.length > 1;
        prevBtn.style.display = hasMultiple ? 'flex' : 'none';
        nextBtn.style.display = hasMultiple ? 'flex' : 'none';
    }

    function open() {
        render();
        overlay.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    }

    function close() {
        overlay.classList.remove('is-open');
        document.body.style.overflow = '';
    }

    function step(delta) {
        const items = groups[currentGroup];
        currentIndex = (currentIndex + delta + items.length) % items.length;
        render();
    }

    prevBtn.addEventListener('click', () => step(-1));
    nextBtn.addEventListener('click', () => step(1));
    closeBtn.addEventListener('click', close);

    overlay.addEventListener('click', (event) => {
        if (event.target === overlay) close();
    });

    document.addEventListener('keydown', (event) => {
        if (!overlay.classList.contains('is-open')) return;
        if (event.key === 'Escape') close();
        if (event.key === 'ArrowLeft') step(-1);
        if (event.key === 'ArrowRight') step(1);
    });
}

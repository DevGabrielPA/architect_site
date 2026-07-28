// Drawer lateral do menu mobile (hambúrguer) + accordions internos (Portfolio/Idioma) +
// fallback de clique para os dropdowns do menu desktop em telas touch acima de 1180px.
export function initMobileMenu() {
    const toggleBtn = document.querySelector('.mobile-menu-toggle');
    const drawer = document.getElementById('mobile-drawer');
    const backdrop = document.getElementById('mobile-drawer-backdrop');
    const closeBtn = drawer ? drawer.querySelector('.mobile-drawer-close') : null;

    if (toggleBtn && drawer && backdrop) {
        const firstLink = drawer.querySelector('a');

        function open() {
            drawer.classList.add('is-open');
            backdrop.classList.add('is-open');
            drawer.setAttribute('aria-hidden', 'false');
            toggleBtn.setAttribute('aria-expanded', 'true');
            document.body.style.overflow = 'hidden';
            if (firstLink) firstLink.focus();
        }

        function close() {
            drawer.classList.remove('is-open');
            backdrop.classList.remove('is-open');
            drawer.setAttribute('aria-hidden', 'true');
            toggleBtn.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
            toggleBtn.focus();
        }

        toggleBtn.addEventListener('click', () => {
            if (drawer.classList.contains('is-open')) close();
            else open();
        });

        closeBtn?.addEventListener('click', close);

        backdrop.addEventListener('click', close);

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && drawer.classList.contains('is-open')) close();
        });

        drawer.querySelectorAll('.mobile-drawer-nav > li > .mobile-drawer-row > a').forEach((link) => {
            link.addEventListener('click', close);
        });
        drawer.querySelectorAll('.mobile-drawer-accordion-panel a').forEach((link) => {
            link.addEventListener('click', close);
        });

        let resizeTimer = null;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                if (window.innerWidth > 1180 && drawer.classList.contains('is-open')) close();
            }, 150);
        });

        // Accordions do Portfolio e do idioma dentro do drawer
        drawer.querySelectorAll('.mobile-drawer-accordion-trigger').forEach((trigger) => {
            trigger.addEventListener('click', (event) => {
                event.preventDefault();
                const item = trigger.closest('.mobile-drawer-item');
                const isExpanded = item.classList.contains('is-expanded');
                item.classList.toggle('is-expanded', !isExpanded);
                trigger.setAttribute('aria-expanded', String(!isExpanded));
            });
        });
    }

    // Fallback de clique para os dropdowns do menu desktop (touch acima de 1180px, onde
    // o menu desktop ainda aparece mas :hover não existe em dispositivos touch).
    document.querySelectorAll('.desktop-menu-col .has-dropdown').forEach((item) => {
        const trigger = item.querySelector(':scope > a');
        if (!trigger) return;
        const caret = trigger.querySelector('.dropdown-caret');
        const isLanguageSwitcher = trigger.getAttribute('href') === '#';

        const toggle = (event) => {
            event.preventDefault();
            event.stopPropagation();
            const wasOpen = item.classList.contains('sub-menu-open');
            document.querySelectorAll('.desktop-menu-col .has-dropdown.sub-menu-open').forEach((openItem) => {
                openItem.classList.remove('sub-menu-open');
            });
            item.classList.toggle('sub-menu-open', !wasOpen);
        };

        if (isLanguageSwitcher) {
            trigger.addEventListener('click', toggle);
        } else if (caret) {
            caret.addEventListener('click', toggle);
        }
    });

    document.addEventListener('click', (event) => {
        if (!event.target.closest('.desktop-menu-col .has-dropdown')) {
            document.querySelectorAll('.desktop-menu-col .has-dropdown.sub-menu-open').forEach((item) => {
                item.classList.remove('sub-menu-open');
            });
        }
    });
}

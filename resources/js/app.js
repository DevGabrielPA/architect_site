import './bootstrap';
import { initLightbox } from './lightbox';
import { initMobileMenu } from './mobile-menu';
import { initBackToTop } from './back-to-top';

document.addEventListener('DOMContentLoaded', () => {
    initLightbox();
    initMobileMenu();
    initBackToTop();
});

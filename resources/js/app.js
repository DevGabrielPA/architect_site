import './bootstrap';
import { initLightbox } from './lightbox';
import { initMobileMenu } from './mobile-menu';

document.addEventListener('DOMContentLoaded', () => {
    initLightbox();
    initMobileMenu();
});

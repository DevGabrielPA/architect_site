import './bootstrap';
import { initLightbox } from './lightbox';
import { initMobileMenu } from './mobile-menu';
import { initBackToTop } from './back-to-top';
import { initFormLock } from './form-lock';

document.addEventListener('DOMContentLoaded', () => {
    initLightbox();
    initMobileMenu();
    initBackToTop();
    initFormLock();
});

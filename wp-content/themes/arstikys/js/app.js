import setConsultationsObserver from "./modules/set-consultations-active";
import openMobileMenu from "./modules/open-mobile-menu";

window.addEventListener('DOMContentLoaded', () => {

    openMobileMenu();

    if (document.querySelector('.consultations-block')) {
        setConsultationsObserver();
    }

});
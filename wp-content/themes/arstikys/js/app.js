import setConsultationsObserver from "./modules/set-consultations-active";

window.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.consultations-block')) {
        setConsultationsObserver();
    }

});
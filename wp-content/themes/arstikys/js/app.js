import setConsultationsObserver from "./modules/set-consultations-active";
import openMobileMenu from "./modules/open-mobile-menu";
import accordion from "./modules/accordion";
import sendContactForm from "./modules/send-contacts-form";
import scrollToNext from "./modules/scroll-to-next";
window.addEventListener('DOMContentLoaded', () => {

    openMobileMenu();

    if (document.querySelector('.consultations-block')) {
        setConsultationsObserver();
    }

    if (document.querySelector('.consultations-hero')) {
        window.addEventListener('scroll', (e) =>{
            setConsultationsObserver();
            console.log('a');
        })
        setConsultationsObserver();
    }

    if(document.querySelector('.faqs-area')){
        accordion();
    }

    if(document.querySelector('form.contact-form')){
        sendContactForm();
    }

    if(document.querySelector('.scroll-to-content')){
        scrollToNext();
    }

});
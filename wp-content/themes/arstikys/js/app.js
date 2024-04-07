import setConsultationsObserver from "./modules/set-consultations-active";
import openMobileMenu from "./modules/open-mobile-menu";
import accordion from "./modules/accordion";
import sendContactForm from "./modules/send-contacts-form";
import scrollToNext from "./modules/scroll-to-next";
window.addEventListener('DOMContentLoaded', () => {

    openMobileMenu();

    document.querySelectorAll('a.scroll-me').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default anchor click behavior
            console.log('lop')

            const href = anchor.getAttribute('href');
            const targetId = href.includes('#') ? href.substring(href.indexOf('#')) : href;
            const targetElement = document.querySelector(targetId); // Find the target element
            if (targetElement) {
                console.log('a');
                animateScroll(targetElement, 2000, 'linear', 0); // Adjusted duration for a realistic value

            }
        });
    });

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
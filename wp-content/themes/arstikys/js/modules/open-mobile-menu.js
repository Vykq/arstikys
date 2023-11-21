const openMobileMenu = () => {

    const openBtn = document.querySelector('.mobile-menu-open');
    const mobileMenu = document.querySelector('.mobile-menu');
    const body = document.querySelector('body');
    const html = document.querySelector('html');

    setModalTop();

    window.addEventListener('DOMContentLoaded', () => {
        setModalTop();
    })

    window.addEventListener('resize', () => {
        setModalTop();
    })

    window.addEventListener('keyup', function (e) {
        if (e.keyCode == 27) {
            toggleMenu();
        }
    })


    window.addEventListener('click', (event) => {
        if (event.target.classList.contains('mobile')) {
            closeMenu();
        }
    });




    openBtn.addEventListener('click', (e) =>{
        toggleMenu();

    })

    function toggleMenu() {
        mobileMenu.classList.toggle('show');
        body.classList.toggle('modal-is-open');
        html.classList.toggle('modal-is-open');

    }

    function closeMenu() {
        mobileMenu.classList.remove('show');
        body.classList.remove('modal-is-open');
        html.classList.remove('modal-is-open');

    }


    function setModalTop(){
        const headerHeight = document.querySelector('.header').clientHeight;
        mobileMenu.style.top = headerHeight + "px";
    }





}

export default openMobileMenu;
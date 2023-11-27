const scrollToNext = () =>{

    const arrowBtn = document.querySelector('.scroll-to-content');
    const nextEl = arrowBtn.parentElement.parentElement.parentElement.parentElement.parentElement.nextElementSibling;

    arrowBtn.addEventListener('click', (e) =>{
        e.preventDefault();
        arrowBtn.scrollIntoView(nextEl);
    })
}

export default scrollToNext;
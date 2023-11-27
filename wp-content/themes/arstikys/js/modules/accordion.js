const accordion = () => {
    const buttons = document.querySelectorAll('.duk-top-area');
    const panels = document.querySelectorAll('.duk-inside');

    buttons.forEach(btn => {
        btn.addEventListener('click', (e) =>{
            e.preventDefault();
            const panel = btn.nextElementSibling;
            btn.classList.toggle('active');
            panel.classList.toggle('active');
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = 'calc(' + panel.scrollHeight + 'px + 3rem)';
            }
        })
    })

}
export default accordion;


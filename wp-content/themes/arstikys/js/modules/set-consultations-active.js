const setConsultationsObserver = () => {

    const videoObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                const el = entry.target;
                if (el.currentTime === 0) {
                    return
                }
                if (!entry.isIntersecting || entry.intersectionRatio <= 0.1) {
                    el.classList.remove('active');
                } else  {
                    el.classList.add('active');
                }
            })
        },
        {
            threshold: [1, 1]
        }
    );

    document.querySelectorAll('.single-li')
        .forEach((el, index) => videoObserver.observe(el));
}

export default setConsultationsObserver;

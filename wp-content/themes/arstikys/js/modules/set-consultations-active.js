const setConsultationsObserver = () => {

    const videoObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                const el = entry.target;
                if (el.currentTime === 0) {
                    return
                } else {
                    el.classList.add('active');
                }
                if (!entry.isIntersecting || entry.intersectionRatio <= 0.1) {
                    el.classList.remove('active');
                } else {
                    el.classList.add('active');
                }
            })
        },
        {
            threshold: [0.9, 0.9]
        }
    );

    document.querySelectorAll('.single-li')
        .forEach((el, index) => videoObserver.observe(el));
}

export default setConsultationsObserver;

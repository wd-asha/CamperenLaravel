document.addEventListener('DOMContentLoaded', function() {
    const tl = gsap.timeline();

    // slide__about_above-title появляется справа
    tl.fromTo('.slide__about_above-title', {
            x: 100,
            opacity: 0
        },
        {
            duration: 0.6,
            x: 0,
            opacity: 1,
            ease: "power2.out"
        })

        // slide__about-title появляется справа
        .fromTo('.slide__about-title', {
                x: 100,
                opacity: 0
            },
            {
                duration: 0.4,
                x: 0,
                opacity: 1,
                ease: "power2.out"
            })

        // about-link появляется
        .fromTo('.about-link', {
                opacity: 0
            },
            {
                duration: 0.4,
                opacity: 1,
                ease: "power2.out"
            }, "+=0.6");
});

gsap.fromTo('.contacts__span',
    {
        // начальное состояние
        y: 40,
        opacity: 0
    },
    {
        // конечное состояние
        y: 0,
        opacity: 1,
        // длительность анимации
        duration: 0.6,
        // задержка между элементами
        stagger: 0.10,
        // плавность анимации
        ease: "power2.out",
        // элемент-триггер
        scrollTrigger: {
            trigger: '.contacts__left_phones',
            // когда верх триггера достигнет 75% экрана сверху
            start: 'top 70%',
            // когда низ триггера достигнет 25% экрана сверху
            end: 'bottom 20%',
            // воспроизвести при входе 75%
            toggleActions: 'play none play reverse'
        }
    });

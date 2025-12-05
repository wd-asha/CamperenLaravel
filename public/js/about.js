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

    // последовательное появление иконок
    gsap.registerPlugin(ScrollTrigger);
    gsap.fromTo('.zone__services__img',
        {
        // начальное состояние
            x: 100,
            opacity: 0
        },
        {
            // конечное состояние
            x: 0,
            opacity: 1,
            // длительность анимации
            duration: 0.4,
            // задержка между элементами
            stagger: 0.10,
            // плавность анимации
            ease: "power2.out",
            // элемент-триггер
            scrollTrigger: {
            trigger: '.zone__services',
            // когда верх триггера достигнет 75% экрана сверху
            start: 'top 75%',
            // когда низ триггера достигнет 25% экрана сверху
            end: 'bottom 25%',
            // воспроизвести при входе 75%
            toggleActions: 'play none play reverse'
        }
    });

gsap.fromTo('.zone__services__img2',
    {
        // начальное состояние
        x: 100,
        opacity: 0
    },
    {
        // конечное состояние
        x: 0,
        opacity: 1,
        // длительность анимации
        duration: 0.4,
        // задержка между элементами
        stagger: 0.10,
        // плавность анимации
        ease: "power2.out",
        // элемент-триггер
        scrollTrigger: {
            trigger: '.zone__services2',
            // когда верх триггера достигнет 75% экрана сверху
            start: 'top 75%',
            // когда низ триггера достигнет 25% экрана сверху
            end: 'bottom 25%',
            // воспроизвести при входе 75%
            toggleActions: 'play none play reverse'
        }
    });

gsap.fromTo('.zone__services__img3',
    {
        // начальное состояние
        x: 100,
        opacity: 0
    },
    {
        // конечное состояние
        x: 0,
        opacity: 1,
        // длительность анимации
        duration: 0.4,
        // задержка между элементами
        stagger: 0.10,
        // плавность анимации
        ease: "power2.out",
        // элемент-триггер
        scrollTrigger: {
            trigger: '.zone__services3',
            // когда верх триггера достигнет 75% экрана сверху
            start: 'top 75%',
            // когда низ триггера достигнет 25% экрана сверху
            end: 'bottom 25%',
            // воспроизвести при входе 75%
            toggleActions: 'play none play reverse'
        }
    });

gsap.fromTo('.first',
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
        duration: 0.4,
        // задержка между элементами
        stagger: 0.10,
        // плавность анимации
        ease: "power2.out",
        // элемент-триггер
        scrollTrigger: {
            trigger: '.price-list',
            // когда верх триггера достигнет 75% экрана сверху
            start: 'top 75%',
            // когда низ триггера достигнет 25% экрана сверху
            end: 'bottom 25%',
            // воспроизвести при входе 75%
            toggleActions: 'play none play reverse'
        }
    });

gsap.fromTo('.second',
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
        duration: 0.4,
        // задержка между элементами
        stagger: 0.10,
        // плавность анимации
        ease: "power2.out",
        // элемент-триггер
        scrollTrigger: {
            trigger: '.price-list',
            // когда верх триггера достигнет 75% экрана сверху
            start: 'top 75%',
            // когда низ триггера достигнет 25% экрана сверху
            end: 'bottom 25%',
            // воспроизвести при входе 75%
            toggleActions: 'play none play reverse'
        }
    });

gsap.fromTo('.third',
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
        duration: 0.4,
        // задержка между элементами
        stagger: 0.10,
        // плавность анимации
        ease: "power2.out",
        // элемент-триггер
        scrollTrigger: {
            trigger: '.price-list',
            // когда верх триггера достигнет 75% экрана сверху
            start: 'top 75%',
            // когда низ триггера достигнет 25% экрана сверху
            end: 'bottom 25%',
            // воспроизвести при входе 75%
            toggleActions: 'play none play reverse'
        }
    });

/* паралакс текста (explore__text) относительно изображения (explore)*/
gsap.registerPlugin(ScrollTrigger);
gsap.to(".explore__text", {
    yPercent: 40,
    ease: "none",
    scrollTrigger: {
        trigger: ".explore",
        // Когда верх explore достигнет низа viewport
        start: "top bottom",
        // Когда низ explore достигнет верха viewport
        end: "bottom top",
        // Плавное следование за скроллом
        scrub: true
    }
});

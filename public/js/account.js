document.addEventListener('DOMContentLoaded', function() {
    const tl = gsap.timeline();

    // появляется справа
    tl.fromTo('.slide__about-title', {
        x: 100,
        opacity: 0
    },
        {
            duration: 0.6,
            x: 0,
            opacity: 1,
            ease: "power2.out"
        })
    // пауза
    // появляется справа
    .fromTo('.slide__about_above-title', {
        x: 100,
        opacity: 0
    },
        {
            duration: 0.4,
            x: 0,
            opacity: 1,
            ease: "power2.out"
        })
});













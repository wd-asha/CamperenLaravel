// ==== GSAP + ScrollTrigger Registration ====
gsap.registerPlugin(ScrollTrigger);

// ==== LEFT BLOCK ANIMATION ====
gsap.timeline({
    scrollTrigger: {
        trigger: ".activity",
        start: "top 50%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
    }
})
    .from(".activity__title", {
        x: -60,
        opacity: 0,
        duration: 0.7,
        ease: "power3.out"
    })
    .from(".activity__caption", {
        x: -40,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
    }, "-=0.3")
    .from(".activity__bgimage2", {
        scale: 1.12,
        opacity: 0,
        duration: 0.9,
        ease: "power3.out"
    }, "-=0.4");

// ==== CARDS (MIDDLE + RIGHT) ====
gsap.from(".activity__item", {
    scrollTrigger: {
        trigger: ".activity",
        start: "top 50%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
    },
    y: 55,
    opacity: 0,
    scale: 1.06,
    duration: 1,
    stagger: 0.24,
    ease: "power2.out"
});

// ==== HOVER INTERACTION ====
gsap.utils.toArray(".activity__item").forEach(card => {

    card.addEventListener("mouseenter", () => {
        gsap.to(card, {
            scale: 1.03,
            duration: 0.3,
            ease: "power2.out"
        });
    });

    card.addEventListener("mouseleave", () => {
        gsap.to(card, {
            scale: 1,
            duration: 0.3,
            ease: "power2.out"
        });
    });

});

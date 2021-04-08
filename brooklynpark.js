var animation = gsap.timeline();

animation.from ("#sun", { duration: 1, x: 600});
animation.from ("#building", {x: -150, opacity: 0, duration: .75, delay: 1});

animation.from ("#logo", {y: 125, opacity: 0, duration: 1, delay: .5});









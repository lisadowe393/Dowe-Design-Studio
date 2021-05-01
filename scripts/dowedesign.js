gsap.to(".orange", {
  y: 130,
  repeat: -1,
  ease: "none",
  duration: 5
});

gsap.to(".pink", {
  y: -130,
  repeat: -1,
  ease: "none",
  duration: 5
});


gsap.to('#text1a, #text1b, #text1c', {
  xPercent: -75,
  repeat: -1,
  ease: "none",
  duration: 8
})

gsap.to('#text2a, #text2b, #text2c', {
  xPercent: -100,
  repeat: -1,
  ease: "none",
  duration: 8
})

gsap.to('#text3a, #text3b, #text3c', {
	xPercent: -85,
	repeat: -1,
	ease: "none",
	duration: 8
})

gsap.to('#text4a, #text4b, #text4c', {
  xPercent: -100,
  repeat: -1,
  ease: "none",
  duration: 8
});


gsap.from('#typing h2',{
  text: "",
  repeat: -1,
  ease: 0,
  duration: 3

})
   
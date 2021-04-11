
  var buttons = document.querySelectorAll (".dot")
  buttons.forEach (function(btn, i){
    btn.addEventListener("click", function(){
      gsap.to(".slider", {
        x:-i *800,
        overwrite:"auto"
    })

})
  })



  

gsap.to('#animals, #animals1', {
    xPercent: 100,
    repeat: -1,
    ease: "none",
    duration: 35

})


var animation = gsap.timeline({defaults:{ duration: 5, ease:'none'}})
animation.to('#jeep', {
  x: 1600,
  repeat: -1,
  ease: "none",
  duration: 6

})




  
  

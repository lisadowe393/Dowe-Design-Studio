
document.querySelectorAll('#panels img').forEach (function(target){
  console.log(target)
  var fadeIn = gsap.timeline({
    repeat: -1,
    delay: gsap.utils.random(0,4)
  })
  fadeIn.to(target, { 
    opacity: 0,
    duration: 2

  })

  fadeIn.to(target, { 
    opacity: 1,
    duration: 2

  })
})

gsap.to("#doilie, #doilie1, #doilie2, #doilie3 ", { 
  rotation: 360,
  repeat: -1,
  duration: 2
})






  
  

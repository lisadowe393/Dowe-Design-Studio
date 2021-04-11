function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  } 










var tl = gsap.timeline()
tl.from ("#right-ring", {
    opacity: 0, 
    scale: 0.5,
    duration: .5,
   
}) 

tl.from ("#left-ring", {
    opacity: 0, 
    scale: 0.5,
    duration: .5,
  
}) 

tl.from ("#right-pink", {
    opacity: 0, 
    scale: 0.5,
    duration: 1
   
})

tl.from ("#left-pink", {
    opacity: 0, 
    scale: 0.5,
    duration: .5
  
}) 

tl.from ("#right-orange", {
    opacity: 0, 
    scale: 0.5,
    duration: .5
})

tl.from ("#left-orange", {
    opacity: 0, 
    scale: 0.5,
    duration: .5
})

tl.from ("#pink-1", {
    opacity: 0, 
    scale: 0.5,
    duration: .5
})

tl.from ("#pink-2",{
    opacity: 0,
    scale: 0.5,
    duration: .5

})

tl.from ("#pink-3",{
    opacity: 0,
    scale: 0.5,
    duration: .5

})

tl.from ("#orange-1", {
    opacity: 0, 
    scale: 0.5,
    duration: .5
})

tl.from ("#orange-2", {
    opacity: 0, 
    scale: 0.5,
    duration: .5
})

tl.from ("#orange-3", {
    opacity: 0, 
    scale: 0.5,
    duration: .5
})
// gsap.from ( ".background-image", {
//     opacity: 0, 
//     scale: 0.5,
//     duration: 2
// }) 
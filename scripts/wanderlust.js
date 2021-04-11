
 var slides = document.querySelectorAll(".slider img");
  var dots = document.querySelectorAll(".dot");
  var slideIndex = 0;
  var slideWidth = 800
showSlides(slideIndex);

  function showSlides(n) {
    var i;
  slideIndex=n;

    // if (n > slides.length-1) {slideIndex = 0}
    // if (n < 0) {slideIndex = slides.length-1}
    // for (i = 0; i < slides.length; i++) {
    //     slides[i].style.display = "none";
    // }
    // for (i = 0; i < dots.length; i++) {
    //     dots[i].className = dots[i].className.replace(" active", "");
    // }
    // slides[slideIndex].style.display = "block";
    // dots[slideIndex].className += " active";
  
  gsap.to('.slider', {
    x: -slideWidth * slideIndex
  })} 


  dots.forEach((dot, index) => { 
    dot.addEventListener('click',function(){
 showSlides(index)
    })
});






gsap.to('#animals, #animals1', {
    xPercent: 100,
    repeat: -1,
    ease: "none",
    duration: 35

})




var animation = gsap.timeline({defaults:{ duration: 5, ease:'none'}})
animation.to('#jeep, #jeep1', {
  x: 1920,
  repeat: -1,
  ease: "none",
  duration: 6

})
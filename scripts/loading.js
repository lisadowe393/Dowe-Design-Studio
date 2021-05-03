document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
    document.getElementById('load').style.animation="fadeOut .5s";
    setTimeout(function(){ 
      document.getElementById('interactive');
      document.getElementById('load').style.visibility="hidden";
      document.body.scrollTop = document.documentElement.scrollTop = 0;
      document.getElementById('content').style.animation="fadeIn .5s";
      document.getElementById('content').style.visibility="visible";
    }, 500);
  } else {
    document.getElementById('load').style.visibility="visible";
    document.getElementById('content').style.visibility="hidden";
  }
}
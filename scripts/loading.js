document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
    document.getElementById('interactive');
    document.getElementById('load').style.visibility="hidden";
    document.getElementById('content').style.animation="fadeIn 2s";
    document.getElementById('content').style.visibility="visible";
  } else {
    document.getElementById('load').style.visibility="visible";
    document.getElementById('content').style.visibility="hidden";
  }
}
var x = document.getElementsByClassName("rightcontent");
function showdivsales() {
  x[3].style.display="none";
  x[2].style.display="none";
  x[1].style.display="none";
  x[0].style.display="inline-block";
}
function showdivlead() {
  x[3].style.display="none";
  x[2].style.display="none";
  x[0].style.display="none";
  x[1].style.display="inline-block";
}

function showdivleadscore() {
  x[3].style.display="none";
  x[1].style.display="none";
  x[0].style.display="none";
  x[2].style.display="inline-block";
}

function showdivassignlead() {
  x[0].style.display="none";
  x[1].style.display="none";
  x[2].style.display="none";
  x[3].style.display="inline-block";
}

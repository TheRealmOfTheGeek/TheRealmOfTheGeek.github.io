var st = $(window).scrollTop();
function elementInViewport2(el) {
  var top = el.offsetTop;
  var left = el.offsetLeft;
  var width = el.offsetWidth;
  var height = el.offsetHeight;

  while(el.offsetParent) {
    el = el.offsetParent;
    top += el.offsetTop;
    left += el.offsetLeft;
  }

  return (
    top < (window.pageYOffset + window.innerHeight) &&
    left < (window.pageXOffset + window.innerWidth) &&
    (top + height) > window.pageYOffset &&
    (left + width) > window.pageXOffset
  );
}


function scrollFunc() {
  if(elementInViewport2("#header")) {
    console.log("in view");
  } else {
    console.log("out of view");
  }
}

window.onload = function()
{
   document.body.onscroll =  scrollFunc;
}

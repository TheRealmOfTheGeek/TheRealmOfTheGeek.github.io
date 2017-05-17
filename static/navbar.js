var st = $(window).scrollTop();
function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    if(st => docViewBottom) {
      return 1;
    }
}


function scrollFunc() {
  if(isScrolledIntoView("#header")) {
    console.log("in view");
  } else {
    console.log("out of view");
  }
}

window.onload = function()
{
   document.body.onscroll =  scrollFunc;
}

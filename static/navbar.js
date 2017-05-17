function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
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

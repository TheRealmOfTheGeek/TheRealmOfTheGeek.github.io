function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

document.getElementsByTagName("body").addEventListener("scroll", scrollFunc);

function scrollFunc() {
  if(isScrolledIntoView("#header")) {
    console.log("in view");
  } else {
    console.log("out of view");
  }
}

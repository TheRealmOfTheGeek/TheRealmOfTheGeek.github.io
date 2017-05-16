$(document).ready(function(){
  if(window.location == "therotg.com/spinner/" || window.location == "therotg.com/spinner/index.html") {
    $("#favicon").attr("href","logo.png");
  } else {
    $("#favicon").attr("href","dev.png");
  }

});

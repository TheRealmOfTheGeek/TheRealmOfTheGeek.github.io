$(document).ready(function(){
  if(window.location == "https://therotg.com/spinner/" || window.location == "https://therotg.com/spinner/index.html") {
    $("#favicon").attr("href","logo.png");
  } else {
    $("#favicon").attr("href","dev.png");
  }

});

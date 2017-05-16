var t = 30;

var sTime = "";
var cd = new Audio('321.wav');

$(document).ready(function() {


  $("#start").click(function() {
    $("#start").hide();
    $("#end").show();
    alert("TIMER STARTED! (it will take a second for 30 to go to 29)");
    clicked = 1;

    sTime = setInterval(function() {
        if(t != 0) {
          if(t == 3) {
            cd.play();
          }

          document.getElementById('time').innerHTML = t + "";
          t = t-1;
        } else {
          t = 30;
          document.getElementById('time').innerHTML = t + "";
          alert("The response time is up, please pick a new user");

          clearInterval(sTime);
          $("#start").show();
          $("#end").hide();
        }

    }, 1000);

  });

  $("#end").click(function() {
    clearInterval(sTime);

    $("#start").show();
    $("#end").hide();
    t = 30;


  });

});

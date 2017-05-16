var t = 30;

var sTime = "";
var cd = new Audio('sfx/321.wav');
var end = new Audio('sfx/end.wav');

$(document).ready(function() {


  $("#start").click(function() {
    $("#start").hide();
    $("#end").show();
    alert("TIMER STARTED! (it will take a second for 30 to go to 29)");
    clicked = 1;

    sTime = setInterval(function() {
        if(t != 0) {
          if(t == 3 || t == 2 || t == 1) {
            cd.play();
          }

          document.getElementById('time').innerHTML = t + "";
          t = t-1;
        } else {
          t = 30;
          end.play();
          document.getElementById('time').innerHTML = t + "";

          clearInterval(sTime);
          $("#start").show();
          $("#end").hide();
          alert("The response time is up, please pick a new user");

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

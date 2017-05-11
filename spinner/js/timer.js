var t = 30;

$(document).ready(function() {
  $("#start").click(function() {
    alert("TIMER STARTED! !! Do NOT click the start button again !!");
    clicked = 1;

    var sTime = setInterval(function() {
        if(t != 0) {

          document.getElementById('time').innerHTML = t + "";
          t = t-1;
        } else {
          t = 30;
          document.getElementById('time').innerHTML = t + "";
          alert("The response time is up, please pick a new user");

          clearInterval(sTime);
        }

    }, 1000);

  });
});

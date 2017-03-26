var speed = 10;
var move = false;

var player = document.getElementById('player-container');
var mouseDown = 0;

document.body.onmousedown = function() {
  ++mouseDown;
}
document.body.onmouseup = function() {
  --mouseDown;
}

window.onload = function() {
  document.getElementById('start-btn').onclick = startGame;
  document.getElementById('end-btn').onclick = died;

  var url_loc = window.location + '';
  var ifdead = url_loc.split("?");

  if(ifdead[1] == "died") {
    startGame();
  }

}

var gameMech;

function startGame() {
  document.getElementById('start-window').style.display = "none";
  document.getElementById('end-window').style.display = "none";


  startLasers();
  gameMech = setInterval(function(){
      if($('#player-container').offset().top > 15) {
          if(mouseDown) {
              speed = speed - 2;
              player.style.top = speed;
          } else {
            if(($("#player-container").offset().top) > $('#game-container').height() - $("#player-container").height()) {
              if(mouseDown == false) {
                  speed = speed - 0;
                  player.style.top = speed;
              }
            } else {
                speed = speed + 2;
                player.style.top = speed;
            }
          }

      } else {
        if(mouseDown == false) {
            speed = speed + 2;
            player.style.top = speed;
        }
      }

  }, 5);


}

function died() {
  var url_loc = window.location + '';
  var ifdead = url_loc.split("?");
  if(ifdead.length > 1) {
    window.location = window.location;
  } else {
    window.location = window.location + "?died";
  }
}

function endGame() {

  clearInterval(gameMech);
  clearInterval(laserpickerMech);
  document.getElementById('end-window').style.display = "inline";
}

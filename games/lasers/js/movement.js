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

setInterval(function(){
  if($('#player-container').offset().top > 15) {
      if(mouseDown) {
          speed = speed - 2;
          player.style.top = speed;
      } else {
        if(($("#player-container").offset().top + 119) > $('#footer').height() - 10) {
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

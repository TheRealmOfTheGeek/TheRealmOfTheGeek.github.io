var laser = Math.floor(Math.random() * 6) + 1;
var lastlaser = 0;
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

var laserpickerMech;
var score = 0;

function startLasers() {
laserpickerMech = setInterval(function(){
  if(laser == lastlaser) {
        var random = Math.floor(Math.random() * $('.laser').length);
        $('.prelaser').hide().eq(random).show();

        sleep(1500).then(() => {
          if(gameOver == 1) {
            return;
          } else {
            $('.laser').hide().eq(random).show();
            $('.prelaser').hide();
            score = score + 1;
            document.getElementById('livescore-alive').innerHTML = score;
          } 
        });
      } else {
        var random = Math.floor(Math.random() * $('.laser').length);
        $('.prelaser').hide().eq(random).show();

        sleep(1500).then(() => {
          if(gameOver == 1) {
            return;
          } else {
            $('.laser').hide().eq(random).show();
            score = score + 1;
            document.getElementById('livescore-alive').innerHTML = score;
          }
        });
      }


  }, 2000);

}


function resetLasers() {
  document.getElementsByClassName('laser')[0].style.display = "none";
  document.getElementsByClassName('laser')[1].style.display = "none";
  document.getElementsByClassName('laser')[2].style.display = "none";
  document.getElementsByClassName('laser')[3].style.display = "none";
  document.getElementsByClassName('laser')[4].style.display = "none";

  document.getElementsByClassName('prelaser')[0].style.display = "none";
  document.getElementsByClassName('prelaser')[1].style.display = "none";
  document.getElementsByClassName('prelaser')[2].style.display = "none";
  document.getElementsByClassName('prelaser')[3].style.display = "none";
  document.getElementsByClassName('prelaser')[4].style.display = "none";

}

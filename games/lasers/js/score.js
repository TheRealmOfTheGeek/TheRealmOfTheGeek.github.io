var scoreKeeper;
var score = 0;

function startScore() {
      console.log("GAME STARTED");

  scoreKeeper = setInterval(function(){
    score = score + 1;
    document.getElementById('livescore').innerHTML = score;
    document.getElementById('livescore-alive').innerHTML = score;
  }, 1500);
}

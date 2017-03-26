var score = 0;
var scoreKeeper;

scoreKeeper = setInterval(function(){
  ++score;
  document.getElementById('livescore').innerHTML = score;
  document.getElementById('livescore-alive').innerHTML = score;
}, 2000);

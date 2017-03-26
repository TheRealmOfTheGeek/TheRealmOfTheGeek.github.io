var score = 0;
var scoreKeeper;

scoreKeeper = setInterval(function(){
  console.log("hi" + score);
  score = score + 1;
  document.getElementById('livescore').innerHTML = score;
  document.getElementById('livescore-alive').innerHTML = score;
}, 2000);

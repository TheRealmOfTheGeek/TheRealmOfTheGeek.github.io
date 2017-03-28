function setupLasers() {
  var height = document.getElementById('game-container').clientHeight / 6;
  document.getElementById('laser-shooter').style.height = height;
}


/*

// get margin
var m = document.getElementsByClassName('laser-shooter').currentStyle;
// Shooter + Margin
function setupLasers(amount) {

  var amtLasers = (document.getElementById('game-container').clientHeight / 125);

  var lasers = (Math.floor(amtLasers) / 2) + 2;
  console.log(lasers)
  for (i = 0; i < lasers; i++) {
    var shooter = document.createElement('div');
    shooter.className = 'laser-shooter';
    document.getElementById('game-container').appendChild(shooter);

    // Now create and append to iDiv
    var laser = document.createElement('div');
    laser.className = 'laser';
    laser.id = 'laserbeam';

    // Prelaser
    var prelaser = document.createElement('div');
    prelaser.className = 'prelaser';
    prelaser.id = 'prelaserbeam';

    shooter.appendChild(prelaser);
    shooter.appendChild(laser);
  }



}

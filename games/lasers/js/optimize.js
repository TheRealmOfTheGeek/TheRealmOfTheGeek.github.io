function setupLasers() {
  var height = $('#game-container').height() / 5;

  var lasrs = document.getElementsByClassName("laser-shooter");
  for(var i = 0; i < lasrs.length; i++)
  {
    $(lasrs[i]).height == height;
  }
  
  console.log("test version 1.1");
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
*/

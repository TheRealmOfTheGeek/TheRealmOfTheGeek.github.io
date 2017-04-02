function setupLasers() {
  var height = $('#game-container').height() / 6;

  var lasrs = document.getElementsByClassName("laser-shooter");
  for(var i = 0; i < lasrs.length; i++)
  {
    $(lasrs[i]).height == height;
    $(lasrs[i]).css({'margin-top':'8.5%'});

  }

  console.log("medium.js version 1.0");
}

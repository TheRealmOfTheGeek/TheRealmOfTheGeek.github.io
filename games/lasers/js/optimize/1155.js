function setupLasers() {
  var height = $('#game-container').height() / 6;

  var lasrs = document.getElementsByClassName("laser-shooter");
  for(var i = 0; i < lasrs.length; i++)
  {
    $(lasrs[i]).height == height;
    $(lasrs[i]).css({'margin-top':'10%'});

  }

  console.log("1155.js version 1.0");
}

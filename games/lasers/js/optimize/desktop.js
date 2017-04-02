function setupLasers() {
  var height = $('#game-container').height() / 5;

  var lasrs = document.getElementsByClassName("laser-shooter");
  for(var i = 0; i < lasrs.length; i++)
  {
    $(lasrs[i]).height == height;
  }

  console.log("test version 1.1");
}

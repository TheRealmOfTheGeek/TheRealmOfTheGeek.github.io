var laser = Math.floor(Math.random() * 6) + 1;
var laserinuse = 0;
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

setInterval(function(){
  var random = Math.floor(Math.random() * $('.laser').length);

  $('.prelaser').hide().eq(random).show();

  sleep(1500).then(() => {
    $('.laser').hide().eq(random).show();

  });


}, 1500);

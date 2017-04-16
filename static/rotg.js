var loaded = false;
window.onload = function() {
  console.log('Loaded ROTG JavaScript!');
  $.get('/testing');
  loaded = true;
}

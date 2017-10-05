$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;

        // Push the hash to the URL without forcing page refresh
        history.pushState(null, null, this.hash);

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800);
    }
  });
});

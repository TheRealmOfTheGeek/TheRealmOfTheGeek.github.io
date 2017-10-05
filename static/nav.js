$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
        console.log($(event.target).text());
        event.preventDefault();
        var hash = this.hash;

        // Push the hash to the URL without forcing page refresh
        history.pushState(null, null, this.hash);

        $('html, body').animate({
          scrollTop: $(hash).offset().top - $(".navbar").height()
        }, 800);
    }
  });
});

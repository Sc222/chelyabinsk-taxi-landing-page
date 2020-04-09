$(document).ready(function(){
    $("a").click(function(event) {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1200, function(){
                window.location.hash = hash;
            });
    });
});
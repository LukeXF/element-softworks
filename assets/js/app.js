 // Loads the navbar shrinking
$(window).scroll(function() {
    if ($(document).scrollTop() > 10) {
        $('nav').addClass('shrink');
        $('ul').addClass('shrink');
        $('.logo-fixed').removeClass('hidelogo');
    } else {
        $('nav').removeClass('shrink');
        $('ul').removeClass('shrink');
        $('.logo-fixed').addClass('hidelogo');
    }
});


$(".carousel").on('slide.bs.carousel', function(evt) {

   var caption = $('div.item:nth-child(' + ($(evt.relatedTarget).index()+1) + ') .carousel-caption');

   // This should work
   $('#backing').css('background-image','url(' + caption.html() + ')');
   $('#backing').css('display','-webkit-box !important');

});


// timing prolonging of carousel
$('.carousel').carousel({
  interval: 4000
})

// timing prolonging of carousel
$('.twitter .carousel').carousel({
  interval: 4000
})
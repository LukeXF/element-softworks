 // Loads the navbar shrinking
$(window).scroll(function() {
	if ($(document).scrollTop() > 10) {
		$('#top-nav').addClass('shrink');
		$('#top-nav ul').addClass('shrink');
		$('.logo-fixed').removeClass('hidelogo');
	} else {
		$('#top-nav').removeClass('shrink');
		$('#top-nav ul').removeClass('shrink');
		$('.logo-fixed').addClass('hidelogo');
	}
});

// setting up the background of homepage slider
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


// about us page display 
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

	// newly activated tab name
	var clickedTab = $( e.target ).html();

	// apply tab name to title
	$(".about-us-title").html( clickedTab ); 

})


// convert url to link to new tab
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown', function (e) {
    window.location.hash = e.target.hash;
})


// for linking to interal tabl inks
$("a[data-tab-destination]").on('click', function() {
    var tab = $(this).attr('data-tab-destination');
    $("#"+tab).click();
});


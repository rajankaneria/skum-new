$(function(){
	//scroll fire for nav
  	//$(window).scroll(function (event) {
     //   var scroll = $(window).scrollTop();
      /*  if(scroll >= 100)
        {
            $(".nav-bar").removeClass("transparent-nav");
            //$(".nav-bar").addClass("deep-orange darken-3");
        }
        else
        {
            //$(".nav-bar").removeClass("deep-orange darken-3");
            $(".nav-bar").addClass("transparent-nav");
        }
    });*/
	$('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true,
        duration: 100
    });
    $('.parallax').parallax();
    $(".button-collapse").sideNav();
});
$(function(){
    //on page load
    scrollCheck();


    $('#facilitySlider').carousel({
        fullWidth: true,
        indicators: true,
        duration: 200
    });
    $('#testimonialSlider').carousel({
        fullWidth: true,
        indicators: true,
        duration: 200
    });
    $("#testimonialSlider").css("height","300");


    $("#facilitySliderLeft").on("click",function(){
        $('#facilitySlider').carousel('prev');
    });
 
    $("#facilitySliderRight").on("click",function(){
        $('#facilitySlider').carousel('next');
    });
    
    setInterval(function(){
        $('.carousel.carousel-slider').carousel('next');
    }, 5000);



    setInterval(function(){ 
        $('#facilitySlider').carousel('next');
    }, 10000);


})
$(window).scroll(function (event) {
    scrollCheck();
});
   

function scrollCheck(){
    var scroll = $(window).scrollTop();
    if(scroll >= 100)
    {
        $(".nav-bar").removeClass("transparent-nav");
        $(".nav-bar").addClass("opaque-grey");
    }
    else
    {
        $(".nav-bar").removeClass("opaque-grey");
        $(".nav-bar").addClass("transparent-nav");
    }
}

$(function(){
    //on page load
    scrollCheck();
    $("#facilitySlider").carousel({
        fullWidth: true,
        indicators: true,
        duration: 100
    });

    $("#facilitySliderLeft").on("click",function(){
        $('#facilitySlider').carousel('prev');
    });

})
$(window).scroll(function (event) {
    scrollCheck();
});
   $("#facilitySliderRight").on("click",function(){
        $('#facilitySlider').carousel('next');
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

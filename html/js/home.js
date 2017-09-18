$(function(){
    //on page load
    scrollCheck();

    $('#mainSlider').carousel({
        fullWidth: true,
        indicators: false,
        duration: 200
    });
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
        $('#mainSlider').carousel('next');
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

function toggleEnquiry(){
    var position = $(".inquiry-section").css("bottom");
    if(position == "-135px"){
        $(".inquiry-section").animate({
            "bottom" : "0"
        },300);
    }else{
        $(".inquiry-section").animate({
            "bottom" : "-135"
        },300);
    }
}

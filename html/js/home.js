$(function(){
    scrollCheck();
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
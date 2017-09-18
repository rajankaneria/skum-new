$(function(){
	 $('.carousel.carousel-slider').carousel({fullWidth: true});
	$('.modal').modal();
	$(".activity-modal-trigger").on("click",function(){
		var target = $(this).data("target");
		$('#'+target).modal('open');
		$('#'+target+' .carousel.carousel-slider').carousel({fullWidth: true});
	});

});
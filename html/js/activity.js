$(function(){
	$('.slider').slider();
	$('.modal').modal();
	$(".activity-modal-trigger").on("click",function(){
		var target = $(this).data("target");
		$('#'+target).modal('open');
	});

});
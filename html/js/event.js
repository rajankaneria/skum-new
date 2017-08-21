$(function(){
	$(".event-section-link-item").on("click",function(){
		var target = $(this).data("target");
		console.log(target);
		$(".event-data").hide();
		$("#"+target).fadeIn(200);
	});
});
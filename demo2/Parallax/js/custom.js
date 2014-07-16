$(window).load(function(){
	
	$('.slider-default').simpslider();
	
	$('.slider-vertical').simpslider({
		horizontal: false
	});
	
	$('.slider-fade').simpslider({
		effect: 'fade'
	});
	
});
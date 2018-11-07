jQuery(document).ready(function($) {
	var i = 2;
	var len = $('.slider img').length;
	




	$('.cont').on('click', '.slider', function(){
		
		if(i<=len){
			$(this).replaceWith(" <div class='slider'> <img src='img/"+ i +".jpg'></div> ");
		i++;
	}
	else{
		i = 1;
		$(this).replaceWith(" <div class='slider'> <img src='img/"+ i +".jpg'></div> ");
		i++;
	}
	});


	$('.sidebar img[src="img/1.jpg"]').click(function(event) {

		$('.slider').replaceWith(" <div class='slider'><img src='img/1.jpg'></div> ");
	});

	$('.sidebar img[src="img/2.jpg"]').click(function(event) {

		$('.slider').replaceWith(" <div class='slider'><img src='img/2.jpg'></div> ");
	});

	$('.sidebar img[src="img/3.jpg"]').click(function(event) {

		$('.slider').replaceWith(" <div class='slider'><img src='img/3.jpg'></div> ");
	});

	$('.sidebar img[src="img/4.jpg"]').click(function(event) {

		$('.slider').replaceWith(" <div class='slider'><img src='img/4.jpg'></div> ");
	});

	$('.sidebar img[src="img/5.jpg"]').click(function(event) {

		$('.slider').replaceWith(" <div class='slider'><img src='img/5.jpg'></div> ");
	});

	$('.sidebar img[src="img/6.jpg"]').click(function(event) {

		$('.slider').replaceWith(" <div class='slider'><img src='img/6.jpg'></div> ");
	});

	$('.sidebar img[src="img/7.jpg"]').click(function(event) {

		$('.slider').replaceWith(" <div class='slider'><img src='img/7.jpg'></div> ");
	});
	$('.sidebar img[src="img/8.jpg"]').click(function(event) {

		$('.slider').replaceWith(" <div class='slider'><img src='img/8.jpg'></div> ");
	});
	$('.sidebar img[src="img/9.jpg"]').click(function(event) {

		$('.slider').replaceWith(" <div class='slider'><img src='img/9.jpg'></div> ");
	});
	$('.sidebar img[src="img/10.jpg"]').click(function(event) {

		$('.slider').replaceWith(" <div class='slider'><img src='img/10.jpg'></div> ");
	});


});
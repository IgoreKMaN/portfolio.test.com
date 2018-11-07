$(document).ready(function() {

	/* SLIDER */

	function SliderAutoHeight(){
		$(".slider img").each(function(){
			var slideImg = $(this).height();
			$(this).parents(".slider").css("height", slideImg + "px");
		

			var height_slider_item = slideImg/3.5;
		$('.slider_item_bottom img').css("height", height_slider_item + "px");
		
		
		});
	}

	

	setTimeout(function () {
		SliderAutoHeight();
	}, 300)

	

	// При изменении рзмера экрана назнаяаем новую высоту слайдеру зависимую от высоты картинок
	$(window).resize(function(){

		SliderAutoHeight();
		
	})

		/* SLIDER */
			$('.slider img').click(function() { 
				
				 var slider = $( this );

				slider.addClass('active');

				setTimeout(
					function () {

					slider.removeClass('active');
					slider.addClass('last');
					}, 900);
					if ($('.slider img:nth-child(1)').hasClass('last') && $('.slider img:nth-child(2)').hasClass('last') && $('.slider img:nth-child(3)').hasClass('last')){
						$('.slider img').removeClass('last');	
					}	
				
			});
		/*SLIDER*/
	
		/*ALBUM*/
	$('.album_block').click(function() {
		$('.album_block').css({
		'transform-origin': '0% 0%',
    	'transform': 'rotateY(-180deg)',
	 	'background': '#FFF',
	 	'transition': '1s'		
	});
	});
		/*ALBUM*/
	

	/*Листание альбома*/
	$(window).on('load', function() {
		
		var count_item = $('.item').find('img').length;
		var width_item = parseInt($('.item img').width());
		var height_item = parseInt($('.item img').height());
		var value_item = parseInt((height_item * 0.303) + (height_item *count_item));
		var step_item = parseInt((height_item * 0.303) + height_item);
		var value_step_item = 0;
		var right = width_item;
		var left = 0;
		var slideLeft = 0;
		var album_height = $('.album').height();
		//alert(value_item);

		$('.item img').each(function(index) {
			
			index+=1;
			if ($('.item img:nth-child('+index+')').height() >= $('.item img:nth-child('+index+')').width()){
			
			parseInt($('.item img:nth-child('+index+')').width(width_item*0.444));	
			}	
		});
			
	$('.album_page i.fa-share').click(function() {
		
		if (right <= /*value_item*/$('.item').height()) {
			$('.item').addClass('blur');
			setTimeout(function (argument) {
				$('.item').removeClass('blur')
			}, 500)
			value_step_item -= step_item;
			$('.item').animate({'margin-top': value_step_item + 'px'}, 500);
			right += step_item;
		}
		
	});

	$('.album_page i.fa-reply').click(function() {
		if (left != value_step_item) {
			$('.item').addClass('blur');
			setTimeout(function (argument) {
				$('.item').removeClass('blur')
			}, 500)
			value_step_item += step_item;
			$('.item').animate({'margin-top': value_step_item + 'px'}, 500);
			
			//left += step_item;
			right -= step_item;
		}else {
			$('.album_block').css({
		'transform-origin': '0% 0%',
    	'transform': 'rotateY(0deg)',
    	'background': '#28a8d7 url("../img/nakleika_na_albom.png") no-repeat left center',
	 	//'background': '#FFF',
	 	'transition': '1s'		
	});
		}

	});
		
	});
		
	/*Листание альбома*/
	
});

	


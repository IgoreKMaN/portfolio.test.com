<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Фильтры</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src='js/jquery-3.1.1.min.js'></script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js'></script>
	<script src="js/jquery.spincrement.js"></script>
	
	<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<script>
		jQuery(document).ready(function($) {
			
			if ($(document).scrollTop() > 10) {
					$('.menu').css({
						'background-color': '#fff',
						'transition': '.5s',
						'height':'13%'
					});
				}

			$(document).scroll(function(){
				
				if ($(document).scrollTop() > 10) {
					$('.menu').css({
						'background-color': '#fff',
						'transition': '.5s',
						'height':'13%'
					});
				}

				if ($(document).scrollTop() == 0) {
					$('.menu').css({
						'background-color': 'transparent',
						'transition': '.5s',
						'height':'15%'
					});
				}

			});
			
			

			/*эффект выплывания*/

			$('.content .text, .reviews .img').css({
				'position': 'relative',
				'left': '-800px'
			});

			if ($(document).scrollTop() > $('.content .text').offset().top - $('.content .text').width()) {
						$('.content .text').animate({ 'left': '0'}, 1000)
					}

			$(document).scroll(function(event) {
				if ($(document).scrollTop() > $('.content .text').offset().top - $('.content .text').width()) {
						$('.content .text').animate({ 'left': '0'}, 1000)
					}
			});		




			$('.content .img, .reviews .text').css({
				'position': 'relative',
				'right': '-800px'
				
			});
			
			if ($(document).scrollTop() > $('.content .img').offset().top - $('.content .img').width()) {
						$('.content .img').animate({ 'left': '0px',
							'display': 'block'
					}, 1000)
					}

			$(document).scroll(function(event) {
				if ($(document).scrollTop() > $('.content .img').offset().top - $('.content .img').width()) {
						$('.content .img').animate({ 'left': '0px',
							'display': 'block'
					}, 1000)
					}
			});		
				


			$(document).scroll(function(event) {
				if ($(document).scrollTop() > $('.counter1').offset().top - $('.counter1').width()) {
						$('.counter1').fadeIn(1000);
					}
			});		
			
			

			if ($(document).scrollTop() > $('.reviews .text').offset().top - $('.reviews .text').width()) {
						$('.reviews .text').animate({ 'left': '0'}, 1000)
					}

			$(document).scroll(function(event) {
				if ($(document).scrollTop() > $('.reviews .text').offset().top - $('.reviews .text').width()) {
						$('.reviews .text').animate({ 'left': '0'}, 1000)
					}
			});		


			
			if ($(document).scrollTop() > $('.reviews .img').offset().top - $('.reviews .img').width()) {
						$('.reviews .img').animate({ 'left': '0px',
							'display': 'block'
					}, 1000)
					}

			$(document).scroll(function(event) {
				if ($(document).scrollTop() > $('.reviews .img').offset().top - $('.reviews .img').width()) {
						$('.reviews .img').animate({ 'left': '0px',
							'display': 'block'
					}, 1000)
					}
			});

			

			$('.brand1, .brand3, .brand5').css({
				'position': 'relative',
				'left': '-700px'
			});
			
			if ($(document).scrollTop() > $('.brand').offset().top - $('.brand').width()) {
						$('.brand1, .brand3, .brand5').animate({ 'left': '0'}, 600)
					}

			$(document).scroll(function(event) {
				if ($(document).scrollTop() > $('.brand').offset().top - $('.brand').width()) {
						$('.brand1, .brand3, .brand5').animate({ 'left': '0'}, 600)
					}
			});		




			$('.brand2, .brand4, .brand6').css({
				'position': 'relative',
				'right': '-700px'
				
			});
			
			if ($(document).scrollTop() > $('.brand').offset().top - $('.brand').width()) {
						$('.brand2, .brand4, .brand6').animate({ 'left': '0px',
							'display': 'block'
					}, 600)
					}

			$(document).scroll(function(event) {
				if ($(document).scrollTop() > $('.brand').offset().top - $('.brand').width()) {
						$('.brand2, .brand4, .brand6').animate({ 'left': '0px',
							'display': 'block'
					}, 600)
					}
			});	




			/*Счетчик*/
				

				$(document).ready(function(){
    var show = true;
    var countbox = "#counter";
    $(window).on("scroll load resize", function(){
 
        if(!show) return false;                   // Отменяем показ анимации, если она уже была выполнена
 
        
 
        if( $(document).scrollTop() > $('.counter').offset().top - $('.counter').width() ){
            $(".count").spincrement({
                thousandSeparator: "",
                duration: 1200
            });
 
            show = false;
        }
    });
});
				

			/*Счетчик*/



			

			//$('.chevron-up').hide();
			function chevron_up() {
				if($(document).scrollTop() > $('.reviews').offset().top){
					$('.chevron-up').fadeIn(600);
				} 

				if($(document).scrollTop() < $('.content').offset().top){
				$('.chevron-up').fadeOut(400);
				} 
			}
			
			chevron_up();
			$(document).scroll(function(){
				chevron_up();
			})
				
				$('.chevron-up').on('click', function () {
					$('body').stop().animate({
                    'scrollTop' : $('body').offset().top}, 1000)
				});


				/*Заказать*/
					$('.request, .text-tel').on('click', function () {
					$('.okno').fadeIn(500);
				});

					$('.okno').on('click', function (event) {
						
					$('.okno').fadeOut(500);
				});
				/*Заказать*/

					
		});
	</script>
</head>
<body>

	

	<div class="menu">
	<div class="logo">
		<img src="img/logo.png" alt="">
	</div>
		<!--<div class="container">
			<ul>
				<li><a href='#brands'>Хит продаж</a></li>
				<li><a href='#feedback'>Фильтроэлементы</a></li>
				<li><a href='#filters'>Обратная связь</a></li>
				<li><a href='#contact'>Контакты</a></li>
			</ul>
		</div>-->
	<div class="text-tel ">
		<p>Позвоните нам +375 29 888 30 20</p>
	</div>
	<div class="clearfix"></div>
	</div>


	<div class="header container">  
		<div class="header_text">
    		<h3>Системы очистки воды</h3>
    		<h3>Сервисное обслуживание</h3>
    		<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, iste. Aliquid, possimus. Itaque atque inventore saepe sit dicta nam aut deleniti maiores nisi autem aperiam, pariatur, exercitationem error laudantium, cumque.</p>-->
    	</div>

      <div class="request">
      	<p>Заказать</p>
      </div>
  		
	</div>

	    <div class="chevron-down chevron-up">

    		<i class="fa fa-angle-up" aria-hidden="true"></i>
    	</div>

	<div class="content" id="info">
		<div class="container">
			<div class="row">
				<div class="text col-xs-12 col-sm-12 col-md-5 col-lg-5">
					<h1>Хит продаж в Республике Беларусь</h1>
					<p>Система очистки воды Аквафор Трио Норма умягчающий – это три ступени очистки, которые способны очистить жидкость от большинства загрязнений таких как песок, ржавчина, глина, и других механических примесей. Так же избавляя воду от солей жесткости защищает Ваши бытовые приборы от накипи. Система дает высокое качество очистки воды от хлора, органических примесей и тяжелых металлов при сравнительно небольших затратах на покупку и обслуживание. Компактные габариты системы позволят установить её на любой, даже самой маленькой кухне. Вы навсегда забудете о хлопьях накипи в кипяченой воде. Низкая стоимость позволяет менять проточные фильтры регулярно.</p>
				</div>
				<div class=" img col-xs-12 col-sm-12 col-md-7 col-lg-7">
					<img src="img/1233453453.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	
	<div class="container counter" >
			<div class="row">
				<div class="counter1">
					
					<div class="first_counter1">
							
					<i class="text-icon fa fa-ban col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>
					<i class="text-icon fa fa-superpowers col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>
					<i class="text-icon fa fa-clock-o col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>
					
					<div class="text-count1 col-xs-4 col-sm-4 col-md-4 col-lg-4">Защита от песка и ржавчины</div>
					
					<div class="text-count1 col-xs-4 col-sm-4 col-md-4 col-lg-4">Предотвращает появление накипи</div>
					
					<div class="text-count1  col-xs-4 col-sm-4 col-md-4 col-lg-4">Высокая скорость очистки воды</div>
					</div>

				<div class="second_counter1">
				
				<i class="text-icon fa fa-money col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>
				<i class="text-icon fa fa-arrows-h col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>
				<i class="text-icon fa fa-circle-o-notch col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>
					
					<div class="text-count1 col-xs-4 col-sm-4 col-md-4 col-lg-4">Низкая стоимость</div>
					
					<div class="text-count1 col-xs-4 col-sm-4 col-md-4 col-lg-4">Небольшие габариты</div>
					
					<div class="text-count1  col-xs-4 col-sm-4 col-md-4 col-lg-4">Стандартные модули размером 10sl</div>
				</div>

				

		

				</div>
					
				
			</div>
		</div>

		<div class="reviews">
		<div class="container">
			<div class="row">
				<div class=" img col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<img src="img/zamena.jpg" alt="">
				</div>
				<div class="text col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<!--<h1>Сервисное обслуживание</h1>-->
					
					<p> <i class="fa fa-tint" aria-hidden="true"></i>Самый популярный фильтр </p>
				</div>

				<div class="text col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<!--<h1>Сервисное обслуживание</h1>-->
					
					<p><i class="fa fa-tint" aria-hidden="true"></i>Нет накипи и ржавчины</p>
				</div>

				

				<div class="text col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<!--<h1>Сервисное обслуживание</h1>-->
					
					<p> <i class="fa fa-tint" aria-hidden="true"></i>Питьевая вода без кипячения</p>
				</div>

				<div class="text col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<!--<h1>Сервисное обслуживание</h1>-->
					
					<p><i class="fa fa-tint" aria-hidden="true"></i>Защита от аллергии</p>
				</div>
				
			</div>
		</div>
	</div>


	
	<div class="container" id="counter">
			<div class="row">
				<div class="counter">
					
					<div class="first_counter">
					<i class="fa fa-thumbs-o-up col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>					
					<i class="fa fa-handshake-o col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>
					<i class="fa fa-map-marker col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>


					<div class="counted col-xs-4 col-sm-4 col-md-4 col-lg-4"> <span class="count">1000</span>+</div>
					
					<div class="counted col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<span class="count">300</span>+</div>
					
					<div class="counted  col-xs-4 col-sm-4 col-md-4 col-lg-4"><span class="count">70</span></div>
					
					<div class="text-count col-xs-4 col-sm-4 col-md-4 col-lg-4"> ОТЗЫВОВ</div>
					
					<div class="text-count col-xs-4 col-sm-4 col-md-4 col-lg-4">ЗАКАЗОВ</div>
					
					<div class="text-count  col-xs-4 col-sm-4 col-md-4 col-lg-4">ГОРОДОВ РБ</div>
					</div>

				<div class="second_counter">
				<i class="fa fa-wrench col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>
			
				<i class="fa fa-users col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>
				<i class="fa fa-cogs col-xs-4 col-sm-4 col-md-4 col-lg-4 lab" aria-hidden="true"></i>


					<div class="counted col-xs-4 col-sm-4 col-md-4 col-lg-4"> <span class="count">750</span>+</div>
					
					<div class="counted col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<span class="count">35</span>+</div>
					
					<div class="counted  col-xs-4 col-sm-4 col-md-4 col-lg-4"><span class="count">15</span>+</div>
					
					<div class="text-count col-xs-4 col-sm-4 col-md-4 col-lg-4">СИСТЕМ НА ОБСЛУЖИВАНИИ</div>
					
					<div class="text-count col-xs-4 col-sm-4 col-md-4 col-lg-4">КОМАНДА</div>
					
					<div class="text-count  col-xs-4 col-sm-4 col-md-4 col-lg-4">ВАРИАНТОВ КОМПЛЕКТАЦИИ</div>
				</div>

				

		

				</div>
					
				
			</div>
		</div>



	<div class="brands" id="brands">
		<div class="container">

			<div class="row">
				<div class=" img col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class=" brand-caption col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
						Есть вопросы или сомнения?
					</div>
					<div class="brand brand1 brand-questions col-xs-12 col-sm-12 col-md-5 col-lg-5  ">
						<p>Надежно ли оборудование?</p>
					</div>
					<div class="brand brand2 brand-questions col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-offset-2 col-lg-offset-2">
						<p>Смогу ли я сам его подключить?</p>
					</div>
					
					<div class="brand brand3 brand-questions col-xs-12 col-sm-12 col-md-5 col-lg-5 ">
						<p>Платное ли обслуживание?</p>
					</div>
					<div class="brand brand4 brand-questions col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-offset-2 col-lg-offset-2">
						<p>Можно поменять комплектацию системы?</p>
					</div>
					<div class="brand brand5 brand-questions col-xs-12 col-sm-12 col-md-5 col-lg-5 ">
						<p>Сколько лет гарантия?</p>
					</div>
					<div class="brand brand6 brand-questions col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-offset-2 col-lg-offset-2">
						<p>Как менять внутренние элементы?</p>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="footer" id="contact">
		<div class="container">
			<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6	">
			<div class="feedback" id="feedback">
		
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<!--<h2>Форма обратной связи</h2>-->
					<form action="<?php echo "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];?>" method="post">
						
						<div class="back back1 col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="text" id="name" name="name_client" placeholder="Имя" required="required">
						</div>

						<div class="back back2 col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="email" id="email" name="email" placeholder="Email" required="required">
						</div>

						<div class="back back3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="tel" id="tel" name="tel" placeholder="Телефон" required="required">
						</div>

						<div class="back back3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<textarea name="message" id="message" cols="31" rows="2" placeholder="Сообщение"></textarea>
						</div>
						<div class="clearfix"></div>


						<div class="back col-xs-12 col-sm-12 col-md-4 col-lg-4
						col-md-offset-4
						col-lg-offset-4">
							<input  type="submit" value="Спросить">
						</div>

					</form>
				</div>
			
		
	</div>
	</div>


				<div class="contacts1 col-xs-6 col-sm-6 col-md-6-lg-6">
					<h2>Кирилл</h2>
					<p>Тел. 888-30-20 (МТС)</p>
				</div>
				<div class="contacts2 col-xs-6 col-sm-6 col-md-6-lg-6">
					<h2>Кирилл</h2>
					<p>Тел. 888-30-20 (МТС)</p>
				</div>
				
			</div>
		</div>
	</div>
		
	<div class="okno col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="modal_window" onclick="event.stopPropagation()">

			<div class="callback">
				<form action="<?php echo "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];?>" method="post">
						<div class="callback_item callback_item0 col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p>Вы можете оформить заказ по телефону</p>
							<p><span>+375 29 888 30 20</span></p>
							<p>или отправить нам сообщение</p>
						</div>

						<div class="callback_item callback_item1 col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="text" id="name" name="name_client" placeholder="Введите имя">
						</div>

						<div class="callback_item callback_item2 col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="email" id="email" name="email" placeholder="Email">
						</div>

						<div class="callback_item callback_item3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input type="tel" id="tel" name="tel" placeholder="Телефон">
						</div>

						<div class="callback_item callback_item4 col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<textarea name="message" id="message" cols="31" rows="3" placeholder="Сообщение"></textarea>
						</div>
						<div class="clearfix"></div>


						<div class="callback_item callback_item5 col-xs-12 col-sm-12 col-md-8 col-lg-8
						col-md-offset-2
						col-lg-offset-2">
							<input  type="submit" value="Заказать">
						</div>

					</form>
			</div>

		</div>
	</div>
	
</body>
</html>
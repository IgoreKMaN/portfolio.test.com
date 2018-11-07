<!DOCTYPE html>
<html>
	<head>
	<title>Album</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/font-style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
		<script src='js/bootstrap.min.js'></script>
		<script src='script/jquery-3.2.1.min.js'></script>
		
		<script>
			
<?php
$images = array();
$folder = 'img/all_photo/';
$array_to_js='var imgs=[';
$all_files = scandir($folder);
for ($i=2; $i<=sizeof($all_files)-1; $i++) {
    $array_to_js.='"'.$folder.$all_files[$i].'",';
}
echo substr($array_to_js,0,-1).'];';
?>
$(document).ready(function() {
		chgImg();
function chgImg() {
for (var i = 0; i <= imgs.length-1; i++) {
	
	$('.album_item > .item').append('<img src="'+imgs[i]+'" alt="">');
}
}		
			});

</script>
<script src='script/script.js'></script>
	</head>
	<body>
		
		<header>
			<div class="container">
				<div class="caption_top">
					<h1>IGOR & KATE</h1>
					<p>our wedding page</p>	
				</div>
				
				<div class="slider">
					<img src="img/slider/28.jpg" alt="slider">
					<img src="img/slider/_DSC1567.jpg" alt="slider">
					<img src="img/slider/_DSC1669.jpg" alt="slider" >
				</div>
				<!--<div class="slider_item_bottom">
						<div class="slider_item">
							<img src="img/l02.bmp" alt="slider-item-bottom">
						</div>
						
						<div class="slider_item">
							<img src="img/l03.bmp" alt="slider-item-bottom">
						</div>

						<div class="slider_item">
						<img src="img/l04.bmp" alt="slider-item-bottom">
						</div>
						<div class="clearfix"></div>
				</div>-->
				
			</div>

		</header>

		<section>
			<div class="container">
				<div class="row">
					<div class="caption">
						<h1>WE</h1>
					</div>
					<div class="description">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h2>IGOR</h2>
							<img src="img/we/_DSC1489.jpg" alt="igor">
							<p>Истинная любовь взаимности не требует, а тот, кто желает получить за свою любовь награду, попусту теряет время.</p>
							<p>Счастье — это когда тебя понимают, большое счастье — это когда тебя любят, настоящее счастье — это когда любишь ты.</p>
							<p>Сорваный цветок должен быть подарен, начатое стихотворение — дописано, а любимая женщина — счастлива, иначе и не стоило браться за то, что тебе не по силам.</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h2>KATE</h2>
								<p>Влечение сердец рождает дружбу, влечение ума — уважение, влечение тел — страсть, и только все три вместе рождают любовь.</p>
								<p>В любимом человеке нравятся даже недостатки, а в нелюбимом раздражают даже достоинства.</p>
								<p>Можно соблазнить мужчину у которого есть жена, можно соблазнить мужчину у которого любовница, но нельзя соблазнить мужчину у которого есть любимая женщина!</p>
								<img src="img/we/_DSC1458.jpg" alt="kate">
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="album">
							
							<div class="album_block">
								<h1>ALBUM</h1>
							</div>
							
							<div class="album_page">
								<div class="album_item">
									
									<div class="item">
										
									</div>

								</div>
								<i class="fa fa-reply" aria-hidden="true"></i>
								<i class="fa fa-share" aria-hidden="true"></i>
								
							</div>
							

						</div>
					</div>
				</div>
			</div>

			
		</footer>

	</body>
</html>	

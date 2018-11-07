<!DOCTYPE html>
<html>
	<head>
	<title>Album</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">

	
		<script src='js/bootstrap.min.js'></script>
		<script src='script/jquery-3.2.1.min.js'></script>
		<script type="text/javascript">
			$(document).ready(function() {
				
				var jsonString = '{"status":"ok","meta":{"count":1},"data":{"207420":{"gm_elo_rating_10":{"rank_delta":null,"rank":null,"value":962},"gm_elo_rating_8":{"rank_delta":null,"rank":null,"value":980},"fb_elo_rating_8":{"rank_delta":null,"rank":null,"value":1096},"fb_elo_rating_6":{"rank_delta":27,"rank":4448,"value":959},"exclude_reasons":{"fort_elo_rating_8":"inactivity","gm_elo_rating_8":"inactivity","gm_elo_rating":"limits","gm_elo_rating_6":"inactivity","gm_elo_rating_10":"limits"},"efficiency":{"rank_delta":-24,"rank":1753,"value":7527},"rating_fort":{"rank_delta":-6,"rank":1021,"value":1500.0},"fb_elo_rating_10":{"rank_delta":4,"rank":1307,"value":786},"clan_tag":"S_CIS","battles_count_avg_daily":{"rank_delta":-212,"rank":1579,"value":17.29},"global_rating_weighted_avg":{"rank_delta":-32,"rank":1774,"value":4232.83},"clan_id":207420,"fb_elo_rating":{"rank_delta":-8,"rank":1953,"value":899.94},"gm_elo_rating_6":{"rank_delta":null,"rank":null,"value":924},"wins_ratio_avg":{"rank_delta":-25,"rank":13784,"value":49.36},"clan_name":"Сталь Содружеств Независимых Государств","gm_elo_rating":{"rank_delta":null,"rank":null,"value":0.0},"battles_count_avg":{"rank_delta":-374,"rank":3331,"value":26275.32},"v10l_avg":{"rank_delta":-315,"rank":6245,"value":6.71},"global_rating_avg":{"rank_delta":-1044,"rank":10724,"value":5161.99}}}}';
	
				var cart = JSON.parse(jsonString);

				  var count_battles = parseInt(cart.data["207420"].battles_count_avg_daily.value);
				  var efficiency_klan = cart.data["207420"].efficiency.value;
				  var v10l = parseInt(cart.data["207420"].v10l_avg.value);
				  var wins_avg = cart.data["207420"].wins_ratio_avg.value;
				$('.klan_statistic .all_stat_klan:nth-child(1) p').text(count_battles);
				$('.klan_statistic .all_stat_klan:nth-child(2) p').text(efficiency_klan);
				$('.klan_statistic .all_stat_klan:nth-child(3) p').text(v10l);
				$('.klan_statistic .all_stat_klan:nth-child(4) p').text(wins_avg);


			});	
		</script>
		<script src='script/script.js'></script>
	</head>
	<body>
		
		<header>
		<div class="name_klan">
			<div class="logo">
				<img src="img/emblem_195x195.png" alt="">
			</div>
			<div class="container">
				<h1>[S_CIS]</h1>
			</div>
						
			
		</div>
	</header>

		<section>
		<div class="klan">
			<div class="container">
				<div class="row">
					<div class="our_klan">
						<h2>Состав клана</h2>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="in_klan">
							<img src="img/34544fc5c5cc123df2d0e1b5e3578c6b.jpg" alt="">
							<div class="description">
								<h3>Виктор</h3>
								<p class="nik">Nik</p>
								<p>Генерал</p>
								<p>Командир взвода</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="in_klan">
							<img src="img/34544fc5c5cc123df2d0e1b5e3578c6b.jpg" alt="">
							<div class="description">
								<h3>Виктор</h3>
								<p class="nik">Nik</p>
								<p>Генерал</p>
								<p>Командир взвода</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="in_klan">
							<img src="img/34544fc5c5cc123df2d0e1b5e3578c6b.jpg" alt="">
							<div class="description">
								<h3>Виктор</h3>
								<p class="nik">Nik</p>
								<p>Генерал</p>
								<p>Командир взвода</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="in_klan">
							<img src="img/34544fc5c5cc123df2d0e1b5e3578c6b.jpg" alt="">
							<div class="description">
								<h3>Виктор</h3>
								<p class="nik">Nik</p>
								<p>Генерал</p>
								<p>Командир взвода</p>
							</div>
						</div>
					</div>
					</div>

					<div class="statistic">
							<h2>Статистика</h2>
						<div class="klan_statistic">
							<div class=" all_stat_klan col-xs-12 col-sm-12 col-md-3 col-lg-3">
								
									<h3>Среднее количество боев в день</h3>
									<p></p>
								
						</div>

						<div class="all_stat_klan col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<h3>Показатель клановой эффективности</h3>
									<p></p>
						</div>

						<div class="all_stat_klan col-xs-12 col-sm-12 col-md-3 col-lg-3">
								
								<h3>Среднее количество техники 10 уровня на игрока клана</h3>
								<p></p>
								
						</div>

						<div class="all_stat_klan col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<h3>Средний процент побед клана</h3>
								<p></p>
						</div>

						  </div>
					</div>
				</div>			
				
				<div class="vilazki">
					<h2>Вылазки</h2>
					<div class="info">
						<div class="reid">
							<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
								<table>
									<tr>
										<th>Когда</th>
										<th>Время</th>
										<th>Куда</th>
									</tr>
									<tr>
										<td>
											<?php
											echo date('d.m.Y');
											?>
									
										</td>
										<td>21:00</td>
										<td>Укрепы</td>
									
										
									</tr>
									<tr>
										
										<td>
											<?php
												echo date('d.m.Y', time() - 86400);
											?>	
										</td>
										<td>21:00</td>
										<td>Укрепы</td>

									</tr>
									<tr>
										<td>
											<?php
											echo date('d.m.Y ', time() + 86400 * 2);
											?>
										</td>
										<td>21:00</td>
										<td>Глобальная карта</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

		<footer>
		<div class="description">
			<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="description_klan">
								<h3>О нас</h3>
								<p>Клан не ставит перед собой целей по захвату всего мира. Однако мы регулярно участвуем в высадках и собираем свою роту. Мы, S_CIS, играем в своё удовольствие днем на работе и ночью дома :) Приглашаем в ряды S_CIS жизнерадостных суицидников, готовых с легкостью расстаться с жизнью ради подвига!</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="description_klan">
								<h3>Правила клана</h3>
								<p>
									<ol>
										<li>Соблюдать правила установленные пользовательским соглашением WOT;</li>
										<li>Не осквернять своим поведением честь и репутацию клана; </li>
										<li>Уважительно относиться ко всем участникам клана;</li>
										<li>Беспрекословно подчиняться командиру роты в бою; </li>
										<li>Присутствовать в тренировочных боях.</li>
									</ol>
								</p>
							</div>
						</div>
					</div>
				</div>	
		</div>
	</footer>

	</body>
</html>	

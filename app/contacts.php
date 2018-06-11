<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<meta property="og:image" content="img/opengraph.jpg">

	<link rel="icon" href="img/favicon/favicon.png" type="image/png">
	
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<title>Контакты</title>

	<link rel="stylesheet" href="css/styles.css">

</head>

<body>
	
	<div class="page page__contacts">	

		<!-- header -->
		<?php include("header.php");?>
		<!-- /.header -->


		<!-- breadcrumbs -->
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
					<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
						<a rel="nofollow" itemprop="item" title="Главная" href="#">
							<span itemprop="name">Главная</span>
							<meta itemprop="position" content="1">
						</a>
					</span>
					<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
						<a rel="nofollow" itemprop="item" title="Контакты" href="#">
							<span itemprop="name">Контакты</span>
							<meta itemprop="position" content="2">
						</a>
					</span>
					<i class="breadcrumbs-back"></i>
				</div>
			</div>
		</div>
		<!-- /.breadcrumbs -->



		<!-- section contacts -->
		<section class="contacts">
			<div class="container">
				
				<h2 class="title">Контакты</h2>
				<div class="contacts__block">
					
					<div class="contacts__item">
						<p class="contacts__text_1 contacts__text_style3">Розничный отдел</p>
						<p class="contacts__text_2">Тел. <span class="contacts__text_color1">+372 6 555 089</span></p>
						<p class="contacts__text_2"><a href="#"><span class="contacts__text_color2">info@a-rostok.ee</span></a></p>
					</div>
					
					<div class="contacts__item">
						<p class="contacts__text_1 contacts__text_style2">Оптовый отдел</p>
						<p class="contacts__text_2">Тел. <span class="contacts__text_color1">+372 6 218 991</span></p>
						<p class="contacts__text_2">Моб. <span class="contacts__text_color1">+372 55 51 4525</span></p>	
						<p class="contacts__text_2"><a href="#"><span class="contacts__text_color2">info@a-rostok.ee</span></a></p>
						<p class="contacts__text_2"><a href="#"><span class="contacts__text_color2">juri.radionov@a-rostok.ee</span></a></p>
					</div>
					
					
					<div class="contacts__item">
						<p class="contacts__text_1 contacts__text_style3">Авторемонт</p>
						<p class="contacts__text_2">Моб. <span class="contacts__text_color1">+372 55 56 6679</span></p>
						<p class="contacts__text_2"><span class="contacts__text_color1">+372 51 50 249</span></p>	
					</div>
					
					<div class="contacts__item">
						<p class="contacts__text_1 contacts__text_style3">Адрес</p>
						<p class="contacts__text_2"><span class="contacts__text_style1">A-ROSTOK OÜ</span></p>							
						<p class="contacts__text_2">Рег. код: <span class="contacts__text_color1">10557703</span></p>
						<p class="contacts__text_2">Адрес: <span class="contacts__text_color1">Punane 38a, 13619 Tallinn</span></p>	
					</div>
					
					<div class="contacts__item">
						<p class="contacts__text_1 contacts__text_style3">Время работы</p>
						<p class="contacts__text_2">Пн. - Пт.: <span class="contacts__text_color1">09.00 - 18.00</span></p>	
						<p class="contacts__text_2">Сб.: <span class="contacts__text_color2">временно закрыто</span></p>
					</div>
					
					<div class="contacts__item">
						<div class="contacts__imgcode">
							<img src="img/qrkod.jpg" alt="код" class="contacts__imgcode">
						</div>
					</div>

				</div>
				<!-- /.contacts__block -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.contacts -->



		<!-- section mapCont -->
		<section class="mapCont">
			<div class="container">
				
				<div id="map"></div>

			</div>
			<!-- /.container -->
		</section>
		<!-- /.mapCont -->


		<!-- footer -->
		<?php include("footer.php");?>
		<!-- /.footer -->



		<div class="overlay"></div>


	</div>
	<!-- /.page__contacts -->








	<!-- Jquery с облака и замена в случае отсутствия доступа к облаку  -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>

	<script src="js/scripts.js"></script>

	<script src="js/contacts-map.js"></script>

	<script defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCiD8i2sqYyKRf1aq5jHNg9T6kVjpux2A&amp;v=3.31&amp;language=en&amp;libraries=places,geometry&amp;callback=createMap"></script>

</body>
</html>

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

	<title>Подгруппа</title>

	<link rel="stylesheet" href="css/styles.css">

</head>

<body>
	
	<div class="page page__subgroup">	

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
						<a rel="nofollow" itemprop="item" title="BMW" href="#">
							<span itemprop="name">BMW</span>
							<meta itemprop="position" content="2">
						</a>
					</span>
					<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
						<a itemprop="item" title="" href="#">
							<span itemprop="name">5</span>
							<meta itemprop="position" content="3">
						</a>
					</span> 
					<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
						<a itemprop="item" title="520i" href="#">
							<span itemprop="name">520i</span>
							<meta itemprop="position" content="4">
						</a>
					</span> 
					<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
						<a itemprop="item" title="Фильтры" href="#">
							<span itemprop="name">Фильтры</span>
							<meta itemprop="position" content="5">
						</a>
					</span> 
					<i class="breadcrumbs-back"></i>
				</div>
			</div>
		</div>
		<!-- /.breadcrumbs -->




		<!-- section subgroup -->
		<section class="subgroup">
			<div class="container">

			<h2 class="title group__head">
				<span>Фильтры</span>:
				<span>BMW</span>
				<span>520i</span>
				<img class="table__head-brand" src="img/brands/brand4.png" alt="brand">
			</h2>

				
			<div class="subgroup__block">
				

				<div class="row">
					
					<div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
						<div class="subgroup__wrapPicture">	
							<div class="subgroup__wrapImg">	
								<img src="img/bmw-filter.png" alt="фильтр" class="subgroup__img">
							</div>
							<p class="subgroup__textImg">Фильтры</p>
						</div>


					</div>

					<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">

						<div class="subgroup__optionProductWrap">
							<ul  class="subgroup__optionProduct">	

								<li >Масляный</li>
								<li class="activeOption">Топливный</li>
								<li>Воздушный</li>
							</ul>
						</div>

					</div>


					<div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">

						<div class="subgroup__otherWrap">	

							<p class="subgroup__text1">	Другие разделы:</p>
							<ul class="subgroup__other">	
								<li><a href="#">Внутренняя отделка</a></li>
								<li><a href="#">Двигатель</a></li>
								<li><a href="#">Детали для сервиса / ТО / ухода</a></li>
								<li><a href="#">Колёса / шины</a></li>
								<li><a href="#">Комплектующие</a></li>
								<li><a href="#">Коробка передач</a></li>
								<li><a href="#">Ступенчатая коробка передач</a></li>
								<li><a href="#">Масла</a></li>
								<li><a href="#">Кузов</a></li>
								<li><a href="#">Подвеска / амортизация</a></li>
								<li><a href="#">Подвеска оси / система</a></li>
								<li><a href="#">подвески / колеса</a></li>
								<li><a href="#">Привод колеса</a></li>
								<li><a href="#">Система зажигания / накаливания</a></li>
								<li><a href="#">Система охлаждения</a></li>
								<li><a href="#">Система очистки окон</a></li>
								<li><a href="#">тормозная система</a></li>
								<li><a href="#">Электрика</a></li>
								<li class="activeOther"><a href="#">Фильтры</a></li>
							</ul>

						</div>
					</div>
				</div>


			</div>
			<!-- /.subgroup__block -->

			</div>
			<!-- /.container -->
		</section>
		<!-- /.subgroup -->




		<!-- footer -->
		<?php include("footer.php");?>
		<!-- /.footer -->



		<div class="overlay"></div>


	</div>
	<!-- /.page__subgroup -->








	<!-- Jquery с облака и замена в случае отсутствия доступа к облаку  -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>

	<script src="js/scripts.js"></script>

</body>
</html>

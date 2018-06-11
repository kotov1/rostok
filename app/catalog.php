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

	<title>Каталог</title>

	<link rel="stylesheet" href="css/styles.css">

</head>

<body>
	
	<div class="page page__catalog">	

		<!-- header -->
		<?php include("header.php");?>
		<!-- /.header -->
	

		<!-- breadcrumbs -->
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
					<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
						<a rel="nofollow" itemprop="item" title="Главная" href="index.php">
							<span itemprop="name">Главная</span>
							<meta itemprop="position" content="1">
						</a>
						</span>
						<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
						<a rel="nofollow" itemprop="item" title="Каталог" href="#">
							<span itemprop="name">Каталог</span>
							<meta itemprop="position" content="2">
						</a>
						</span>
						<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
						<a rel="nofollow" itemprop="item" title="Шины и диски" href="#">
							<span itemprop="name">Шины и диски</span>
							<meta itemprop="position" content="3">
						</a>
						</span>
						<i class="breadcrumbs-back"></i>
				</div>
			</div>
		</div>
		<!-- /.breadcrumbs -->


		<section class="categories">
			<div class="container">
				<div class="section__inner">
					<h2 class="title">Каталог</h2>
					<div class="categories__block categories__block--wrap">
					
						<a href="#" class="categories__item">
							<div class="categories__img"><img class="img-responsive" src="img/icons/wheels/wheels1.png" alt="icon"></div>
							<div class="categories__descr">Зимние шины</div>
						</a>
	
						<a href="#" class="categories__item">
							<div class="categories__img"><img class="img-responsive" src="img/icons/wheels/wheels2.png" alt="icon"></div>
							<div class="categories__descr">Летние шины</div>
						</a>
					
						<a href="#" class="categories__item">
							<div class="categories__img"><img class="img-responsive" src="img/icons/wheels/wheels3.png" alt="icon"></div>
							<div class="categories__descr">Универсальные шины</div>
						</a>
					
						<a href="#" class="categories__item">
							<div class="categories__img"><img class="img-responsive" src="img/icons/wheels/wheels4.png" alt="icon"></div>
							<div class="categories__descr">Литые диски</div>
						</a>

						<a href="#" class="categories__item">
							<div class="categories__img"><img class="img-responsive" src="img/icons/wheels/wheels5.png" alt="icon"></div>
							<div class="categories__descr">Летние шины</div>
						</a>

						<a href="#" class="categories__item">
							<div class="categories__img"><img class="img-responsive" src="img/icons/wheels/wheels6.svg" alt="icon"></div>
							<div class="categories__descr">Аксессуары</div>
						</a>
					
					</div>
					<!-- /.categories__block -->
	
	
				</div>
				<!-- /.section__inner -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.categories -->
	
	
	<!-- catalog -->
	<section class="table-section">
		<div class="container">

			<table class="table">
				
				<!-- category 1 title -->
				<tr class="table-title">
					<th colspan="3">Шины и диски</th>
					<th class="table-filter table-filter1">Цена 
						<i class="table-filter-arrow table-filter-top"></i><i class="table-filter-arrow table-filter-bottom active"></i>
					</th>
					<th class="table-filter table-filter2">Наличие
						<i class="table-filter-arrow table-filter-top"></i><i class="table-filter-arrow table-filter-bottom"></i>
					</th>
				</tr>
				<!-- category 1 title -->
			
				<!-- category 1 row 1 -->
				<tr>
					<td class="table-img"><img src="img/wheel1.png" alt="item-img"></td>
					<td class="table-advance">
						<span class="table-info">Garrett</span>
						<span class="table-number">123456789</span>
					</td>
					<td class="table-main-info">
						<span class="table-item">Гидрофильтр, автоматическая коробка передач (HX 84D).</span>
					</td>
					<td class="table-price">99,99 €</td>
					<td class="table-quantity">
						<div class="table-quantity-status table-quantity-status--available">В наличии</div>
						<div class="table-quantity-result">
							<span class="minus">-</span>
							<input class="quantity table-quantity-result-input" type="text" name="quantity" value="" placeholder="0">
							<span class="plus">+</span>
						</div>
						<button type="button" class="btn table-btn table-addCart">В корзину</button>
					</td>
				</tr>
				<!-- category 1 row 1 -->
				
				<!-- category 1 row 2 -->
				<tr>
					<td class="table-img"><img src="img/wheel2.png" alt="item-img"></td>
					<td class="table-advance">
						<span class="table-info">Garrett</span>
						<span class="table-number">123456789</span>
					</td>
					<td class="table-main-info">
						<span class="table-item">Гидрофильтр, автоматическая коробка передач (HX 84D).</span>
					</td>
					<td class="table-price">99,90 €</td>
					<td class="table-quantity">
						<div class="table-quantity-status table-quantity-status--available">В наличии</div>
						<div class="table-quantity-result">
							<span class="minus">-</span>
							<input class="quantity table-quantity-result-input" type="text" name="quantity" value="" placeholder="0">
							<span class="plus">+</span>
						</div>
						<button type="button" class="btn table-btn table-addCart">В корзину</button>
					</td>
				</tr>
				<!-- category 1 row 2 -->

				<!-- category 1 row 3 -->
				<tr>
					<td class="table-img"><img src="img/wheel3.png" alt="item-img"></td>
					<td class="table-advance">
						<span class="table-info">Garrett</span>
						<span class="table-number">123456789</span>
					</td>
					<td class="table-main-info">
						<span class="table-item">Гидрофильтр, автоматическая коробка передач (HX 84D).</span>
					</td>
					<td class="table-price">99,90 €</td>
					<td class="table-quantity">
						<div class="table-quantity-status table-quantity-status--notAvailable">Нет в наличии</div>
						<div class="table-quantity-result">
							<span class="minus">-</span>
							<input class="quantity table-quantity-result-input" type="text" name="quantity" value="" placeholder="0">
							<span class="plus">+</span>
						</div>
					</td>
				</tr>
				<!-- category 1 row 3 -->
			
			
			</table>

			<div class="table-purchase">Товар успешно добавлен в корзину</div>

		</div>
		<!-- /.container -->
	</section>
	<!-- /.catalog -->




	
	
		<!-- footer -->
		<?php include("footer.php");?>
		<!-- /.footer -->
	
	
	
		<div class="overlay"></div>


		</div>
		<!-- /.page__catalog -->








	<!-- Jquery с облака и замена в случае отсутствия доступа к облаку  -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>

	<script src="js/scripts.js"></script>

</body>
</html>

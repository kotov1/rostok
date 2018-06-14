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

	<title>История поиска машин</title>

	<link rel="stylesheet" href="css/styles.css">

</head>

<body>
	
	<div class="page page__history">	

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
						<a rel="nofollow" itemprop="item" title="История поиска машин" href="orders.php">
							<span itemprop="name">История поиска машин</span>
							<meta itemprop="position" content="2">
						</a>
						</span>
						<i class="breadcrumbs-back"></i>
				</div>
			</div>
		</div>
		<!-- /.breadcrumbs -->
	
	
	<section class="history history-cars">
		<div class="container">

			<h2 class="title">История поиска машин</h2>

				<div class="table-filter-wrap">
					<select name="filter" class="select" placeholder="Год выпуска">
						<option value="Модель">Модель</option>
						<option value="Год выпуска">Год выпуска</option>
						<option value="кВт">кВт</option>
						<option value="ЛС">ЛС</option>
						<option value="см3">см3</option>	
						<option value="Клапаны">Клапаны</option>
						<option value="Код двигателя">Код двигателя</option>
						<option value="Топливо">Топливо</option>
					</select>
				</div>

			<div class="history-cars__table-wrap" data-simplebar data-simplebar-auto-hide="false">
				<table class="history-table history-cars__table">
					<tr>
						<th></th>
						<th>Модель</th>
						<th>Год выпуска</th>
						<th>кВт</th>
						<th>ЛС</th>
						<th>см<sup>3</sup></th>
						<th>Клапаны</th>
						<th>Код двигателя</th>
						<th>Топливо</th>
						<th></th>
						<th></th>
					</tr>
					<tr>
						<td>BMW</td>
						<td><a href="#" class="car-model-link">520 i</a></td>
						<td>10.10 -</td>
						<td>135</td>
						<td>134</td>
						<td>1997</td>
						<td>4</td>
						<td>N20 B20 A. N20 B2Q E</td>
						<td>Бензин</td>
						<td><i class="table-add-del table-add"></i></td>
						<td><i class="table-add-del table-del"></i></td>
					</tr>
					<tr>
						<td>BMW</td>
						<td><a href="#" class="car-model-link">523 i</a></td>
						<td>11.09 - 08.11</td>
						<td>150</td>
						<td>204</td>
						<td>2996</td>
						<td>6</td>
						<td>N53 B30 A</td>
						<td>Бензин</td>
						<td><i class="table-add-del table-add"></i></td>
						<td><i class="table-add-del table-del"></i></td>
					</tr>
					<tr>
						<td>BMW</td>
						<td><a href="#" class="car-model-link">528 i</a></td>
						<td>10.10 -</td>
						<td>130</td>
						<td>245</td>
						<td>1997</td>
						<td>4</td>
						<td>N53 B30 A</td>
						<td>Бензин</td>
						<td><i class="table-add-del table-add"></i></td>
						<td><i class="table-add-del table-del"></i></td>
					</tr>
					<tr>
						<td>BMW</td>
						<td><a href="#" class="car-model-link">528 i xDrive</a></td>
						<td>03 11 -</td>
						<td>130</td>
						<td>245</td>
						<td>1997</td>
						<td>4</td>
						<td>N53 B30 A</td>
						<td>Бензин</td>
						<td><i class="table-add-del table-add"></i></td>
						<td><i class="table-add-del table-del"></i></td>
					</tr>
				</table>
				</div>
				<!-- /.history-cars__table-wrap -->

				<div class="table-card">

					<div class="table-card-nav">
						<select name="car-brand" class="car-brand select" placeholder="BMW">
							<option value="BMW">BMW</option>
							<option value="Audi">AudiAudi</option>
							<option value="Chrysler">Chrysler</option>
						</select>
						<div class="table-card-arrows">
							<i class="table-card-move table-card-prev"></i><i class="table-card-move table-card-next table-card-move--active"></i>
						</div>
					</div>

					<table>
						<tr>
							<td>Модель</td>
							<td>520 i</td>
						</tr>
						<tr>
							<td>Год выпуска</td>
							<td>10.10 -</td>
						</tr>
						<tr>
							<td>кВт</td>
							<td>135</td>
						</tr>
						<tr>
							<td>ЛС</td>
							<td>134</td>
						</tr>
						<tr>
							<td>см<sup>3</sup></td>
							<td>1997</td>
						</tr>
						<tr>
							<td>Клапаны</td>
							<td>4</td>
						</tr>
						<tr>
							<td>Код двигателя</td>
							<td>N20 B20 A. N20 B2Q E</td>
						</tr>
						<tr>
							<td>Топливо</td>
							<td>Бензин</td>
						</tr>
					</table>

					<div class="table-card-bottom">
						<span class="table-card-add">
							<span class="table-card-add-ic">+</span>
							<span class="table-card-add-text">Добавить в мои машины</span>
						</span>
						<button type="button" class="table-card-del"><i class="close-ic"></i></button>
					</div>

					<button class="table-card-close"></button>

				</div>
				<!-- /.table-card -->

		</div>
		<!-- /.container -->
	</section>
	<!-- /.history-cars -->



	
	
		<!-- footer -->
		<?php include("footer.php");?>
		<!-- /.footer -->
	
	
	
		<div class="overlay"></div>


		</div>
		<!-- /.page__history -->








	<!-- Jquery с облака и замена в случае отсутствия доступа к облаку  -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>

	<script src="js/scripts.js"></script>

</body>
</html>

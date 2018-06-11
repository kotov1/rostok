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

	<title>История заказов</title>

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
						<a rel="nofollow" itemprop="item" title="История заказов" href="orders.php">
							<span itemprop="name">История заказов</span>
							<meta itemprop="position" content="2">
						</a>
						</span>
						<i class="breadcrumbs-back"></i>
				</div>
			</div>
		</div>
		<!-- /.breadcrumbs -->
	
	
	<section class="history-orders">
		<div class="container">

			<div class="history-orders__table-wrap" data-simplebar data-simplebar-auto-hide="false">
				<table class="history-orders__table">
					<tr>
						<th>Номер</th>
						<th>Дата</th>
						<th>Сумма</th>
						<th>Оплата</th>
						<th>Трек-номер</th>
					</tr>
					<tr>
						<td>123</td>
						<td><a href="#" class="history-orders-date">26.04.2018</a></td>
						<td>299,99 €</td>
						<td><span class="history-orders-status">оплачен</span></td>
						<td>123156456748</td>
					</tr>
					<tr>
						<td>123</td>
						<td><a href="#" class="history-orders-date">27.04.2018</a></td>
						<td>120,00 €</td>
						<td><a href="#" class="history-orders-status history-orders-status-pay">оплатить</a></td>
						<td></td>
					</tr>
				</table>
				</div>

		</div>
		<!-- /.container -->
	</section>
	<!-- /.history-orders -->



	
	
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

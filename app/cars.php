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

	<title>Личные данные</title>

	<link rel="stylesheet" href="css/styles.css">

</head>

<body>
	
	<div class="page page__cars">	

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
						<a rel="nofollow" itemprop="item" title="Мои машины" href="#">
							<span itemprop="name">Мои машины</span>
							<meta itemprop="position" content="2">
						</a>
						</span>
						<i class="breadcrumbs-back"></i>
				</div>
			</div>
		</div>
		<!-- /.breadcrumbs -->
	
	
	<section class="cars">
		<div class="container">

			<h2 class="title">Мои машины</h2>

				<table class="cars__table">
					
					<!-- category 1 title -->
					<tr class="table-title">
						<th>Автомобиль</th>
						<th>VIN</th>
					</tr>
					<!-- category 1 title -->
				
					<!-- category 1 row 1 -->
					<tr>
						<td>BMW / 3 / 320i</td>
						<td>
							<div class="cars__table-form">
								<form action="">
									<div class="cars__table-form-inner">
										<label class="form-label">
											<input type="text" class="form-input" name="vin" placeholder="Xw1235464887" required>
											<small class="form-hint">VIN</small>
										</label>
										<div class="buttons-block">
											<button type="button" class="btn form-btn form-btn--gray">Сохранить</button>
											<button type="button" class="btn form-btn">Удалить</button>
										</div>
									</div>
								</form>
							</div>
						</td>
					</tr>
					<!-- category 1 row 1 -->
					
					<!-- category 1 row 2 -->
					<tr>
							<td class="active">BMW / 3 / 320i</td>
							<td>
							<div class="cars__table-form">
								<form action="">
									<div class="cars__table-form-inner">
										<label class="form-label">
											<input type="text" class="form-input" name="vin" placeholder="Xw1235464887" required>
											<small class="form-hint">VIN</small>
										</label>
										<div class="buttons-block">
											<button type="button" class="btn form-btn form-btn--gray">Сохранить</button>
											<button type="button" class="btn form-btn">Удалить</button>
										</div>
									</div>
								</form>
							</div>
						</td>
					</tr>
					<!-- category 1 row 2 -->
				
				
				</table>

		</div>
		<!-- /.container -->
	</section>
	<!-- /.cars -->


	
	
		<!-- footer -->
		<?php include("footer.php");?>
		<!-- /.footer -->
	
	
	
		<div class="overlay"></div>


		</div>
		<!-- /.page__cars -->








	<!-- Jquery с облака и замена в случае отсутствия доступа к облаку  -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>

	<script src="js/scripts.js"></script>

</body>
</html>

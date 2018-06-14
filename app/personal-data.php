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
	
	<div class="page page__personal-data">	

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
						<a rel="nofollow" itemprop="item" title="Личные данные" href="#">
							<span itemprop="name">Личные данные</span>
							<meta itemprop="position" content="2">
						</a>
						</span>
						<i class="breadcrumbs-back"></i>
				</div>
			</div>
		</div>
		<!-- /.breadcrumbs -->
	
	
	
		<div class="forms">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="title forms__title">Личные данные</h3>
						<div class="form">
							<form action="#">
								<label class="form-label">
									<input type="text" class="form-input" name="name" placeholder="Иван Петров" required>
									<small class="form-hint">Имя</small>
								</label>
								<label class="form-label">
									<input type="email" class="form-input" name="email" placeholder="ivan@petrov.ru" required>
									<small class="form-hint">E-mail</small>
								</label>
								<label class="form-label">
									<input type="text" class="form-input" name="company" placeholder="Рога и Копыта" required>
									<small class="form-hint">Компания</small>
								</label>
								<label class="form-label">
									<input type="text" class="form-input" name="delivery-address" placeholder="Таллинн, Петербургское шоссе, 1" required>
									<small class="form-hint">Адрес доставки</small>
								</label>
								<label class="form-label">
									<input type="password" class="form-input" name="password" required>
									<small class="form-hint">Пароль</small>
								</label>
								<label class="form-label">
									<input type="password" class="form-input" name="password-confirm" required>
									<small class="form-hint">Повторите пароль</small>
								</label>
								<div class="form-status">
									<span class="form-status-text form-status-positive">Форма успешно отправлена</span>
									<span class="form-status-text form-status-negative">Поле заполнено некорректно</span>
								</div>
								<div class="form-footer">
									<input type="submit" class="btn form-btn" value="Сохранить">
								</div>
							</form>
						</div>
						<!-- /.form -->
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /. container -->
		</div>
		<!-- /.forms -->

	
	
		<!-- footer -->
		<?php include("footer.php");?>
		<!-- /.footer -->
	
	
	
		<div class="overlay"></div>


		</div>
		<!-- /.page__personal-data -->








	<!-- Jquery с облака и замена в случае отсутствия доступа к облаку  -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>

	<script src="js/scripts.js"></script>

</body>
</html>

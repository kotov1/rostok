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

	<title>Корзина</title>

	<link rel="stylesheet" href="css/styles.css">

</head>

<body>
	
	<div class="page page__cart">	

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
						<a rel="nofollow" itemprop="item" title="Корзина" href="#">
							<span itemprop="name">Корзина</span>
							<meta itemprop="position" content="2">
						</a>
						</span>
						<i class="breadcrumbs-back"></i>
				</div>
			</div>
		</div>
		<!-- /.breadcrumbs -->
	
	
	<!-- cart -->
	<section class="table-section results">
		<div class="container">
			<h2 class="title">Корзина</h2>

			<div class="cart__table-wrap">

				<table class="table cart__table">
					
					<!-- category 1 head -->
					<tr class="table-title">
						<th colspan="3"></th>
						<th class="table-filter table-filter1">Цена 
							<i class="table-filter-arrow table-filter-top"></i><i class="table-filter-arrow table-filter-bottom active"></i>
						</th>
						<th class="table-filter table-filter2">Наличие
							<i class="table-filter-arrow table-filter-top"></i><i class="table-filter-arrow table-filter-bottom"></i>
						</th>
					</tr>
					<!-- category 1 head -->
				
					<!-- category 1 row 1 -->
					<tr>
						<td class="table-img"><img src="img/item-img1.png" alt="item-img"></td>
						<td class="table-advance">
							<span class="table-info">Garrett</span>
							<span class="table-number">123456789</span>
						</td>
						<td class="table-main-info">
							<span class="table-item">Гидрофильтр, автоматическая коробка передач (HX 84D).</span>
							<span class="table-item-dest">Место установки: <i>передний мост</i></span>
							<div class="table-analogue">
								<a href="#" class="table-analogue-ic table-analogue-info">i</a>
								<a href="#" class="table-analogue-ic table-analogue-car"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.06 27.64"><defs><style></style></defs><title>Ресурс 1</title><g data-name="Слой 2"><g data-name="Capa 1"><path class="cls-1" d="M38.83,8.55a1,1,0,0,0-.78-.37h-3.8c-.94-2.47-2.16-4.9-3.55-5.81C25.9-.79,13.16-.79,8.35,2.37,7,3.29,5.74,5.71,4.8,8.18H1a1,1,0,0,0-1,1.2l.56,2.73a1,1,0,0,0,1,.8H2.69a6.75,6.75,0,0,0-1.62,4.41,6.61,6.61,0,0,0,2.09,5l0,0v3.82a1.5,1.5,0,0,0,1.5,1.5H8.21a1.5,1.5,0,0,0,1.5-1.5V24.61H29.35v1.53a1.5,1.5,0,0,0,1.5,1.5h3.51a1.5,1.5,0,0,0,1.5-1.5V22.4a6.86,6.86,0,0,0,.44-9.49h1.2a1,1,0,0,0,1-.8L39,9.38A1,1,0,0,0,38.83,8.55ZM10,4.88c3.83-2.52,15.23-2.52,19.06,0,.74.49,1.7,2.46,2.58,4.88H7.42C8.3,7.34,9.25,5.37,10,4.88ZM5.51,17.7a3,3,0,1,1,3,3A3,3,0,0,1,5.51,17.7Zm25.12,3a3,3,0,1,1,3-3A3,3,0,0,1,30.63,20.65Z"/></g></g></svg></a>
								<a href="#" class="table-analogue-text">Найти аналоги</a>
							</div>
						</td>
						<td class="table-price">99,99 €</td>
						<td class="table-quantity">
							<div class="table-quantity-status table-quantity-status--available">В наличии</div>
							<div class="table-quantity-result">
								<span class="minus">-</span>
								<input class="table-quantity-result-input" type="text" name="quantity" value="" placeholder="0">
								<span class="plus">+</span>
							</div>
							<button type="button" class="btn table-btn">Удалить</button>
						</td>
					</tr>
					<!-- category 1 row 1 -->
					
					<!-- category 1 row 2 -->
					<tr>
						<td class="table-img"><img src="img/item-img2.png" alt="item-img"></td>
						<td class="table-advance">
							<span class="table-info">Garrett</span>
							<span class="table-number">123456789</span>
						</td>
						<td class="table-main-info">
							<span class="table-item">Гидрофильтр, автоматическая коробка передач (HX 84D).</span>
							<span class="table-item-dest">Место установки: <i>передний мост</i></span>
							<div class="table-analogue">
								<a href="#" class="table-analogue-ic table-analogue-info">i</a>
								<a href="#" class="table-analogue-ic table-analogue-car"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.06 27.64"><defs><style></style></defs><title>Ресурс 1</title><g data-name="Слой 2"><g data-name="Capa 1"><path class="cls-1" d="M38.83,8.55a1,1,0,0,0-.78-.37h-3.8c-.94-2.47-2.16-4.9-3.55-5.81C25.9-.79,13.16-.79,8.35,2.37,7,3.29,5.74,5.71,4.8,8.18H1a1,1,0,0,0-1,1.2l.56,2.73a1,1,0,0,0,1,.8H2.69a6.75,6.75,0,0,0-1.62,4.41,6.61,6.61,0,0,0,2.09,5l0,0v3.82a1.5,1.5,0,0,0,1.5,1.5H8.21a1.5,1.5,0,0,0,1.5-1.5V24.61H29.35v1.53a1.5,1.5,0,0,0,1.5,1.5h3.51a1.5,1.5,0,0,0,1.5-1.5V22.4a6.86,6.86,0,0,0,.44-9.49h1.2a1,1,0,0,0,1-.8L39,9.38A1,1,0,0,0,38.83,8.55ZM10,4.88c3.83-2.52,15.23-2.52,19.06,0,.74.49,1.7,2.46,2.58,4.88H7.42C8.3,7.34,9.25,5.37,10,4.88ZM5.51,17.7a3,3,0,1,1,3,3A3,3,0,0,1,5.51,17.7Zm25.12,3a3,3,0,1,1,3-3A3,3,0,0,1,30.63,20.65Z"/></g></g></svg></a>
								<a href="#" class="table-analogue-text">Найти аналоги</a>
							</div>
						</td>
						<td class="table-price">99,90 €</td>
						<td class="table-quantity">
							<div class="table-quantity-status">2 дня</div>
							<div class="table-quantity-result">
								<span class="minus">-</span>
								<input class="table-quantity-result-input" type="text" name="quantity" value="" placeholder="0">
								<span class="plus">+</span>
							</div>
							<button type="button" class="btn table-btn">Удалить</button>
						</td>
					</tr>
					<!-- category 1 row 2 -->
				
				
				</table>
				<!-- /.cart__table -->

				<div class="cart__table-count">
					<div class="cart__table-sum">199,90 €</div>
					<div class="cart__table-count-btn-wrap">
						<button type="button" class="btn cart__table-count-btn">Пересчитать</button>
					</div>
				</div>
				<!-- /.cart__table-count -->

			</div>
			<!-- /.cart__table-wrap -->



	<div class="forms">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-5 mb-50">
				<h3 class="title forms__title">Авторизация</h3>
				<div class="form">
					<form action="#">
						<label class="form-label">
							<input type="email" class="form-input" name="email" placeholder="Введите ваш E-mail" required>
							<small class="form-hint">E-mail</small>
						</label>
						<label class="form-label">
							<input type="password" class="form-input" name="password" required>
							<small class="form-hint">Пароль</small>
						</label>
						<div class="form-footer">
							<div class="row align-items-center">
								<div class="col-auto"><input type="submit" class="btn form-btn" value="Вход"></div>
								<div class="col-auto d-flex justify-content-center"><a href="#" class="form-remind">Забыли пароль</a></div>
							</div>
						</div>
					</form>
				</div>
				<!-- /.form -->
			</div>
			<div class="col-12 col-md-6 col-lg-5 offset-lg-1">
				<h3 class="title forms__title">Регистрация</h3>
				<div class="form">
					<form action="#">
						<label class="form-label">
							<input type="text" class="form-input" name="name" placeholder="Введите имя" required>
							<small class="form-hint">Имя</small>
						</label>
						<label class="form-label">
							<input type="email" class="form-input" name="email" placeholder="Введите ваш E-mail" required>
							<small class="form-hint">E-mail</small>
						</label>
						<label class="form-label">
							<input type="password" class="form-input" name="password" required>
							<small class="form-hint">Пароль</small>
						</label>
						<label class="form-label">
							<input type="password" class="form-input" name="password-confirm" required>
							<small class="form-hint">Повторите пароль</small>
						</label>
						<div class="form-footer">
							<input type="submit" class="btn form-btn" value="Регистрация">
						</div>
					</form>
				</div>
				<!-- /.form -->
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.forms -->



		</div>
		<!-- /.container -->
	</section>
	<!-- /.cart -->




	
	
		<!-- footer -->
		<?php include("footer.php");?>
		<!-- /.footer -->
	
	
	
		<div class="overlay"></div>


		</div>
		<!-- /.page__cart -->








	<!-- Jquery с облака и замена в случае отсутствия доступа к облаку  -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>

	<script src="js/scripts.js"></script>

</body>
</html>

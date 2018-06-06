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

	<title>Rostok</title>

	<link rel="stylesheet" href="css/styles.css">

</head>

<body>
	
	
	<!-- header -->
	<header class="header">
		<div class="header__top-line">
			<div class="container">
				<div class="row align-items-center justify-content-between no-gutters">
					<div class="col-auto">
						<div class="header__logo">
							<a href="index.php">
								<img src="img/logo.png" alt="Logo">Rostok
								<div class="header__logo-text">Autovaruosade Jae-Ja hulgimuuk</div>
							</a>
						</div>
					</div>
					<div class="col d-none d-md-block">
						<div class="header__search">
							<form action="#">
								<input type="text" class="header__search-input" name="search" placeholder="Поиск">
							</form>
						</div>
					</div>
					<div class="col-auto">
						<ul class="header__lang">
							<li><a href="#" class="header__lang-item"><i class="header__lang-ic header__lang-est"></i></a></li>
							<li><a href="#" class="header__lang-item"><i class="header__lang-ic header__lang-rus"></i></a></li>
							<li><a href="#" class="header__lang-item"><i class="header__lang-ic header__lang-fin"></i></a></li>
							<li><a href="#" class="header__lang-item"><i class="header__lang-ic header__lang-gbr"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.header__top-line -->

		<div class="header__bottom-line">
			<div class="container">
				<div class="row align-items-center no-gutters">

					<div class="col">
						<!-- navigation -->
						<nav class="nav modal">
							<div class="nav__toggle"><i class="nav__toggle-ic"></i></div>
							<ul class="nav__list">
								<li><a href="#" class="nav__link"><i class="nav__ic nav__ic-about"></i>О нас</a></li>
								<li><a href="#" class="nav__link"><i class="nav__ic nav__ic-news"></i>Новости</a></li>
								<li><a href="#" class="nav__link"><i class="nav__ic nav__ic-spare"></i>Запрос запчасти</a></li>
								<li><a href="#" class="nav__link"><i class="nav__ic nav__ic-rep"></i>Запрос на ремонт</a></li>
								<li><a href="#" class="nav__link"><i class="nav__ic nav__ic-cont"></i>Контакты</a></li>
							</ul>
						</nav>
						<!-- navigation -->
					</div>

					<div class="col-auto d-block d-md-none">
						<div class="header__mob-search">
							<i class="header__mob-search-ic"></i>
							<div class="header__mob-search-box modal">
								<h3 class="header__mob-search-title title">Поиск по сайту</h3>
								<form action="#">
									<label class="header__mob-search-label">
										<input type="text" class="header__mob-search-input" name="search">
										<span class="placeholder"><i>Например</i>, Фильтр BMW</span>
										<span class="hint">Введите запрос</span>
									</label>
								</form>
							</div>
						</div>
					</div>

					<div class="col-auto ml-auto">
						<div class="header__cart">
							<i class="header__cart-ic"></i>
							<div class="header__cart-box modal">
								<h3 class="title header__cart-title">Корзина</h3>
								<span class="header__cart-quantity">3 шт.</span>
								<span class="header__cart-divider">/</span>
								<span class="header__cart-price">33,14 eur</span>
								<button type="button" class="btn header__cart-btn">Оформить заказ</button>
							</div>
						</div>
					</div>

					<div class="col-auto p-s">
						<div class="header__login notLogged" id="login">
							<button type="button" class="header__login-btn">
								<i class="header__login-ic"></i>
								<span class="header__login-text">Войти</span>
							</button>
							<!-- authorization -->
							<div class="header__auth modal">
								<h3 class="title header__auth-title">Авторизация</h3>
								<div class="header__auth-form">
									<form action="#">
										<label class="header__auth-label">
											<input type="email" class="header__auth-input" name="login" placeholder="Введите ваш E-mail" required>
											<span class="hint">E-mail</span>
										</label>
										<label class="header__auth-label">
											<input type="password" class="header__auth-input" name="password" placeholder="Введите пароль" required>
											<span class="hint">Пароль</span>
										</label>
										<div class="header__auth-form-footer row align-items-center no-gutters">
											<div class="col-6"><input type="submit" class="btn header__auth-btn" value="Вход"></div>
											<div class="col-6 d-flex justify-content-center"><a href="#" class="header__auth-remind">Забыли пароль</a></div>
										</div>
									</form>
								</div>
							</div>
							<!-- authorization -->
						</div>
						<!-- /.header__login -->

						<div class="header__account-line modal">
							<div class="container">
								<!-- account-menu -->
										<ul class="header__account-menu">
											<li><a href="#" class="header__account-menu-link">История заказов</a></li>
											<li><a href="#" class="header__account-menu-link">История поиска автомобилей</a></li>
											<li><a href="#" class="header__account-menu-link">Мои машины</a></li>
											<li><a href="#" class="header__account-menu-link">Личные данные</a></li>
											<li><a href="#" class="header__account-menu-link" id="exit-log">Выход</a></li>
										</ul>
									<!-- /.account-menu -->
							</div>
						</div>
						<!-- /.header__login-line -->

					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.header__bottom-line -->



	</header>
	<!-- /.header -->


                                            





	<div class="overlay"></div>
	


	<!-- Jquery с облака и замена в случае отсутствия доступа к облаку  -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>

	<script src="js/scripts.js"></script>

</body>
</html>

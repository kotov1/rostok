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
							<li><a href="news.php" class="nav__link page__news-link"><i class="nav__ic nav__ic-news"></i>Новости</a></li>
							<li><a href="#" class="nav__link"><i class="nav__ic nav__ic-spare"></i>Запрос запчасти</a></li>
							<li><a href="#" class="nav__link"><i class="nav__ic nav__ic-rep"></i>Запрос на ремонт</a></li>
							<li><a href="contacts.php" class="nav__link page__contacts-link"><i class="nav__ic nav__ic-cont"></i>Контакты</a></li>
						</ul>
					</nav>
					<!-- navigation -->
				</div>

				<div class="col-auto d-block d-md-none">
					<div class="header__mob-search modal">
						<i class="header__mob-search-ic"></i>
						<div class="header__mob-search-box">
							<h3 class="header__mob-search-title title">Поиск по сайту</h3>
							<form action="#">
								<label class="form-label header__mob-search-label">
									<input type="text" class="form-input header__mob-search-input" name="search">
									<span class="placeholder"><i>Например</i>, Фильтр BMW</span>
									<small class="form-hint">Введите запрос</small>
								</label>
							</form>
						</div>
					</div>
				</div>

				<div class="col-auto ml-auto">
					<div class="header__cart modal">
						<i class="header__cart-ic"></i>
						<div class="header__cart-box">
							<h3 class="title header__cart-title">Корзина</h3>
							<span class="header__cart-quantity">3 шт.</span>
							<span class="header__cart-divider">/</span>
							<span class="header__cart-price">33,14 eur</span>
							<button type="button" class="btn header__cart-btn">Оформить заказ</button>
						</div>
					</div>
				</div>

				<div class="col-auto p-static">
					<div class="header__login notLogged modal" id="login">
						<button type="button" class="header__login-btn">
							<i class="header__login-ic"></i>
							<span class="header__login-text">Войти</span>
						</button>
						<!-- authorization -->
						<div class="header__auth">
							<h3 class="title forms__title header__auth-title">Авторизация</h3>
							<div class="header__auth-form">
								<form action="#">
									<label class="form-label">
										<input type="email" class="form-input" name="login" placeholder="Введите ваш E-mail" required>
										<small class="form-hint">E-mail</small>
									</label>
									<label class="form-label">
										<input type="password" class="form-input" name="password" placeholder="Введите пароль" required>
										<small class="form-hint">Пароль</small>
									</label>
									<div class="form-footer">
										<div class="row align-items-center">
											<div class="col-6"><input type="submit" class="btn form-btn header__auth-form-btn" value="Вход"></div>
											<div class="col-6"><a href="#" class="form-remind header__auth-form-remind">Забыли пароль</a></div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- authorization -->
					</div>
					<!-- /.header__login -->

					<div class="header__account-line">
						<div class="container">
							<!-- account-menu -->
									<ul class="header__account-menu">
										<li><a href="history-orders.php" class="header__account-menu-link page__history-link">История заказов</a></li>
										<li><a href="#" class="header__account-menu-link">История поиска автомобилей</a></li>
										<li><a href="cars.php" class="header__account-menu-link page__cars-link">Мои машины</a></li>
										<li><a href="personal-data.php" class="header__account-menu-link personal-data-link">Личные данные</a></li>
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
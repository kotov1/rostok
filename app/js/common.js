$(function() {

	$('.header .nav').click(function() {
		// $('body').toggleClass('modal-active');	
		closeModal();
		$(this).toggleClass('reveal');
	});



	// тестовый логин
	// открываю окно авторизации
	$('#login').click(function() {
		if( $(this).hasClass('notLogged') ) {
			$(this).find('.header__auth').addClass('reveal');
		}
	});
	// при успешной отправке формы логина открываю меню пользователя
	$('.header__auth-form form').submit(function(event) {
		$('#login').removeClass('notLogged');
		$('#login, .header__bottom-line').addClass('logged');
		$('.header__auth').removeClass('reveal');
		event.preventDefault();
	});
	// имитирую выход из личного абинета
	$('#exit-log').click(function(event) {
		$('#login, .header__bottom-line').removeClass('logged');
		$('#login').removeClass('opened');
		$('#login').addClass('notLogged');
		$('.header__account-line').removeClass('reveal');
		event.preventDefault();
	});

	if( $(window).width() < 1200 ) {
			$('#login').click(function(event) {
				if( $(this).hasClass('logged') ) {
					$(this).addClass('opened');
					$('.header__account-line').addClass('reveal');
					event.preventDefault();
				}
			});

			$('.header__account-line').click(function() {
				if( $('#login').hasClass('logged') ) {
					$('#login').removeClass('opened');
					$(this).toggleClass('reveal');
				}
			});
	};

	$('.header__mob-search').click(function() {
		$(this).find('.header__mob-search-box').addClass('reveal');
		$(this).addClass('opened');
	});

	$('.header__cart').click(function() {
		$(this).find('.header__cart-box').addClass('reveal');
		$(this).addClass('opened');
	});

	function closeModal() {
		$('.modal').removeClass('reveal');
		$('.modal').closest('.opened').removeClass('opened');
	}

	// закрытие модальных окон по клику за их пределами
	$(document).mouseup(function (e){
		var div = $(".modal");
		if ( (div.is(e.target) || div.has(e.target).length === 0) ) {
			closeModal();
		}
	});



	// кастомный placeholder в окне поиска на мобильных устройствах
	$('.header__mob-search-input').change(function() {
		if( $(this).val() != 0 ) {
			$(this).next('.placeholder').hide();
		} else {
			$(this).next('.placeholder').show();
		}
	});


	$('.banners__slider').slick({
		slidesToShow: 4,
		infinite: false,
		variableWidth: true,
		responsive: [
			{
			breakpoint: 1200,
			settings: {
				arrows: true,
				variableWidth: false,
				infinite: true,
				centerMode: true,
				centerPadding: '100px',
				slidesToShow: 2,
				slidesToScroll: 2
			}
			},
			{
			breakpoint: 768,
			settings: {
				infinite: true,
				arrows: true,
				variableWidth: true,
				centerMode: true,
				slidesToShow: 1,
				slidesToScroll: 1
			}
			}
		]
	});





});

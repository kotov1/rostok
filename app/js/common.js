$(function() {



	function bodyOverlay(val) {
		if(val) { $('body').addClass('modal-active'); }
		else { $('body').removeClass('modal-active'); }
	}

	function closeModal() {
		$('.modal.reveal').removeClass('reveal');
		$('.reveal').removeClass('reveal');
		$('.modal').closest('.opened').removeClass('opened');
	}

	// закрытие модальных окон по клику за их пределами
	$(document).click(function (e){
		var div = $(".modal");
		if ( (!div.is(e.target) && div.has(e.target).length === 0) ) {
			closeModal();
			bodyOverlay(false);
		}
	});



	// мобильное меню - открытие
	$('.header .nav').click(function() {
		closeModal();
		$(this).addClass('reveal');
		if( $(this).hasClass('reveal') ) {
			bodyOverlay(true);
		} else{
			bodyOverlay(false);
		}
	});

	// мобильное меню - закрытие по клику на ссылку
	$('.nav__link').click(function(e) {
		closeModal();
		$('.header .nav').removeClass('reveal');
		bodyOverlay(false);
		e.stopPropagation();
	});
	// мобильное меню - закрытие по клику на кнопку
	$('.nav__toggle').click(function(e) {
		if ( $('.header .nav').hasClass('reveal') ) {
			closeModal();
			$('.header .nav').removeClass('reveal');
			bodyOverlay(false);
			e.stopPropagation();	
		}
	});


	//  всплывающее окно поиска на мобильных устройствах
	$('.header__mob-search-ic').click(function() {

		if ( $('.header__mob-search').hasClass('opened') ) {
			closeModal();
			$(this).next('.header__mob-search-box').removeClass('reveal');
			$(this).parent('.header__mob-search').removeClass('opened');
			bodyOverlay(false);
		}
		else {
			closeModal();
			$(this).next('.header__mob-search-box').addClass('reveal');
			$(this).parent('.header__mob-search').addClass('opened');
			bodyOverlay(true);
		}

	});

	//  всплывающее окно корзины на мобильных устройствах
	$('.header__cart-ic').click(function() {

		if ( $(window).width() < 768 ) {

			if ( $('.header__cart').hasClass('opened') ) {
				closeModal();
				$(this).next('.header__cart-box').removeClass('reveal');
				$(this).parent('.header__cart').removeClass('opened');
				bodyOverlay(false);
			}
			else {
				closeModal();
				$(this).next('.header__cart-box').addClass('reveal');
				$(this).parent('.header__cart').addClass('opened');
				bodyOverlay(true);
			}

		}

	});


	// ТЕСТОВЫЙ ЛОГИН
	// открываю окно авторизации
	$('.header__login-btn').click(function() {
		if( $(this).parent('#login').hasClass('notLogged') ) {
			if( $(this).next('.header__auth').hasClass('reveal') ) {
				$(this).next('.header__auth').removeClass('reveal');
				bodyOverlay(false);
			} else {
				closeModal();
				$(this).next('.header__auth').addClass('reveal');
				bodyOverlay(true);
			}
		}
	});

	// при успешной отправке формы логина открываю меню пользователя
	$('.header__auth-form form').submit(function(event) {
		$('#login').removeClass('notLogged');
		$('#login, .header__bottom-line').addClass('logged');
		$('.header__auth').removeClass('reveal');
		bodyOverlay(false);
		event.preventDefault();
	});

	// имитирую выход из личного абинета
	$('#exit-log').click(function(event) {
		$('#login, .header__bottom-line').removeClass('logged');
		$('#login').removeClass('opened');
		$('#login').addClass('notLogged');
		$('.header__account-line').removeClass('reveal');
		bodyOverlay(false);
		event.preventDefault();
	});

	// открытие всплывающего окна меню пользователя на адптиве после успешной отправки формы логина
	if( $(window).width() < 1200 ) {
			$('.header__login-btn').click(function(event) {

				if( $(this).parent('#login').hasClass('logged') ) {

					if( $(this).parent('#login').hasClass('opened') ) {
						$(this).parent('#login').removeClass('opened');
						$('.header__account-line').removeClass('reveal');
						bodyOverlay(false);
						event.preventDefault();
					} else {
						closeModal();
						$(this).parent('#login').addClass('opened');
						$('.header__account-line').addClass('reveal');
						bodyOverlay(true);
						event.preventDefault();
					}

				}

			});

			$('.header__account-line').click(function() {
				if( $('#login').hasClass('logged') ) {
					$('#login').removeClass('opened');
					$(this).toggleClass('reveal');
					bodyOverlay(false);
				}
			});
			
	}





	//Scroll button 
	$('.scrollToTop').click(function() {
		$('body,html').animate({scrollTop: 0}, 500);
		 return false;
	});	


	// кастомный placeholder в окне поиска на мобильных устройствах
	$('.header__mob-search-input').change(function() {
		if( $(this).val() != 0 ) {
			$(this).next('.placeholder').hide();
		} else {
			$(this).next('.placeholder').show();
		}
	});


	// слайдер рекламных баннеров на главной странице
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


	// ссылки футера на адаптиве
	var footerLinksToggle = function () {
		if($(window).width() < 768) {
		$(".footer__block").find(".footer-title").click(function(e){
			if($(this).closest('.footer-title').hasClass('active')) {
				$(this).closest('.footer-title').removeClass('active');
				$(this).closest('.footer-title').next('ul').slideUp();
			} else {
				$(".footer__block").find(".footer-title").removeClass('active'); 
				$(this).closest('.footer-title').addClass('active'); 
				$(".footer__block").find('ul').slideUp();
				$(this).closest('.footer-title').next('ul').slideToggle();
			}
		});
		}
	};
	$(document).ready(function() {
			footerLinksToggle();
	});



	// quantity plus minus
	$(document).on('click', '.minus', function(){
		var $_inp = $(this).parent().find('input');
		$_inp.val( parseInt( $_inp.val() ) - 1 );
		$_inp.trigger('propertychange');
		return false;
	});
	$(document).on('click', '.plus', function(){
		var $_inp = $(this).parent().find('input');
		$_inp.val( parseInt( $_inp.val() ) + 1 );
		$_inp.trigger('propertychange');
		return false;
	});
	$('input.quantity').bind('input propertychange', function () {
		var $this = $(this);
		$this.val( $this.val().replace(/[^0-9]/gim, '') );
		if ( $this.val().length == 0 || parseInt( $this.val() ) <= 0 )
		$this.val(1);
	});



	// подсказка о добавлении товара в корзину
	$('.table-addCart').click(function() {
		$('.table-purchase').addClass('show');
		setTimeout(function() { $('.table-purchase').removeClass('show'); }, 1500);
	});


	// переход назад в хлебных крошках на адаптиве
	$('.breadcrumbs-back').click(function() {
		window.history.back();
	});




	
	// контентные таблицы страницы "деталь" в виде аккордеона на адаптиве
	$(document).ready(function() {
		if( $(window).width() > 767 ) {

			$(".component__table-wrap").not(":first").hide();

			$(".component__tab").click(function() {
				$(".component__tab").removeClass("component__tab--active").eq($(this).index()).addClass("component__tab--active");
				$(".component__table-wrap").hide().eq($(this).index()).fadeIn("normal");
			}).eq(0).addClass("component__tab--active");

		} else {

			$(".component__hidden-wrap").hide();

			$('.component__hidden-tab').click(function(){
				if($(this).hasClass('component__hidden-tab--active')) {
					$(this).removeClass('component__hidden-tab--active');
					$(this).next('.component__hidden-wrap').slideUp();
				} else {
					$('.component__hidden-tab').removeClass('component__hidden-tab--active'); 
					$(this).addClass('component__hidden-tab--active'); 
					$('.component__hidden-wrap').slideUp();
					$(this).next('.component__hidden-wrap').slideToggle();
				}
			});
		}
	});


	// Custom select
	$(".select").each(function() {
		var classes = $(this).attr("class"),
				id      = $(this).attr("id"),
				name    = $(this).attr("name");
		var template =  '<div class="' + classes + '">';
				template += '<span class="select-trigger">' + $(this).attr("placeholder") + '</span>';
				template += '<div class="select-options">';
				$(this).find("option").each(function() {
					template += '<span class="select-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
				});
		template += '</div></div>';
		
		$(this).wrap('<div class="select-wrapper"></div>');
		$(this).after(template);
	});
	$(".select-option:first-of-type").hover(function() {
		$(this).parents(".select-options").addClass("option-hover");
	}, function() {
		$(this).parents(".select-options").removeClass("option-hover");
	});
	$(".select-trigger").on("click", function(event) {
		$(".select").removeClass("opened");
		$('html').one('click',function() {
			$(".select").removeClass("opened");
		});
		$(this).parents(".select").toggleClass("opened");
		event.stopPropagation();
	});
	$(".select-option").on("click", function() {
		$(this).parents(".select-wrapper").find("select").val($(this).data("value"));
		$(this).parents(".select-options").find(".select-option").removeClass("selection");
		$(this).addClass("selection");
		$(this).parents(".select").removeClass("opened");
		$(this).parents(".select").find(".select-trigger").text($(this).text());
	});


	//  Закрытие - открытие карточки на странице поиска машин
	$('.table-card-close').click(function() {
		$('.table-card').hide();
	});
	$('.car-model-link').click(function(event) {
		$('.table-card').slideDown();
		event.preventDefault();
	});


	// выбор года выпуска авто
	$('.years-block .year').click(function() {
		$('.years-block .year').removeClass('year--active');
		$(this).addClass('year--active');
	});



	$('.text-call-btn').click(function(event) {
		$('body,html').animate({scrollTop: ($('.content__title-form').offset().top) - 100}, 1000);
		event.preventDefault();
	});





	// drag and drop area
	var $fileInput = $('.form-file-input');
	// change inner text
	$fileInput.on('change', function() {
		var filesCount = $(this)[0].files.length;
		var $textContainer = $('.file-msg');

		if (filesCount === 1) {
			// if single file is selected, show file name
			var fileName = $(this).val().split('\\').pop();
			$textContainer.text(fileName);
		} else {
			// otherwise show number of files
			$textContainer.text(filesCount + ' файла(ов)');
		}
	});


	//  открытие невидимых логотипов автомобильных брендов на главной странице
	$('.js-open-hidden-logos').click(function (e) { 
		e.preventDefault();
		$('.brands__item-hide').removeClass('brands__item-hidden');
		$('.brands__item-hide').addClass('brands__item-show');
	});

	// подмена логотипа бренда автомобиля при наведении
	$('.brands__item').hover(function () {
			$(this).children('img').hide();
			$(this).children('.js-img-hide').show();
		}, function () {
			$(this).children('.js-img-hide').hide();
			$(this).children('img').not('.js-img-hide').show();
		}
	);








});
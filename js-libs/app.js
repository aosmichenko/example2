jQuery(document).ready(function($){

	$('.scroll-downs').click(function(){
		$('html,body').animate({scrollTop: $('#scroll2').offset().top});
	});

	$('#hp-slider').slick({
		useTransform: true,
		autoplay: true,
		autoplaySpeed: 10000,
		arrows: false,
		cssEase: 'cubic-bezier(0.600, -0.280, 0.735, 0.045)'
	});
	$('.slider-prev').click(function(){
		$('#hp-slider').slick('slickPrev');
	});
	$('.slider-next').click(function(){
		$('#hp-slider').slick('slickNext');
	});
	var timeoutId;
	var $videoBgAspect = $(".videobg-aspect");
	var $videoBgWidth = $(".videobg-width");
	var videoAspect = $videoBgAspect.outerHeight() / $videoBgAspect.outerWidth();

	function videobgEnlarge() {
		console.log('resize');
		windowAspect = ($(window).height() / $(window).width());
		if (windowAspect > videoAspect) {
			$videoBgWidth.width((windowAspect / videoAspect) * 100 + '%');
		} else {
			$videoBgWidth.width(100 + "%")
		}
	}

	function timeline_h() {
		$('.timeline-row').each(function(){
			var h = 0;
			$(this).find('.timeline-item-title').each(function(){
				if($(this).height() > h) {
					h = $(this).height();
				}
			});
			$(this).find('.timeline-item-title').height(h);
		});
	}
	timeline_h();


	function community_box() {
		$('.community-section').each(function(){
			$(this).find('.community-box').height('auto');
			if(window.innerWidth > 767) {
				var h = 0;
				$(this).find('.community-box').each(function(){
					$(this).each(function(){
						if($(this).height() > h) {
							h = $(this).height();
						}
					});
				});
				$(this).find('.community-box').height(h);
			}
		});
	}
	community_box();



	$(window).resize(function() {
		clearTimeout(timeoutId);
		timeoutId = setTimeout(videobgEnlarge, 100);
		community_box();
	});

	$(window).on('load',function(){
		community_box();
	});

	$(function() {
		videobgEnlarge();
	});

	$('.acc-title').click(function(){
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			$(this).next().removeClass('show');
		} else {
			$(this).addClass('active');
			$(this).next().addClass('show');
		}
	});

	$('.slider').slick({
		arrows:false,
		dots: true
	});
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		}
	});
});
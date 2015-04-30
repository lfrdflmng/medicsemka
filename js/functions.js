_hearts_animated = false;

function blurContent(blur_it) {
	var container = jQuery('.container');
	if (typeof blur_it != 'boolean' || blur_it == true) {
		jQuery('.overlay').show();
		container.addClass('blurred');
	}
	else {
		jQuery('.overlay').hide();
		jQuery('.popup-holder').hide();
		container.removeClass('blurred');
	}
}

function showPopup(id) {
	var $popup = jQuery('.popup-' + id);
	/*var width = Math.floor(jQuery(window).width() / 2);
	var height = Math.floor(jQuery(window).height() / 2) + jQuery(window).scrollTop();*/
	
	$popup.fadeIn('slow');

	//centering
	/*$popup.css('left', (width - Math.floor($popup.width() / 2)) + 'px');
	$popup.css('top', (height - Math.floor($popup.height() / 2)) + 'px');*/
}

function emphasizeField($field) {
	$field = $field.closest('.form-group');
	$field.addClass('animated shake');
	setTimeout(function() {
		$field.removeClass('animated shake');
	}, 2000);
}

//these validation functions need to be improved:

function isAccountNumber(val) {
	return /^[\d-]+$/.test( val );
}

function isConfirmationNumber(val) {
	return /^[\d-]+$/.test( val );
}

function isDate(val) {
	return /^[\d/]+$/.test( val );
}

function isMoneyAmount(val) {
	return /^[\d.,]+$/.test( val );
}


( function( $ ) {

	$(document).ready(function() {
		$('.scrollable-content').mCustomScrollbar({
			axis: 'y',
		    theme: 'minimal-dark',
		    setHeight: 400
		});

		//if ($(window).width() > 767) {
			//testimonials
	        var swiper = new Swiper('.swiper-container', {
				scrollbar: '.swiper-scrollbar',
				scrollbarHide: true,
				slidesPerView: 'auto',
				centeredSlides: true,
				spaceBetween: 30,
				grabCursor: true,
				nextButton: '.swiper-button-next',
	        	prevButton: '.swiper-button-prev'
			});
	    //}

		$(window).scroll(function() {
			var top = $(this).scrollTop();

			//silly animation for the hearts
			if (top > 400 && top < 600) {
				var $hearts = $('.hearts-holder').find('.heart-plus');
				var direction = ['Up', 'Right', 'Down', 'Left'];
				$.each($hearts, function(i, h) {
					if (!_hearts_animated) {
						setTimeout(function() {
							$(h).addClass('magictime spaceIn' + direction[Math.round(Math.random() * 3)]);
						}, Math.round(Math.random() * 2000));
					}
				});
				_hearts_animated = true;
			}
		});

		$('.overlay').click(function() {
			blurContent(false);
		});

		$('.btn-afiliate').click(function(e) {
			blurContent(true);
			showPopup('afiliate');
			e.preventDefault();
			return false;
		});

		$('.popup-close').click(function() {
			blurContent(false);
		});

		$('.popup-holder').find('.btn-close').click(function(e) {
			$(this).closest('.popup-holder').hide();
			e.preventDefault();
			return false;
		});

		$(window).resize(function() {
			$('.popup-holder').find('.content').css('max-height', $(this).height());
		}).resize();
	});

} )( jQuery );
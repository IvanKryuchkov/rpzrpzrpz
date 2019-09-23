jQuery(function($) {
	
	$('ul li:last-child').addClass('lastItem');
	$('ul li:first-child').addClass('firstItem');

	/*Pagination Active Button*/
	$('div.pagination ul li:not([class])').addClass('num');

	// Modal Window
	$('[href="#modal"]').click(function(e){
		$('#modal').modal('toggle');
		e.preventDefault();
	});

	$('#modal button.modalClose').click(function(e){
		$('#modal').modal('hide');
		e.preventDefault();
	});

	$('.articleGalleryZoom').magnificPopup({
		type: 'image',
		mainClass: 'mfp-with-zoom',
	    zoom: {
        enabled: true,
        duration: 300,
        easing: 'ease-in-out',
        opener: function(openerElement) {
          return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
	    }
	});

	var iconTest=/icon-/i;
	var iconReplace = "fa fa-";

	function iconSet(){
		$('[class*="icon-"]').each(function(){
			iconClass = $(this).attr('class');
			var newString = iconClass.replace(iconTest, iconReplace);
			$(this).addClass(newString);
		})
	}
	iconSet()

	$(window).load(function(){
		function setOffset(){
			$('.row-container').each(function(i){
				if(($(this).offset().top-$(window).scrollTop())<$(window).height()){
					$(this).addClass('visible')
				}
			});
		}

		setOffset()
		$(window).resize($.throttle(500, setOffset));
		$(window).scroll($.throttle(500, setOffset));
	});

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#back-top').fadeIn();
		} else {
			$('#back-top').fadeOut();
		}
	});


	// scroll body to 0px on click
	$('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
		return false;
	});

	/*
	if($('.lightboxlink').length){
		var lightboxlink = ($('.lightboxlink').attr('onclick').split(';')[0]).replace(/javascript:MOOdalBox\.open\(/,'').split(',')[0].replace(/"/g,'')
		$('.lightboxlink').attr({href:'#'+lightboxlink,onclick:''}).magnificPopup({
			type: 'inline',
			preloader: false,
			closeBtnInside:false,
			mainClass: 'map-popup',
			callbacks: {
				open: function() {

				}
			}
		})
	}
	*/

	/*if (typeof $.ScrollToFixed == 'function') {
		$('#content-row [class*="span"]').each(function(){
			if($(this).outerHeight(true)<$(this).parent().height()){
				$(this).scrollToFixed({
					marginTop: function(){
						$(this).next().css({float:'left'})
						var marginTop = $('.sf-menu.sticky').parents('[id*="-row"]').outerHeight(true)
						return marginTop
					},
					limit : function(){
						var limit = $(this).parent().height()+$(this).parent().offset().top-$(this).outerHeight(true)
						return limit
					},
	        zIndex:1,
	        minWidth: 768
			  });
			}
		});
	}*/

	// Calendar position fix
	if($('#jform_profile_dob_img').length && $.browser.msie){
		var h = $('#jform_profile_dob_img').offset().top - 202;
	 	$('head').append('<style> .calendar { top:'+h+'px !important;}</style>');
	}

	if($.browser.msie){
		$('.lazy_container').each(function(){
			$(this).parent('a').attr({style: $(this).attr('style')}).parent('.img-intro__left, .img-intro__right').attr({style: $(this).attr('style')});
		})
	}
	
	$('.navigation ul.sf-menu > li').prepend('<strong></strong>');

});
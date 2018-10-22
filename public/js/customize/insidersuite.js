$(document).ready(function() {
	check = false;
	// INITIATE THE FOOTER
  siteFooter();
	// COULD BE SIMPLIFIED FOR THIS PEN BUT I WANT TO MAKE IT AS EASY TO PUT INTO YOUR SITE AS POSSIBLE
	$(window).resize(function() {
		siteFooter();
	});

	function siteFooter() {
		var siteContent = $('#site-content');
		var siteContentHeight = siteContent.height();
		var siteContentWidth = siteContent.width();
		if (!check) {
			$('.content').css({'height':siteContentHeight+'px','width':siteContentWidth+'px','margin':'0px'});
			check = true;
		}else{
			$('.content').css({'width':siteContentWidth+'px','margin':'0px'});
		}
		// $('.parallax').closest('.row').css({'height':siteContentHeight+'px','width':siteContentWidth+'px'});
		var site = $('#site-footer');
		$('#footer').css({'height':site.height()+'px','width':site.width()+'px','margin':'0px','background':'transparent'});
		var siteFooter = $('#site-footer');
		var siteFooterHeight = siteFooter.height();
		var siteFooterWidth = siteFooter.width();
		$('#partner-banner').css({'height':siteFooter[0].clientHeight+'px'});
		if (siteContentWidth < 992) {
			$('#sidebar-content').hide();
		}else{
			$('#sidebar-content').show();
		}
	};
});
jQuery(document).ready(function($) {
	tab = $('.tabs h3 a');

	tab.on('click', function(event) {
		event.preventDefault();
		tab.removeClass('active');
		$(this).addClass('active');

		tab_content = $(this).attr('href');
		$('div[id$="tab-content"]').removeClass('active');
		$(tab_content).addClass('active');
	});
});
$(document).ready(function() {
	$(window).scroll(function() {
		if ($(".navbar").hasClass('unsigned_navbar')) {
			if($(this).scrollTop() > 550) {
				$(".homepage_collapse").attr('style', 'display:none;');
				$(".homepage_button").addClass('btn-get-started-show');
			} else {
				$(".homepage_collapse").attr('style', 'display:block;');
				$(".homepage_button").removeClass('btn-get-started-show');
			}
		}  else if ($(".navbar").hasClass('homepage_navbar')) {
			var page_url = $(location).attr("href");
			var redirect_path = window.location.protocol + "//" + window.location.hostname;
			var page_name = page_url.slice(redirect_path.length+1);
			if ($( window ).width() > 490) {
				if (page_name == "signup" || page_name == " ") {
					if($(this).scrollTop() > 150) {
						$(".homepage_navbar").addClass('homepage_navbar-show');
						$("#logo_white").attr('style', 'display:none;');
						$("#logo_black").attr('style', 'display:block;');
						$(".homepage_collapse").attr('style', 'display:none;');
						$(".homepage_button").addClass('btn-get-started-show');
					} else {
						$(".homepage_navbar").removeClass('homepage_navbar-show');
						$(".homepage_navbar").attr('style', 'background: transparent;');
						$("#logo_white").attr('style', 'display:block;');
						$("#logo_black").attr('style', 'display:none;');
						$(".homepage_collapse").attr('style', 'display:block;');
						$(".homepage_button").removeClass('btn-get-started-show');
					}
				} else {
					if($(this).scrollTop() > 390) {
						$(".homepage_navbar").addClass('homepage_navbar-show');
						$("#logo_white").attr('style', 'display:none;');
						$("#logo_black").attr('style', 'display:block;');
						$(".homepage_collapse").attr('style', 'display:none;');
						$(".homepage_button").addClass('btn-get-started-show');
					} else {
						$(".homepage_navbar").removeClass('homepage_navbar-show');
						$(".homepage_navbar").attr('style', 'background: transparent;');
						$("#logo_white").attr('style', 'display:block;');
						$("#logo_black").attr('style', 'display:none;');
						$(".homepage_collapse").attr('style', 'display:block;');
						$(".homepage_button").removeClass('btn-get-started-show');
					}
				}
			} else if ($( window ).width() < 490) {
				if($(this).scrollTop() > 50) {
					$(".homepage_navbar").addClass('homepage_navbar-show');
					$("#logo_white").attr('style', 'display:none;');
					$("#logo_black").attr('style', 'display:block;');
					$(".homepage_collapse").attr('style', 'display:none;');
					$(".homepage_button").addClass('btn-get-started-show');
				} else {
					$(".homepage_navbar").removeClass('homepage_navbar-show');
					$(".homepage_navbar").attr('style', 'background: transparent;');
					$("#logo_white").attr('style', 'display:block;');
					$("#logo_black").attr('style', 'display:none;');
					$(".homepage_collapse").attr('style', 'display:block;');
					$(".homepage_button").removeClass('btn-get-started-show');
				}
			}
		} else if ($(".navbar").hasClass('transparent_navbar')) {
			var page_url = $(location).attr("href");
			var redirect_path = window.location.protocol + "//" + window.location.hostname;
			var page_name = page_url.slice(redirect_path.length+1);
			if ($( window ).width() > 490) {
				if(((page_name == "sponsor" || page_name == "offers" || page_name == "career" || page_name == "gift-card") && $(this).scrollTop() > 100) || $(this).scrollTop() > 350) {
					$(".transparent_navbar").attr('style', 'background: #fff;');
					$(".white_icons").attr('style', 'display:none !important;');
					$("a[id=logo_white]").attr('style', 'display:none !important;');
					$(".black_icons").attr('style', 'display:block;');
					$("a[id=logo_black]").attr('style', 'display:block;');
					$(".header_text").attr('style', 'color: #000;');
					$(".toggle-transparent").attr('style', 'border: 1px solid #000;');
					$(".toggle-transparent .icon-bar").attr('style', 'background-color: #000;');
					$(".nav_gift").attr('src', '../imgs/black_gift.png');
					$(".nav_heart").attr('src', '../imgs/black_heart.png');
					$(".nav_help").attr('src', '../imgs/black_help.png');
					$(".nav_user").attr('src', '../imgs/black_user.png');
					$(".full_white_icons ").attr('style', 'background: #fff;');
				} else {
					$(".transparent_navbar").attr('style', 'background: transparent;');
					$(".black_icons").attr('style', 'display:none !important;');
					$("a[id=logo_black]").attr('style', 'display:none !important;');
					$(".white_icons").attr('style', 'display:block;');
					$("a[id=logo_white]").attr('style', 'display:block;');
					$(".header_text").attr('style', 'color: #fff;');
					$(".responsive_short .header_text").attr('style', 'color: #000;');
					$(".toggle-transparent").attr('style', 'border: 1px solid #fff;');
					$(".toggle-transparent .icon-bar").attr('style', 'background-color: #fff;');
					$(".nav_gift").attr('src', '../imgs/black_gift.png');
					$(".nav_heart").attr('src', '../imgs/black_heart.png');
					$(".nav_help").attr('src', '../imgs/black_help.png');
					$(".nav_user").attr('src', '../imgs/black_user.png');
					$(".full_white_icons ").attr('style', 'background: #fff;');
				}
			} else if ($( window ).width() < 490) {
				if($(this).scrollTop() > 50) {
					$(".transparent_navbar").attr('style', 'background: #fff;');
					$(".white_icons").attr('style', 'display:none !important;');
					$("a[id=logo_white]").attr('style', 'display:none !important;');
					$(".black_icons").attr('style', 'display:block;');
					$("a[id=logo_black]").attr('style', 'display:block;');
					$(".header_text").attr('style', 'color: #000;');
					$(".toggle-transparent").attr('style', 'border: 1px solid #000;');
					$(".toggle-transparent .icon-bar").attr('style', 'background-color: #000;');
					$(".nav_gift").attr('src', '../imgs/black_gift.png');
					$(".nav_heart").attr('src', '../imgs/black_heart.png');
					$(".nav_help").attr('src', '../imgs/black_help.png');
					$(".nav_user").attr('src', '../imgs/black_user.png');
					$(".full_white_icons ").attr('style', 'background: #fff;');
				} else {
					$(".transparent_navbar").attr('style', 'background: transparent;');
					$(".black_icons").attr('style', 'display:none !important;');
					$("a[id=logo_black]").attr('style', 'display:none !important;');
					$(".white_icons").attr('style', 'display:block;');
					$("a[id=logo_white]").attr('style', 'display:block;');
					$(".header_text").attr('style', 'color: #fff;');
					$(".responsive_short .header_text").attr('style', 'color: #000;');
					$(".toggle-transparent").attr('style', 'border: 1px solid #fff;');
					$(".toggle-transparent .icon-bar").attr('style', 'background-color: #fff;');
					$(".nav_gift").attr('src', '../imgs/black_gift.png');
					$(".nav_heart").attr('src', '../imgs/black_heart.png');
					$(".nav_help").attr('src', '../imgs/black_help.png');
					$(".nav_user").attr('src', '../imgs/black_user.png');
					$(".full_white_icons ").attr('style', 'background: #fff;');
				}
			}
		}
	});
});
var over_height = false;
$("#message_btn").click(function() {
	if ($("#message_panel").hasClass('active')) {
		$("#message_panel").attr('style', 'display: none;');
		$("#message_panel").removeClass('active');
	}	else {
		if (over_height) {
			if ($(window).width() == 320) {
				$("#message_panel").attr('style', 'bottom:45px; display: block;');
			} else {
				$("#message_panel").attr('style', 'bottom:140px; display: block;');
			}
			$("#message_panel").addClass('active');
		} else {
			if ($(window).width() == 320) {
				$("#message_panel").attr('style', 'bottom:28px; display: block;');
			} else {
				$("#message_panel").attr('style', 'bottom:80px; display: block;');
			}
			$("#message_panel").addClass('active');
		}
	}
});

$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {
			$('#return-to-top').fadeIn(200);
			$('#message_btn').attr('style', 'bottom:80px;');
			over_height = true;
    } else {
			over_height = false;
			$('#message_btn').attr('style', 'bottom:20px;');
			$('#return-to-top').fadeOut(200);
    }
});
$('#return-to-top').click(function() {
    $('body,html').animate({
        scrollTop : 0
    }, 500);
});

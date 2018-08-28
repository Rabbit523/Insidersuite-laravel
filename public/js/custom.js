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
		console.log(site.height(),site.width());
		$('#footer').css({'height':site.height()+'px','width':site.width()+'px','margin':'0px','background':'transparent'});
		var siteFooter = $('#site-footer');
		var siteFooterHeight = siteFooter.height();
		console.log(siteFooter);
		var siteFooterWidth = siteFooter.width();
		// console.log()
		$('#partner-banner').css({'height':siteFooter[0].clientHeight+'px'});
		if (siteContentWidth < 992) {
			$('#sidebar-content').hide();
		}else{
			$('#sidebar-content').show();
		}

		console.log('Content Height = ' + siteContentHeight + 'px');
		console.log('Content Width = ' + siteContentWidth + 'px');
		console.log('Footer Height = ' + siteFooterHeight + 'px');
		console.log('Footer Width = ' + siteFooterWidth + 'px');
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
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 30) { 
          	console.log($(this).scrollTop());
          	$('.navbar').removeClass('solid-inverse');
              $('.navbar').addClass('solid');
              // $('navbar').find('.active').children('a').css({'background-color':'white !important','color':'white !important'});
          } else {
              $('.navbar').removeClass('solid');
              $('.navbar').addClass('solid-inverse');
              $('navbar').find('.active').children('a').css('');

          }
        });
});

// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
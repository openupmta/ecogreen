$(document).ready(function(){
	// Wowjs
	new WOW().init();
	// Owl-Carousel
	$('.cmt').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:3
			}
		}
	})

	$('.news').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	})
	$('.owl-dot').click(function () {
		$(".product-image").trigger('to.owl.carousel', [$(this).index(), 300]);
	});
	$(".product-related").owlCarousel({
		responsive:{
			768:{
				items:4
			},
			576:{
				items:2
			},
			0:{
				items:1
			}
		},
		loop:true,
		autoplay:true,
		nav:false,
		dots:false,
		center:false,
		margin:15
	});
	// Window scroll
	$(window).scroll(function(){
		// Go to top
		if($('html, body').scrollTop() > 200){
			$(".go-top").fadeIn();
		}else{
			$(".go-top").fadeOut();
		};
		// Menu
		var header_top_wrap = $(".header-top-wrap").outerHeight(true);
		var menu_all = $(".menu-all").outerHeight(true);
		if($('html, body').scrollTop() > header_top_wrap){
			// $(".menu-all").switchClass('','menu-fixed',1000,"easeInOutQuad");
			$(".menu-all").addClass('menu-fixed');
			$(".banner-warp").css({'margin-top':menu_all});
		}else{
			$(".menu-all").removeClass('menu-fixed');
			$(".banner-warp").css({'margin-top':0});
		};
	});
	// Go to top
	$(".go-top").click(function(){
		$("html, body").animate({scrollTop:0},600);
	});
	// Menu
	$(".button-menu").click(function(){
		$(".menu-mobile-detail").toggle(400);
		$('.menu-right').toggleClass('menu-right-pos');
		$('.menu-mobile').toggleClass('text-center');
			if($('.menu-mobile').hasClass('text-center')){
				$(this).html('<i class="fas fa-times"></i>');
			}else{
				$(this).html('<i class="fas fa-bars"></i>');
			};
	});
	$(".menu-mobile-tier-2").click(function(){
		$(".menu-mobile-tier-2-content").toggle(400);
		

	});
	$(".menu-mobile-tier-3").click(function(){
		$(".menu-mobile-tier-3-content").toggle(400);
	});

	// contact-mobile
	// $('.button-menu-1').click(function(){
	// 	$('.contact-desktop').toggle(400);
	// });


	// xoay dấu +
	

	// Other
	var window_width = $(window).width();
	if(window_width < 1200 && window_width > 576){
		var h_about_slide_member = $(".h-about-slide-member").width();
		$(".h-about-slide-member").height(h_about_slide_member);
		var h_about_title = $(".h-about-title").outerHeight(true);
		var h_about_detail = $(".h-about-detail").outerHeight(true);
		var tempt = h_about_slide_member - h_about_title - h_about_detail -25;
		$(".h-about-content").css({'max-height':tempt});			
	}else if(window_width > 1200){
		var h_about_slide_member = $(".h-about-slide-member").width();
		$(".h-about-slide-member").height(h_about_slide_member);
		var h_about_title = $(".h-about-title").outerHeight(true);
		var h_about_detail = $(".h-about-detail").outerHeight(true);
		var tempt = h_about_slide_member - h_about_title - h_about_detail -22;
		$(".h-about-content").css({'max-height':tempt});
	};
	// Menu Home product in mobile
	$(".h-product-menu-mobile").click(function(){
		$(".h-product-menu-mobile-content").toggle(400);
	});
	if(window_width < 577){
		$(".h-product-menu-mobile-content").click(function(){
			$(".h-product-menu-mobile-content").toggle(400);
		});
	};
	// Cổ đông
	$(".codongs-tt-title").click(function(){
		$(".codongs-tt").toggle(400);
	});
});

jQuery(document).ready(function () {

	jQuery('.slide_1').owlCarousel({
	    loop:true,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        480:{
	            items:2
	        },
	        600:{
	            items:3
	        },
	        800:{
	            items:4
	        },
	        1000:{
	            items:5
	        }
	    }
	});

	jQuery('.slide_2').owlCarousel({
	    loop:true,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        480:{
	            items:2
	        },
	        600:{
	            items:3
	        },
	        800:{
	            items:4
	        },
	        1000:{
	            items:5
	        }
	    }
	});

  	jQuery(".tel").mask("+7 (999) 999-9999");

	// jQuery('.fancybox-thumbs').fancybox();

	jQuery(window).scroll(function(){
        var s = jQuery(this).scrollTop();
        if(s > jQuery('.header').height()){
        	jQuery('#top').fadeIn(700);
        }else{
        	jQuery('#top').fadeOut(700);
        }


        if(s > jQuery('.admin').height()){
        	jQuery('.scroll').addClass('active');
        }else{
        	jQuery('.scroll').removeClass('active');
        }
    });

	jQuery('#top').click(function(){
		jQuery("body,html").animate({
			scrollTop:0
		},1000);
	});

	jQuery('.mobi').click(function(){
		if ( jQuery(this).hasClass('active') ) {
			jQuery(this).removeClass('active');
			jQuery(this).parents().find('nav').removeClass('active');
		} else {
			jQuery(this).addClass('active');
			jQuery(this).parents().find('nav').addClass('active');
		}
	});

	jQuery("nav li").on("click","a", function (event) {
		var id  = jQuery(this).attr('href'),
			top = jQuery(id).offset().top;
		jQuery('body,html').animate({scrollTop: top + 20}, 1500);
	});

});
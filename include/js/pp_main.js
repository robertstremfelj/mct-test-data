jQuery( document ).ready( function( $ ) {
    
    // Intercept all empty (href="#") links.
    $( 'a[href="#"]' ).on( 'click', function ( e ) {
		e.preventDefault();
	});
    
     // Make tables responsive (with css combination).
    $( '.pp_main-txt table' ).each( function() { 
        $(this).wrap( '<div class="table-responsive-container"></div>' );
    });
    
    // Main products slider initialize
    $('.pp2_main_products_slider').slick({
        dots: false,
        infinite: true,
        speed: 1200,
        autoplay: true,
        arrows: true,
        //prevArrow: '<button type="button" class="slick-prev fa-angle-left"></button>',
        //nextArrow: '<button type="button" class="slick-next fa-angle-right"></button>',
        prevArrow: $('.pp_slider_prods_prev'),
        nextArrow: $('.pp_slider_prods_next'),
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    //arrows: false,
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    //arrows: false,
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 991,
                settings: {
                    //arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    //arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    //arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]	
    });
	
	// Home products slider initialize
    $('.pp2_main_productsblue_slider').slick({
        dots: false,
        infinite: true,
        speed: 1200,
        autoplay: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,	
    });
    
    // Home products slider initialize
    $('#pp2_recipe_gallery_slider').slick({
        dots: false,
        infinite: true,
        speed: 1200,
        autoplay: true,
        arrows: true,
        //prevArrow: '<button type="button" class="slick-prev fa-angle-left"></button>',
        //nextArrow: '<button type="button" class="slick-next fa-angle-right"></button>',
        prevArrow: $('.pp_slider_recipes_prev'),
        nextArrow: $('.pp_slider_recipes_next'),
        slidesToShow: 1,
        slidesToScroll: 1,	
    });
    
    // Recipe calculator
    $( '.custom-number-input button' ).on( 'click', function ( e ) {
                                            
		e.preventDefault();
        
        var $this = $(this);
        var btn_action = $this.attr('data-action');
        var btn_input = $('.custom-number-input input'); 
        var value = btn_input.val();
        
        if ( btn_action == 'increment' ) {
            
            if (value < 100) {
                value++;
                btn_input.val(value);
            }
            
        } else {
            
            if (value > 1) {
                value--;
                btn_input.val(value);
                
            }
            
        }
        
        $( '.pp_ingredients li' ).each( function( index, element ) {
            
            var $subthis = $(this);
            var sum_ingvalue;
            var ingel = $subthis.find('.pp_ingrediant_value');
            var ingvalue = ingel.attr('data-value');
            
            if ( ingvalue ) {
                
                ingvalue =  parseFloat(ingvalue.replace(/,/g, '.'));
                sum_ingvalue = value * ingvalue;
                ingel.text(sum_ingvalue);
                
            }
            
        });
        
	});
    
    $( '#pp2copyurl_btn' ).click(function(e) {
        
        e.preventDefault();
        
        $( 'body' ).append( '<input id="pp2copyurl" type="text" value="" />' );
        $( '#pp2copyurl' ).val( window.location.href ).select();
        document.execCommand( 'copy' );
        $( '#pp2copyurl' ).remove();
        
        alert(pp_trans2.translations.pp_odlozisce_url + ' ' + window.location.href + ' ' + pp_trans2.translations.pp_odlozisce_saved);
                    
    });

    $('#gform_next_button_4_13').addClass('orange');
    $('.gform_previous_button').css("background-color", "#f87832");
    $('.gform_button').css("background-color", "#f87832");
    $('.gform_next_button').css("background-color", "#f87832");
    $('#gform_next_button_4_13').css("background-color", "#f87832");

    $('#gform_next_button_4_13').on('click', function() {
        $(this).addClass('orange');
        window.confirmOptIn();
    });
    
    //Check to see if the window is top if not then display button
	$( window ).scroll( function() {
		
        if ($(this).scrollTop() > 300) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
        
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0}, 800);
		scrolled = 0;
		return false;
    });
    
});
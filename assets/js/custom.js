jQuery(document).ready(function($) {

    var window_size = jQuery(window).width();
    new WOW().init();
    var currentRequest = null;
   

    // DATE PICKER
    jQuery('.datetimepicker').datetimepicker({
        timepicker: false,
        format: 'm/d/Y'
    });
   

    // Gallery Slider
    jQuery('.gallery-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
        vertical: false,
        rows: 0,
        asNavFor: '.gallery-slider-nav',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                vertical: false,
                dots: false,
                autoplay: true,
                arrows: true,
                prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow next-arrow"></button>',
            }
        }]
    });
    jQuery('.gallery-slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.gallery-slider',
        infinite: true,
        dots: false,
        arrows: true,
        swipeToSlide: true,
        focusOnSelect: true,
        rows: 0,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                vertical: false,
                dots: false,
                autoplay: true,
            }
        }]
    });

    /* Sticky Header JS */
    jQuery(window).scroll(function() { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    //jQuery("#menu-item-21 a").first().attr('href', 'javascript:void(0);');
    jQuery("#primary-menu .menu-item a").click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });


});

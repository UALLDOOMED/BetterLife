jQuery(document).ready(function($) {

/*------------------------------------------------
            DECLARATIONS
------------------------------------------------*/

    var loader              = $('#loader');
    var loader_container    = $('#preloader');
    var scroll              = $(window).scrollTop();  
    var scrollup            = $('.backtotop');
    var menu_toggle         = $('.menu-toggle');
    var dropdown_toggle     = $('button.dropdown-toggle');
    var nav_menu            = $('.main-navigation');

/*------------------------------------------------
            PRELOADER
------------------------------------------------*/

    loader_container.delay(1000).fadeOut();
    loader.delay(1000).fadeOut("slow");

/*------------------------------------------------
            BACK TO TOP
------------------------------------------------*/

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            scrollup.css({bottom:"25px"});
        } 
        else {
            scrollup.css({bottom:"-100px"});
        }
    });

    scrollup.click(function() {
        $('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });

/*------------------------------------------------
            MAIN NAVIGATION
------------------------------------------------*/

    menu_toggle.click(function(){
        nav_menu.slideToggle();
        $(this).toggleClass('active');
        $('.menu-overlay').toggleClass('active');
        $('.main-navigation').toggleClass('menu-open');
        $('body').toggleClass('main-navigation-active');
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('.menu-sticky #masthead').addClass('nav-shrink');
        }
        else {
            $('.menu-sticky #masthead').removeClass('nav-shrink');
        }
    });

    dropdown_toggle.click(function() {
        $(this).toggleClass('active');
       $(this).parent().find('.sub-menu').first().slideToggle();
    });

    $(document).click(function (e) {
        var container = $("#masthead");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            nav_menu.slideUp();
            $(this).removeClass('active');
            $('.menu-overlay').removeClass('active');
            $('.main-navigation').removeClass('menu-open');
            $('.menu-toggle').removeClass('active');
            $('body').removeClass('main-navigation-active');
        }
    });

/*------------------------------------------------
            Accordion
------------------------------------------------*/
var faq = $('.faq-group');

faq.find('.each-faq').each(function() {
    if( !$(this).hasClass('open') ) {
        $(this).find('.faq-content').hide();
    }
});

faq.find('.faq-trigger').on('click', function(el) {
    var openFaq = $(this).closest('.each-faq');

    openFaq.toggleClass('open').find('.faq-content').slideToggle( 300 );
    openFaq.siblings('.each-faq:visible').each(function() {
        $(this).removeClass('open').find('.faq-content').slideUp( 300 );
    });

});

/*------------------------------------------------
            JETPACK SUBSCRIPTION ICON
------------------------------------------------*/
$('.jetpack_subscription_widget button').append('<i class="fa fa-envelope"></i>');

/*------------------------------------------------
                END JQUERY
------------------------------------------------*/

});
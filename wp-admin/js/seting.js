(function($) {
"use strict";
$(document).ready(function() {
$("#proudct .owl-carousel").owlCarousel({
    items: 3,
    nav: true,
    dots: false,
    autoplay: false,
    loop: true,
});
$('.blog-css').owlCarousel({
    loop: true,
    responsiveClass: true,
    nav: true,
    autoplay: false,
    navContainer: false,
    //navText: ['Previous ', 'Next'],
    responsive: {
        0: {
            items: 1,
            margin: 8,
            nav: true
        },
        600: {
            items: 2,
            margin: 10,
            nav: true
        },
        1000: {
            items: 3,
            margin: 20,
            nav: true,
            loop: false
        }
    }
});
})
})(jQuery);
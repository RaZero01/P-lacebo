require('./bootstrap');
require('typeface-paytone-one');

/**
 * Menu dropdown toggle on hover
 */
$('div.navbar-nav div.dropdown').hover(function() {
    if ($(window).width() > 767) {
        $(this).find('.dropdown-menu').show();
    }
}, function() {
    if ($(window).width() > 767) {
        $(this).find('.dropdown-menu').hide().css('display', '');
    }
});

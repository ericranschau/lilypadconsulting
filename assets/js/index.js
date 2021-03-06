$(function(){

    var $body = $('body');
    var $header = $('header');
    var $headerButton = $('#site-header-button');
    var $headerLogo = $('#site-header-logo');
    var $nav = $('#nav');

    var menuIsOpen = false;

    $(window).scroll(function() {
        testWindowScrollPos();
    });

    $headerButton.click(function() {
        if (menuIsOpen) {
            $headerLogo.attr('src', $headerLogo.data('default'));
            $nav.removeClass('isOpen').animate({ opacity: 1 }, 150, 'linear', function() {
                $header.removeClass('isOpen');
            });
        } else {
            $header.addClass('isOpen');
            $headerLogo.attr('src', $headerLogo.data('alt'));
            $nav.addClass('isOpen');
        }

        menuIsOpen = !menuIsOpen;
    });

    var testWindowScrollPos = function() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            $body.addClass('isScrolled');
        } else {
            $body.removeClass('isScrolled');
        }
    }
});
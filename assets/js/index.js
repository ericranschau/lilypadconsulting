$(function(){
    var $body = $('body');
    var $header = $('header');
    var $headerButton = $('#site-header-button');
    var $headerLogo = $('#site-header-logo');
    var $nav = $('#nav');

    var menuIsOpen = false;

    var testWindowScrollPosition = function() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            $body.addClass('isScrolled');
        } else {
            $body.removeClass('isScrolled');
        }
    }

    $(window).scroll(function() {
        testWindowScrollPosition();
    });

    $headerButton.click(function() {
        if (menuIsOpen) {
            $body.removeClass('overflow-hidden');
            $headerButton.text($headerButton.data('default'));
            $headerLogo.attr('src', $headerLogo.data('default'));
            $nav.removeClass('isOpen').animate({ opacity: 1 }, 150, 'linear', function() {
                $header.removeClass('isOpen');
            });
        } else {
            $body.addClass('overflow-hidden');
            $header.addClass('isOpen');
            $headerButton.text($headerButton.data('alt'));
            $headerLogo.attr('src', $headerLogo.data('alt'));
            $nav.addClass('isOpen');
        }

        menuIsOpen = !menuIsOpen;
    });
});
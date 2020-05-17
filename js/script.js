jQuery(document).ready(function($) {
    const Menu = function() {
        const selectors = {
            openButton: '.menu-open-button',
            closeButton: '.menu-close-button',
            menu: '#menu'
        };

        $(selectors.openButton).on('click', function(){
            $(selectors.menu).addClass('open');
        });

        $(selectors.closeButton).on('click', function(){
            $(selectors.menu).removeClass('open');
        });
    }

    const StickyHeader = function(seletor) {
        const offset = 100;

        const $header = $(seletor);

        const checkOffset = function() {
            if($(window).scrollTop() > offset) {
                if (!$header.hasClass('sticky')) {
                    $header.addClass('sticky');
                    console.log('sticky');
                }

            } else if ($header.hasClass('sticky')) {
                $header.removeClass('sticky');
            }
        }

        $(window).scroll(checkOffset);
        checkOffset();
    }

    new StickyHeader('#header');
    new Menu();
});

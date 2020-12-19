$(function() {
    // Responsive navigation

    function headerNavigation() {
        if ($(window).width() <= 1024) {
            $('.icon-menu').on('click', function() {
                $('.toggle-menu .icon-menu').css('display', 'none');
                $('.toggle-menu .icon-close').css('display', 'block');

                $('.page-header, .overlay').addClass('active');
                $('body').css('overflow', 'hidden');
            });

            $('.icon-close, .navigation li a').on('click', function() {
                $('.toggle-menu .icon-close').css('display', 'none');
                $('.toggle-menu .icon-menu').css('display', 'block');

                $('.page-header, .overlay').removeClass('active');
                $('body').css('overflow', 'auto');
            });
        } else {
            $('.toggle-menu .icon-close').css('display', 'none');
            $('.toggle-menu .icon-menu').css('display', 'block');

            $('.page-header, .overlay').removeClass('active');
            $('body').css('overflow', 'auto');
        }
    }

    headerNavigation();

    $(window).on('resize', function(e) {
        headerNavigation();
    });

    // Hide navigation on click outside the navigation & page-header containers

    $(document).on('mouseup', function(e) {
        if ($(window).width() > 1024) {
            return;
        }

        var $navigationContainer = $('.navigation');

        if (!$navigationContainer.is(e.target) && $navigationContainer.has(e.target).length === 0) {
            $('.toggle-menu .icon-close').css('display', 'none');
            $('.toggle-menu .icon-menu').css('display', 'block');

            $('.page-header, .overlay').removeClass('active');
            $('body').css('overflow', 'auto');
        }
    });
});

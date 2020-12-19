$(function() {
    // Cookie consent block

    var $cookies = Cookies.get('bgct_cookies');

    if ($cookies != 1) {
        setTimeout(function() {
            $('.cookie-consent').addClass('show');
        }, 1000);

        $('#cookie-hide').click(function(e) {
            $('.cookie-consent').removeClass('show');
        });

        $('#cookie-agree').click(function(e) {
            Cookies.set('bgct_cookies', 1, {
                expires: 150,
                path: '/'
            });

            $('.cookie-consent').removeClass('show');

            setTimeout(function(){
                $('.cookie-consent').remove();
            }, 500);
        });
    } else {
        $('.cookie-consent').remove();
    }
});

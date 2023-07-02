import 'slick-carousel/slick/slick';

function cookies() {
    var cookieInfo = $('#cookies-info'),
        cookieClose = $('#cookies-info').find('.cookies-info__accept');
    checkCookie();

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + expires + "; path=/";

    };

    function getCookie(cname) {

        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return '';
    };

    function checkCookie() {
        var isExist = getCookie(document.domain + '-cookies-info');
        if (isExist != '') {
            cookieInfo.hide();
        } else {
            cookieInfo.show();
            cookieClose.on('click', function (e) {
                e.preventDefault();
                cookieInfo.hide();
                isExist = true;
                if (isExist != "" && isExist != null) {
                    setCookie(document.domain + '-cookies-info', isExist, 365);
                }
            });
        }
    };

};

function scrollToSection() {
    $('a').on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        if (href[0] != '#') {
            window.location.href = href;
        } else {
            $('html, body').animate({
                scrollTop: $(href).offset().top
            }, 500);
        }
    });
}

function timer(delayLoad = false) {
    const timers = $('[data-timer]:not(.loaded)');
    if (timers.length < 1) {
        return false;
    }
    timers.each((i, el) => {

        const timer = $(el);
        if (!timer.hasClass('delay') || (timer.hasClass('delay') && delayLoad)) {

            const timerNumbers = timer.find('[data-timer-number]');

            const time = timer.data('timer') * 1000;
            const now = new Date().getTime();
            if (time <= now) {
                return;
            }

            timer.addClass('loaded');
            const timerInterval = setInterval((e) => {
                updateTimer(timer, time, timerNumbers, timerInterval);
            }, 1000);
            updateTimer(timer, time, timerNumbers, timerInterval);
        }

        function updateTimer(timer, time, timerNumbers, timerInterval) {

            const now = new Date().getTime();
            const timeLeft = time - now;

            let numbersData = [];

            numbersData['days'] = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            numbersData['hours'] = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            numbersData['minutes'] = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            numbersData['seconds'] = Math.floor((timeLeft % (1000 * 60)) / 1000);

            timerNumbers.each((i, el) => {
                const singleTimer = $(el);
                const type = singleTimer.data('timer-number');
                if (type in numbersData) {
                    let newValue = numbersData[type];
                    if (newValue < 0) {
                        newValue = 0;
                    }
                    if (parseInt(singleTimer.text()) !== newValue) {
                        if (newValue < 10 && type !== 'days') {
                            singleTimer.text('0' + newValue);
                        } else {
                            singleTimer.text(newValue);
                        }
                    }
                }
            });

            if (timeLeft <= 0 && !timer.hasClass('delay')) {
                clearInterval(timerInterval);
                setTimeout(() => {
                    window.location.reload();
                }, 1500);
            }
        }
    });
}

export default {cookies, scrollToSection, timer};
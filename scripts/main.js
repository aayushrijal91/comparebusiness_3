// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

function initNavigationSlick() {
    if ($(document).width() <= 1200) {
        $("#areas-slider").slick({
            autoplay: true,
            slidesToShow: 3,
            centerMode: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 540,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        $("#about-slider").slick({
            autoplay: true,
            slidesToShow: 3,
            centerMode: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 540,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        $("#lenders-slider").slick({
            autoplay: true,
            slidesToShow: 1,
            arrows: false,
            dots: true,
        });
    }

    if ($(document).width() <= 540) {
        $("#about-slider").slick({
            autoplay: true,
            slidesToShow: 1,
            centerMode: true,
            arrows: false,
        });
    }
}

initNavigationSlick();

$(window).on('resize', function () { initNavigationSlick() });

$('#showMoreUtes').on('click', function() {
    if($(this).html().trim() == '&amp; More!') {
        $(this).text('Less');
    } else {
        $(this).text('& More!');
    }

    $('#moreUtes').slideToggle();
})
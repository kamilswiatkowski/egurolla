function eventsSlider() {
    $('.events__slider').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: true
                }
            },
        ]
    });
}
function experienceSlider() {
    $('.experience__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: false
                }
            },
        ]
    });
}
function winsSlider() {
    $('.team-wins__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: false
                }
            },
        ]
    });
}

function advantagesSlider() {
    $('.advantages__slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1.2,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: true,
                    arrows: false
                }
            },
        ]
    });
}

function whyYouShouldDanceSlider() {
    $('.why-you-should-dance__slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1.2,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: true,
                    arrows: false
                }
            },
        ]
    });
}


export default {eventsSlider, advantagesSlider, whyYouShouldDanceSlider, experienceSlider, winsSlider};
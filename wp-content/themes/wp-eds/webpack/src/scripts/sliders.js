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
                    infinite: true,
                    dots: true
                }
            },

        ]
    });
}

export default {eventsSlider};
function featuredSlider() {
    $('[data-featured-slider]').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        infinite: false,
    });
}

export default {featuredSlider};
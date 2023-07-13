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

function testimonialsSlider() {
    $('.testimonials__slider').slick({
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
    if ($('body').hasClass('post-type-archive-kariera')) {
        $('.advantages__slider').slick({
            slidesToShow: 2,
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
    } else {
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

function whoIsAgustinSlider() {
    $('.who-is-agustin__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    arrows: false
                }
            },
        ]
    });
}

function ourTeamSlider() {
    $('.our-team__slider').slick({
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
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: true,
                    arrows: false
                }
            },
        ]
    });
}


function eventPlanSlider() {
    $('.event-plan__slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: true,
                    arrows: true
                }
            },
        ]
    });
}


function aboutInstructorSlider() {
    $('.about-instructor__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
    });
}


function teamLedBySlider() {
    $('.teams-led-by__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
}

function seeAlsoSlider() {
    $('.see-also__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
}

function dancingStyleInOurSchoolSlider() {
    $('.dancing-styles-in-our-school__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
}


function historySlider() {
    $('.history-of-our-school__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: false,
        asNavFor: '.history-of-our-school__years__slider',
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    dots: true,
                    arrows: false,
                }
            }
        ]
    });

    $('.history-of-our-school__years__slider').slick({
        slidesToShow: 13,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        infinite: false,
        asNavFor: '.history-of-our-school__slider',
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 10,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 7,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 5,
                }
            }
        ]
    });
}

function partnersSlider() {
    $('.partners__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    arrows: false
                }
            },
        ]
    });
}

function featuredPosts() {
    $('.featured__posts').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    arrows: true
                }
            },
        ]
    });
}

function opinionsSlider() {
    $('.opinions__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    dots: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    dots: true
                }
            },
        ]
    });
}


function individualLessonsSlider() {
    $('.individual-lessons__advantages').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    dots: true
                }
            },
        ]
    });
}


function cooperationPossibilitiesSlider() {
    $('.see-cooperation-posibilites__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
}

function discoverCooperationPossibilitiesSlider() {
    $('.discover-the-possibilities-of-cooperation__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
}

function slidersInit() {
    eventsSlider();
    featuredPosts();
    advantagesSlider();
    whyYouShouldDanceSlider();
    experienceSlider();
    winsSlider();
    whoIsAgustinSlider();
    ourTeamSlider();
    eventPlanSlider();
    aboutInstructorSlider();
    teamLedBySlider();
    seeAlsoSlider();
    dancingStyleInOurSchoolSlider();
    testimonialsSlider();
    historySlider();
    partnersSlider();
    opinionsSlider();
    individualLessonsSlider();
    cooperationPossibilitiesSlider();
    discoverCooperationPossibilitiesSlider();
}

export default {
    slidersInit
};
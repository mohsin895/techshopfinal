var swiper = new Swiper(".mySwiper ", {
    speed: 700,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 50
        },
        700: {
            slidesPerView: 2,
            spaceBetween: 50
        },

        1000: {
            slidesPerView: 3,
            spaceBetween: 3,
        }
    },
});

var swiper = new Swiper(".newpost ", {
    speed: 400,
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 50
        },
        700: {
            slidesPerView: 2,
            spaceBetween: 50
        },

        1000: {
            slidesPerView: 3,
            spaceBetween: 3,
        }
    },
});

var swiper = new Swiper(".technews ", {
    speed: 700,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 50
        },
        700: {
            slidesPerView: 2,
            spaceBetween: 50
        },

        1000: {
            slidesPerView: 3,
            spaceBetween: 3,
        }
    },
});

$(function() {
    $(document).click(function(event) {
        $('.navbar-collapse').collapse('hide');
    });
});
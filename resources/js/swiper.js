import Swiper from "swiper/bundle";
import "swiper/css/bundle";

const homeSwiper = new Swiper(".home-swiper", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
const latestSwiper = new Swiper(".latest-swiper", {
    slidesPerView: 6,
    spaceBetween: 40,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1300: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1600: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
        1800: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
    },
});

const actorSwiper = new Swiper(".actor-swiper", {
    slidesPerView: 3,
    spaceBetween: 0,
    // breakpoints: {
    //     320: {
    //         slidesPerView: 3,
    //         spaceBetween: 10,
    //     },
    //     1300: {
    //         slidesPerView: 4,
    //         spaceBetween: 15,
    //     },
    //     1600: {
    //         slidesPerView: 5,
    //         spaceBetween: 20,
    //     },
    //     1800: {
    //         slidesPerView: 6,
    //         spaceBetween: 20,
    //     },
    // },
});

const cartItem = new Swiper(".swiper-cart-items", {
    slidesPerView: 3,
    spaceBetween: 30,
    // breakpoints: {
    //     320: {
    //         slidesPerView: 3,
    //         spaceBetween: 10,
    //     },
    //     1300: {
    //         slidesPerView: 4,
    //         spaceBetween: 15,
    //     },
    //     1600: {
    //         slidesPerView: 5,
    //         spaceBetween: 20,
    //     },
    //     1800: {
    //         slidesPerView: 6,
    //         spaceBetween: 20,
    //     },
    // },
});
const  relativeMovieSwiper = new Swiper(".relative-movie-swiper", {
    slidesPerView: 6,
    spaceBetween: 40,
    loop: false,
    navigation: {
        nextEl: "#relative-movie-swiper-button-next",
        prevEl: "#relative-movie-swiper-button-prev",
    },
    slidesPerGroup:3,
    breakpoints: {
        320: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1300: {
            slidesPerView: 5,
            spaceBetween: 15,
        },
        1600: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
        1800: {
            slidesPerView: 7,
            spaceBetween: 20,
        },
    },
});


const  seriesMovieSwiper = new Swiper(".series-movie-swiper", {
    slidesPerView: 6,
    spaceBetween: 40,
    loop: false,
    navigation: {
        nextEl: "#series-movie-swiper-button-next",
        prevEl: "#series-movie-swiper-button-prev",
    },
    slidesPerGroup:3,
    breakpoints: {
        320: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1300: {
            slidesPerView: 5,
            spaceBetween: 15,
        },
        1600: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
        1800: {
            slidesPerView: 7,
            spaceBetween: 20,
        },
    },
});
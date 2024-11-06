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
        nextEl: ".swiper-button-next-latest",
        prevEl: ".swiper-button-prev-latest",
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
        2000: {
            slidesPerView: 7,
            spaceBetween: 20,
        },
    },
});
const trendingSwiper = new Swiper(".trending-swiper", {
    slidesPerView: 6,
    spaceBetween: 40,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next-trending",
        prevEl: ".swiper-button-prev-trending",
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
        2000: {
            slidesPerView: 7,
            spaceBetween: 20,
        },
    },
});

const actorSwiper = new Swiper(".actor-swiper", {
    slidesPerView: 3,
    spaceBetween: 0,
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 1,
        },
        1300: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1600: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1800: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
    },
});

const cartItem = new Swiper(".swiper-cart-items", {
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        1300: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1600: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1800: {
            slidesPerView: 5,
            spaceBetween: 23,
        },
    },
});

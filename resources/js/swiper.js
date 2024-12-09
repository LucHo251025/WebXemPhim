import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import {Livewire, Alpine} from "../../public/vendor/livewire/livewire.esm";


const homeSwiper = new Swiper(".home-swiper", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
const latestSwiper = new Swiper(".latest-swiper", {
    slidesPerView: 6,
    spaceBetween: 20,
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
    spaceBetween: 20,
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
const mostWatchedSwiper = new Swiper(".most-watched-swiper", {
    slidesPerView: 'auto',
    spaceBetween: 40,
    speed: 1000,
    loop: false,
    navigation: {
        nextEl: ".swiper-button-next-most-watched",
        prevEl: ".swiper-button-prev-most-watched",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        1300: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1600: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1800: {
            slidesPerView: 2.1,
            spaceBetween: 20,
        },
        2000: {
            slidesPerView: 2.2,
            spaceBetween: 20,
        },
    },
    on: {
        slideChange: function () {
            Livewire.dispatch('setCurrentFilmByIndex', { index: this.realIndex });
        }
    },
});
const moviesSwiper = new Swiper(".movies-swiper", {
    slidesPerView: "auto",
    spaceBetween: 20,
});
const showsSwiper = new Swiper(".shows-swiper", {
    slidesPerView: "auto",
    spaceBetween: 20,
});
const genresSwiper = new Swiper(".genres-swiper", {
    slidesPerView: 'auto',
    spaceBetween: 67,
    speed: 1000,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next-genres",
        prevEl: ".swiper-button-prev-genres",
    },
    on: {
        slideChange: function () {
            Livewire.dispatch('setCurrentFilmByIndexGenres', { index: this.realIndex });
        }
    },
});

function addButtonDelay(buttonClass) {
    const button = document.querySelector(buttonClass);
    if (button) {
        button.addEventListener('click', function () {
            button.disabled = true;
            setTimeout(() => {
                button.disabled = false;
            }, 800);
        });
    }
}

addButtonDelay('.swiper-button-next-most-watched');
addButtonDelay('.swiper-button-prev-most-watched');

const actorSwiper = new Swiper(".actor-swiper", {
    slidesPerView: 3,
    spaceBetween: 16,
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
            spaceBetween: 30,
        },
        1800: {
            slidesPerView: 6,
            spaceBetween: 20,
        },
        2000: {
            slidesPerView: 5,
            spaceBetween: 24,
        },
    },
});

const cartItem = new Swiper(".similarShows-swiper", {
    slidesPerView: "auto",
    spaceBetween: 20,
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

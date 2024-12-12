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
    slidesPerView: 'auto',
    spaceBetween: 16,
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




const seriesSwiper = new Swiper(".series-movie-swiper", {
    slidesPerView: "auto",
    spaceBetween: 20,
    loop: false,
});

let episodeSwiper; // Biến toàn cục lưu trữ Swiper instance
initEpisodeSwiper();
function initEpisodeSwiper() {
    const swiperElement = document.querySelector(".episodes-swiper");
    if (swiperElement) {
        // Hủy Swiper cũ nếu tồn tại
        if (episodeSwiper) {
            episodeSwiper.destroy(true, true);
        }

        // Khởi tạo Swiper mới
        episodeSwiper = new Swiper(swiperElement, {
            slidesPerView: "auto",
            spaceBetween: 20,
            loop: false,
        });

        console.log("Swiper initialized.");
    } else {
        console.warn("Swiper element not found.");
    }
}

// Lắng nghe sự kiện Livewire và sự kiện tùy chỉnh
document.addEventListener("livewire:afterDomUpdate", () => {
    setTimeout(initEpisodeSwiper, 250); // Đồng bộ thời gian chờ
});

document.addEventListener("init-swiper", () => {
    setTimeout(initEpisodeSwiper, 250); // Sử dụng cùng hàm và thời gian chờ
});
;



import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

// Initialize Swiper
document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper('.swiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });
});

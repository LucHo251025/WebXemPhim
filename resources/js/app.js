import "choices.js/public/assets/styles/choices.css";


//Rating of film in show movie page
document.addEventListener("DOMContentLoaded", () => {
    const ratingContainer = document.getElementById("rating-container");
    const stars = document.querySelectorAll(".rating-star");
    const ratingDisplay = document.querySelector(".rating-display");
    const changeDisplay = document.querySelector(".change-display");
    const changeButton = document.getElementById("changeRating-button");
    const cancelButton = document.getElementById("cancelRating-button");

    let selectedRating = 0;

    // Hiệu ứng hover ngôi sao
    const handleHover = (hoverIndex) => {
        stars.forEach((star, index) => {
            star.src = index <= hoverIndex
                ? star.dataset.activeSrc
                : star.dataset.inactiveSrc;
        });
    };

    // Reset hiển thị ngôi sao khi hover rời đi
    const resetStars = () => {
        stars.forEach((star, index) => {
            star.src = index < selectedRating
                ? star.dataset.activeSrc
                : star.dataset.inactiveSrc;
        });
    };

    // Xử lý hover vào từng ngôi sao
    stars.forEach((star, index) => {
        star.parentElement.addEventListener("mouseover", () => handleHover(index));
        star.parentElement.addEventListener("mouseleave", resetStars);

        // Xử lý khi người dùng click để chọn số sao
        star.parentElement.addEventListener("click", () => {
            selectedRating = index + 1;

            // Gửi đánh giá qua Livewire

            // Hiển thị giao diện mới
            if (ratingDisplay) ratingDisplay.classList.remove("hidden");
            if (ratingContainer) ratingContainer.classList.add("hidden");
            if (changeDisplay) changeDisplay.classList.add("hidden");
        });
    });

    // Nút Change
    if (changeButton) {
        changeButton.addEventListener("click", () => {
            selectedRating = 0;

            // Hiển thị lại các ngôi sao để chọn mới
            if (ratingContainer) ratingContainer.classList.remove("hidden");
            if (ratingDisplay) ratingDisplay.classList.add("hidden");
            if (changeDisplay) changeDisplay.classList.remove("hidden");
        });
    }

    // Nút Cancel
    if (cancelButton) {
        cancelButton.addEventListener("click", () => {
            // Ẩn giao diện Change
            if (changeDisplay) changeDisplay.classList.add("hidden");
            if (ratingDisplay) ratingDisplay.classList.remove("hidden");
            if (ratingContainer) ratingContainer.classList.add("hidden");
        });
    }
})


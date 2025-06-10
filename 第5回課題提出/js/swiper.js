//スライドショー
$(function () {
    const swiper = new Swiper(".swiper", {
        loop: true,
        slidesPerView: 1.2,
        centeredSlides: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});

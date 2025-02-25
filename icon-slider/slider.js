document.querySelectorAll('.icon-swiper').forEach(iconSlider => {
    new Swiper(iconSlider, {
        direction: 'horizontal',
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: iconSlider.querySelector('.swiper-pagination'),
        },
    });
});

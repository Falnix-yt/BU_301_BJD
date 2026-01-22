document.addEventListener('DOMContentLoaded', function() {
    const swiperEl = document.querySelector('.ouvrage-swiper');
    if(swiperEl){
        new Swiper(swiperEl, {
            loop: true,
            slidesPerView: 3,          // 3 images visibles sur desktop
            spaceBetween: 15,          // espace entre les slides
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                0: { slidesPerView: 1 },    // 1 image sur mobile
                768: { slidesPerView: 2 },  // 2 images sur tablette
                1024: { slidesPerView: 3 }  // 3 images sur desktop
            }
        });
    }
});

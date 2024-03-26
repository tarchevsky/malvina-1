gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray('.fade-in').forEach(item => {
    gsap.from(item, {
        duration: 1, // Продолжительность анимации
        opacity: 0, // Начальная прозрачность
        y: 100, // Начальное смещение по оси Y
        ease: 'power1.out', // Тип анимации
        scrollTrigger: {
            trigger: item,
            start: 'top 90%', // Начало анимации, когда верх элемента достигает 90% высоты viewport
            end: 'bottom 60%', // Конец анимации, когда низ элемента достигает 60% высоты viewport
            toggleActions: 'play none none reverse', // Определяет действия в зависимости от направления скролла
        },
    });
});

const slider = new Swiper('.slider', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 200,
    preloadImages: false,
    lazy: true,
    effect: 'fade',
    pagination: {
        el: '.slider-pagination.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.slider-button-next.swiper-button-next',
        prevEl: '.slider-button-prev.swiper-button-prev',
    },
});
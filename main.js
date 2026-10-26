const chefsSwiper = new Swiper(".chefsSwiper", {
    slidesPerView: 1,
    spaceBetween: 25,
    speed: 600,
    loop: true,

    navigation: {
      nextEl: ".swiper-custom-next",
      prevEl: ".swiper-custom-prev",
    },

    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 25,
      },

      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },

      992: {
        slidesPerView: 4,
        spaceBetween: 30,
      },

      1200: {
        slidesPerView: 6,
        spaceBetween: 25,
      },
    },
  });
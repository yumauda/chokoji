"use strict";

let swiper = new Swiper(".swiper1", {
  loop: true,
  rewind: true,
  centeredSlides: false,
  effect: "fade",
  delay: 2000,
  autoplay: {
    delay: 8000,
  },
  speed: 1300,
  slidesPerView: 1,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 1,
      spaceBetween: 12,
    },
  },
});

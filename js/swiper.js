"use strict";

let swiper = new Swiper(".swiper1", {
  loop: true,
  rewind: true,
  centeredSlides: false,
  effect: "fade",
  autoplay: {
    delay: 2500,
  },
  speed: 300,
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

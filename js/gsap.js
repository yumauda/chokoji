"use strict";

// Then, once the page loads...
window.addEventListener("DOMContentLoaded", function () {
  
  gsap.fromTo(
    ".js-top",
    {
      opacity: 0,
      y: 30,
    },
    {
      opacity: 1,
      y: 0,
      duration: 3,
      delay: 0.5,
      ease: "power3.out",
      stagger: 0.1,
    }
  );
  
  gsap.fromTo(
    ".js-about",
    {
      opacity: 0,
      y: 30,
    },
    {
      duration: 1.5,
      opacity: 1,
      y: 0,
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".p-about",
        start: "0% 70%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-feature",
    {
      opacity: 0,
      y: 30,
    },
    {
      duration: 1.5,
      opacity: 1,
      y: 0,
      stagger: 0.2,
      scrollTrigger: {
        trigger: ".p-feature",
        start: "0% 70%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-plan",
    {
      opacity: 0,
      y: 30,
    },
    {
      duration: 1.5,
      opacity: 1,
      y: 0,
      stagger: 0.2,
      scrollTrigger: {
        trigger: ".p-plan",
        start: "0% 70%",
      },
      ease: "power3.out",
    }
  );
  
  
});

window.onload = () => {
  const theme =
    localStorage.getItem("theme") ?? localStorage.setItem("theme", "light");
  if (theme === "light") {
    document.documentElement.className = "light";
  } else if (theme === "dark") {
    document.documentElement.className = "dark";
  }
  AOS.init();
};

const swiperHero = new Swiper("#slide-hero", {
  slidesPerView: 1,
  lazy: true,
  loop: true,
  autoplayDisableOnInteraction: true,
  speed: 300,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },
  navigation: {
    nextEl: ".slide-trip-next",
    prevEl: ".slide-trip-prev",
  },
});

const swiperTrips = new Swiper("#slide-trips", {
  loop: true,
  lazy: true,
  speed: 300,
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
  // autoplay: {
  //   delay: 2500,
  //   disableOnInteraction: true,
  // },
  // navigation: {
  //   nextEl: ".slide-trip-next",
  //   prevEl: ".slide-trip-prev",
  // },
});



const swiperPartners = new Swiper("#slide-partners", {
  loop: true,
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
  // Navigation arrows
  navigation: {
    nextEl: ".slidesPartners-next",
    prevEl: ".slidesPartners-prev",
  },
});


const swiperCustomers = new Swiper("#slide-customers", {
  loop: true,
  speed: 500,
  slidesPerView: 1,
  autoplay: {
    delay: 1500,
  },
  breakpoints: {
    480: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },

});



const swiperGallery = new Swiper("#slide-gallery", {
  loop: true,
  lazy: true,
  speed: 500,
  slidesPerView: 1,
  spaceBetween: 30,
  breakpoints: {
    480: {
      slidesPerView: 2,
      spaceBetween: 25,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
  },
  navigation: {
    nextEl: "#slide-gallery-next",
    prevEl: "#slide-gallery-prev",
  },
});

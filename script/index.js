try {
  // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
  let vh = window.innerHeight * 0.01;
  // Then we set the value in the --vh custom property to the root of the document
  document.documentElement.style.setProperty("--vh", `${vh}px`);

  // We listen to the resize event
  window.addEventListener("resize", () => {
    // We execute the same script as before
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  });
} catch (error) {}
try {
  // Select various groups of elements
  const buttons = document.querySelectorAll(".button-navbar");
  const overlayNavbar = document.querySelector(".menuitemoverlay");
  const overlayNavbarLinks = document.querySelectorAll("header a");
  const otherButtons = document.querySelectorAll(
    "header button:not(.button-navbar)"
  );
  const overlayInnerDivs = document.querySelectorAll(".inner_div");
  const overlayHeader = document.querySelector(".overlay-header");

  // Define function to remove 'active' class from elements
  function removeClassButtonNavbar() {
    overlayNavbar.classList.remove("active");
    overlayHeader.classList.add("hidden");

    overlayInnerDivs.forEach((div) => div.classList.remove("active"));
    buttons.forEach((button) => button.classList.remove("active"));
  }

  // Apply 'mouseover' and 'click' events to buttons
  buttons.forEach((button) => {
    ["mouseover", "click"].forEach((evt) => {
      button.addEventListener(evt, () => {
        removeClassButtonNavbar();
        overlayHeader.classList.remove("hidden");
        const targetId = button.getAttribute("data-target");
        const targetElement = document.querySelector(`#${targetId}`);

        overlayNavbar.classList.add("active");
        button.classList.add("active");

        if (targetElement) {
          targetElement.classList.add("active");
        }
      });
    });
  });

  // Apply 'mouseover' and 'click' events to otherButtons and overlayNavbarLinks
  [...otherButtons, ...overlayNavbarLinks].forEach((element) => {
    ["mouseover", "click"].forEach((evt) => {
      element.addEventListener(evt, removeClassButtonNavbar);
    });
  });

  // Apply 'mouseover' event to overlayHeader
  overlayHeader.addEventListener("mouseover", removeClassButtonNavbar);
} catch (error) {}

/**********************/
/**** hamburger ***/
/**********************/
try {
  // Selecteer het hamburgerknop-element, het menu-overlay-element en de body
  const hamburgerButton = document.querySelector(".button-hamburger");
  const menuOverlay = document.querySelector(".menumobileoverlay");
  const body = document.body;
  const zorghulpmiddelenElement = document.querySelector(".zorghulpmiddelen");
  const submenuOverlay = document.querySelector(".submenumobileoverlay");

  // Voeg een klikgebeurtenis toe aan het hamburgerknop-element
  hamburgerButton.addEventListener("click", function () {
    // Toggle de 'open'-klasse op het menu-overlay-element
    hamburgerButton.classList.toggle("open");
    menuOverlay.classList.toggle("open");

    // Toggle de 'overlay-hidden'-klasse op de body
    body.classList.toggle("overflow-hidden");

    if (submenuOverlay.classList.contains("open")) {
      submenuOverlay.classList.remove("open");
    }
  });

  // Voeg een klikgebeurtenis toe aan het element met het id 'zorghulpmiddelen'
  zorghulpmiddelenElement.addEventListener("click", function () {
    // Toggle de 'open'-klasse op het submenu-overlay-element
    submenuOverlay.classList.toggle("open");
  });

  // Selecteer alle elementen met de class 'backtomenu'
  const backToMenuElements = document.querySelectorAll(".backtomenu");

  // Voeg een klikgebeurtenis toe aan elk element met de class 'backtomenu'
  backToMenuElements.forEach(function (element) {
    element.addEventListener("click", function () {
      // Toggle de 'open'-klasse op het submenu-overlay-element
      submenuOverlay.classList.toggle("open");
    });
  });
} catch (error) {}

try {
  const inner = document.querySelector(".inner-hero");
  const section = document.querySelector(".section-hero");

  window.addEventListener("scroll", function () {
    let scrollPosition =
      window.scrollY ||
      window.scrollTop ||
      document.getElementsByTagName("html")[0].scrollTop;
    let centerPoint;
    if (section) {
      centerPoint =
        section.offsetTop + section.offsetHeight / 2 - window.innerHeight / 1;
    }
    let scale;

    // Scaling from 1 to 1.5 when scroll is from 0 to centerPoint of image
    if (scrollPosition <= centerPoint) {
      scale = 1.5 - (scrollPosition / centerPoint) * 0.5;
    }
    scale = Math.max(Math.min(scale, 1.5), 1); // Clamp scale value between 1 and 1.5
    if (inner) {
      inner.style.transform = `scale(${scale})`;
    }
  });
} catch (error) {}

try {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.2,
    allowTouchMove: false,
    spaceBetween: 30,
    loop: true,
    preventLinksPropagation: false,
    touchStartPreventDefault: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
        centeredSlides: true,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
      1280: {
        slidesPerView: 3,
        spaceBetween: 60,
      },
    },
  });
} catch (error) {}

// var slides = document.querySelectorAll(".swiper-slide");
// var isMouseDown = false;

// slides.forEach(function (slide) {
//   var iframe = slide.querySelector("iframe");

//   slide.addEventListener("mousedown", function () {
//     isMouseDown = true;
//     iframe.style.pointerEvents = "none"; // disable pointer events when mouse is down
//   });

//   slide.addEventListener("mouseup", function () {
//     isMouseDown = false;
//     iframe.style.pointerEvents = "all"; // enable pointer events when mouse is up
//   });

//   slide.addEventListener("mousemove", function () {
//     if (isMouseDown) {
//       iframe.style.pointerEvents = "none"; // disable pointer events when mouse is moving and mouse is down
//     }
//   });
// });

try {
  var galleryThumbs = new Swiper(".swiper-container.thumbs", {
    spaceBetween: 12,
    slidesPerView: "auto",
    freeMode: true,
    direction: "horizontal",
    breakpoints: {
      0: {
        direction: "horizontal",
      },
      768: {
        spaceBetween: 13,
        direction: "horizontal",
      },
      1200: {
        direction: "vertical",
        spaceBetween: 25,
      },
      1352: {
        direction: "vertical",
        spaceBetween: 30,
      },
    },
  });

  var galleryTop = new Swiper(".swiper-container.big", {
    thumbs: {
      swiper: galleryThumbs,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
} catch (error) {}

try {
  function inittab(tabWrapper, activeTab = 1) {
    const tabBtns = tabWrapper.querySelectorAll(".tab-btn");
    const underline = tabWrapper.querySelector(".underline");
    const tabContents = tabWrapper.querySelectorAll(".tab-content");

    activeTab = activeTab - 1;
    tabBtns[activeTab].classList.add("active");
    underline.style.width = `${tabBtns[activeTab].offsetWidth}px`;
    underline.style.left = `${tabBtns[activeTab].offsetLeft}px`;
    tabContents.forEach((content) => {
      content.style.transform = `translateX(-${activeTab * 100}%)`;
    });

    tabBtns.forEach((btn, index) => {
      btn.addEventListener("click", () => {
        tabBtns.forEach((btn) => btn.classList.remove("active"));
        btn.classList.add("active");
        underline.style.width = `${btn.offsetWidth}px`;
        underline.style.left = `${btn.offsetLeft}px`;
        tabContents.forEach((content) => {
          content.style.transform = `translateX(-${index * 100}%)`;
        });
      });

      //same effect as on click when button in focus
      btn.addEventListener("focus", () => {
        tabBtns.forEach((btn) => btn.classList.remove("active"));
        btn.classList.add("active");
        underline.style.width = `${btn.offsetWidth}px`;
        underline.style.left = `${btn.offsetLeft}px`;
        tabContents.forEach((content) => {
          content.style.transform = `translateX(-${index * 100}%)`;
        });
      });
    });
  }

  const tabWrappers = document.querySelectorAll(".tab-wrapper");
  tabWrappers.forEach((tabWrapper, index) => inittab(tabWrapper));
} catch (error) {}

try {
  /**********************/
  /**** accordion ***/
  /**********************/
  const acc = document.getElementsByClassName("accordion");

  for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      const panel = this.nextElementSibling;
      this.classList.toggle("active");
      panel.style.height =
        panel.style.height === panel.scrollHeight + "px"
          ? "0"
          : panel.scrollHeight + "px";

      for (let j = 0; j < acc.length; j++) {
        if (this !== acc[j]) {
          acc[j].classList.remove("active");
          acc[j].nextElementSibling.style.height = "0";
        }
      }
    });
  }
} catch (error) {}

try {
  document.addEventListener("DOMContentLoaded", function () {
    const searchInElements = document.querySelectorAll(".search-in");
    const closeButton = document.querySelector(".close");

    searchInElements.forEach(function (searchInElement) {
      searchInElement.addEventListener("click", function () {
        const searchOutElement = document.querySelector(".search-out");

        if (searchOutElement) {
          searchOutElement.classList.toggle("open");
        }
      });
    });

    if (closeButton) {
      closeButton.addEventListener("click", function () {
        const searchOutElement = document.querySelector(".search-out");

        if (searchOutElement) {
          searchOutElement.classList.remove("open");
        }
      });
    }
  });
} catch (error) {}

/*********************/
/*** contact overlay ***/
/*********************/
try {
  const contactButton = document.querySelectorAll("#proefaanvragen");
  const contactOverlay = document.querySelector(".overlay-popup");
  const contactClose = document.querySelector(".button-close");
  const ContactBackground = document.querySelector(".overlay-popup-background");
  for (let i = 0; i < contactButton.length; i++) {
    contactButton[i].addEventListener("click", () => {
      contactOverlay.classList.add("open");
      ContactBackground.classList.add("open");
    });
    contactClose.addEventListener("click", () => {
      contactOverlay.classList.remove("open");
      ContactBackground.classList.remove("open");
    });
    ContactBackground.addEventListener("click", () => {
      contactOverlay.classList.remove("open");
      ContactBackground.classList.remove("open");
    });
  }
} catch (error) {}

/*********************/
/*** offerte overlay ***/
/*********************/
try {
  const offerteButton = document.querySelectorAll("#offerteaanvragen");
  const offerteOverlay = document.querySelector(".overlay-offerte-popup");
  const offerteClose = document.querySelector(".button-offerte-close");
  const offerteBackground = document.querySelector(
    ".overlay-offerte-popup-background"
  );
  for (let i = 0; i < offerteButton.length; i++) {
    offerteButton[i].addEventListener("click", () => {
      offerteOverlay.classList.add("open");
      offerteBackground.classList.add("open");
    });
    offerteClose.addEventListener("click", () => {
      offerteOverlay.classList.remove("open");
      offerteBackground.classList.remove("open");
    });
    offerteBackground.addEventListener("click", () => {
      offerteOverlay.classList.remove("open");
      offerteBackground.classList.remove("open");
    });
  }
} catch (error) {}

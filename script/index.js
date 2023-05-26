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

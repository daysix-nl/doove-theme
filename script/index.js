
// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
  // We execute the same script as before
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});


// BUTTON ELEMENTEN
// Zoek alle button-elementen op de pagina
var buttons = document.getElementsByTagName('button');
var hoverElements = document.getElementsByClassName('nohvr');


// Itereer over alle gevonden button-elementen
for (var i = 0; i < buttons.length; i++) {
  // Voeg eventlisteners toe voor hover-gebeurtenissen op buttons
  buttons[i].addEventListener('mouseenter', function () {
    // Toggle de classes wanneer de muis over de button beweegt
    toggleClasses(this);
  });

}

// Functie om classes te toggelen en andere elementen met hetzelfde ID bij te werken
function toggleClasses(element) {
  // Toggle de classes voor het huidige element
  element.classList.toggle('inactive');
  element.classList.toggle('active');
  element.classList.toggle('nohvr'); // Toggle de class .hvr naar .nohvr

  // Controleer of er andere elementen zijn met hetzelfde ID
  var elementsWithSameId = document.querySelectorAll('[id="' + element.id + '"]');
  for (var k = 0; k < elementsWithSameId.length; k++) {
    // Sla het huidige element over (om duplicatie van classes te voorkomen)
    if (elementsWithSameId[k] !== element) {
      // Toggle de classes voor de andere elementen
      elementsWithSameId[k].classList.toggle('inactive');
      elementsWithSameId[k].classList.toggle('active');
      elementsWithSameId[k].classList.toggle('nohvr'); // Toggle de class .hvr naar .nohvr
    }
  }
}







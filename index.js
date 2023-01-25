// Page d'accueil

var className = "inverted";
var scrollTrigger = 60;

window.onscroll = function() {
    // On ajoute pageYOffset pour la compatibilité avec Internet Explorer.
    if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
      document.getElementsByTagName("header")[0].classList.add(className);
    } else {
      document.getElementsByTagName("header")[0].classList.remove(className);
    }
  };

// Apparation menu hamburger

const menuHamburger = document.querySelector('.menu_hamburger-header');

menuHamburger.addEventListener('click', function() {
  const navbarHeader = document.querySelector('.navbar-header');
  navbarHeader.classList.toggle('mobile-menu');
});

// Alterner entre menu hamburger et croix

let isHamburger = false;

menuHamburger.addEventListener("click", function() {
  if(isHamburger) {
    this.setAttribute("src", "images/menuhamburger.png");
    isHamburger = false;
  } else {
    this.setAttribute("src", "images/croix.png");
    isHamburger = true;
  }
});

// Changement de couleur aléatoire de la searchbar

// Sélection de couleurs
var colors = ['searchbar-blue', 'searchbar-green', 'searchbar-orange', 'searchbar-red', 'searchbar-purple'];

// Référence au bouton
var button = document.querySelector(".searchbar-icon");

// Fonction pour changer la couleur du bouton
function changeColor() {
  var randomColor = colors[Math.floor(Math.random() * colors.length)];
  button.classList.add(randomColor);
}

// Appel de la fonction lorsque la page est rafraîchie
window.onload = changeColor;
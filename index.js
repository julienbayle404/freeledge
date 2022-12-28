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

// Ajoute la classe "responsive" à la navbar du header

function myFunction() {
  var x = document.getElementById("navbar");
  if (x.className === "navbar-header") {
    x.className += " responsive";
  } else {
    x.className = "navbar-header";
  }
};
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

// Menu hamburger



/*

if(document.getElementsByClassName('menu_hamburger-header').clicked == true)
{
   console.log("button was clicked");
}

*/



/* 

var classMobile = "mobile-menu";

  document.getElementsByClassName("menu_hamburger-header").onclick = function() {
  document.getElementsByClassName("navbar-header")[0].classList.add(classMobile);
  };

*/



/* 

const menuHamburger = document.getElementsByClassName('menu_hamburger-header');
const navLinks = document.getElementsByClassName('navbar-header');

document.addEventListener('click', function(){
  navLinks.classList.toggle('mobile-menu')
});

*/

const menuHamburger = document.querySelector('.menu_hamburger-header');

menuHamburger.addEventListener('click', function() {
  const navbarHeader = document.querySelector('.navbar-header');
  navbarHeader.classList.toggle('mobile-menu');
});

/*

document.addEventListener('DOMContentLoaded', function() {
  // Sélectionnez tous les éléments avec la classe "navbar-header"
  const navbarHeaders = document.querySelectorAll('.navbar-header');

  // Ajoutez la classe "mobile-menu" à chaque élément sélectionné
  navbarHeaders.forEach(navbarHeader => navbarHeader.classList.add('mobile-menu'));
});

*/
// Burger Responsive //
burger = document.querySelector('.burger');                  // je récupére l'élément .burger //
burger_wrap = document.querySelector('.burger-wrap');        // je récupére l'élément .burger-wrap //
mobileMenu = document.querySelector('.mobile-menu');         // je récupére l'élément .mobile-menu //

burger.addEventListener('click', function () {               // j'ajoute un écouteur d'évenement qui sera déclenché sur un clique //
  burger.classList.toggle('active');                         // lors du clique il activera ou désactivera la class active de mon élément //
  mobileMenu.classList.toggle('open');                       // lors du clique il activera ou désactivera la class open de mon élément //
});
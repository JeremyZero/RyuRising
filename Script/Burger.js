// Burger Responsive //
burger = document.querySelector('.burger');
burger_wrap = document.querySelector('.burger-wrap');
mobileMenu = document.querySelector('.mobile-menu');

burger.addEventListener('click', function () {
  burger.classList.toggle('active');
  mobileMenu.classList.toggle('open');
});
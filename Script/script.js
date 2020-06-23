var slideIndex = 0;
showSlides();

// Slideshow page d'accueil //
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");   // slides récupére mes éléments possédants la class "mySlides" dans mon html //
  // var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++)                         // en partant de 0 j'incrémente de 1 jusqu'à ce que le script ait récupéré tous mes éléments de la variable slides //
   {
    slides[i].style.display = "none";                         // index les éléments de la variable et leur applique un display none //
  }

  slideIndex++;                                               // en partant de 0 j'incrémente ma variable //
  if (slideIndex > slides.length)                             // lorsque qu'on arrive a la derniere image //
   {slideIndex = 1}                                           // je demande a mon script de retourner à la première //
  // for (i = 0; i < dots.length; i++) {
  //   dots[i].className = dots[i].className.replace(" active", "");
  // }
  slides[slideIndex-1].style.display = "block";               // en utilisant la variable précédente je peux maintenant choisir d'afficher un par un en lui appliquant un display block //
  // dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3500);                               // les images changeront toutes les 3500 millisecondes //
};
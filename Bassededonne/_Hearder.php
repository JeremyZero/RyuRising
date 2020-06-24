<?php
require '../Bassededonne/db.class.php';
require '../Bassededonne/Panier.class.php';
// J'initialise l'objet de db.class.php
// cette fonction me permet de construire mon objet
// si je souhaite me connecter avec une nouvelle base de donner je remplie le DB('');
  $DB= new DB();  
  // J'initialise ma class panier du ficher panier.class.php
  $panier = new panier($DB);
?>

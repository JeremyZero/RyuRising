<?php
require '../Bassededonne/db.class.php';
require '../Bassededonne/Panier.class.php';
// J'initialise mon objet cette fonction me permet de construire mon objet
// DB Me sert a mettre des information de connection si j'aimerais me connecter a une autre base de données
  $DB = new DB();  
  // J'initilise ma class panier du ficher panier.class.php
  $panier = new panier($DB);
?>

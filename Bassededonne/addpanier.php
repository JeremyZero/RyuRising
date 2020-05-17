<?php 
require '../Bassededonne/_Hearder.php';
// La je verifie que L'id a bien etait envoyer 
if(isset($_GET['id']))
{  
//   J'utilise ma requete préparer 
// Avec le $product je recupére mon resulta , mon produit.
// Mon code PDO et securisé si quelqu'un essaye de changer l'id de mon tableau celui-ci sera VIDE il n'y aura rien 
  $product = $DB->query('SELECT id FROM products WHERE id=:id', array('id' =>$_GET['id']));

  //   La si mon produit et vide et que je change L'id sur mon navigateur il me diras que ce produit n'existe pas
 if(empty($product)){   
 die("Ce produit n'existe pas"); 
 }

//  ce petit de code me permet d'ajouter un produits qui et en raport avec ma function dans la page Panier.class.php
$panier->add($product[0]->id);
die('Le produit a bien été ajouté à votre panier, cliquez pour <a href="/RyuRising/Index/Produits.php#">retourner sur le catalogue</a>');

}else{ 
    die("Vous n'avez pas sélectionné de produit à ajouter au panier");
}
// var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Oxanium|Spartan&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patientez svp...</title>
    <link rel="stylesheet" href="../CssJs/stylee.css">
    </head>
<body>
<?php include_once ('../Include/Header/Header.php') ?>
<?php 
// La je verifie que L'id a bien etait envoyer 
if(isset($_GET['id']))
{  
//   J'utilise ma requete préparer je selection query  
// Avec le $product je recupére mon resultat , mon produit.
// Mon code PDO et securisé si quelqu'un essaye de changer l'id de mon tableau celui-ci sera VIDE il n'y aura rien 
  $product = $DB->query('SELECT id FROM products WHERE id=:id', array('id' =>$_GET['id']));

  //   La si mon produit et vide et que je change L'id sur mon navigateur il me diras que ce produit n'existe pas
 if(empty($product)){   
 die("Ce produit n'existe pas"); 
 }

//  ce petit de code me permet d'ajouter un produits a mon panier .
$panier->add($product[0]->id);
die('<h1>Le produit a bien été ajouté à votre panier</h1>, <h3 id="tampon">cliquez ici pour <a href="/RyuRising/Index/Produits.php#">retourner sur le catalogue</a><br>ou<br> <a href="/RyuRising/Bassededonne/Panier.php">accéder au Panier</a></h3>');

}else{ 
    die("Vous n'avez pas sélectionné de produit à ajouter au panier");
}
// var_dump($_GET);
?>
</body>
</html>
<h1>Résumé du Panier</h1>
<form method='post' action="panier.php">
    <div class="wrap">
        <table>
            <tr>
            <th>Produits</th>
                <th>nom du produit</th>
        <th>Prix</th>
    <th>Quantité</th>
    <th>Actions</th>
</tr>

<?php 
// Je le recupérer de ma session , et les clé de mon tableau; Si le tableau de mes IDS et vide dans sais cas la les tableau que je vais envoyer au reste et vide
// Si ce n'est pas le cas tu continue la requete 
$ids = array_keys($_SESSION['panier']);
if(empty($ids)){
    $products = array ();
}else
{
    // ma requete SQL qui me permet de recupérer mes produits 
$products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')'); 
}
foreach($products as $product):
?>
 <tr>
 
        <th>
      <img  class="imgg" src="../images/Idpots/<?php echo $product->id; ?>.png"></a> 
    </th>
    

    
<th>
<?php echo  $product->name; ?></a>
</th>

<th>
<?php echo number_format( $product->price,2,',',''); ?>€
</th>

<th>
<!-- Me permet d'ajouter plus de quantité 
toujour en relation avec la page Panier.class.php -->
<input id="quantity" type='number' name='panier[quantity][<?php echo $product->id; ?>]' value="<?php echo $_SESSION['panier'][$product->id]?>" min="1" max="10">
</th>

<th>
<!-- Mon bouton qui me permet de supprimer mes produits  -->
    <a href="panier.php?delPanier=<?php echo $product->id; ?>" class="del"><img src="../images/poubelle.png"></a>
</th>

</tr>

 

       <?php endforeach ?>
       </table>
     
    </div>

<div id='arigato'>
        <p>
       TOTAL:<?php echo number_format($panier->total(),2,',',''); ?>€
       </p>
       </form>
       <input class="recalcul ml-auto" type="submit" value="Recalculer" ml-auto>

</div>



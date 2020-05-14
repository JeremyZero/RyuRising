
 <?php

if(isset($_GET['del'])){

    $panier->del($_GET['del']);

} 

?>

<h1>Résumer Panier</h1>
    <div class="wrap">
        <table>
            <tr>
                <th>nom du produit</th>
        <th>Prix</th>
    <th>Quantité</th>
    <th>Actions</th>
</tr>

<?php
$ids = array_keys($_SESSION['panier']);
if(empty($ids)){
    $products = array ();
}else
{
$products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
}
foreach($products as $product):
?>
    <tr>
        <th><a href="#"><img  class="imgg" src="../images/Evangelion.png"></a>
    </th>
<th><?php echo number_format( $product->price,2,',',''); ?>€</th>
<th>1</th>
<th>
    <a href="panier.php?del=<?php echo $product->id; ?>" class="del"><img src="../images/poubelle.png"></a>
</th>
</tr>
        </table>
       <?php endforeach ?>
    </div>


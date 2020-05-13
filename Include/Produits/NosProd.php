
<!-- ceci et ma requete preparer pour recupérer ma ligne de code sur MYSQL -->
<?php $products = $DB->query('SELECT * FROM products'); ?>

<!-- Le foreach me permet de refaire le meme visuel des pots sans que je retape le code . -->
<?php foreach ($products as $product): ?>
  <div class="Mespots">
     
     <!-- avec mon Echo product id ma base de donné recupére les images en fonction des ID 
     donc L'ID Aura l'image 1 ansi desuite . -->
    <img id="Tori"src="../images/Idpots/<?php echo $product->id; ?>.png">
    <div class="contienlo">
        <div class="Under">
        <p><?php echo  $product->name; ?><a href="#"></a>

<!-- La fonction number_format me sert a mettre les chiffre après la virgule -->
        <a href="#"><?php echo number_format( $product->price,2,',',''); ?></a>

<!-- Vue que mon site et connecter avec ma base de donneés que je peu changer le prix directement en basse de données et il sera changer aussi sur le site  -->
        <a href="../Bassededonne/addpanier.php?id=<?php echo $product->id?>"><img class="Mini"src="../images/iconscliquer.png" alt=""></a></p>
        </div>
        <a href="../Bassededonne/addpanier.php?id=<?php echo $product->id?>"><img  class="Mini" src="../images/iconsprix.png" alt="">ADD</a> 
    </div>
</div>

<?php endforeach ?>
<!-- Le forend et la pour dire que j'ai fini mon foreach -->
    
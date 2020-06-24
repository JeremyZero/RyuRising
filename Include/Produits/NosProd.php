
<!-- ceci et ma requete preparer pour recupérer ma ligne de code de la base de données -->
<?php $products = $DB->query('SELECT * FROM products'); ?>


<div class="Mespots">

<!-- Le foreach me permet de refaire le meme visuel des pots sans que je retape le code et je recupére chaque produit
en les appellant product . -->
  <?php foreach ($products as $product): ?>
     <div class="contienlo">
              <!-- avec mon Echo product id ma base de donné recupére les images en fonction des ID 
     donc L'ID Aura l'image 1 ansi desuite . -->
    <img id="Tori"src="../images/Idpots/<?php echo $product->id; ?>.png">
        <p>

<!-- La fonction number_format me sert a mettre les chiffre après la virgule -->
        <a href="#"><?php echo number_format( $product->price,2,',',''); ?>€</a><br>

<!-- Vue que mon site et connecter avec ma base de donneés que je peu changer le prix directement en basse de données et il sera changer aussi sur le site  -->
        <a href="../Bassededonne/addpanier.php?id=<?php echo $product->id?>"><img  class="Mini addPanier" src="../images/iconsprix.png" alt=""></a>ADD</p>
    </div>

<?php endforeach ?>
</div>

<!-- Le endforeach et la pour dire que j'ai fini mon foreach -->
    
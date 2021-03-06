 <?php 
//  J'inclue la connection a ma base de données.
 require '../Bassededonne/_Header.php';
?>

 <header>
    <a href="../Index/Accueil.php"><img id="logo" src="../images/tryheader3.png" alt="Logo-RyuRising"></a>

    <div class="Panier">
    <a href="../Bassededonne/Panier.php"><img id="Pan" src="../images/caddie.png" alt="Image-Panier"></a>
    <ul id="Monnaie">
      <li class="items">
        ARTICLE <br>
        <!--  Ma fonction me permet de faire le total de mes items je fais simplement la somme de mes produits -->
        <span><?php echo $panier->count();?></span>
    </li>
    <li class="Total">
      TOTAL<br>
        <!-- avec le number_format j'affiche mon prix avec 2 chiffres apres la virgule -->
        <span><?php echo number_format($panier->total(),2,',',''); ?>€</span>
    </li>
  </ul>
    </div>  
  </header>

  <nav id="Barnav">
    <ul id="Nav">
        <li><a class="AllNav" href="../Index/DescriptionProduits.php">RYU RISING</a></li>
        <li><a class="AllNav" href="../Index/Produits.php">NOS PRODUITS</a></li>
        <li><a class="AllNav" href="../Index/Contact.php">CONTACT</a></li>
        <li><a class="AllNav" href="../Index/Quisommesnous.php">QUI SOMMES NOUS ?</a></li>
    </ul>
</nav>
  <div class="MyBurger">
    <div class="burger-wrap">
      <div class="burger">
        <span></span>
        <span></span>
        <span></span>
      </div>
     </div>
      <div class="mobile-menu">
        <nav>
          <ul id="Nav">
          <li><a class="AllNav" href="../Index/DescriptionProduits.php">RYU RISING</a></li>
        <li><a class="AllNav" href="../Index/Produits.php">NOS PRODUITS</a></li>
        <li><a class="AllNav" href="../Index/Contact.php">CONTACT</a></li>
        <li><a class="AllNav" href="../Index/Quisommesnous.php">QUI SOMMES NOUS ?</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <script src="../Script/Burger.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
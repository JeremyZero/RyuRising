 <?php 
 require '../Bassededonne/_Hearder.php';
?>

 <header>
    <a href="../Index/Accueil.php"><img id="logo" src="../images/tryheader3.png" alt=""></a>

    <div class="Panier">
    <a href="../Bassededonne/Panier.php"><img id="Pan" src="../images/caddie.png" alt=""></a>
    <ul id="Monnaie">
      <li class="items">
        ITEMS <br>
      <span><?php echo $panier->count();?></span>
    </li>
    <li class="Total">
      TOTAL<br>
      <span><?php echo number_format($panier->total(),2,',',''); ?>€</span>
    </li>
  </ul>
    </div>  
  </header>

  <nav id="Barnav">
    <ul id="Nav">
        <li><a class="AllNav" href="../Index/DescriptionProduits.php">NOS PRODUITS</a></li>
        <li><a class="AllNav" href="../Index/Produits.php">ACHAT</a></li>
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
          <li><a class="AllNav" href="../Index/DescriptionProduits.php">NOS PRODUITS</a></li>
        <li><a class="AllNav" href="../Index/Produits.php">ACHAT</a></li>
        <li><a class="AllNav" href="../Index/Contact.php">CONTACT</a></li>
        <li><a class="AllNav" href="../Index/Quisommesnous.php">QUI SOMMES NOUS ?</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <script src="../Script/Burger.js"></script>
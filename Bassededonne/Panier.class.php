<?php
// je cree ma class qui me permet de gérer le panier
class panier{
// Avec private BD J'initialise ma connection qui sera sur _Hearder.php
    private $DB;

//  avec $DB j'utilise deja la conection disponible 
// J'ai besoin de connaitre la conection a la base de donnèes
    public function __construct($DB){

//  Pour sauvregarder les differente information qui vont etre stocker dans mon panier j'utilise  la variable session
//  Les variables de session sais tout simplement un tableau qui et compris dans une grosse variable qui s'appel SESSION qui et conserver tout le long
//  de la navigation d'un visiteur t'en que le visiteur reste sur le site la variable on peu la modifier elle et propore a chaque visiteur et elle et sauvegarder
//  t'en que le navigateur n'est pas fermer

 //J'initialise ma SESSION
//  Si if et different que ISSET
// c'est a dire que cette variable n'est pas definie php ne la connais pas dans ce cas la
// je fait un session_start cela me permet d'initialisé ma session
        if(!isset($_SESSION));{
            session_start();
        }
        // Dans ma variable SESSION je cree un tableau dans ce tableau je met les id des different produits ajouter
           if(!isset($_SESSION['panier'])){
               $_SESSION['panier']= array();
           }
           $this->DB = $DB;
        //    Si je detect if isset delpanier automatiquement j'appel ma fonction del qui prend en parametre(delPanier)
           if(isset($_GET['delPanier'])){
               $this->del($_GET['delPanier']);
           }
           if (isset($_POST['panier']['quantity']))
           {
$this->recalc();
           }
    }
// cette fonction me permet de recalculer mes produits du panier
    public function recalc(){
        foreach($_SESSION['panier'] as $product_id => $quantity){
            if (isset($_POST['panier']['quantity'][$product_id])) {
            $_SESSION['panier'][$product_id] = $_POST['panier']['quantity'][$product_id]; 
            }
        }
      
    }






    // Ma fonction me permet de faire le total de mes items je fait simplement la somme de mes produits
    Public function count(){
       return array_sum($_SESSION['panier']);
    }





    public function total(){
        $total= 0;
        //array_keys me permet recuperer les clé de mon tableau
        // Je recupérer l'ensemble de mes ID
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $products = array ();
        }else
        {
            // Je recupérer mes ID dynamiquement de ma session avec implode
        $products = $this->DB->query('SELECT id, price FROM products WHERE id IN ('.implode(',',$ids).')'); 
        }
        foreach( $products as $product){
            //Je prend en compte la quantité et je multiplie les produits
            $total += $product->price * $_SESSION['panier'][$product->id];

        }
        return $total;
    }




    // je cree une fonction qui me permet simplement d'ajouter un produit
    //elle prend juste L'id du produit puis test si j'ai dans le panier ma variable qui et définie
 public function add($product_id){
     if(isset($_SESSION['panier'][$product_id])){
        //  Me permet d'incrementé mes produit
        $_SESSION['panier'][$product_id]++;
     }else{
        //  Sinon si je ne veux qu'un seul produits celui-ci restera a 1 
         $_SESSION['panier'][$product_id] =1;
     }
 }




//  cette fonction me sert a supprimé les elements de mon panier par l'icone corbeille
public function del ($product_id)
 {
    unset ($_SESSION['panier'][$product_id]);
 }
     
}
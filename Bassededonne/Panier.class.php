<?php
class panier{

    private $DB;

    public function __construct($DB){
//  MA SESSION ME PERMET DE NE PAS PERDRE LES DONNEE DU PANIER QUAND LE CLIENT CHANGE DE PAGES MAIS SI IL RAFRAICHIE CELA REVIEN A 0
// J'initialise ma session 

        if(!isset($_SESSION));{
            session_start();
        }
        // La je crée ma Variable PANIER Avec un tableau Vide
           if(!isset($_SESSION['panier'])){
               $_SESSION['panier']= array();
           }
           $this->DB = $DB;
           if(isset($_GET['delPanier'])){
               $this->del($_GET['delPanier']);
           }
           if (isset($_POST['panier']['quantity']))
           {
$this->recalc();
           }
    }

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
        // Je recupérer l'ensemble de mes ID
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $products = array ();
        }else
        {
        $products = $this->DB->query('SELECT id, price FROM products WHERE id IN ('.implode(',',$ids).')'); 
        }
        foreach( $products as $product){
            //Je prend en compte la quantité et je multiplie le panier et L'ID du produit 
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
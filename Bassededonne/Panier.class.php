<?php
class panier{

    public function __construct(){
//  MA SESSION ME PERMET DE NE PAS PERDRE LES DONNEE DU PANIER QUAND LE CLIENT CHANGE DE PAGES MAIS SI IL RAFRAICHIE CELA REVIEN A 0
// J'initialise ma session 

        if(!isset($_SESSION));{
            session_start();
        }
        // La je crée ma Variable PANIER Avec un tableau Vide
           if(!isset($_SESSION['panier'])){
               $_SESSION['panier']= array();
           }
    }

    // je cree une fonction qui me permet simplement d'ajouter un produit
    //elle prend juste L'id du produit
 public function add($product_id){
    $_SESSION['panier'][$product_id] =1;
 }

//  cette fonction me sert a supprimé les elements de mon panier par l'icone corbeille
 
public function del ($product_id)
 {
    unset ($_SESSION['panier'][$product_id]);
 }
     
}
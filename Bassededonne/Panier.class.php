<?php
class panier{

    public function __construct(){
//  MA SESSION ME PERMET DE NE PAS PERDRE LES DONNEE DU PANIER QUAND LE CLIENT CHANGE DE PAGES MAIS SI IL RAFRAICHIE CELA REVIEN A 0
        if(!isset($_SESSION));{
            session_start();
        }
           if(!isset($_SESSION['panier'])){
               $_SESSION['panier']= array();
           }
    }

    // $_SESSION['panier'][1]=1;
    // $_SESSION['panier'][2]=100;   
}
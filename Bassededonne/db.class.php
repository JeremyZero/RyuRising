<?php
class DB{
    // ma connextion a ma basse de donneés 
    private $host ='localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'ryurisingp';
    private $db;

    // si je veux utilisé une autre basse de donné
    public function __construct($host = null, $username = null, $password = null, $database = null){
        if($host != null){
            $this->host = $host;
            $this->username =  $username;
            $this->password = $password;
            $this->database = $database;
        }
        
        //   Pour dire que je veux interagire avec ma basse en UTF8 pour pas avoir de probléme
        try{
        $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database , $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // EERMODE ME SERT DE VISU POUR DIRE OU ET MON ERREURE ET SUR QUEL LIGNE
    }catch(PDOException $e){
        die('<h1>Impossible de se connecter à la base de données</h1>');
    }

    }
    
    //ma requete SQL Preparé pour ma page produits 
    // $data je crée un second paramètre et par defaut ce sera un tableau vide
    public function query($sql , $data = array()){
        $req =$this->db->prepare($sql);
        // Ducoup le tableau je l'inject au moment du execute 
        $req->execute($data);
        return ($req->fetchAll(PDO::FETCH_OBJ));
    }
}

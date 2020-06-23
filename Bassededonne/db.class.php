<?php
class DB{
    // ma connextion a ma basse de donneés 
    // variable de configuration pour la connextion a ma base de données je la met en private car je n'aurais pas besoin dit acceder de l'extérieur.
    private $host ='localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'ryurisingp';
    private $db;

    // Si je veux utilisé une autre basse de donné en rapport avec NEW DB
    // la fonction construct me permet de determiné les elément , paramettre que prend cette fonction
    public function __construct($host = null, $username = null, $password = null, $database = null){
        // si le nom d'host nest pas nul j'insere toute les variable au niveaux des variable du haut
        if($host != null){
            // Je fait ça pour avoir une class qui a une configuration part défaut mais qui pourra aussi me servire si j'aim envie de me connecter a plusieur base de donnees.
            $this->host = $host;
            $this->username =  $username;
            $this->password = $password;
            $this->database = $database;
        }
        
         //   Pour me connecter j'utilise PDO
        // Je recupérer le nom dhote avec this 
       //    MYSQL ATTR INIT COMMAND SET NAMES UTF8 pour dire qu'on va intéragire avec la base de données en UTF8 ça evite les probléme d'accent.
       //    le SET NAME UT8 précise que tout le reste se fera en UTF8
      //    ça me permet d'indiquer une requete SQL a lancer quand on ce connecte
        try{
            // mon objet je vais en avoir besoin dans d'autre méthode de ma class pour intéragire avec la base de donnees que je vien d'initialisé ($db)
        $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database , $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
        // ERRMODE WARNING Me sert a de visuelle pour voir mes erreur ça me permettra me mieux travailler en developpement
        // Ils nous faudras le desactivé plutard
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    // le try me permet de lance ma ma connection si elle ne fonctionne pas catch PDOEXCEPTION je récupérer l'erreur et je met mon message d'erreure 
    }catch(PDOException $e){
        die('<h1>Impossible de se connecter à la base de données</h1>');
    }

    }
    
    //ma requete SQL Preparé pour ma page produits 
    //query prend ma requete a faire 
    // $data je crée un second paramètre et par defaut ce sera un tableau vide
    public function query($sql , $data = array()){
        $req =$this->db->prepare($sql);
        // Ducoup le tableau je l'inject au moment du execute 
        $req->execute($data);
        // Fetch all me permet d'avoir mon resultat sous forme d'objet
        return ($req->fetchAll(PDO::FETCH_OBJ));
    }
}

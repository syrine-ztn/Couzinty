<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/accueil_utilisateur_controller.php');

class accueil_utilisateur_model{
    private $dbname="projet_tdw";
    private $host="localhost";
    private $user="root";
    private $password="";

    private function connecter($dbname,$host,$user,$password){
        $c="mysql:host=$host;dbname=$dbname;";
        try {
            $db= new PDO($c,$user,$password);
        } catch (PDOException $ex) {
            printf("erreur de connexion à la base de donnée",$ex->getMessage());
            exit();
        }
        return $db;
    }

    private function deconnecter(&$db){
        $db=null;
    }
    private function requete($db,$r){
        return $db->query($r);
    }
   
    
    public function getEntrees(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM recette where categorie_nom = 'entrée'  AND valide_recette='oui'";
        $r=$this->requete($db,$q);
        $this->deconnecter($db);
        return $r;
    }
  
    public function getPlats(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM recette where categorie_nom = 'plat'  AND valide_recette='oui'";
        $r=$this->requete($db,$q);
        $this->deconnecter($db);
        return $r;
    }
    
    public function getDesserts(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM recette where categorie_nom = 'dessert'  AND valide_recette='oui'";
        $r=$this->requete($db,$q);
        $this->deconnecter($db);
        return $r;
    }
    

    public function getBoissons(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM recette where categorie_nom = 'boisson'  AND valide_recette='oui'";
        $r=$this->requete($db,$q);
        $this->deconnecter($db);
        return $r;
    }
    
    public function getNews(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM recette where news = 'oui' AND valide_recette='oui'";
        $r=$this->requete($db,$q);
        $this->deconnecter($db);
        return $r;
    }
  
}

?>
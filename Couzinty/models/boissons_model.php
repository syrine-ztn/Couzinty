<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/boissons_controller.php');

class boissons_model{
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
   
    
    public function getBoissons(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM recette where categorie_nom = 'boisson' AND valide_recette='oui'";
        $r=$this->requete($db,$q);
        $this->deconnecter($db);
        return $r;
    }
    
  
}

?>
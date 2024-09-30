<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/recette_controller.php');

class recette_model{
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
   
    
    public function getRecette($nomRecette){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM recette where nom_recette = ?";
        $r=$db->prepare($q);
        $r->execute(array($nomRecette));
        $this->deconnecter($db);
        return $r;
    }
    
    public function editNotation($nomRecette,$notation){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q='UPDATE recette SET notation=? WHERE nom_recette=?';
        $r=$db->prepare($q);
        $r->execute(array($notation,$nomRecette));
        $this->deconnecter($db);
        return $r;
    }
}

?>
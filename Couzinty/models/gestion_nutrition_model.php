<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/gestion_nutrition_controller.php');

class gestion_nutrition_model{
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
   
    public function getNutrition(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM aliment";
        $r=$this->requete($db,$q);
        $this->deconnecter($db);
        return $r;
    }

  
    public function editNutrition($Aliment,$calories,$Protéines,$Glucides,$Lipides,$IG,$saison,$healthy){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q='UPDATE aliment SET Aliment=?,calories=?,Protéines=?,Glucides=?,Lipides=?,IG=?,saison=?,healthy=? WHERE  Aliment=?';
        $r=$db->prepare($q);
        $r->execute(array($Aliment,$calories,$Protéines,$Glucides,$Lipides,$IG,$saison,$healthy,$Aliment));
        $this->deconnecter($db);
        return $r;
    }

    public function deleteNutrition($Aliment){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q='DELETE FROM aliment WHERE Aliment=?';
        $r=$db->prepare($q);
        $r->execute(array($Aliment));
        $this->deconnecter($db);
        return $r;
    }
}

?>
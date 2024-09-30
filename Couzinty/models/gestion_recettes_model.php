<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/gestion_recettes_controller.php');

class gestion_recettes_model{
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
   
    
    public function getRecettes(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM recette where valide_recette = 'oui' AND news='non'";
        $r=$this->requete($db,$q);
        $this->deconnecter($db);
        return $r;
    }
    
    public function editRecette($nom_recette,$description,$difficulte,$temps_prepa,$temps_repos,$temps_cuisson,$temps_total,$healthy,$calories,$mode_cuisson,$categorie_nom,$saison,$fete,$notation){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q='UPDATE recette SET nom_recette=?,description=?,difficulte=?,temps_prepa=?,temps_repos=?,temps_cuisson=?,temps_total=?,healthy=?,calories=?,mode_cuisson=?,categorie_nom=?,saison=?,fete=?,notation=? WHERE nom_recette=?';
        $r=$db->prepare($q);
        $r->execute(array($nom_recette,$description,$difficulte,$temps_prepa,$temps_repos,$temps_cuisson,$temps_total,$healthy,$calories,$mode_cuisson,$categorie_nom,$saison,$fete,$notation,$nom_recette));
        $this->deconnecter($db);
        return $r;
    }

    public function deleteRecette($nom_recette){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q='DELETE FROM recette WHERE nom_recette=?';
        $r=$db->prepare($q);
        $r->execute(array($nom_recette));
        $this->deconnecter($db);
        return $r;
    }

    public function getRecettesNonValidees(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM recette where valide_recette = 'non' AND news='non'";
        $r=$this->requete($db,$q);
        $this->deconnecter($db);
        return $r;
    }

    public function validerRecette($nom_recette){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="UPDATE recette SET valide_recette = 'oui' WHERE nom_recette=?";
        $r=$db->prepare($q);
        $r->execute(array($nom_recette));
        $this->deconnecter($db);
        return $r;
    }
  
}

?>
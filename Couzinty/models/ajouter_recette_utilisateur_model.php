<?php
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/ajouter_recette_utilisateur_controller.php');

class ajouter_recette_utilisateur_model
{
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


   function insertNewRecipe($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$s,$bool) {
    $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
    $q="INSERT INTO recette (nom_recette,description,image,difficulte,temps_prepa,temps_repos,temps_cuisson,temps_total,liste_ingredients,liste_etapes,calories,notation,mode_cuisson,categorie_nom,saison,fete,news,valide_recette) VALUES (?,? ,?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?)";
    $r=$db->prepare($q);
    $r->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$s,$bool));
    $this->deconnecter($db);
    return $r;
   }

}
?>
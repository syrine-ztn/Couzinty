<?php
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/inscription_controller.php');

class inscription_model
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


   function insertNewUser($email,$pwd,$nom,$prenom,$sexe,$date_naissance) {
    $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
    $q="INSERT INTO utilisateur (nom, prenom, email,sexe,date_naissance,pwd,valide_utilisateur) VALUES (? ,?, ?, ?, ?, ?, ?)";
    $r=$db->prepare($q);
    $r->execute(array($nom,$prenom,$email,$sexe,$date_naissance,$pwd,'non'));
    $this->deconnecter($db);
    return $r;
   }

}
?>
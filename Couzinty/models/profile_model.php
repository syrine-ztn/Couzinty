<?php
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/profile_controller.php');

class profile_model
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

   function editProfile($id,$email,$pwd,$nom,$prenom,$sexe,$date_naissance) {
    $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
    $q="UPDATE utilisateur SET nom='$nom', prenom='$prenom', email='$email',sexe='$sexe',date_naissance='$date_naissance',pwd='$pwd' WHERE id_utilisateur='$id'";
    $r=$this->requete($db,$q);
    $this->deconnecter($db);
    return $r;
   }

}
?>
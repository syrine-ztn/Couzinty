<?php
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/login_controller.php');

class login_model
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


   function getUser($email,$pwd) {
    $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
    $q="SELECT * FROM utilisateur where email = ? AND pwd = ?";
    $r=$db->prepare($q);
    $r->execute(array($email,$pwd));
    $this->deconnecter($db);
    return $r;
   }

}
?>
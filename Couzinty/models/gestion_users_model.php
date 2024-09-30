<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/gestion_users_controller.php');

class gestion_users_model{
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
   
    
    public function getUsers(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM utilisateur where valide_utilisateur = 'oui'";
        $r=$this->requete($db,$q);
        $this->deconnecter($db);
        return $r;
    }
    
    public function editUsers($nom,$prenom,$email,$sexe,$date_naissance,$pwd,$profile){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q='UPDATE utilisateur SET nom=?,prenom=?,email=?,sexe=?,date_naissance=?,pwd=?,profile=? WHERE nom=?';
        $r=$db->prepare($q);
        $r->execute(array($nom,$prenom,$email,$sexe,$date_naissance,$pwd,$profile,$nom));
        $this->deconnecter($db);
        return $r;
    }

    public function deleteUsers($nom){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q='DELETE FROM utilisateur WHERE nom=?';
        $r=$db->prepare($q);
        $r->execute(array($nom));
        $this->deconnecter($db);
        return $r;
    }

    public function getUsersNonValidees(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM utilisateur where valide_utilisateur = 'non'";
        $r=$this->requete($db,$q);
        $this->deconnecter($db);
        return $r;
    }

    public function validerUsers($nom){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="UPDATE utilisateur SET valide_utilisateur = 'oui' WHERE nom=?";
        $r=$db->prepare($q);
        $r->execute(array($nom));
        $this->deconnecter($db);
        return $r;
    }

    public function barrerUsers($email){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="UPDATE utilisateur SET barre = 'oui' WHERE email=?";
        $r=$db->prepare($q);
        $r->execute(array($email));
        $this->deconnecter($db);
        return $r;
    }
  
}

?>
<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/préférences_controller.php');
 if (!isset($_SESSION)) session_start();
class préférences_model
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
   
    
    public function getPreferences(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT * FROM preference join recette on recette_id=id_recette where utilisateur_id = ?";
        $r=$db->prepare($q);
        $user_id=$_SESSION["id_utilisateur"];
        $r->execute(array($user_id));
        $this->deconnecter($db);
        return $r;
    }

    public function isPreference(){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $q="SELECT recette_id FROM preference where utilisateur_id = ?";
        $r=$db->prepare($q);
        $user_id=$_SESSION["id_utilisateur"];
        $r->execute(array($user_id));
        $this->deconnecter($db);
        return $r;
    }
    

    public function ajouter_préférences($nom_recette){
        $db=$this->connecter($this->dbname,$this->host,$this->user,$this->password);
        $sql = "SELECT id_recette FROM recette WHERE nom_recette = ?";
        $r1=$db->prepare($sql);
        $r1->execute(array($nom_recette));
        $row = $r1->fetch(PDO::FETCH_ASSOC);
        $recette_id = $row['id_recette'];

        $q="INSERT INTO preference (utilisateur_id,recette_id) VALUES (? ,?)";
        $r2=$db->prepare($q);
        $user_id=$_SESSION["id_utilisateur"];
        $r2->execute(array($user_id,$recette_id));

        $this->deconnecter($db);
    }
}
?>
<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/inscription_view.php');
require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/inscription_model.php');
require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/login_view.php');

class inscription_controller
{

function afficher_inscription(){

$v=new inscription_view();
$v->afficher_inscription();
}

function insérer_inscription(){
    if(!isset($_SESSION["email"])){
       if(($_POST["email"]=="") || ($_POST["pwd"]=="") || ($_POST["nom"]=="") || ($_POST["prenom"]=="") || ($_POST["date_naissance"]=="") || ($_POST["sexe"]=="")) {
        echo '<body onLoad="alert(\'Veuillez remplir tous les champs...\')">';
        echo '<meta http-equiv="refresh" content="0;URL=./inscription.php">'; 
       } else {
        $pwd = $_POST["pwd"];

        $email = $_POST["email"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $sexe = $_POST["sexe"];
        $date_naissance = $_POST["date_naissance"];

        $v=new inscription_model();
        $user=$v->insertNewUser($email,$pwd,$nom,$prenom,$sexe,$date_naissance);

        $v=new login_view();
        $v->afficher_login();
       }

       
    } 
}

}
?>


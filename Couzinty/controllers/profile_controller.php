<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/profile_view.php');
require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/profile_model.php');

if (!isset($_SESSION)) session_start();

class profile_controller
{

function afficher_profile(){

$v=new profile_view();
$v->afficher_profile();
}

function insérer_profile(){
        $id=$_POST["id"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $sexe = $_POST["sexe"];
        $date_naissance = $_POST["date_naissance"];

        $_SESSION["nom"] = $nom;
        $_SESSION["prenom"] = $prenom;
        $_SESSION["email"] = $email;
        $_SESSION["pwd"] = $pwd;
        $_SESSION["sexe"] = $sexe;
        $_SESSION["date_naissance"] = $date_naissance;

        $v=new profile_model();
        $user=$v->editProfile($id,$email,$pwd,$nom,$prenom,$sexe,$date_naissance);
         
        $this->afficher_profile();

}

}
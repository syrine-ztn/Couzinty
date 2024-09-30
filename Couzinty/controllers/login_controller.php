<?php
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/login_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/login_model.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/accueil_admin_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/accueil_utilisateur_view.php');
 

class login_controller
{

function afficher_login(){
$v=new login_view();
$v->afficher_login();
}

function verifier_login(){
    if(!isset($_SESSION["email"])){

        $pwd = $_POST["pwd"];
        $email = $_POST["email"];

        $v=new login_model();
        $user=$v->getUser($email,$pwd)->fetch();
        
        if(($user) && ($user["valide_utilisateur"]=="oui")){

            $_SESSION["id_utilisateur"] = $user["id_utilisateur"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["pwd"] = $user["pwd"];
            $_SESSION["nom"] = $user["nom"];
            $_SESSION["prenom"] = $user["prenom"];
            $_SESSION["profile"] = $user["profile"];
            $_SESSION["sexe"] = $user["sexe"];
            $_SESSION["date_naissance"] = $user["date_naissance"];
            $_SESSION["valide_utilisateur"] = $user["valide_utilisateur"];
            $_SESSION["barre"] = $user["barre"];

            if($_SESSION["barre"] == 'oui') {
                session_destroy();
                echo '<body onLoad="alert(\'Accès refusé !\')">';
                echo '<meta http-equiv="refresh" content="0;URL=./login.php">';
            } else {
            if($user["profile"]=='utilisateur'){
                $v=new accueil_utilisateur_view();
                $v->afficher_accueil_utilisateur();
            } else{
                $v=new accueil_admin_view();
                $v->afficher_accueil_admin();
            }

            }
            
        }
        else {
            echo '<body onLoad="alert(\'Email ou mot de passe non reconnu...\')">';
            echo '<meta http-equiv="refresh" content="0;URL=./login.php">';
        }
    } else {
        if($_SESSION["profile"]=='utilisateur'){
            $v=new accueil_utilisateur_view();
            $v->afficher_accueil_utilisateur();
        } else{
            $v=new accueil_admin_view();
            $v->afficher_accueil_admin();
         }
    }
}

}
?>
<?php

 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/gestion_users_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/gestion_users_model.php');

class gestion_users_controller
{

function afficher_gestion_users(){

$v=new gestion_users_view();
$v->afficher_gestion_users();
}

function getUsers() {
    $mdl=new gestion_users_model();
    $r=$mdl->getUsers();
    return $r;
    }
    
    function getUsersNonValidees(){
        $mdl=new gestion_users_model();
        $r=$mdl->getUsersNonValidees();
        return $r; 
    }
        
    function editUsers(){
    
        if(isset($_POST['editUsers'])){
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $email=$_POST['email'];
            $sexe=$_POST['sexe'];
            $date_naissance=$_POST['date_naissance'];
            $pwd=$_POST['pwd'];
            $profile=$_POST['profile'];
            
            $mdl=new gestion_users_model();
            $mdl->editUsers($nom,$prenom,$email,$sexe,$date_naissance,$pwd,$profile);
        }
    
    }
    
    function deleteUsers(){
    
        if(isset($_POST['deleteUsers'])){
            $nom=$_POST['nom'];
            
            $mdl=new gestion_users_model();
            $mdl->deleteUsers($nom);
        
    }
    }

    function barrerUsers(){
    
        if(isset($_POST['barrerUsers'])){
            $email=$_POST['email'];
            
            $mdl=new gestion_users_model();
            $mdl->barrerUsers($email);
        
    }
    }
    
    function validerUsers(){
    
        if(isset($_POST['validerUsers'])){
            $nom=$_POST['nom'];
            
            $mdl=new gestion_users_model();
            $mdl->validerUsers($nom);
        }
    
    }
}
?>
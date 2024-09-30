<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/inscription_controller.php');

    
    if (isset($_POST["email"]) || isset($_POST["pwd"]) || isset($_POST["nom"]) || isset($_POST["prenom"]) || isset($_POST["date_naissance"]) || isset($_POST["sexe"])) {
        $v= new inscription_controller();
        $v->insérer_inscription();
    } else {
        $v= new inscription_controller();
        $v->afficher_inscription();
    }
?>
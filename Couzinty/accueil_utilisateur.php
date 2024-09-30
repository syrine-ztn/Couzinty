<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/accueil_utilisateur_controller.php');

    $v= new accueil_utilisateur_controller();
    $v->afficher_accueil_utilisateur();
?>
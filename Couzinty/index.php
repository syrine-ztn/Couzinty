<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/accueil_controller.php');

    $c= new accueil_controller();
    $c->afficher_accueil();
?>

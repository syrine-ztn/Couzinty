<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/gestion_recettes_controller.php');

    $v= new gestion_recettes_controller();
    $v->afficher_gestion_recettes();
?>
<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/préférences_controller.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/recette_controller.php');

    

    if (isset($_GET["nomRecette"])) {
    $v= new préférences_controller();
    $v->ajouter_préférences($_GET["nomRecette"]);
    $v= new recette_controller();
    $v->afficher_recette($_GET["nomRecette"]);
    } else {
        $v= new préférences_controller();
        $v->afficher_préférences();
    }
?>
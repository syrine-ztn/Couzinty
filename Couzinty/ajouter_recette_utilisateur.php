<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/ajouter_recette_utilisateur_controller.php');

    if (isset($_POST['nom_recette'])) {
        $v= new ajouter_recette_utilisateur_controller();
        $v->insérer_recette();
    } else {
        $v= new ajouter_recette_utilisateur_controller();
        $v->afficher_ajouter_recette_utilisateur();
    }

?>
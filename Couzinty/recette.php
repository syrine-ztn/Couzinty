<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/recette_controller.php');

    $v= new recette_controller();
    $v->afficher_recette();
?>
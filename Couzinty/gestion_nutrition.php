<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/gestion_nutrition_controller.php');

    $v= new gestion_nutrition_controller();
    $v->afficher_gestion_nutrition();
?>
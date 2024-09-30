<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/nutrition_controller.php');

    $v= new nutrition_controller();
    $v->afficher_nutrition();
?>
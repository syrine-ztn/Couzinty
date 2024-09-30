<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/healthy_controller.php');

    $v= new healthy_controller();
    $v->afficher_healthy();
?>
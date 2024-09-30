<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/plats_controller.php');

    $v= new plats_controller();
    $v->afficher_plats();
?>
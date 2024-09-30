<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/boissons_controller.php');

    $v= new boissons_controller();
    $v->afficher_boissons();
?>
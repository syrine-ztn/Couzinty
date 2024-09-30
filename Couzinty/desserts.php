<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/desserts_controller.php');

    $v= new desserts_controller();
    $v->afficher_desserts();
?>
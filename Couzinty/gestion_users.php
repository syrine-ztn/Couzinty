<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/gestion_users_controller.php');

    $v= new gestion_users_controller();
    $v->afficher_gestion_users();
?>
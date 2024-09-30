<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/accueil_admin_controller.php');

    $v= new accueil_admin_controller();
    $v->afficher_accueil_admin();
?>
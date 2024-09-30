<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/contact_controller.php');

    $v= new contact_controller();
    $v->afficher_contact();
?>
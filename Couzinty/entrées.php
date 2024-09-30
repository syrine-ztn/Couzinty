<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/entrées_controller.php');

    $v= new entrées_controller();
    $v->afficher_entrées();
?>
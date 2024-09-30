<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/fete_controller.php');

    $v= new fete_controller();
    $v->afficher_fete();
?>
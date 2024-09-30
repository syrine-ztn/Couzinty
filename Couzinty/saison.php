<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/saison_controller.php');

    $v= new saison_controller();
    $v->afficher_saison();
?>
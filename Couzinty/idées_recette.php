<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/idées_recette_controller.php');

    $v= new idées_recette_controller();
    $v->afficher_idées_recette();
?>
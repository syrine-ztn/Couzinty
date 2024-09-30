<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/idées_recette_résultat_controller.php');

    $v= new idées_recette_résultat_controller();
    $v->vérifier_idées_recette_résultat();
    
?>
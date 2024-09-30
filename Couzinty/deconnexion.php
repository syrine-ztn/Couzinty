<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/deconnexion_controller.php');
    
        $v= new deconnexion_controller();
        $v->logout();
    
?>
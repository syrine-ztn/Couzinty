<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/login_controller.php');
    
    if (isset($_POST["email"]) || isset($_SESSION["id_utilisateur"])) {
        $v= new login_controller();
        $v->verifier_login();
    } else {
        $v= new login_controller();
        $v->afficher_login();
    }
?>
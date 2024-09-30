<?php
require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/desserts_view.php');
require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/desserts_model.php');

class desserts_controller
{

function afficher_desserts(){

$v=new desserts_view();
$v->afficher_desserts();
}

public function getDesserts(){
    $mdl=new desserts_model();
    $r=$mdl->getDesserts();
    return $r;
}
}
?>
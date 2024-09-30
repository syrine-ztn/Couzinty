<?php
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/boissons_model.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/boissons_view.php');
class boissons_controller
{

function afficher_boissons(){

$v=new boissons_view();
$v->afficher_boissons();
}

public function getBoissons(){
    $mdl=new boissons_model();
    $r=$mdl->getBoissons();
    return $r;
}

}
?>
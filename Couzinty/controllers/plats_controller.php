<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/plats_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/plats_model.php');

class plats_controller
{

function afficher_plats(){

$v=new plats_view();
$v->afficher_plats();
}
public function getPlats(){
    $mdl=new plats_model();
    $r=$mdl->getPlats();
    return $r;
}
}
?>
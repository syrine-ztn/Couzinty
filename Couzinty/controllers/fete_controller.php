<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/fete_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/fete_model.php');

class fete_controller
{

function afficher_fete(){

$v=new fete_view();
$v->afficher_fete();
}

public function getFete(){
    $mdl=new fete_model();
    $r=$mdl->getFete();
    return $r;
}

}
?>
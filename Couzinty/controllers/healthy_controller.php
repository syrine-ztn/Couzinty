<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/healthy_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/healthy_model.php');

class healthy_controller
{

function afficher_healthy(){

$v=new healthy_view();
$v->afficher_healthy();
}

public function getHealthy(){
    $mdl=new healthy_model();
    $r=$mdl->getHealthy();
    return $r;
}

}
?>
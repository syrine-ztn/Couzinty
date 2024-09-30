<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/saison_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/saison_model.php');

class saison_controller
{

function afficher_saison(){

$v=new saison_view();
$v->afficher_saison();
}

public function getSaison(){
    $mdl=new saison_model();
    $r=$mdl->getSaison();
    return $r;
}

}
?>
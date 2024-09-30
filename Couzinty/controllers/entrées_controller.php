<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/entrées_view.php');
require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/entrées_model.php');

class entrées_controller
{

function afficher_entrées(){

$v=new entrées_view();
$v->afficher_entrées();
}

public function getEntrees(){
    $mdl=new entrées_model();
    $r=$mdl->getEntrees();
    return $r;
}

}
?>
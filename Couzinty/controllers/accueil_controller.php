<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/accueil_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/accueil_model.php');

class accueil_controller
{

function afficher_accueil(){

$v=new accueil_view();
$v->afficher_accueil();
}

public function getEntrees(){
    $mdl=new accueil_model();
    $r=$mdl->getEntrees();
    return $r;
}

public function getPlats(){
    $mdl=new accueil_model();
    $r=$mdl->getPlats();
    return $r;
}

public function getDesserts(){
    $mdl=new accueil_model();
    $r=$mdl->getDesserts();
    return $r;
}

public function getBoissons(){
    $mdl=new accueil_model();
    $r=$mdl->getBoissons();
    return $r;
}

public function getNews(){
    $mdl=new accueil_model();
    $r=$mdl->getNews();
    return $r;
}

}
?>
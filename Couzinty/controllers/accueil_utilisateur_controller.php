<?php

 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/accueil_utilisateur_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/accueil_utilisateur_model.php');

class accueil_utilisateur_controller
{

function afficher_accueil_utilisateur(){

$v=new accueil_utilisateur_view();
$v->afficher_accueil_utilisateur();
}

public function getEntrees(){
    $mdl=new accueil_utilisateur_model();
    $r=$mdl->getEntrees();
    return $r;
}

public function getPlats(){
    $mdl=new accueil_utilisateur_model();
    $r=$mdl->getPlats();
    return $r;
}

public function getDesserts(){
    $mdl=new accueil_utilisateur_model();
    $r=$mdl->getDesserts();
    return $r;
}

public function getBoissons(){
    $mdl=new accueil_utilisateur_model();
    $r=$mdl->getBoissons();
    return $r;
}

public function getNews(){
    $mdl=new accueil_utilisateur_model();
    $r=$mdl->getNews();
    return $r;
}

}
?>
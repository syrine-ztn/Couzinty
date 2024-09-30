<?php

 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/news_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/news_model.php');

class news_controller
{

function afficher_news(){

$v=new news_view();
$v->afficher_news();
}

public function getNews(){
    $mdl=new news_model();
    $r=$mdl->getNews();
    return $r;
}
}
?>
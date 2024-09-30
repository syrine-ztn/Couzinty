<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/gestion_news_controller.php');

    $v= new gestion_news_controller();
    $v->afficher_gestion_news();
?>
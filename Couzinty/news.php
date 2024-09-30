<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/news_controller.php');

    $v= new news_controller();
    $v->afficher_news();
?>
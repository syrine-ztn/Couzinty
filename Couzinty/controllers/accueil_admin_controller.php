<?php
 
class accueil_admin_controller
{

function afficher_accueil_admin(){

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/accueil_admin_view.php');

$v=new accueil_admin_view();
$v->afficher_accueil_admin();
}

}
?>
<?php
 
class accueil_utilisateur_controller
{

function afficher_accueil_utilisateur(){

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/accueil_utilisateur_view.php');

$v=new accueil_utilisateur_view();
$v->afficher_accueil_utilisateur();
}

}
?>
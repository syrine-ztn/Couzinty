<?php
 
class idées_recette_controller
{

function afficher_idées_recette(){

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/idées_recette_view.php');

$v=new idées_recette_view();
$v->afficher_idées_recette();
}

}
?>
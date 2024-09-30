<?php
require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/contact_view.php');

class contact_controller
{

function afficher_contact(){

$v=new contact_view();
$v->afficher_contact();
}

}
?>
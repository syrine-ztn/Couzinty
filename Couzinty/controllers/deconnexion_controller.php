<?php

 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/accueil_view.php');
 

class deconnexion_controller
{

function afficher_accueil(){
$v=new accueil_view();
$v->afficher_accueil();
}

function logout(){

            session_start();
            session_destroy();
            $this->afficher_accueil();
      
}

}
?>
<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/préférences_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/préférences_model.php');
 if (!isset($_SESSION)) session_start();
class préférences_controller
{

function afficher_préférences(){

$v=new préférences_view();
$v->afficher_préférences();
}

public function getPreferences(){
    $mdl=new préférences_model();
    $r=$mdl->getPreferences();
    return $r;
}

public function isPreference($id_recette){
    $mdl=new préférences_model();
    $r=$mdl->isPreference();
    $bool=false;
    foreach ($r as $row)
    {
     if ($row["recette_id"]==$id_recette) $bool=true;
    }
    return $bool;
}

public function ajouter_préférences($nom_recette){
    $mdl=new préférences_model();
    $r=$mdl->ajouter_préférences($nom_recette);
    return $r;
}

}
?>
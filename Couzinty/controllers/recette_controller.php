<?php

 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/recette_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/recette_model.php');
 
class recette_controller
{

function afficher_recette(){


$v=new recette_view();
$v->afficher_recette();
}

public function getRecette($nomRecette){
    $mdl=new recette_model();
    $r=$mdl->getRecette($nomRecette);
    return $r;
}

public function editNotation(){
    if (isset($_POST["notationChange"])) {
        $notation=$_POST["notationChange"];
        $recette=$_POST["recette"];

        $mdl=new recette_model();
        $r=$mdl->editNotation($recette,$notation);
        return $r;     
    }
}

}
?>
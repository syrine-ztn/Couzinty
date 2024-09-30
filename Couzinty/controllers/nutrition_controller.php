<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/nutrition_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/nutrition_model.php');

class nutrition_controller
{

function afficher_nutrition(){


$v=new nutrition_view();
$v->afficher_nutrition();
}

function getNutrition() {
    $mdl=new nutrition_model();
    $r=$mdl->getNutrition();
    return $r;
}

}
?>
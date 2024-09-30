<?php
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/gestion_nutrition_model.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/gestion_nutrition_view.php');
class gestion_nutrition_controller
{

function afficher_gestion_nutrition(){


$v=new gestion_nutrition_view();
$v->afficher_gestion_nutrition();
}

function getNutrition() {
    $mdl=new gestion_nutrition_model();
    $r=$mdl->getNutrition();
    return $r;
}

function editNutrition(){
    
    if(isset($_POST['editNutrition'])){
        $Aliment=$_POST['Aliment'];
        $calories=$_POST['calories'];
        $Protéines=$_POST['Protéines'];
        $Glucides=$_POST['Glucides'];
        $Lipides=$_POST['Lipides'];
        $IG=$_POST['IG'];
        $saison=$_POST['saison'];
        $healthy=$_POST['healthy'];
        
        $mdl=new gestion_nutrition_model();
        $mdl->editNutrition($Aliment,$calories,$Protéines,$Glucides,$Lipides,$IG,$saison,$healthy);
    }

}

function deleteNutrition(){

    if(isset($_POST['deleteNutrition'])){
        $aliment=$_POST['Aliment'];
        
        $mdl=new gestion_nutrition_model();
        $mdl->deleteNutrition($aliment);
    
}

}


}
?>
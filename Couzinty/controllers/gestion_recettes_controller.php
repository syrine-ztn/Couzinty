<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/gestion_recettes_view.php');
require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/gestion_recettes_model.php');

class gestion_recettes_controller
{

function afficher_gestion_recettes(){


$v=new gestion_recettes_view();
$v->afficher_gestion_recettes();
}

function getRecettes() {
$mdl=new gestion_recettes_model();
$r=$mdl->getRecettes();
return $r;
}

function getRecettesNonValidees(){
    $mdl=new gestion_recettes_model();
    $r=$mdl->getRecettesNonValidees();
    return $r; 
}
    
function editRecette(){

    if(isset($_POST['editRecette'])){
        $nom_recette=$_POST['nom_recette'];
        $description=$_POST['description'];
        $difficulte=$_POST['difficulte'];
        $temps_prepa=$_POST['temps_prepa'];
        $temps_repos=$_POST['temps_repos'];
        $temps_cuisson=$_POST['temps_cuisson'];
        $temps_total=$_POST['temps_total'];
        $healthy=$_POST['healthy'];
        $calories=$_POST['calories'];
        $mode_cuisson=$_POST['mode_cuisson'];
        $categorie_nom=$_POST['categorie_nom'];
        $saison=$_POST['saison'];
        $fete=$_POST['fete'];
        $notation=$_POST['notation'];
        
        $mdl=new gestion_recettes_model();
        $mdl->editRecette($nom_recette,$description,$difficulte,$temps_prepa,$temps_repos,$temps_cuisson,$temps_total,$healthy,$calories,$mode_cuisson,$categorie_nom,$saison,$fete,$notation);
    }

}

function deleteRecette(){

    if(isset($_POST['deleteRecette'])){
        $nom_recette=$_POST['nom_recette'];
        
        $mdl=new gestion_recettes_model();
        $mdl->deleteRecette($nom_recette);
    
}

}

function validerRecette(){

    if(isset($_POST['validerRecette'])){
        $nom_recette=$_POST['nom_recette'];
        
        $mdl=new gestion_recettes_model();
        $mdl->validerRecette($nom_recette);
    }

}
}
?>
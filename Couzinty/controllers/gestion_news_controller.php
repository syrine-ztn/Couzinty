<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/gestion_news_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/gestion_news_model.php');

class gestion_news_controller
{

function afficher_gestion_news(){


$v=new gestion_news_view();
$v->afficher_gestion_news();
}

function getNews() {
    $mdl=new gestion_news_model();
    $r=$mdl->getNews();
    return $r;
    }
    
    function getNewsNonValidees(){
        $mdl=new gestion_news_model();
        $r=$mdl->getNewsNonValidees();
        return $r; 
    }
        
    function editNews(){
    
        if(isset($_POST['editNews'])){
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
            
            $mdl=new gestion_news_model();
            $mdl->editNews($nom_recette,$description,$difficulte,$temps_prepa,$temps_repos,$temps_cuisson,$temps_total,$healthy,$calories,$mode_cuisson,$categorie_nom,$saison,$fete,$notation);
        }
    
    }
    
    function deleteNews(){
    
        if(isset($_POST['deleteNews'])){
            $nom_recette=$_POST['nom_recette'];
            
            $mdl=new gestion_news_model();
            $mdl->deleteNews($nom_recette);
        
    }
    
    }
    
    function validerNews(){
    
        if(isset($_POST['validerNews'])){
            $nom_recette=$_POST['nom_recette'];
            
            $mdl=new gestion_news_model();
            $mdl->validerNews($nom_recette);
        }
    
    }
}
?>
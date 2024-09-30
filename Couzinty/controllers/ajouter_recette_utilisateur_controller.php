<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/ajouter_recette_utilisateur_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/ajouter_recette_utilisateur_model.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/accueil_utilisateur_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/accueil_admin_view.php');
 if (!isset($_SESSION)) session_start();
class ajouter_recette_utilisateur_controller
{

function afficher_ajouter_recette_utilisateur(){

$v=new ajouter_recette_utilisateur_view();
$v->afficher_ajouter_recette_utilisateur();
}

function insérer_recette(){

       if(($_POST["nom_recette"]=="") || ($_POST["description"]=="") || ($_POST["image"]=="") || ($_POST["difficulte"]=="") || ($_POST["temps_prepa"]=="") || ($_POST["temps_repos"]=="") || ($_POST["temps_cuisson"]=="") || ($_POST["temps_total"]=="") || ($_POST["liste_ingredients"]=="") || ($_POST["liste_etapes"]=="") || ($_POST["calories"]=="") || ($_POST["notation"]=="") || ($_POST["mode_cuisson"]=="") || ($_POST["categorie_nom"]=="") || ($_POST["saison"]=="") || ($_POST["fete"]=="") || ($_POST["news"]=="")) {
        echo '<body onLoad="alert(\'Veuillez remplir tous les champs...\')">';
        echo '<meta http-equiv="refresh" content="0;URL=./ajouter_recette_utilisateur.php">'; 
       } else {

        $v=new ajouter_recette_utilisateur_model();
        $url=$_POST['image'];
        $img="<img src='$url' style='width:100%;'>";
        
        
        if($_SESSION['profile']=="utilisateur") {
        $recipe=$v->insertNewRecipe($_POST["nom_recette"],$_POST["description"],$img,$_POST["difficulte"],$_POST["temps_prepa"],$_POST["temps_repos"],$_POST["temps_cuisson"],$_POST["temps_total"],$_POST["liste_ingredients"],$_POST["liste_etapes"],$_POST["calories"],$_POST["notation"],$_POST["mode_cuisson"],$_POST["categorie_nom"],$_POST["saison"],$_POST["fete"],$_POST["news"],'non');
        $v=new accueil_utilisateur_view();
        $v->afficher_accueil_utilisateur();
        } else {
        $recipe=$v->insertNewRecipe($_POST["nom_recette"],$_POST["description"],$img,$_POST["difficulte"],$_POST["temps_prepa"],$_POST["temps_repos"],$_POST["temps_cuisson"],$_POST["temps_total"],$_POST["liste_ingredients"],$_POST["liste_etapes"],$_POST["calories"],$_POST["notation"],$_POST["mode_cuisson"],$_POST["categorie_nom"],$_POST["saison"],$_POST["fete"],$_POST["news"],'oui');
        $v=new accueil_admin_view();
        $v->afficher_accueil_admin();    
        }

       }

}

}
?>
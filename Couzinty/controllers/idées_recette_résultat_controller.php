<?php
 
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/views/idées_recette_résultat_view.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/models/idées_recette_résultat_model.php');

class idées_recette_résultat_controller
{

function afficher_idées_recette_résultat(){


$v=new idées_recette_résultat_view();
$v->afficher_idées_recette_résultat();
}

function vérifier_idées_recette_résultat(){

    //Comparer deux chaines en ignorant les caractères majuscules et miniscules et les vides
    $comparer_chaines = function($s1,$s2) {
        $s1 = str_replace(" ","",$s1);
        $s2 = str_replace(" ","",$s2);
        
        return (strcasecmp($s1, $s2));
    };

    if(($_POST["ingredients"])!=""){

        $ing = $_POST["ingredients"]; //Récupérer les ingrédients entrés par l'utilisateur 
        $ingredients = explode(";", $ing); //les ingrédients sont séparés par un délimiteur ;
        $ingredients = array_filter($ingredients); 
        $liste_recettes = [];
        $v=new idées_recette_résultat_model();
        $recettes=$v->getRecettes();
         foreach ($recettes as $row) { 
            $liste_ingredients=$row["liste_ingredients"];//Récupérer les ingrédients depuis la bdd
            $liste_ingredients = explode(";", $liste_ingredients); //les ingrédients sont séparés par un délimiteur ;
            $liste_ingredients = array_filter($liste_ingredients); //
            $ingredients_recette = [];

            foreach ($liste_ingredients as $ingredient) {
            $ingredients_recette[]=substr($ingredient,3);//Enlever les 3 premiers caractères de l'ingrédient (exp: 1- Ingrédient) 
            }

            $intersection=array_uintersect($ingredients,$ingredients_recette,$comparer_chaines); //Extraire les éléments en commun entre les deux tableau
            $min = intval(count($ingredients)*(70/100)); //Calculer le nombre d'ingrédients
            if ($min==0) { $min = 1; }

            if (count($intersection) >= $min) {
                $liste_recettes[] = $row;
            }

         }

         $_SESSION["recettes"] = $liste_recettes;

         $this->afficher_idées_recette_résultat();

    } else {
        echo '<body onLoad="alert(\'Veuillez saisir au moins un ingrédient...\')">';
        echo '<meta http-equiv="refresh" content="0;URL=./idées_recette.php">';
    } 

}


}
?>
<link rel = "stylesheet" href = "./css/bootstrap.min.css">
<link rel = "stylesheet" href = "./css/style.css">
<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" 
         integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
         crossorigin = "anonymous">
</script>
      

      
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
         integrity = "sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
         crossorigin = "anonymous">
</script>


<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/ajouter_recette_utilisateur_controller.php');
session_start();
class ajouter_recette_utilisateur_view
{
    public function entete()
    {
    ?>

        <head>
        <title>Ajouter une recette</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Zitouni Syrine Assia">

        </head>

        <div id="container-slider" class = "container-responsive">
        <nav class="navbar navbar-expand-sm justify-content-between">
       
        <a class="navbar-brand mr-50" href="#">
        <img src="./img/couzinty.jpg" alt="Logo" style="border:none;width:100px;">
        </a>
     
        <nav class="navbar navbar-expand-sm justify-content-between" style="margin-top: 0%;">
        <a class="navbar-brand" href="https://www.facebook.com">
        <img src="./img/facebook.png" class="rounded-circle" alt="Logo" style="width:30px;">
        </a>
        <a class="navbar-brand mr-50" href="https://www.instagram.com">
        <img src="./img/instagram.png" class="rounded-circle" alt="Logo" style="width:30px;">
        </a>
        <a class="navbar-brand" href="https://www.twitter.com">
        <img src="./img/twitter.png" class="rounded-circle" alt="Logo" style="width:30px;">
        </a>
        </nav>
        </nav>
   
        
        </div>

    <?php
    }

    
    public function menu()
    {
    ?>
      <div>
     <center>
     <nav class="menu">
     <ul>
      <?php if ($_SESSION['profile']=="utilisateur") { ?>
     <?php if (!isset($_SESSION["id_utilisateur"])) { ?>
      <li><a href="./index.php" class="lien">Accueil</a></li>
      <?php } else { ?>
      <li><a href="./accueil_utilisateur.php" class="lien">Accueil</a></li>
      <?php } ?>

      <li><a href="./news.php" class="lien">News</a></li>
      <li><a href="./idées_recette.php" class="lien">Idées de recette</a></li>
      <li><a href="./healthy.php" class="lien">Healthy</a></li>
      <li><a href="./saison.php" class="lien">Saisons</a></li>
      <li><a href="./fete.php" class="lien">Fêtes</a></li>
      <li><a href="./nutrition.php" class="lien">Nutrition</a></li>
      <?php if (isset($_SESSION["id_utilisateur"])) { ?>
        <li><a href="./préférences.php" class="lien">Péférences</a></li>
      <?php } ?>
      <li><a href="./contact.php" class="lien">Contact</a></li>
      <?php if (isset($_SESSION["id_utilisateur"])) { ?>
        <li><a href="./profile.php" class="lien">Profile</a></li>
      <?php } ?>
      <?php if (!isset($_SESSION["id_utilisateur"])) { ?>
      <li><a href="./login.php" class="lien">Se connecter</a></li>
      <?php } else { ?>
      <li><a href="./deconnexion.php" class="lien">Déconnexion</a></li>
      <?php } ?>
      <?php } else { ?>
      <li><a href="./accueil_admin.php" class="lien">Accueil</a></li>
      <li><a href="./gestion_recettes.php" class="lien">Gestion des recettes</a></li>
      <li><a href="./gestion_news.php" class="lien">Gestion des News</a></li>
      <li><a href="./gestion_users.php" class="lien">Gestion des utilisateurs</a></li>
      <li><a href="./gestion_nutrition.php" class="lien">Gestion de la nutrition</a></li>
      
      <?php if (isset($_SESSION["id_utilisateur"])) { ?>
        <li><a href="./profile.php" class="lien">Profile</a></li>
      <?php } ?>
      <li><a href="./deconnexion.php" class="lien">Déconnexion</a></li>
      <?php } ?>
     </ul>
     </nav>
     </center>
    </div>
     <?php
     }
     public function contenu() 
     {
     ?> 
       <div class="justify-content-center align-items-center" style="margin: 100px;">
            <div>
               <form method="post" action="./ajouter_recette_utilisateur.php">
                  <div class="form-group">
                     <label>Nom de la recette</label>
                     <input type="text" name="nom_recette" class="form-control" placeholder="Nom de la recette">
                  </div>
                  <div class="form-group">
                     <label>Description</label>
                     <textarea type="text" name="description" class="form-control" placeholder="Description de la recette"></textarea>
                  </div>
                  <div class="form-group">
                     <label>Lien de l'image de la recette</label>
                     <input type="text" name="image" class="form-control" placeholder="https://example.com">
                  </div>
                  <div class="form-group">
                     <label>Difficulté</label>
                     <select name="difficulte" class="form-control">
                      <option value="très facile">très facile</option>
                      <option value="facile">facile</option>
                      <option value="moyenne" selected="selected">moyenne</option>
                      <option value="difficile">difficile</option>
                      <option value="très difficile">très difficile</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Temps de préparation </label>
                     <input type="text" id="time" name="temps_prepa" class="form-control" placeholder="hh:mm:ss">
                  </div>
                  <div class="form-group">
                     <label>Temps de repos</label>
                     <input type="text" id="time" name="temps_repos" class="form-control" placeholder="hh:mm:ss">
                  </div>
                  <div class="form-group">
                     <label>Temps de cuisson</label>
                     <input type="text" id="time" name="temps_cuisson" class="form-control" placeholder="hh:mm:ss">
                  </div>
                  <div class="form-group">
                     <label>Temps total</label>
                     <input type="text" id="time" name="temps_total" class="form-control" placeholder="hh:mm:ss">
                  </div>
                  <div class="form-group">
                     <label>Liste des ingrédients </label>
                     <textarea type="text" name="liste_ingredients" class="form-control" placeholder="Exemple: 1- ingrédient1;2- ingrédient2;3- ingrédient3;..."></textarea>
                  </div>
                  <div class="form-group">
                     <label>Liste des étapes </label>
                     <textarea type="text" name="liste_etapes" class="form-control" placeholder="Exemple: 1- étape1;2- étape2;3- étape3;..."></textarea>
                  </div>
                  <div class="form-group">
                     <label>Calories </label>
                     <input type="number" name="calories" class="form-control" placeholder="calories en kcal">
                  </div>
                  <div class="form-group">
                     <label>Notation sur 5</label>
                     <input type="number" min="0" max="5" name="notation" class="form-control" placeholder="notation sur 5">
                  </div>
                  <div class="form-group">
                     <label>Mode de cuisson</label>
                     <input type="text" name="mode_cuisson" class="form-control" placeholder="Mode de cuisson">
                  </div>
                  <div class="form-group">
                     <label>Catégorie de la recette</label>
                     <select name="categorie_nom" class="form-control">
                      <option value="entrée">Entrée</option>
                      <option value="plat">Plat</option>
                      <option value="dessert">Dessert</option>
                      <option value="boisson">Boisson</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Saison</label>
                     <select name="saison" class="form-control">
                      <option value="multi_saison">Multi_saison</option>
                      <option value="printemps">Printemps</option>
                      <option value="automne">Automne</option>
                      <option value="été">Été</option>
                      <option value="hiver">Hiver</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Fête</label>
                     <select name="fete" class="form-control">
                      <option value="quotidien">quotidien</option>
                      <option value="mariage">mariage</option>
                      <option value="circoncision">circoncision</option>
                      <option value="aid">aid</option>
                      <option value="achoura">achoura</option>
                     </select>
                  </div>
                  <?php if ($_SESSION['profile']=="utilisateur") { ?>
                  <div class="form-group">
                     <label>Cette recette appartient-elle aux nouveautés ?</label>
                     <select name="news" class="form-control">
                      <option value="non">non</option>
                      <option value="oui">oui</option>
                     </select>
                  </div>
                  <?php } else { if (isset($_GET['news'])) { ?>
                     <input type="hidden" name="news" class="form-control" value="oui">
                  <?php } else { ?>
                     <div class="form-group">
                     <label>Cette recette appartient-elle aux nouveautés ?</label>
                     <select name="news" class="form-control">
                      <option value="non">non</option>
                      <option value="oui">oui</option>
                     </select>
                   </div>
                  <?php } ?>

                  <?php } ?>

                  <br/>
                  <center><input type="submit" class="btn btn-primary" value="Valider la recette"></center>
               </form>
            </div>
         </div>
         
    <?php
    }
    public function pieds()
    {
    ?>
    <footer style="background-color:rgb(49, 49, 48);" class="bg-primary text-white d-flex-column text-center" id="footer">  
    <div style="background-color:rgb(49, 49, 48);" class="container-responsive p-3"> 

    <center>  
    <br/><br/>
    <a href="./index.php" class="p-3"><h1>Couzinty.com</h1></a>
    <p class="p-3">
    <?php if ($_SESSION['profile']=="utilisateur") { ?>
    <?php if (!isset($_SESSION["id_utilisateur"])) { ?>
      <a href="./index.php" class="p-3">Accueil</a>
      <?php } else { ?>
      <a href="./accueil_utilisateur.php" class="p-3">Accueil</a>
      <?php } ?>
    <a href="./news.php" class="p-3">News</a>
    <a href="./idées_recette.php" class="p-3">Idées de recette</a>
    <a href="./healthy.php" class="p-3">Healthy</a>
    <a href="./saison.php" class="p-3">Saisons</a>
    <a href="./fete.php" class="p-3">Fêtes</a>
    <a href="./nutrition.php" class="p-3">Nutrition</a>
    <a href="./contact.php" class="p-3">Contact</a>
    <?php } else { ?>
      <a href="./accueil_admin.php" class="p-3">Accueil</a>
    <a href="./gestion_recettes.php" class="p-3">Gestion des recettes</a>
    <a href="./gestion_news.php" class="p-3">Gestion des News</a>
    <a href="./gestion_users.php" class="p-3">Gestion des utilisateurs</a>
    <a href="./gestion_nutrition.php" class="p-3">Gestion de la nutrition</a>
   
     <?php } ?> 
    </p>
    <p id="contact" class="p-3">
    <a class="navbar-brand" href="https://www.facebook.com">
        <img src="./img/facebook.png" class="rounded-circle" alt="Logo" style="width:30px;">
    </a>
    <a class="navbar-brand mr-50" href="https://www.instagram.com">
        <img src="./img/instagram.png" class="rounded-circle" alt="Logo" style="width:30px;">
    </a>
    <a class="navbar-brand" href="https://www.twitter.com">
        <img src="./img/twitter.png" class="rounded-circle" alt="Logo" style="width:30px;">
    </a>
    </p>
    <br/><br/>
    <small>&copy; Copyright 2022, <a href="./index.php">Couzinty.com</a></small>
    </center>
       
    </div>  
    </footer>    
    <?php
    }
    public function afficher_ajouter_recette_utilisateur()
    {
        $this->entete();
        $this->menu();
        $this->contenu();
        $this->pieds();

        
    }
}

?>
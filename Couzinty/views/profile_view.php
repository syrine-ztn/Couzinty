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

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/profile_controller.php');

if (!isset($_SESSION)) session_start(); 
class profile_view
{
    
    public function entete()
    {
    ?>

        <head>
        <title>Profile</title>
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
      <?php if($_SESSION["profile"]=="utilisateur") { ?>
      <li><a href="./accueil_utilisateur.php" class="lien">Accueil</a></li>
      <li><a href="./news.php" class="lien">News</a></li>
      <li><a href="./idées_recette.php" class="lien">Idées de recette</a></li>
      <li><a href="./healthy.php" class="lien">Healthy</a></li>
      <li><a href="./saison.php" class="lien">Saisons</a></li>
      <li><a href="./fete.php" class="lien">Fêtes</a></li>
      <li><a href="./nutrition.php" class="lien">Nutrition</a></li>
      <li><a href="./préférences.php" class="lien">Péférences</a></li>
      <li><a href="./contact.php" class="lien">Contact</a></li>
      <li><a href="./profile.php" class="lien">Profile</a></li>
      <li><a href="./deconnexion.php" class="lien">Déconnexion</a></li>
      <?php } else { ?>
      <li><a href="./accueil_admin.php" class="lien">Accueil</a></li>
      <li><a href="./gestion_recettes.php" class="lien">Gestion des recettes</a></li>
      <li><a href="./gestion_news.php" class="lien">Gestion des News</a></li>
      <li><a href="./gestion_users.php" class="lien">Gestion des utilisateurs</a></li>
      <li><a href="./gestion_nutrition.php" class="lien">Gestion de la nutrition</a></li>
      
      <li><a href="./profile.php" class="lien">Profile</a></li>
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
      <div class="row justify-content-center align-items-center" style="margin-top: 100px;margin-bottom: 100px;">
            <div class="login-form">
               <form method="post" action="./profile.php">
                  <div class="form-group">
                     <label>Nom</label>
                     <input type="text" name="nom" class="form-control" value="<?php echo $_SESSION["nom"] ?>">
                  </div>
                  <div class="form-group">
                     <label>Prénom</label>
                     <input type="text" name="prenom" class="form-control" value="<?php echo $_SESSION["prenom"] ?>">
                  </div>
                  <div class="form-group">
                     <label>E-mail</label>
                     <input type="text" name="email" class="form-control" value="<?php echo $_SESSION["email"] ?>">
                  </div>
                  <div class="form-group">
                     <label>Sexe</label>
                     <input type="text" name="sexe" class="form-control" value="<?php echo $_SESSION["sexe"] ?>">
                  </div>
                  <div class="form-group">
                     <label>Date de naissance</label>
                     <input type="date" name="date_naissance" class="form-control" value="<?php echo $_SESSION["date_naissance"] ?>">
                  </div>
                  <div class="form-group">
                     <label>Mot de passe</label>
                     <input type="text" name="pwd" class="form-control" value="<?php echo $_SESSION["pwd"] ?>">
                  </div>
                  <input type="hidden" name="id" value="<?php echo $_SESSION["id_utilisateur"] ?>">
                  <br/>
                  <center><button type="submit" class="btn btn-secondary">Modifier</button></center>
               </form>
            </div>
         </div>

         <?php if (isset($_SESSION["id_utilisateur"]) && ($_SESSION["profile"]=="utilisateur")) { ?>
             <center><a class="btn btn-outline-danger" href="./préférences.php">Accéder aux préférences</a></center>
         <?php } ?>
         <br/><br/><br/>

         <style>
            .form-group input{
               background-color:#CDCDCD;
            }
            .form-group input:hover{
               background-color:white;
            }
         </style>
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
    public function afficher_profile()
    {
        $this->entete();
        $this->menu();
        $this->contenu();
        $this->pieds();

        
    }
}

?>
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

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/accueil_admin_controller.php');

class accueil_admin_view
{
    public function entete()
    {
    ?>

        <head>
        <title>Accueil admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Zitouni Syrine Assia">

        </head>

        <div id="container-slider" class = "container-responsive">
        <nav class="navbar navbar-expand-sm justify-content-between">
       
        <a class="navbar-brand mr-50" href="#">
        <img src="./img/couzinty.jpg" alt="Logo" style="border:none;width:150px;">
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
      <li><a href="./accueil_admin.php" class="lien">Accueil</a></li>
      <li><a href="./gestion_recettes.php" class="lien">Gestion des recettes</a></li>
      <li><a href="./gestion_news.php" class="lien">Gestion des News</a></li>
      <li><a href="./gestion_users.php" class="lien">Gestion des utilisateurs</a></li>
      <li><a href="./gestion_nutrition.php" class="lien">Gestion de la nutrition</a></li>
      <li><a href="./profile.php" class="lien">Profile</a></li>
      <li><a href="./deconnexion.php" class="lien">Déconnexion</a></li>
     </ul>
     </nav>
     </center>
    </div>
     <?php
     }
     public function contenu() 
     {
     ?> 
        <div>
       <br/><br/>
        <div class="container-fluid mt-5" style="padding-bottom: 15%; padding-top: 2%; padding-left: 0%;">
        <center><h3 id="entrées">Gestion des catégories</h3></center><br/><br/><br/><br/>
            <div class="row blog">
                <div>
                    <div class="carousel" data-interval="false" data-ride="carousel">

                        
                        <div class="carousel-inner col-md-15">
                            <div class="carousel-item active" style="padding-left: 5%; padding-right: 5%;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <center><h4>Gestion des recettes</h4></center>
                                        <br/>
                                        <a href="./gestion_recettes.php">
                                            <img src="./img/recette1.jpeg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                    <center><h4>Gestion des news</h4></center>
                                        <br/>
                                        <a href="./gestion_news.php">
                                            <img src="./img/new.jpg" alt="Image" style="height: 100%; width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                    <center><h4>Gestion des utilisateurs</h4></center>
                                        <br/>
                                        <a href="./gestion_users.php">
                                            <img src="./img/user.png" alt="Image" style="border: solid black; max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                    <center><h4>Gestion de la nutrition</h4></center>
                                        <br/>
                                        <a href="./gestion_nutrition.php">
                                            <img src="./img/nutrition.png" alt="Image" style="height: 100%; width:100%;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                      
                        </div>
                        
                    </div>

                </div>
            </div>
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
    <a href="./accueil_admin.php" class="p-3">Accueil</a>
    <a href="./gestion_recettes.php" class="p-3">Gestion des recettes</a>
    <a href="./gestion_news.php" class="p-3">Gestion des News</a>
    <a href="./gestion_users.php" class="p-3">Gestion des utilisateurs</a>
    <a href="./gestion_nutrition.php" class="p-3">Gestion de la nutrition</a>
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
    public function afficher_accueil_admin()
    {
        $this->entete();
        $this->menu();
        $this->contenu();
        $this->pieds();

        
    }
}

?>
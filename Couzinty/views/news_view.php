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

<style>
    .card img {
        height:250px;

    }

</style>

<?php

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/news_controller.php');
session_start(); 

class news_view
{
    public function entete()
    {
    ?>
        <head>
        <title>News</title>
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
      
     </ul>
     </nav>
     </center>
    </div>
     <?php
     }
     public function contenu() 
     {
     ?> 
      <div id="contenu">
       <br/><br/><br/><br/><br/><br/>
       
       
        <div class="container mt-0 mb-4" style="padding-bottom: 40%; padding-top: 2%;">
        <center><h3 id="entrées">Découvrez des nouvelles recettes</h3></center><br/><br/>
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel" data-interval="false" data-ride="carousel">


                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row p-3">
                                    <div class="col-md-3 card pt-6 pb-0 pl-2 pr-2">
                                        <?php 
                                         $cpt=0;
                                         $controller = new news_controller(); 
                                         $resultat = $controller->getNews();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==1) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        
                                        <?php }}}?>
                                    </div>
                                    <div class="col-md-3 card pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new news_controller(); 
                                         $resultat = $controller->getNews();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==2) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="col-md-3 card pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new news_controller(); 
                                         $resultat = $controller->getNews();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==3) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="col-md-3 card pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new news_controller(); 
                                         $resultat = $controller->getNews();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==4) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="carousel-item">
                                <div class="row p-3">
                                    <div class="col-md-2 card pt-6 pb-0 pl-2 pr-2">
                                        <?php 
                                         $cpt=0;
                                         $controller = new news_controller(); 
                                         $resultat = $controller->getNews();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==5) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="col-md-2 card pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new news_controller(); 
                                         $resultat = $controller->getNews();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==6) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="col-md-2 card pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new news_controller(); 
                                         $resultat = $controller->getNews();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==7) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="col-md-2 card pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new news_controller(); 
                                         $resultat = $controller->getNews();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==8) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="col-md-2 card pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new news_controller(); 
                                         $resultat = $controller->getNews();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==9) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="col-md-2 card pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new news_controller(); 
                                         $resultat = $controller->getNews();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==10) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <a class = "carousel-control-prev" href = "#blogCarousel" role = "button" data-slide = "prev">
               <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Previous</span>
            </a>
            
            <a class = "carousel-control-next" href = "#blogCarousel" role = "button" data-slide = "next">
               <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Next</span>
            </a>
           
            </div>
            </div>
            
            </div><br/><br/><br/><br/>
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
    public function afficher_news()
    {
        $this->entete();
        $this->menu();
        $this->contenu();
        $this->pieds();

        
    }
}

?>s
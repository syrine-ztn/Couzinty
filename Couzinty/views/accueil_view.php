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

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/accueil_controller.php');


class accueil_view
{
    public function entete()
    {
    ?>

        <head>
        <title>Accueil</title>
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

    public function diaporama()
    {
    ?>
        
        <div>
        <br/>
        <div id="container-slider" class = "container-responsive">
         <div id = "carouselwithIndicators" class = "carousel slide" data-ride = "carousel">    
            <div class ="carousel-inner h-50">
               <div class = "carousel-item active h-50">
               <?php 
                 $cpt=0;
                 $controller = new accueil_controller(); 
                 $resultat = $controller->getNews();
                 foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                 if ($cpt==1) { ?>
                 <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                 <?php echo $row["image"] ?>
                 </a>
                 <?php }}}?>
               </div>
               
               <div class = "carousel-item h-50">
                 <?php 
                 $cpt=0;
                 $controller = new accueil_controller(); 
                 $resultat = $controller->getNews();
                 foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                 if ($cpt==2) { ?>
                 <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                 <?php echo $row["image"] ?>
                 </a>
                 <?php }}}?>
               </div>
               <div class = "carousel-item h-50">
               <?php 
                 $cpt=0;
                 $controller = new accueil_controller(); 
                 $resultat = $controller->getNews();
                 foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                 if ($cpt==3) { ?>
                 <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                 <?php echo $row["image"] ?>
                 </a>
                 <?php }}}?>
               </div>
               <div class = "carousel-item h-50">
               <?php 
                 $cpt=0;
                 $controller = new accueil_controller(); 
                 $resultat = $controller->getNews();
                 foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                 if ($cpt==4) { ?>
                 <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                 <?php echo $row["image"] ?>
                 </a>
                 <?php }}}?>
               </div>
               <div class = "carousel-item h-50">
               <?php 
                 $cpt=0;
                 $controller = new accueil_controller(); 
                 $resultat = $controller->getNews();
                 foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                 if ($cpt==5) { ?>
                 <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                 <?php echo $row["image"] ?>
                 </a>
                 <?php }}}?>
               </div>
               <div class = "carousel-item h-50">
               <?php 
                 $cpt=0;
                 $controller = new accueil_controller(); 
                 $resultat = $controller->getNews();
                 foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                 if ($cpt==6) { ?>
                 <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                 <?php echo $row["image"] ?>
                 </a>
                 <?php }}}?>
               </div>
               <div class = "carousel-item h-50">
               <?php 
                 $cpt=0;
                 $controller = new accueil_controller(); 
                 $resultat = $controller->getNews();
                 foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                 if ($cpt==7) { ?>
                 <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                 <?php echo $row["image"] ?>
                 </a>
                 <?php }}}?>
               </div>
               <div class = "carousel-item h-50">
               <?php 
                 $cpt=0;
                 $controller = new accueil_controller(); 
                 $resultat = $controller->getNews();
                 foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                 if ($cpt==8) { ?>
                 <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                 <?php echo $row["image"] ?>
                 </a>
                 <?php }}}?>
               </div>
               <div class = "carousel-item h-50">
               <?php 
                 $cpt=0;
                 $controller = new accueil_controller(); 
                 $resultat = $controller->getNews();
                 foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                 if ($cpt==9) { ?>
                 <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                 <?php echo $row["image"] ?>
                 </a>
                 <?php }}}?>
               </div>
               <div class = "carousel-item h-50">
               <?php 
                 $cpt=0;
                 $controller = new accueil_controller(); 
                 $resultat = $controller->getNews();
                 foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                 if ($cpt==10) { ?>
                 <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                 <?php echo $row["image"] ?>
                 </a>
                 <?php }}}?>
               </div>
            </div>
            
            <a class = "carousel-control-prev" href = "#carouselwithIndicators" role = "button" data-slide = "prev">
               <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Previous</span>
            </a>
            
            <a class = "carousel-control-next" href = "#carouselwithIndicators" role = "button" data-slide = "next">
               <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Next</span>
            </a>
         </div>
      </div>
      
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
      <li><a href="./index.php" class="lien">Accueil</a></li>
      <li><a href="./news.php" class="lien">News</a></li>
      <li><a href="./idées_recette.php" class="lien">Idées de recette</a></li>
      <li><a href="./healthy.php" class="lien">Healthy</a></li>
      <li><a href="./saison.php" class="lien">Saisons</a></li>
      <li><a href="./fete.php" class="lien">Fêtes</a></li>
      <li><a href="./nutrition.php" class="lien">Nutrition</a></li>
      <li><a href="./contact.php" class="lien">Contact</a></li>
      <li><a href="./login.php" class="lien">Se connecter</a></li>
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

        <div class="container mt-5 mb-2" style="border: solid;padding-bottom: 50%; padding-top: 2%;">
        <center><h3 id="entrées">Entrées</h3></center><br/><br/>
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel" data-interval="false" data-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row p-3">
                                    <div class="card col-md-3 pt-6 pl-2 pr-2">
                                        <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getEntrees();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==1) { ?>
                                         <br/>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-3 pt-6 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getEntrees();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==2) { ?>
                                          <br/>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-3 pt-6 pl-2 pr-2">
                                       <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getEntrees();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==3) { ?>
                                          <br/>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-3 pt-6 pl-2 pr-2">
                                          <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getEntrees();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==4) { ?>
                                          <br/>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                         <br/>
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
                                    <div class="card col-md-2 pt-6 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getEntrees();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==5) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pl-2 pr-2">
                                         <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getEntrees();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==6) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getEntrees();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==7) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getEntrees();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==8) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getEntrees();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==9) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pl-2 pr-2">
                                       <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getEntrees();
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
            
            </div><br/><br/>
            
            <a href="./entrées.php">Afficher toutes les entrées</a>
      </div>
     


       <br/><br/><br/><br/><br/>
       <div class="container mt-0 mb-5" style="border: solid; margin-bottom: 40%;padding-bottom: 50%; padding-top: 2%;">
       <center><h3 id="plats">Plats</h3></center><br/><br/>
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel1" class="carousel" data-interval="false" data-ride="carousel">


                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row p-3">
                                    <div class="card col-md-3 pt-6 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getPlats();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==1) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-3 pt-6 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getPlats();
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
                                    <div class="card col-md-3 pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getPlats();
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
                                    <div class="card col-md-3 pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getPlats();
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
                                    <div class="card col-md-2 pt-6 pb-0 pl-2 pr-2">
                                        <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getPlats();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==5) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getPlats();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==6) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getPlats();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==7) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pb-0 pl-2 pr-2">
                                        <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getPlats();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==8) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <br/>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getPlats();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==9) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getPlats();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==10) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <br/><a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                </div>
                            
                            </div>
                      
                        </div>
                        <a class = "carousel-control-prev" href = "#blogCarousel1" role = "button" data-slide = "prev">
               <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Previous</span>
            </a>
            
            <a class = "carousel-control-next" href = "#blogCarousel1" role = "button" data-slide = "next">
               <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Next</span>
            </a>
   
                    </div>

                </div>
            </div>
            <br/><br/>
            <a href="./plats.php">Afficher tous les plats</a>
       </div>
       <br/><br/><br/><br/><br/>
       <div class="container mt-0 mb-5" style="border: solid; padding-bottom: 50%; padding-top: 2%;">
       <center><h3 id="desserts">Desserts</h3></center><br/><br/>
       <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel2" class="carousel" data-interval="false" data-ride="carousel">


                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row p-3">
                                    <div class="card col-md-3 pt-6 pb-0 pl-2 pr-2">
                                        <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getDesserts();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==1) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-3 pt-6 pb-0 pl-2 pr-2">
                                        <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getDesserts();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==2) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-3 pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getDesserts();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==3) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-3 pt-6 pb-0 pl-2 pr-2">
                                        <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getDesserts();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==4) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="carousel-item">
                                <div class="row p-3">
                                    <div class="card col-md-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getDesserts();
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
                                    <div class="card col-md-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getDesserts();
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
                                    <div class="card col-md-2 pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getDesserts();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==7) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getDesserts();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==8) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getDesserts();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==9) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2 pt-6 pb-0 pl-2 pr-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getDesserts();
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
                        <a class = "carousel-control-prev" href = "#blogCarousel2" role = "button" data-slide = "prev">
               <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Previous</span>
            </a>
            
            <a class = "carousel-control-next" href = "#blogCarousel2" role = "button" data-slide = "next">
               <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Next</span>
            </a>
   
                    </div>

                </div>
            </div>
            <br/><br/>
            <a href="./desserts.php">Afficher tous les desserts</a>
       </div>
       <br/><br/><br/><br/><br/>
       <div class="container mt-0 mb-5" style="border: solid; padding-bottom: 50%; padding-top: 2%;">
       <center><h3 id="boissons">Boissons</h3></center>
       <br/><br/>
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel3" class="carousel" data-interval="false" data-ride="carousel">


                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row p-3">
                                    <div class="card col-md-3">
                                        <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getBoissons();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==1) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-3">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getBoissons();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==2) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-3">
                                         <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getBoissons();
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
                                    <div class="card col-md-3">
                                        <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getBoissons();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==4) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="carousel-item">
                                <div class="row p-3">
                                    <div class="card col-md-2">
                                        <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getBoissons();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==5) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2">
                                         <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getBoissons();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==6) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getBoissons();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==7) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getBoissons();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==8) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getBoissons();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==9) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                    <div class="card col-md-2">
                                    <?php 
                                         $cpt=0;
                                         $controller = new accueil_controller(); 
                                         $resultat = $controller->getBoissons();
                                         foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {
                                         if ($cpt==10) { ?>
                                        <h4><?php echo $row["nom_recette"] ?></h4>
                                        <p><?php echo substr($row["description"],0,30)?> ... <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Afficher la suite</a></p>
                                        <br/><br/><br/>
                                        <a href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">
                                         <?php echo $row["image"] ?>
                                        </a>
                                        <?php }}}?>
                                    </div>
                                </div>
                            
                            </div>
                      
                        </div>
                        <a class = "carousel-control-prev" href = "#blogCarousel3" role = "button" data-slide = "prev">
               <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Previous</span>
            </a>
            
            <a class = "carousel-control-next" href = "#blogCarousel3" role = "button" data-slide = "next">
               <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
               <span class = "sr-only">Next</span>
            </a>
   
                    </div>

                </div>
            </div>
            <br/><br/>
            <a href="./boissons.php">Afficher toutes les boissons</a>
        </div>
       <br/><br/><br/>
       </div>
       <style>
        #contenu img {
        height:250px;
        width: 250px;
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
    <a href="./index.php" class="p-3">Accueil</a>
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
    public function afficher_accueil()
    {
        $this->entete();
        $this->diaporama();
        $this->menu();
        $this->contenu();
        $this->pieds();

        
    }
}

?>
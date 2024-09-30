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

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/recette_controller.php');
require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/préférences_controller.php');
if (!isset($_SESSION)) session_start();


class recette_view
{
    public function entete()
    {
    ?>

        <head>
        <title>Recette</title>
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
        <div>
       <br/><br/><br/><br/><br/><br/>
        <div style="margin-top: 0%; margin-bottom: 10%;margin-right: 10%;margin-left: 10%;">
            
            <div class="row blog">
                <div class="col-md-12">
                    <div class="carousel" data-interval="false" data-ride="carousel">


                        <div class="carousel-inner">
                        <?php      
                       $nomRecette=strip_tags(trim($_GET["nomRecette"]));
                       $controller = new recette_controller();
                       $resultat = $controller->getRecette($nomRecette);
                       foreach ($resultat as $row) { if (!empty($row['nom_recette'])) { $_COOKIE['id_recette']=$row['id_recette']; $_COOKIE['nom_recette']=$row['nom_recette'];?>
                            
                            <div class="carousel-item active">
                                <div class="row">
                                    <div style="border-right: solid; padding-bottom: 40%; padding-top: 2%; word-wrap: break-word;" class="col-md-4">
                                        <h2><?php echo $row["nom_recette"] ?></h2><br/>
                                        <a href="#">
                                        <?php echo $row["image"] ?>   
                                        </a>
                                        <br/><br/>
                                        <h4 style='display:inline'>Description : </h4><h5 style='display:inline'><?php echo $row["description"] ?></h5><br/><br/>
                                        <h4 style='display:inline'>Difficulté : </h4><h5 style='display:inline'><?php echo $row["difficulte"] ?></h5><br/><br/>
                                        <h4 style='display:inline'>Temps de préparation : </h4><h5 style='display:inline'><?php echo $row["temps_prepa"] ?></h5><br/><br/>
                                        <h4 style='display:inline'>Temps de repos : </h4><h5 style='display:inline'><?php echo $row["temps_repos"] ?></h5><br/><br/>
                                        <h4 style='display:inline'>Temps de cuisson : </h4><h5 style='display:inline'><?php echo $row["temps_cuisson"] ?></h5><br/><br/>
                                        <h4 style='display:inline'>Temps total : </h4><h5 style='display:inline'><?php echo $row["temps_total"] ?></h5><br/><br/>
                                        <h4 style='display:inline'>Nombre de calories : </h4><h5 style='display:inline'><?php echo $row["calories"] ?></h5><br/><br/>

                                        <?php if (isset($_SESSION["id_utilisateur"])) { ?>
                                            <h4 style='display:inline'>Notation : </h4><h5 style='display:inline'><?php echo $row["notation"] ?></h5><br/><br/>
                                        <?php } ?>
                    
                                    </div>
                                    
                                    <div class="col-md-8">
                                      <div class="container-fluid rounded p-3 mb-4" style="border: solid; padding-bottom: 40%; margin-right:20%; word-wrap: break-word;">
                                        <h4>Ingrédients :</h4>
                                        <p><?php
                                         $liste_ingredients = $row["liste_ingredients"];
                                         $liste_ingredients = explode(";", $liste_ingredients);
                                         foreach ($liste_ingredients as $ingredient) {
                                         echo $ingredient;
                                         echo '<br/>';
                                         }
                                         ?></p>
                                      
                                     </div>
                                     <div class="container-fluid rounded p-3" style="border: solid; padding-bottom: 40%; margin-right:20%; word-wrap: break-word;">
                                        <h4>Préparation :</h4>
                                        <p><?php
                                         $liste_etapes = $row["liste_etapes"];
                                         $liste_etapes = explode(";", $liste_etapes);
                                         foreach ($liste_etapes as $etape) {
                                         echo $etape;
                                         echo '<br/>';
                                         }
                                         ?></p>
                                 
                                     </div>
                                    </div>
                                    
                                </div>
                            </div>
                           

                            <?php }
                            }
                            ?>
                      
                        </div>
                       
   
                    </div>

                </div>
            </div>
       </div>

       </div>
       <?php if (isset($_SESSION["id_utilisateur"])) { $controller = new préférences_controller(); $resultat = $controller->isPreference($_COOKIE["id_recette"]);
       if (!$resultat) { ?>
        <center><a class="btn btn-outline-danger" href="./préférences.php?nomRecette=<?php echo $_COOKIE["nom_recette"] ?>">Ajouter aux préférences</a></center>
      <?php } }?>

      <br/><br/><br/>
      <?php if (isset($_SESSION["id_utilisateur"])) {?>
        <center><a id="not" class="btn btn-outline-success">Noter cette recette</a></center>
        <div class="row justify-content-center align-items-center">
        <form style="display:none;" method="post" action="./recette.php?nomRecette=<?php echo $_COOKIE["nom_recette"] ?>">
        <div class="form-group">
         <label>Notation sur 5</label>
         <input type="number" min="0" max="5" name="notationChange" class="form-control" placeholder="notation sur 5">
         <input type="hidden" name="recette" value="<?php echo $_COOKIE["nom_recette"]?>">
        </div>
        <br/>
       
       <div class="form-group">
       <input type="submit" class="btn btn-primary"  onsubmit="<?php $controller=new recette_controller();$controller->editNotation();?>" value="Valider la notation">
        </div>
        </form>
      </div>
        <?php }?>
       <br/><br/><br/><br/><br/>

       <script>
      $("#not").click (function() {
      $("form").show();
      $("#not").hide();
    })
       </script>
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
    public function afficher_recette()
    {
        $this->entete();
        $this->menu();
        $this->contenu();
        $this->pieds();

        
    }
}

?>
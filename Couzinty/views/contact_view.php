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


session_start();
class contact_view
{
    public function entete()
    {
    ?>

        <head>
        <title>Contact</title>
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
       <div style="padding-right:300px;padding-left:300px;">
      <br/><br/><br/><br/>
      <center><h1 style="font-weight:bolder;">Contactez nous</h1></center>
      <br/><br/>
      <center><h4 style="color:gray;">Pour plus d'informations, veuillez nous contacter par téléphone, e-mail ou adresse du domicile.</h4></center>
      <br/><br/>
      <div style="float:left;display:inline-block;">
      <center><img  style="border:none; width:40px;height: 40px;" src="./img/ADRESS.png"><br/><br/>
      <h5 style="color:gray;">Adresse</h5>
      <p>Les Eucalyptus</p></center>
     </div>
      <div  style="margin-left:180px;display:inline-block;">
      <center><img style="border:none; width:40px;height: 40px;" src="./img/PHONE.png"><br/><br/>
      <h5 style="color:gray;">Téléphone</h5>
      <p>0664091515</p></center>
    </div>
      <div  style="float:right; display:inline-block;">
      <center><img style="border:none;width:40px;height: 40px;" src="./img/mail.png"><br/><br/>
      <h5 style="color:gray;">Email</h5>
      <p>js_zitouni@esi.dz</p></center>
    </div>
      <br/><br/><br/><br/>
      <br/><br/><br/><br/>
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
    public function afficher_contact()
    {
        $this->entete();
        $this->menu();
        $this->contenu();
        $this->pieds();

        
    }
}

?>
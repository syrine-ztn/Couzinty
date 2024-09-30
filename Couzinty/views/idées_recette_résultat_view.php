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

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/idées_recette_résultat_controller.php');
session_start(); 
class idées_recette_résultat_view
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
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet"/>
        <link href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css" rel="stylesheet"/>
        
   <br/><br/><br/>
   <div class="container-responsive">
    
   <table class="table-borderless" id="table" data-toggle="table" data-filter-control="true" data-escape="false" data-click-to-select="true" class="table">
	<thead style="float:left;">
		<tr>
         <th id="im" data-field="image"></th>
			<th data-field="nom" data-filter-control="input" data-sortable="true">Nom recette</th>
			<th data-visible="false" data-field="diff" data-filter-control="input" data-sortable="true">Difficulté</th>
			<th data-field="temps_prepa" data-filter-control="input" data-sortable="true">Temps de préparation</th>
            <th data-field="temps_repos" data-filter-control="input" data-sortable="true">Temps de repos</th>
            <th data-field="temps_cuisson" data-filter-control="input" data-sortable="true">Temps de cuisson</th>
            <th data-field="temps_total" data-filter-control="input" data-sortable="true">Temps total</th>
            <th data-visible="false" data-field="fete" data-filter-control="input" data-sortable="true">Fête</th>
            <th data-field="saison" data-filter-control="input" data-sortable="true">Saison</th>
			<th data-field="calories" data-filter-control="input" data-sortable="true">Nombre de calories</th>
            <th data-visible="false" data-field="mode_cuiss" data-filter-control="input" data-sortable="true">Mode de cuisson</th>
            <th data-field="categorie" data-filter-control="input" data-sortable="true">Catégorie</th>
            <?php if (isset($_SESSION["id_utilisateur"])) { ?>
         <th data-field="notation" data-filter-control="input" data-sortable="true">Notation</th>
         <?php } ?>
		</tr>
	</thead>
	<tbody>
   <?php        
                $recettes = $_SESSION["recettes"];
                foreach ($recettes as $row) {if (!empty($row['nom_recette'])) {?>
                
                <tr>   
                 <td><div class="card col-md-12 p-3">
    		     <div class="row ">
    			<div class="col-md-4">
                <?php echo $row["image"] ?>
    			</div>
    			<div class="col-md-8">
    				<div class="card-block">
    					<h4 class="card-title"><?php echo $row["nom_recette"] ?></h4>
                  <br/>
                  <p><b>Temps de préparation : </b><?php echo $row["temps_prepa"] ?></p>
                  <p><b>Temps de repos : </b><?php echo $row["temps_repos"] ?></p>
                  <p><b>Temps de cuisson : </b><?php echo $row["temps_cuisson"] ?></p>
                  <p><b>Temps total : </b><?php echo $row["temps_total"] ?></p>
                  <p><b>Saison : </b><?php echo $row["saison"] ?></p>
                  <p><b>Nombre de calories : </b><?php echo $row["calories"] ?></p>
                  <p><b>Catégorie : </b><?php echo $row["categorie_nom"] ?></p>
                  <?php if (isset($_SESSION["id_utilisateur"])) { ?>
                     <p><b>Notation: </b><?php echo $row["notation"] ?></p>
                  <?php } ?>

    					<a class="btn btn-primary" href="./recette.php?nomRecette=<?php echo $row["nom_recette"] ?>">Détails</a>
    				</div>
    			    </div>
    		        </div>
                 	</div></td>
                        
                        <td id="nom"><input value="<?php echo $row["nom_recette"] ?>" /></td>
                        <td id="diff"><input value="<?php echo $row["difficulte"] ?>" /></td>
                        <td id="prep"><input value="<?php echo $row["temps_prepa"] ?>" /></td>
                        <td id="repos"><input value="<?php echo $row["temps_repos"] ?>" /></td>
                        <td id="cui"><input value="<?php echo $row["temps_cuisson"] ?>" /></td>
                        <td id="tot"><input value="<?php echo $row["temps_total"] ?>" /></td>
                        <td id="fete"><input value="<?php echo $row["fete"] ?>" /></td>
                        <td id="sais"><input value="<?php echo $row["saison"] ?>" /></td>
                        <td id="cal"><input value="<?php echo $row["calories"] ?>" /></td>
                        <td id="mod"><input value="<?php echo $row["mode_cuisson"] ?>" /></td>
                        <td id="cat"><input value="<?php echo $row["categorie_nom"] ?>" /></td>
                        <?php if (isset($_SESSION["id_utilisateur"])) { ?>
                           <td id="not"><input value="<?php echo $row["notation"] ?>" /></td>
                        <?php } ?>
                       
                       
                    <tr>
                    <?php }
                }
                ?>
              </tbody>
             </table>
             </div>


   <script>
    $("tr:nth-child(odd)").next().remove();
    $("input").hide();

   </script>
   <style>
      div.col-md-4 {
         height: 400px;
      }
      div.col-md-4 img {
         width: 100%;
         height:100%;
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
    public function afficher_idées_recette_résultat()
    {
        $this->entete();
        $this->menu();
        $this->contenu();
        $this->pieds();

        
    }
}

?>
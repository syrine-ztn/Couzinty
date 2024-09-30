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

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/gestion_recettes_controller.php');

class gestion_recettes_view
{
    public function entete()
    {
    ?>

        <head>
        <title>Gestion des recettes</title>
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
   <center><h1>Recettes validées</h1></center>
   <br/><br/>
   <button class="btn-light" id="modifier">Activer la modification</button>
   <button class="btn-light" id="supprimer">Activer la suppression</button>
   <br/><br/>
   <table id="table" class="table-bordered" data-toggle="table" data-filter-control="true" data-escape="false" class="table">
	<thead>
		<tr>
         <th data-field="id" data-filter-control="select" data-sortable="true">Id</th>
         <th data-field="image">Image</th>
			<th data-field="nom" data-filter-control="input" data-sortable="true">Nom recette</th>
         <th data-field="desc" data-sortable="true">Description</th>
			<th data-field="diff" data-filter-control="input" data-sortable="true">Difficulté</th>
			<th data-field="temps_prepa" data-filter-control="input" data-sortable="true">Temps de préparation</th>
         <th data-field="temps_repos" data-filter-control="input" data-sortable="true">Temps de repos</th>
         <th data-field="temps_cuisson" data-filter-control="input" data-sortable="true">Temps de cuisson</th>
         <th data-field="temps_total" data-filter-control="input" data-sortable="true">Temps total</th>
         <th data-field="healthy" data-filter-control="select" data-sortable="true">Healthy</th>
			<th data-field="calories" data-filter-control="input" data-sortable="true">Nombre de calories</th>
         <th data-field="mode_cuisson" data-filter-control="input" data-sortable="true">Mode cuisson</th>
         <th data-field="categorie" data-filter-control="input" data-sortable="true">Catégorie</th>
         <th data-field="saison" data-filter-control="input" data-sortable="true">Saison</th>
         <th data-field="fete" data-filter-control="input" data-sortable="true">Fête</th>
         <th data-field="notation" data-filter-control="input" data-sortable="true">Notation</th>
     
		</tr>
	</thead>
	<tbody id="tbody1">
    <?php      
                $cpt=0;
                $controller = new gestion_recettes_controller();
                $resultat = $controller->getRecettes();
                foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {?>
               
                    <tr>
                        <td><?php echo $cpt ?></td>
                        <td><?php echo $row["image"] ?></td>
                        <td><?php echo $row["nom_recette"] ?></td>
                        <td><?php echo $row["description"] ?></td>
                        <td><?php echo $row["difficulte"] ?></td>
                        <td><?php echo $row["temps_prepa"] ?></td>
                        <td><?php echo $row["temps_repos"] ?></td>
                        <td><?php echo $row["temps_cuisson"] ?></td>
                        <td><?php echo $row["temps_total"] ?></td>
                        <td><?php echo $row["healthy"] ?></td>
                        <td><?php echo $row["calories"] ?></td>
                        <td><?php echo $row["mode_cuisson"] ?></td>
                        <td><?php echo $row["categorie_nom"] ?></td>
                        <td><?php echo $row["saison"] ?></td>
                        <td><?php echo $row["fete"] ?></td>
                        <td><?php echo $row["notation"] ?></td>
                       
                     <tr>
                    <?php }
                }
                ?>
	</tbody>
</table>


<table id="table2" class="table-bordered" style="display:none;" data-filter-control="true" data-escape="false" class="table">
	<thead>
		<tr>
         <th data-field="id" data-filter-control="select" data-sortable="true">Id</th>
         <th data-field="image">Image</th>
			<th data-field="nom" data-filter-control="input" data-sortable="true">Nom recette</th>
         <th data-field="desc" data-sortable="true">Description</th>
			<th data-field="diff" data-filter-control="input" data-sortable="true">Difficulté</th>
			<th data-field="temps_prepa" data-filter-control="input" data-sortable="true">Temps de préparation</th>
         <th data-field="temps_repos" data-filter-control="input" data-sortable="true">Temps de repos</th>
         <th data-field="temps_cuisson" data-filter-control="input" data-sortable="true">Temps de cuisson</th>
         <th data-field="temps_total" data-filter-control="input" data-sortable="true">Temps total</th>
         <th data-field="healthy" data-filter-control="select" data-sortable="true">Healthy</th>
			<th data-field="calories" data-filter-control="input" data-sortable="true">Nombre de calories</th>
         <th data-field="mode_cuisson" data-filter-control="input" data-sortable="true">Mode cuisson</th>
         <th data-field="categorie" data-filter-control="input" data-sortable="true">Catégorie</th>
         <th data-field="saison" data-filter-control="input" data-sortable="true">Saison</th>
         <th data-field="fete" data-filter-control="input" data-sortable="true">Fête</th>
         <th data-field="notation" data-filter-control="input" data-sortable="true">Notation</th>
       
         <th id="mod">Modifier</th>
         <th id="supp">Supprimer</th>
		</tr>
	</thead>
	<tbody>
    <?php      
                $cpt=0;
                $controller = new gestion_recettes_controller();
                $resultat = $controller->getRecettes();
                foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {?>
               
                    <tr>
                    <form method="POST" action="<?php $controller=new gestion_recettes_controller();$controller->editRecette();?>">
                        <td><?php echo $cpt ?></td>
                        <td><?php echo $row["image"] ?></td>
                        <td><input type="text" name="nom_recette" style="text-align: center; border: none;" value="<?php echo $row["nom_recette"] ?>"></td>
                        <td><input type="text" name="description" style="text-align: center; border: none;" value="<?php echo $row["description"] ?>"></td>
                        <td><input type="text" name="difficulte" style="text-align: center; border: none;" value="<?php echo $row["difficulte"] ?>"></td>
                        <td><input type="text" name="temps_prepa" style="text-align: center; border: none;" value="<?php echo $row["temps_prepa"] ?>"></td>
                        <td><input type="text" name="temps_repos" style="text-align: center; border: none;" value="<?php echo $row["temps_repos"] ?>"></td>
                        <td><input type="text" name="temps_cuisson" style="text-align: center; border: none;" value="<?php echo $row["temps_cuisson"] ?>"></td>
                        <td><input type="text" name="temps_total" style="text-align: center; border: none;" value="<?php echo $row["temps_total"] ?>"></td>
                        <td><input type="text" name="healthy" style="text-align: center; border: none;" value="<?php echo $row["healthy"] ?>"></td>
                        <td><input type="number" min="0" name="calories" style="text-align: center; border: none;" value="<?php echo $row["calories"] ?>"></td>
                        <td><input type="text" name="mode_cuisson" style="text-align: center; border: none;" value="<?php echo $row["mode_cuisson"] ?>"></td>
                        <td><input type="text" name="categorie_nom" style="text-align: center; border: none;" value="<?php echo $row["categorie_nom"] ?>"></td>
                        <td><input type="text" name="saison" style="text-align: center; border: none;" value="<?php echo $row["saison"] ?>"></td>
                        <td><input type="text" name="fete" style="text-align: center; border: none;" value="<?php echo $row["fete"] ?>"></td>
                        <td><input type="number" min="0" name="notation" style="text-align: center; border: none;" value="<?php echo $row["notation"] ?>"></td>
                       
                        <td class="modCell"><input type="submit" class="btn-light" name="editRecette" onsubmit="<?php $controller=new gestion_recettes_controller();$controller->editRecette();?>" value="Modifier"/></td>
                        <td class="suppCell"><input type="submit" class="btn-light" name="deleteRecette" onsubmit="<?php $controller=new gestion_recettes_controller();$controller->deleteRecette();?>" value="Supprimer"/></td>
                     </form>
                     <tr>
                    <?php }
                }
                ?>
	</tbody>
</table>
<br/><br/><br/><br/>
<center><h1 id="nonValidees">Recettes non validées</h1></center>
<br/><br/>
<table id="table3" class="table-bordered" data-escape="false" class="table">
	<thead>
		<tr>
         <th data-field="id" data-filter-control="select" data-sortable="true">Id</th>
         <th data-field="image">Image</th>
			<th data-field="nom" data-filter-control="input" data-sortable="true">Nom recette</th>
         <th data-field="desc" data-sortable="true">Description</th>
			<th data-field="diff" data-filter-control="input" data-sortable="true">Difficulté</th>
			<th data-field="temps_prepa" data-filter-control="input" data-sortable="true">Temps de préparation</th>
         <th data-field="temps_repos" data-filter-control="input" data-sortable="true">Temps de repos</th>
         <th data-field="temps_cuisson" data-filter-control="input" data-sortable="true">Temps de cuisson</th>
         <th data-field="temps_total" data-filter-control="input" data-sortable="true">Temps total</th>
         <th data-field="healthy" data-filter-control="select" data-sortable="true">Healthy</th>
			<th data-field="calories" data-filter-control="input" data-sortable="true">Nombre de calories</th>
         <th data-field="mode_cuisson" data-filter-control="input" data-sortable="true">Mode cuisson</th>
         <th data-field="categorie" data-filter-control="input" data-sortable="true">Catégorie</th>
         <th data-field="saison" data-filter-control="input" data-sortable="true">Saison</th>
         <th data-field="fete" data-filter-control="input" data-sortable="true">Fête</th>
         <th data-field="notation" data-filter-control="input" data-sortable="true">Notation</th>
         
         <th>Valider</th>
		</tr>
	</thead>
	<tbody>
    <?php      
                $cpt=0;
                $controller = new gestion_recettes_controller();
                $resultat = $controller->getRecettesNonValidees();
                foreach ($resultat as $row) { $cpt++; if (!empty($row['nom_recette'])) {?>
               
                    <tr>
                    <form method="POST" action="<?php $controller=new gestion_recettes_controller();$controller->validerRecette();?>">
                        <td><?php echo $cpt ?></td>
                        <td><?php echo $row["image"] ?></td>
                        <td><input type="text" name="nom_recette" style="text-align: center; border: none;" value="<?php echo $row["nom_recette"] ?>"></td>
                        <td><input type="text" name="description" style="text-align: center; border: none;" value="<?php echo $row["description"] ?>"></td>
                        <td><input type="text" name="difficulte" style="text-align: center; border: none;" value="<?php echo $row["difficulte"] ?>"></td>
                        <td><input type="text" name="temps_prepa" style="text-align: center; border: none;" value="<?php echo $row["temps_prepa"] ?>"></td>
                        <td><input type="text" name="temps_repos" style="text-align: center; border: none;" value="<?php echo $row["temps_repos"] ?>"></td>
                        <td><input type="text" name="temps_cuisson" style="text-align: center; border: none;" value="<?php echo $row["temps_cuisson"] ?>"></td>
                        <td><input type="text" name="temps_total" style="text-align: center; border: none;" value="<?php echo $row["temps_total"] ?>"></td>
                        <td><input type="text" name="healthy" style="text-align: center; border: none;" value="<?php echo $row["healthy"] ?>"></td>
                        <td><input type="number" min="0" name="calories" style="text-align: center; border: none;" value="<?php echo $row["calories"] ?>"></td>
                        <td><input type="text" name="mode_cuisson" style="text-align: center; border: none;" value="<?php echo $row["mode_cuisson"] ?>"></td>
                        <td><input type="text" name="categorie_nom" style="text-align: center; border: none;" value="<?php echo $row["categorie_nom"] ?>"></td>
                        <td><input type="text" name="saison" style="text-align: center; border: none;" value="<?php echo $row["saison"] ?>"></td>
                        <td><input type="text" name="fete" style="text-align: center; border: none;" value="<?php echo $row["fete"] ?>"></td>
                        <td><input type="number" min="0" name="notation" style="text-align: center; border: none;" value="<?php echo $row["notation"] ?>"></td>
                        
                        <td class="validerCell"><input type="submit" class="btn-light" name="validerRecette" onsubmit="<?php $controller=new gestion_recettes_controller();$controller->validerRecette();?>" value="Valider"/></td>
                     </form>
                     <tr>
                    <?php }
                }
                ?>
	</tbody>
</table>
<br/><br/><br/><br/>
<center><a class="btn btn-primary" href="./ajouter_recette_utilisateur.php">Ajouter une nouvelle recette</a></center>
<br/><br/><br/><br/>
</div>

   <script>
    $("tr:nth-child(odd)").next().remove();
 
      $("#modifier").click (function() {
      $("#table").remove();
      $(".bootstrap-table").remove();
      $(".clearfix").remove();
      $("#table2").css("margin","0");
      $("#table2").show();
      $("#nonValidees").hide();
      $("#supp").hide();
      $(".suppCell").hide();
    })

    $("#supprimer").click (function() {
      $("#table").remove();
      $(".bootstrap-table").remove();
      $(".clearfix").remove();
      $("#table2").css("margin","0");
      $("#table2").show();
      $("#nonValidees").hide();
      $("#mod").hide();
      $(".modCell").hide();
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
    public function afficher_gestion_recettes()
    {
        $this->entete();
        $this->menu();
        $this->contenu();
        $this->pieds();

        
    }
}

?>
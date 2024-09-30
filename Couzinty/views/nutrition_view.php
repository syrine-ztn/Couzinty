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

require_once($_SERVER['DOCUMENT_ROOT'].'./projet_tdw/controllers/nutrition_controller.php');
session_start();
class nutrition_view
{
    public function entete()
    {
    ?>

        <head>
        <title>Nutrition</title>
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
   <h4>&nbsp&nbsp&nbsp&nbspVoici les différents aliments avec leurs informations nutritionnelles et leurs saisons :<br/><br/>&nbsp&nbsp&nbsp(Mesures par 100g)</h4>
   <br/><br/><br/>
   <table id="table" class="table-bordered" data-toggle="table" data-filter-control="true" data-escape="false" class="table">
	<thead>
		<tr>
         <th data-field="id" data-filter-control="select" data-sortable="true">Id</th>
			<th data-field="Aliment" data-filter-control="input" data-sortable="true">Aliment</th>
			<th data-field="Calories" data-filter-control="input" data-sortable="true">Calories</th>
			<th data-field="Protéines" data-filter-control="input" data-sortable="true">Protéines</th>
         <th data-field="Glucides" data-filter-control="input" data-sortable="true">Glucides</th>
         <th data-field="Lipides" data-filter-control="input" data-sortable="true">Lipides</th>
         <th data-field="IG" data-filter-control="input" data-sortable="true">IG</th>
         <th data-field="saison" data-filter-control="input" data-sortable="true">Saison</th>
         <th data-field="healthy" data-filter-control="input" data-sortable="true">Healthy</th>
		</tr>
	</thead>
	<tbody id="tbody1">
    <?php      
                $cpt=0;
                $controller = new nutrition_controller();
                $resultat = $controller->getNutrition();
                foreach ($resultat as $row) { $cpt++; if (!empty($row['Aliment'])) {?>
               
                    <tr>
                        <td><?php echo $cpt ?></td>
                        <td><?php echo $row["Aliment"] ?></td>
                        <td><?php echo $row["calories"] ?></td>
                        <td><?php echo $row["Protéines"] ?></td>
                        <td><?php echo $row["Glucides"] ?></td>
                        <td><?php echo $row["Lipides"] ?></td>
                        <td><?php echo $row["IG"] ?></td>
                        <td><?php echo $row["saison"] ?></td>
                        <td><?php echo $row["healthy"] ?></td>
                     <tr>
                    <?php }
                }
                ?>
	</tbody>
</table>
</div>

<script>
    $("tr:nth-child(odd)").next().remove();
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
    public function afficher_nutrition()
    {
        $this->entete();
        $this->menu();
        $this->contenu();
        $this->pieds();

        
    }
}

?>
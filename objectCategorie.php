<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Catégories d'objets ZEP </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    </head>

    <body>
      <div class="container-fluid">
        <div class="row">

      <?php
      $getCategorie = $_GET["categorie"];
      $reponse =  $bdd->query("SELECT DISTINCT categorie,image FROM titeuf where categorie='".$getCategorie."'");
      while ($donnees = $reponse->fetch()){
        $categorie = $donnees["categorie"];
      ?>
         <div class="col-xl-3 col-md-4 col-sm-6 mb-4">
            <div class="card" style="height:350px;">
              <div class="card-body" style="padding:0;margin-right: -48px;">
                <div class="mr-5"><img class="card-img-top" src="../Images/<?php echo $donnees["image"]; ?>" alt="Image not found" style="height:300px;"></div>
              </div>
              <div class="card-footer " >
                <span class="float-left"><?php echo $categorie; ?></span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
              </div>
            </div>
          </div>
      <?php
      $img = "";
    } ?>
   </div>
 </div>
    </body>
</html>

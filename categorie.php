<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Titre</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>

    <body>
      <div class="container-fluid">
        <div class="row">
         <div class="card-deck">
      <?php
      $reponse =  $bdd->query("SELECT DISTINCT categorie FROM titeuf");
      while ($donnees = $reponse->fetch()){
        $categorie = $donnees["categorie"];
      ?>

     <div class="card">
       <img class="card-img-top" src="//placehold.it/720x350" alt="Card image cap">
       <div class="card-block">
         <h4 class="card-title">Card title</h4>
         <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
       </div>
     </div>
      <?php } ?>
    </div>
   </div>
 </div>
    </body>
</html>

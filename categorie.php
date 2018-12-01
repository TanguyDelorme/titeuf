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
      <?php
      $img="";
      $decoration = "../Images/Décoration_Sticker Titeuf saut victoire(185)";
      $affiche = "../Images/Affiche_BD-Fil(125)";
      $livre = "../Images/Livre_Guide du zizi sexuel";
      $etiquette = "../Images/Etiquette_Chasselas nucléaire3xOui";
      $figurine = "../Images/Figurine_Plastoy baffe(208)";
      $horlogerie="../Images/Horlogerie_montre Jaeger 2(236)";
      $boite = "../Images/Boite_petite bleue 3euros(141)";
      $carte= "../Images/Carte_2 Encore occupé raccroche(87)";
      $musique = "../Images/Musique_CD Zep'n'Greg1-50exet 30HC";
      $original = "../Images/Original_Planche titeuf N°2 HappyBirthday3 vente Millon du 08122013-2";
      $portofolio = "../Images/Portofolio_Portofolio Swof Marini";
      $pub = "../Images/Pub-PLV_Flyer Raso-poutine et Bicyclesshop";
      $puzzle = "../Images/Puzzle_Jeux Puzzle BD Club Genève(241)";
      $scolaire = "../Images/Scolaire_Memo clip Titeuf et Nadia 10euros";
      $serigraphie = "../Images/Sérigraphie_la chambre de fille Catawiki";
      $textile = "../Images/Textile_Montreux Jazz Festival - T.-shirt officiel 2005-49FRChuisse1, noir";
      $vaisselle = "../Images/Vaisselle_Carafe Eau de Genève 360°-3 16,5euros 200312";
      $cat = array(
        array("Décoration",$decoration),
        array("Livre",$livre),
        array("Etiquette",$etiquette),
        array("Figurine",$figurine),
        array("Horlogerie",$horlogerie),
        array("Boite",$boite),
        array("Carte",$carte),
        array("Musique",$musique),
        array("Original",$original),
        array("Portofolio",$portofolio),
        array("Pub-PLV",$pub),
        array("Puzzle",$puzzle),
        array("Scolaire",$scolaire),
        array("Sérigraphie/Litho",$serigraphie),
        array("Textile",$textile),
        array("Vaisselle",$vaisselle),
        array("Affiche",$affiche)
      );
       ?>

      <div class="container-fluid">
        <div class="row">

      <?php
      $reponse =  $bdd->query("SELECT DISTINCT categorie FROM titeuf ORDER BY categorie");
      while ($donnees = $reponse->fetch()){
        $categorie = $donnees["categorie"];
        $row=0;
        for ($row; $row < 17; $row++) {
          if ($cat[$row][0] == $categorie) {
            $img = $cat[$row][1];
          }
        }
      ?>
         <div class="col-xl-3 col-md-4 col-sm-6 mb-4">
            <div class="card" style="height:350px;">
              <div class="card-body" style="padding:0;margin-right: -48px;">
                <div class="mr-5"><img class="card-img-top" src="<?php echo $img; ?>" alt="Image not found" style="height:300px;"></div>
              </div>
              <a class="card-footer " href="objectCategorie.php?categorie=<?php echo $categorie; ?>" >
                <span class="float-left"><?php echo $categorie; ?></span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
            </div>
          </div>
      <?php
      $img = "";
    } ?>
   </div>
 </div>
    </body>
</html>

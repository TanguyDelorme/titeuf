<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="dataTables/jquery.dataTables.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <script src="jquery/jquery.js"></script>
        <script type="text/javascript" src="dataTables/jquery.dataTables.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <script type="text/javascript" src="accueil.js"></script>
        <title>Titre</title>
    </head>

    <body>
      <a href="comicsForm.php"><button>Formulaire</button></a>
      <table id="example" class="display table-bordered " style="width:100%">
               <thead>
                   <tr>
                        <th>ID</th>
                        <th>Catégorie</th>
                        <th>Descriptif</th>
                        <th>Commentaire</th>
                        <th>Modifier</th>
                   </tr>

               </thead>
               <tfoot>
                   <tr>
                     <th>ID</th>
                     <th>Catégorie</th>
                     <th>Descriptif</th>
                     <th>Commentaire</th>
                     <th>Modifier</th>
                  </tr>
               </tfoot>

       </table>
       <style>
       .dataTables_wrapper {
         margin-top : 4%;
         width : 80%;
         margin-left : 10%;
         margin-bottom : 2%;
       }
       </style>
       <?php
       $reponse =  $bdd->query("SELECT id, seriesTitre, numero, albumTitre, categorie, idDessinateur,
       idScenariste, idColoriste, prixVente, editeur, editionOriginale, image, descriptif, reference,
       depotLegal, dateSortie, dateImpression, commentaire, image2, image3, image4, nbPages, matiere,
       certificat, aspect, signe, numerote, packaging, hauteur, horsCommerce, largeur, profondeur, cote,
       dateModifCote, cotePerso, origineCote FROM titeuf");
       while ($donnees = $reponse->fetch()){
         $id = $donnees["id"];
         $seriesTitre = $donnees["seriesTitre"];
         $numero = $donnees["numero"];
         $albumTitre = $donnees["albumTitre"];
         $categorie = $donnees["categorie"];
         $idDessinateur = $donnees["idDessinateur"];
         $idScenariste = $donnees["idScenariste"];
         $idColoriste = $donnees["idColoriste"];
         $prixVente = $donnees["prixVente"];
         $editeur = $donnees["editeur"];
         $editionOriginale = $donnees["editionOriginale"];
         $image = $donnees["image"];
         $descriptif = $donnees["descriptif"];
         $reference = $donnees["reference"];
         $depotLegal = $donnees["depotLegal"];
         $dateSortie = $donnees["dateSortie"];
         $dateImpression = $donnees["dateImpression"];
         $commentaire = $donnees["commentaire"];
         $image2 = $donnees["image2"];
         $image3 = $donnees["image3"];
         $image4 = $donnees["image4"];
         $nbPages = $donnees["nbPages"];
         $matiere = $donnees["matiere"];
         $certificat = $donnees["certificat"];
         $aspect = $donnees["aspect"];
         $signe = $donnees["signe"];
         $numerote = $donnees["numerote"];
         $packaging = $donnees["packaging"];
         $hauteur = $donnees["hauteur"];
         $horsCommerce = $donnees["horsCommerce"];
         $largeur = $donnees["largeur"];
         $profondeur = $donnees["profondeur"];
         $cote = $donnees["cote"];
         $dateModifCote = $donnees["dateModifCote"];
         $cotePerso = $donnees["cotePerso"];
         $origineCote = $donnees["origineCote"];
         ?>
       <div id="add<?php echo $id; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <!-- Modal content-->
                        <div class="modal-content">
                                <div class="modal-body">
                                  <h2 class="text-secondary mb-0">Caractérisiques de l'ojet :</h2>
                                  <p>ID : <?php echo $id; ?></p>
                                  <?php if(!empty($image)) echo "<p>Nom image : ".$image."</p>"; ?>
                                  <?php if(!empty($image2)) echo "<p>Nom image 2 : ".$image2."</p>"; ?>
                                  <?php if(!empty($image3)) echo "<p>Nom image 3 : ".$image3."</p>"; ?>
                                  <?php if(!empty($image4)) echo "<p>Nom image 4 : ".$image4."</p>"; ?>
                                  <?php if(!empty($seriesTitre)) echo "<p>Titre de la série : ".$seriesTitre."</p>"; ?>
                                  <?php if(!empty($numero)) echo "<p>Numéro : ".$numero."</p>"; ?>
                                  <?php if(!empty($albumTitre)) echo "<p>Titre de l'album : ".$albumTitre."</p>"; ?>
                                  <?php if(!empty($categorie)) echo "<p>Catégorie : ".$categorie."</p>"; ?>
                                  <?php if(!empty($idDessinateur)) echo "<p>ID du dessinateur : ".$idDessinateur."</p>"; ?>
                                  <?php if(!empty($idScenariste)) echo "<p>ID du scénariste : ".$idScenariste."</p>"; ?>
                                  <?php if(!empty($idColoriste)) echo "<p>ID du coloriste : ".$idColoriste."</p>"; ?>
                                  <?php if(!empty($prixVente)) echo "<p>Prix de vente : ".$prixVente."</p>"; ?>
                                  <?php if(!empty($editeur)) echo "<p>Editeur : ".$editeur."</p>"; ?>
                                  <?php if($editionOriginale != "false") echo "<p>Edition originale : ".$editionOriginale."</p>"; ?>
                                  <?php if(!empty($descriptif)) echo "<p>Descriptif : ".$descriptif."</p>"; ?>
                                  <?php if(!empty($reference)) echo "<p>Référence : ".$reference."</p>"; ?>
                                  <?php if($depotLegal != NULL) echo "<p>Dépot légal : ".$depotLegal."</p>"; ?>
                                  <?php if($dateSortie != NULL) echo "<p>Date de sortie : ".$dateSortie."</p>"; ?>
                                  <?php if($dateImpression != NULL) echo "<p>Date d'impression : ".$dateImpression."</p>"; ?>
                                  <?php if(!empty($commentaire)) echo "<p>Commentaire : ".$commentaire."</p>"; ?>
                                  <?php if(!empty($nbPages)) echo "<p>Nombre de pages : ".$nbPages."</p>"; ?>
                                  <?php if(!empty($matiere)) echo "<p>Matière : ".$matiere."</p>"; ?>
                                  <?php if($certificat!= "false") echo "<p>Certificat : ".$certificat."</p>"; ?>
                                  <?php if(!empty($aspect)) echo "<p>Aspect : ".$aspect."</p>"; ?>
                                  <?php if($signe != "false") echo "<p>Signe : ".$signe."</p>"; ?>
                                  <?php if($numerote != "false") echo "<p>Numeroté : ".$numerote."</p>"; ?>
                                  <?php if(!empty($packaging)) echo "<p>Packaging : ".$packaging."</p>"; ?>
                                  <?php if($horsCommerce != "false") echo "<p>Hors commerce : ".$horsCommerce."</p>"; ?>
                                  <?php if(!empty($hauteur)) echo "<p>Hauteur : ".$hauteur."</p>"; ?>
                                  <?php if(!empty($largeur)) echo "<p>Largeur : ".$largeur."</p>"; ?>
                                  <?php if(!empty($profondeur)) echo "<p>Profondeur : ".$profondeur."</p>"; ?>
                                  <?php if(!empty($cote)) echo "<p>Cote : ".$cote."</p>"; ?>
                                  <?php if($dateModifCote != NULL) echo "<p>Date de modification de la cote : ".$dateModifCote."</p>"; ?>
                                  <?php if(!empty($cotePerso)) echo "<p>Cote personnelle : ".$cotePerso."</p>"; ?>
                                  <?php if(!empty($origineCote)) echo "<p>Origine de la cote : ".$origineCote."</p>"; ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span>Fermer</button>
                                </div>
                        </div>
                    </div>
                </div>
              <?php } ?>
    </body>
</html>

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
                        <th>Image objet</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                   </tr>

               </thead>
               <tfoot>
                   <tr>
                     <th>ID</th>
                     <th>Catégorie</th>
                     <th>Descriptif</th>
                     <th>Commentaire</th>
                     <th>Image objet</th>
                     <th>Modifier</th>
                     <th>Supprimer</th>
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
       <div id="update<?php echo $id; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <!-- Modal content-->
                        <div class="modal-content">
                                <div class="modal-body">
                                  <h2 class="text-secondary mb-0">Caractérisiques de l'ojet :</h2>
                                  <form action="updateForm.php" method="post">
                                    <label>Nom image : </label><input value="<?php if(!empty($image)){echo $image;}else{echo "";} ?>" type='file' name='image' class='form-control-file'>
                                    <label>Nom image 2 : </label><input value="<?php if(!empty($image2)) {echo $image2;}else{echo "";} ?>" type='file' name='image2' class='form-control-file'>
                                    <label>Nom image 3 : </label><input value="<?php if(!empty($image3)) {echo $image3;}else{echo "";} ?>" type='file' name='image3' class='form-control-file'>
                                    <label>Nom image 4 : </label><input value="<?php if(!empty($image4)) {echo $image4;}else{echo "";} ?>" type='file' name='image4' class='form-control-file'>
                                    <label>Titre de la série : </label><input value="<?php if(!empty($seriesTitre)) {echo $seriesTitre;}else{echo "";} ?>" type='text' name='seriesTitre' class='form-control'>
                                    <label>Numéro : </label><input value="<?php if(!empty($numero)) {echo $numero;}else{echo 0;} ?>" type='number' name='numero' class='form-control'>
                                    <label>Titre de l'album : </label><input value="<?php if(!empty($albumTitre)) {echo $albumTitre;}else{echo "";} ?>" type='text' name='albumTitre' class='form-control'>
                                    <label>Catégorie : </label>
                                    <select  class="form-control" name="categorie">
                                      <?php if($categorie == "")echo "<option disabled selected>Choisissez</option>" ?>
                                      <option <?php if($categorie == "Affiche")echo "selected"; ?>>Affiche</option>
                                      <option <?php if($categorie == "Blog")echo "selected"; ?>>Blog</option>
                                      <option <?php if($categorie == "Boite")echo "selected"; ?>>Boite</option>
                                      <option <?php if($categorie == "Carte")echo "selected"; ?>>Carte</option>
                                      <option <?php if($categorie == "Décoration")echo "selected"; ?>>Décoration</option>
                                      <option <?php if($categorie == "Divers")echo "selected"; ?>>Divers</option>
                                      <option <?php if($categorie == "Doc")echo "selected"; ?>>Doc</option>
                                      <option <?php if($categorie == "Etiquette")echo "selected"; ?>>Etiquette</option>
                                      <option <?php if($categorie == "Exlibris")echo "selected"; ?>>Exlibris</option>
                                      <option <?php if($categorie == "Figurine")echo "selected"; ?>>Figurine</option>
                                      <option <?php if($categorie == "Horlogerie")echo "selected"; ?>>Horlogerie</option>
                                      <option <?php if($categorie == "Invitation")echo "selected"; ?>>Invitation</option>
                                      <option <?php if($categorie == "Jeux/Jouets")echo "selected"; ?>>Jeux/Jouets</option>
                                      <option <?php if($categorie == "Livre")echo "selected"; ?>>Livre</option>
                                      <option <?php if($categorie == "Musique")echo "selected"; ?>>Musique</option>
                                      <option <?php if($categorie == "Original")echo "selected"; ?>>Original</option>
                                      <option <?php if($categorie == "Portofolio")echo "selected"; ?>>Portofolio</option>
                                      <option <?php if($categorie == "Pub-PLV")echo "selected"; ?>>Pub-PLV</option>
                                      <option <?php if($categorie == "Puzzle")echo "selected"; ?>>Puzzle</option>
                                      <option <?php if($categorie == "Scolaire")echo "selected"; ?>>Scolaire</option>
                                      <option <?php if($categorie == "Sérigraphie/Litho")echo "selected"; ?>>Sérigraphie/Litho</option>
                                      <option <?php if($categorie == "Textile")echo "selected"; ?>>Textile</option>
                                      <option <?php if($categorie == "Vaisselle")echo "selected"; ?>>Vaisselle</option>
                                    </select>
                                    <label>ID du dessinateur : </label>
                                    <select class="form-control" name="idDessinateur">
                                      <?php if($idDessinateur == "")echo "<option disabled selected>Choisissez</option>" ?>
                                      <option <?php if($idDessinateur == "Zep")echo "selected"; ?>>Zep</option>
                                      <option <?php if($idDessinateur == "Vince")echo "selected"; ?>>Vince</option>
                                      <option <?php if($idDessinateur == "Chauzy")echo "selected"; ?>>Chauzy</option>
                                      <option <?php if($idDessinateur == "Tebo")echo "selected"; ?>>Tebo</option>
                                    </select>
                                    <label>ID du scénariste : </label>
                                    <select class="form-control" name="idScenariste">
                                      <?php if($idScenariste == "")echo "<option disabled selected>Choisissez</option>" ?>
                                      <option <?php if($idScenariste == "Zep")echo "selected"; ?>>Zep</option>
                                      <option <?php if($idScenariste == "Vince")echo "selected"; ?>>Vince</option>
                                      <option <?php if($idScenariste == "Chauzy")echo "selected"; ?>>Chauzy</option>
                                      <option <?php if($idScenariste == "Tebo")echo "selected"; ?>>Tebo</option>
                                    </select>
                                    <label>ID du coloriste : </label>
                                    <select class="form-control" name="idColoriste">
                                      <?php if($idColoriste == "")echo "<option disabled selected>Choisissez</option>" ?>
                                      <option <?php if($idColoriste == "Zep")echo "selected"; ?>>Zep</option>
                                      <option <?php if($idColoriste == "Vince")echo "selected"; ?>>Vince</option>
                                      <option <?php if($idColoriste == "Chauzy")echo "selected"; ?>>Chauzy</option>
                                      <option <?php if($idColoriste == "Tebo")echo "selected"; ?>>Tebo</option>
                                    </select>
                                    <label>Prix de vente : </label><input value="<?php if(!empty($prixVente)) {echo $prixVente;}else{echo 0;} ?>" type='number' name='prixVente' class='form-control'>
                                    <label>Editeur : </label>
                                    <select class="form-control" name="editeur">
                                      <?php if($editeur == "")echo "<option disabled selected>Choisissez</option>" ?>
                                      <option <?php if($editeur == "Atoz")echo "selected"; ?>>Atoz</option>
                                      <option <?php if($editeur == "B.D. Club de Genève")echo "selected"; ?>>B.D. Club de Genève</option>
                                      <option <?php if($editeur == "Christian Desbois Editions")echo "selected"; ?>>Christian Desbois Editions</option>
                                      <option <?php if($editeur == "Démons et Merveilles")echo "selected"; ?>>Démons et Merveilles</option>
                                      <option <?php if($editeur == "Drozophile")echo "selected"; ?>>Drozophile</option>
                                      <option <?php if($editeur == "Dupuis")echo "selected"; ?>>Dupuis</option>
                                      <option <?php if($editeur == "Fest'Off")echo "selected"; ?>>Fest'Off</option>
                                      <option <?php if($editeur == "Fondation Suisse d'Aide aux Victimes de Mines Antipersonnel")echo "selected"; ?>>Fondation Suisse d'Aide aux Victimes de Mines Antipersonnel</option>
                                      <option <?php if($editeur == "Glénat")echo "selected"; ?>>Glénat</option>
                                      <option <?php if($editeur == "GSSA")echo "selected"; ?>>GSSA</option>
                                      <option <?php if($editeur == "Hallmark")echo "selected"; ?>>Hallmark</option>
                                      <option <?php if($editeur == "Hallmark - La Carterie")echo "selected"; ?>>Hallmark - La Carterie</option>
                                      <option <?php if($editeur == "Houbba")echo "selected"; ?>>Houbba</option>
                                      <option <?php if($editeur == "Kesselring")echo "selected"; ?>>Kesselring</option>
                                      <option <?php if($editeur == "Leblon-Delienne")echo "selected"; ?>>Leblon-Delienne</option>
                                      <option <?php if($editeur == "L'illustré")echo "selected"; ?>>L'illustré</option>
                                      <option <?php if($editeur == "MB")echo "selected"; ?>>MB</option>
                                      <option <?php if($editeur == "Muttpop")echo "selected"; ?>>Muttpop</option>
                                      <option <?php if($editeur == "Paléo Festival de Nyon")echo "selected"; ?>>Paléo Festival de Nyon</option>
                                      <option <?php if($editeur == "Plastoy")echo "selected"; ?>>Plastoy</option>
                                      <option <?php if($editeur == "Poésie vivante")echo "selected"; ?>>Poésie vivante</option>
                                      <option <?php if($editeur == "Pro Junentute")echo "selected"; ?>>Pro Junentute</option>
                                      <option <?php if($editeur == "Raspoutine")echo "selected"; ?>>Raspoutine</option>
                                      <option <?php if($editeur == "Rue de Sèvres")echo "selected"; ?>>Rue de Sèvres</option>
                                      <option <?php if($editeur == "Sac Ados Médias")echo "selected"; ?>>Sac Ados Médias</option>
                                      <option <?php if($editeur == "Sauve qui peut")echo "selected"; ?>>Sauve qui peut</option>
                                      <option <?php if($editeur == "Stickers for ever")echo "selected"; ?>>Stickers for ever</option>
                                      <option <?php if($editeur == "Swof")echo "selected"; ?>>Swof</option>
                                      <option <?php if($editeur == "Trajets")echo "selected"; ?>>Trajets</option>
                                      <option <?php if($editeur == "Vents d'Ouest")echo "selected"; ?>>Vents d'Ouest</option>
                                    </select>
                                    <label>Edition originale : </label><input <?php if($editionOriginale == "true")echo "checked"; ?> type='checkbox' name='editionOriginale' class='form-check'><br><?php echo $editionOriginale?>
                                    <label>Descriptif : </label><input value="<?php if(!empty($descriptif)) {echo $descriptif;}else{echo "";} ?>"  type='text' name='descriptif' class='form-control'>
                                    <label>Référence : </label><input value="<?php if(!empty($reference)) {echo $reference;}else{echo "";} ?>" type='text' name='reference' class='form-control'>
                                    <label>Dépot légal : </label><input value="<?php if($depotLegal != NULL) {echo $depotLegal;}else{echo "";} ?>" type='date' name='depotLegal' class='form-control'>
                                    <label>Date de sortie : </label><input value="<?php if($dateSortie != NULL) {echo $dateSortie;}else{echo "";} ?>" type='date' name='dateSortie' class='form-control'>
                                    <label>Date d'impression : </label><input value="<?php if($dateImpression != NULL) {echo $dateImpression;}else{echo "";} ?>" type='date' name='dateImpression' class='form-control'>
                                    <label>Commentaire : </label><input value="<?php if(!empty($commentaire)) {echo $commentaire;}else{echo "";} ?>" type='text' name='commentaire' class='form-control'>
                                    <label>Nombre de pages : </label><input value="<?php if(!empty($nbPages)) {echo $nbPages;}else{echo 0;} ?>" type='number' name='nbPages' class='form-control'>
                                    <label>Matière : </label><input value="<?php if(!empty($matiere)) {echo $matiere;}else{echo "";} ?>" type='text' name='matiere' class='form-control'>
                                    <label>Certificat : </label><input <?php if($certificat == "true")echo "checked"; ?> type='checkbox' name='certificat' class='form-check'><br>
                                    <label>Aspect : </label><input value="<?php if(!empty($aspect)) {echo $aspect;}else{echo "";} ?>" type='text' name='aspect' class='form-control'>
                                    <label>Signe : </label><input <?php if($signe == "true")echo "checked"; ?> type='checkbox' name='signe' class='form-check'><br>
                                    <label>Numeroté : </label><input <?php if($numerote == "true")echo "checked"; ?> type='checkbox' name='numerote' class='form-check'><br>
                                    <label>Packaging : </label><input value="<?php if(!empty($packaging)) {echo $packaging;}else{echo "";} ?>" type='text' name='packaging' class='form-control'>
                                    <label>Hors commerce : </label><input <?php if($horsCommerce == "true")echo "checked"; ?> type='checkbox' name='horsCommerce' class='form-check'><br>
                                    <label>Hauteur : </label><input value="<?php if(!empty($hauteur)) {echo $hauteur;}else{echo 0;} ?>" type='number' name='hauteur' class='form-control'>
                                    <label>Largeur : </label><input value="<?php if(!empty($largeur)) {echo $largeur;}else{echo 0;} ?>" type='number' name='largeur' class='form-control'>
                                    <label>Profondeur : </label><input value="<?php if(!empty($profondeur)) {echo $profondeur;}else{echo 0;} ?>" type='number' name='profondeur' class='form-control'>
                                    <label>Prix de vente : </label><input value="<?php if(!empty($cote)) {echo $cote;}else{echo 0;} ?>" type='number' name='cote' class='form-control'>
                                    <label>Date de modification de la cote : </label><input value="<?php if($dateModifCote != NULL) {echo $dateModifCote;}else{echo "";} ?>" type='date' name='dateModifCote' class='form-control'>
                                    <label>Cote personnelle : </label><input value="<?php if(!empty($cotePerso)) {echo $cotePerso;}else{echo 0;} ?>" type='number' name='cotePerso' class='form-control'>
                                    <label>Origine de la cote : </label><input value="<?php if(!empty($origineCote)) {echo $origineCote;}else{echo 0;} ?>" type='number' name='origineCote' class='form-control'>
                                    <input value="<?php echo $id?>" type="hidden" class="form-control" name="id">
                                    <br>
                                 <button type="submit" class="btn btn-warning modif" style="color:white;width:15%;margin-left:40%"><i class="far fa-edit"></i> Modifier</button>
                                 </form><br>
                                  <p>ID : <?php echo $id; ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span>Fermer</button>
                                </div>
                        </div>
                    </div>
                </div>


                <div id="delete<?php echo $id; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <form method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger">Do you want to delete the object <strong>
                                            <?php echo $seriesTitre; ?>?</strong> </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" onclick="window.location.href='supprimer.php?action=supprimer&id=<?php echo $donnees["id"] ?>'"><i class="fas fa-trash-alt"></i> YES</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="far fa-times-circle"></i> NO</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="img<?php echo $id; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <form method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Image objet</h4>
                                </div>
                                <div class="modal-body">
                                   <img class="card-img-top" src="../Images/<?php echo $donnees["image"]; ?>" alt="Image not found" style="height:300px;">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span>Fermer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

              <?php } ?>
    </body>
</html>

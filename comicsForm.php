<!DOCTYPE html>
<html>
       <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <title>Titeuf</title>
       </head>
       <body>
             <form action="getForm.php" method="post" id="form">
                <div class="form-group">
                    <label>seriesTitre :</label>
                    <input type="text" placeholder="seriesTitre" class="form-control" name="seriesTitre" v-model="seriesTitre">
                </div>
                <div class="form-group">
                    <label>numero :</label>
                    <input type="number" placeholder="numero" class="form-control" name="numero" v-model="numero">
                </div>
                <div class="form-group">
                    <label>albumTitre :</label>
                    <input type="text" placeholder="albumTitre" class="form-control" name="albumTitre" v-model="albumTitre">
                </div>
                <div class="form-group">
                  <label>categorie :</label>
                  <select v-model="categorie" name="categorie">
                    <option disabled value="">Choisissez</option>
                    <option>Affiche</option>
                    <option>Blog</option>
                    <option>Boite</option>
                    <option>Carte</option>
                    <option>Décoration</option>
                    <option>Divers</option>
                    <option>Doc</option>
                    <option>Etiquette</option>
                    <option>Exlibris</option>
                    <option>Figurine</option>
                    <option>Horlogerie</option>
                    <option>Invitation</option>
                    <option>Jeux/Jouets</option>
                    <option>Livre</option>
                    <option>Musique</option>
                    <option>Original</option>
                    <option>Portofolio</option>
                    <option>Pub-PLV</option>
                    <option>Puzzle</option>
                    <option>Scolaire</option>
                    <option>Sérigraphie/Litho</option>
                    <option>Textile</option>
                    <option>Vaiselle</option>
                  </select>
                </div>
                <div class="form-group">
                    <label>idDessinateur :</label>
                    <select v-model="idDessinateur" name="idDessinateur">
                      <option disabled value="">Choisissez</option>
                      <option>Zep</option>
                      <option>Vince</option>
                      <option>Chauzy</option>
                      <option>Tebo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>idScenariste :</label>
                    <select v-model="idScenariste" name="idScenariste">
                      <option disabled value="">Choisissez</option>
                      <option>Zep</option>
                      <option>Vince</option>
                      <option>Chauzy</option>
                      <option>Tebo</option>
                    </select>                </div>
                <div class="form-group">
                    <label>idColoriste :</label>
                    <select v-model="idColoriste" name="idColoriste">
                      <option disabled value="">Choisissez</option>
                      <option>Zep</option>
                      <option>Vince</option>
                      <option>Chauzy</option>
                      <option>Tebo</option>
                    </select>                </div>
                <div class="form-group">
                    <label>prixVente :</label>
                    <input type="number" placeholder="prixVente" class="form-control" name="prixVente" v-model="prixVente">
                </div>
                <div class="form-group">
                    <label>editeur :</label>
                    <select v-model="editeur" name="editeur">
                      <option disabled value="">Choisissez</option>
                      <option>Atoz</option>
                      <option>B.D. Club de Genève</option>
                      <option>Christian Desbois Editions</option>
                      <option>Démons et Merveilles</option>
                      <option>Drozophile</option>
                      <option>Dupuis</option>
                      <option>Fest'Off</option>
                      <option>Fondation Suisse d'Aide aux Victimes de Mines Antipersonnel</option>
                      <option>Glénat</option>
                      <option>GSSA</option>
                      <option>Hallmark</option>
                      <option>Hallmark - La Carterie</option>
                      <option>Houbba</option>
                      <option>Kesselring</option>
                      <option>Leblon-Delienne</option>
                      <option>L'illustré</option>
                      <option>MB</option>
                      <option>Muttpop</option>
                      <option>Paléo Festival de Nyon</option>
                      <option>Plastoy</option>
                      <option>Poésie vivante</option>
                      <option>Pro Junentute</option>
                      <option>Raspoutine</option>
                      <option>Rue de Sèvres</option>
                      <option>Sac Ados Médias</option>
                      <option>Sauve qui peut</option>
                      <option>Stickers for ever</option>
                      <option>Swof</option>
                      <option>Trajets</option>
                      <option>Vents d'Ouest</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>editionOriginale :</label>
                    <input type="checkbox" class="form-control" name="editionOriginale" v-model="editionOriginale">
                </div>
                <div class="form-group">
                    <label>image :</label>
                    <input type="text" placeholder="image" class="form-control" name="image" v-model="image">
                </div>
                <div class="form-group">
                    <label>descriptif :</label>
                    <input type="text" placeholder="descriptif" class="form-control" name="descriptif" v-model="descriptif">
                </div>
                <div class="form-group">
                    <label>reference :</label>
                    <input type="text" placeholder="reference" class="form-control" name="reference" v-model="reference">
                </div>
                <div class="form-group">
                    <label>depotLegal :</label>
                    <input type="date" placeholder="depotLegal" class="form-control" name="depotLegal" v-model="depotLegal">
                </div>
                <div class="form-group">
                    <label>dateSortie :</label>
                    <input type="date" placeholder="dateSortie" class="form-control" name="dateSortie" v-model="dateSortie">
                </div>
                <div class="form-group">
                    <label>dateImpression :</label>
                    <input type="date" placeholder="dateImpression" class="form-control" name="dateImpression" v-model="dateImpression">
                </div>
                <div class="form-group">
                    <label>commentaire :</label>
                    <input type="text" placeholder="commentaire" class="form-control" name="commentaire" v-model="commentaire">
                </div>
                <div class="form-group">
                    <label>image2 :</label>
                    <input type="text" placeholder="image2" class="form-control" name="image2" v-model="image2">
                </div>
                <div class="form-group">
                    <label>image3 :</label>
                    <input type="text" placeholder="image3" class="form-control" name="image3" v-model="image3">
                </div>
                <div class="form-group">
                    <label>image4 :</label>
                    <input type="text" placeholder="image4" class="form-control" name="image4" v-model="image4">
                </div>
                <div class="form-group">
                    <label>nbPages :</label>
                    <input type="number" placeholder="nbPages" class="form-control" name="nbPages" v-model="nbPages">
                </div>
                <div class="form-group">
                    <label>matiere :</label>
                    <input type="text" placeholder="matiere" class="form-control" name="matiere" v-model="matiere">
                </div>
                <div class="form-group">
                    <label>aspect :</label>
                    <input type="text" placeholder="aspect" class="form-control" name="aspect" v-model="aspect">
                </div>
                <div class="form-group">
                    <label>certificat :</label>
                    <input type="checkbox" placeholder="certificat" class="form-control" name="certificat" v-model="certificat">
                </div>
                <div class="form-group">
                    <label>numerote :</label>
                    <input type="checkbox" placeholder="numerote" class="form-control" name="numerote" v-model="numerote">
                </div>
                <div class="form-group">
                    <label>signe :</label>
                    <input type="checkbox" placeholder="signe" class="form-control" name="signe" v-model="signe">
                </div>
                <div class="form-group">
                    <label>packaging :</label>
                    <input type="text" placeholder="packaging" class="form-control" name="packaging" v-model="packaging">
                </div>
                <div class="form-group">
                    <label>horsCommerce :</label>
                    <input type="checkbox" placeholder="horsCommerce" class="form-control" name="horsCommerce" v-model="horsCommerce">
                </div>
                <div class="form-group">
                    <label>hauteur :</label>
                    <input type="number" placeholder="hauteur" class="form-control" name="hauteur" v-model="hauteur">
                </div>
                <div class="form-group">
                    <label>largeur :</label>
                    <input type="number" placeholder="largeur" class="form-control" name="largeur" v-model="largeur">
                </div>
                <div class="form-group">
                    <label>profondeur :</label>
                    <input type="number" placeholder="profondeur" class="form-control" name="profondeur" v-model="profondeur">
                </div>
                <div class="form-group">
                    <label>cote :</label>
                    <input type="number" placeholder="cote" class="form-control" name="cote" v-model="cote">
                </div>
                <div class="form-group">
                    <label>cotePerso :</label>
                    <input type="number" placeholder="cotePerso" class="form-control" name="cotePerso" v-model="cotePerso">
                </div>
                <div class="form-group">
                    <label>dateModifCote :</label>
                    <input type="date" placeholder="dateModifCote" class="form-control" name="dateModifCote" v-model="dateModifCote">
                </div>
                <div class="form-group">
                    <label>origineCote :</label>
                    <input type="text" placeholder="origineCote" class="form-control" name="origineCote" v-model="origineCote">
                </div>
                <button type="submit" class="btn btn-default">Envoyer</button>
            </form>
           <script src="comicsForm.js"></script>
       </body>
   </html>

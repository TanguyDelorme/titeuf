
<?php
include 'connection.php';
$seriesTitre=$numero=$albumTitre =$categorie=$idDessinateur=$idScenariste=$idColoriste="";
$prixVente=$editeur=$editionOriginale=$image=$descriptif=$reference=$depotLegal="";
$dateSortie=$dateImpression=$commentaire=$image2=$image3=$image4=$nbPages=$matiere="";
$certificat=$aspect=$signe=$numerote=$packaging=$hauteur=$horsCommerce=$largeur="";
$profondeur=$cote=$dateModifCote=$cotePerso=$origineCote="";

$id = $_POST["id"];
if(!isset($_POST["seriesTitre"])){
  $seriesTitre = "";
}
else{
  $seriesTitre = $_POST["seriesTitre"];
  echo $seriesTitre;
}
if(!isset($_POST["numero"])){
  $numero = "";
}
else{
  $numero = $_POST["numero"];
  echo $numero;
}
if(!isset($_POST["albumTitre"])){
  $albumTitre = "";
}
else{
  $albumTitre = $_POST["albumTitre"];
}
if(!isset($_POST["categorie"])){
  $categorie = "";
}
else{
  $categorie = $_POST["categorie"];
}
if(!isset($_POST["idDessinateur"])){
  $idDessinateur = "";
}
else{
  $idDessinateur = $_POST["idDessinateur"];
}
if(!isset($_POST["idScenariste"])){
  $idScenariste = "";
}
else{
  $idScenariste = $_POST["idScenariste"];
}
if(!isset($_POST["idColoriste"])){
  $idColoriste = "";
}
else{
  $idColoriste = $_POST["idColoriste"];
}
if(!isset($_POST["prixVente"])){
  $prixVente = "";
}
else{
  $prixVente = $_POST["prixVente"];
}
if(!isset($_POST["editeur"])){
  $editeur = "";
}
else{
  $editeur = $_POST["editeur"];
}
if(isset($_POST['editionOriginale'])){
  $editionOriginale = "true";
}
else {
  $editionOriginale = "false";
}
if(!isset($_POST['image'])){
  $image = "";
}
else {
  $image = $_POST['image'];
}


$req = $bdd->prepare('UPDATE titeuf SET seriesTitre = :seriesTitre, numero = :numero, albumTitre = :albumTitre, categorie = :categorie, idDessinateur = :idDessinateur,
idScenariste = :idScenariste, idColoriste = :idColoriste, prixVente = :prixVente, editeur = :editeur, editionOriginale = :editionOriginale, image = :image where id = "'.$id.'"');
    	$req->execute(array(
    	'seriesTitre' => $seriesTitre,
    	'numero' => $numero,
    	'albumTitre' => $albumTitre,
      'categorie' => $categorie,
    	'idDessinateur' => $idDessinateur,
    	'idScenariste' => $idScenariste,
      'idColoriste' => $idColoriste,
    	'prixVente' => $prixVente,
    	'editeur' => $editeur,
      'editionOriginale' => $editionOriginale,
    	'image' => $image,
));

/*header('Location: accueil.php');
  exit();*/

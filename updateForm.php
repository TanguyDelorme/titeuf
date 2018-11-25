
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
  echo $editionOriginale;
}
else {
  $editionOriginale = "false";
  echo $editionOriginale;
}
if(!isset($_POST['image'])){
  $image = "";
}
else {
  $image = $_POST['image'];
}
echo $image;
if(!isset($_POST['descriptif'])){
  $descriptif = "";
}
else {
  $descriptif = $_POST['descriptif'];
}
if(!isset($_POST['reference'])){
  $reference = "";
}
else {
  $reference = $_POST['reference'];
}
if($_POST['depotLegal'] == NULL){
  $depotLegal = NULL;
}
else {
  $depotLegal = $_POST['depotLegal'];
}
if($_POST['dateSortie'] == NULL){
  $dateSortie = NULL;
}
else {
  $dateSortie = $_POST['dateSortie'];
}
if($_POST['dateImpression'] == NULL){
  $dateImpression = NULL;
}
else {
  $dateImpression = $_POST['dateImpression'];
}
$commentaire = $_POST["commentaire"];
if(!isset($_POST['image2'])){
  $image2 = "";
}
else {
  $image2 = $_POST['image2'];
}
if(!isset($_POST['image3'])){
  $image3 = "";
}
else {
  $image3 = $_POST['image3'];
}
if(!isset($_POST['image4'])){
  $image4 = "";
}
else {
  $image4 = $_POST['image4'];
}
if(!isset($_POST['nbPages'])){
  $nbPages = "";
}
else {
  $nbPages = $_POST['nbPages'];
}
if(!isset($_POST['matiere'])){
  $matiere = "";
}
else {
  $matiere = $_POST['matiere'];
}
if(!isset($_POST['aspect'])){
  $aspect = "";
  echo $aspect;
}
else {
  $aspect = $_POST['aspect'];
  echo $aspect;
}
if(isset($_POST['certificat'])){
  $certificat = "true";
}
else {
  $certificat = "false";
}
if(isset($_POST['numerote'])){
  $numerote = "true";
}
else {
  $numerote = "false";
}
if(isset($_POST['signe'])){
  $signe = "true";
}
else {
  $signe = "false";
}
if(!isset($_POST['packaging'])){
  $packaging = "";
}
else {
  $packaging = $_POST['packaging'];
}
if(isset($_POST['horsCommerce'])){
  $horsCommerce = "true";
}
else {
  $horsCommerce = "false";
}
$hauteur = $_POST["hauteur"];
$largeur = $_POST["largeur"];
$profondeur = $_POST["profondeur"];
$cote = $_POST["cote"];
$cotePerso = $_POST["cotePerso"];
if($_POST['dateImpression'] == NULL){
  $dateModifCote = NULL;
}
else {
  $dateModifCote = $_POST['dateModifCote'];
}
if(!isset($_POST['origineCote'])){
  $origineCote = "";
}
else {
  $origineCote = $_POST['origineCote'];
}


$req = $bdd->prepare('UPDATE titeuf SET seriesTitre = :seriesTitre, numero = :numero, albumTitre = :albumTitre, categorie = :categorie, idDessinateur = :idDessinateur,
idScenariste = :idScenariste, idColoriste = :idColoriste, prixVente = :prixVente, editeur = :editeur, editionOriginale = :editionOriginale, image = :image, descriptif = :descriptif, reference = :reference,
depotLegal = :depotLegal, dateSortie = :dateSortie, dateImpression = :dateImpression, commentaire = :commentaire, image2 = :image2, image3 = :image3, image4 = :image4, nbPages = :nbPages, matiere = :matiere,
certificat = :certificat, aspect = :aspect, signe = :signe, numerote = :numerote, packaging = :packaging, hauteur = :hauteur, horsCommerce = :horsCommerce, largeur = :largeur, profondeur = :profondeur, cote = :cote,
dateModifCote = :dateModifCote, cotePerso = :cotePerso, origineCote = :origineCote where id = "'.$id.'"');
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
    	'descriptif' => $descriptif,
      'reference' => $reference,
    	'depotLegal' => $depotLegal,
    	'dateSortie' => $dateSortie,
      'dateImpression' => $dateImpression,
    	'commentaire' => $commentaire,
    	'image2' => $image2,
      'image3' => $image3,
    	'image4' => $image4,
    	'nbPages' => $nbPages,
      'matiere' => $matiere,
    	'certificat' => $certificat,
    	'aspect' => $aspect,
      'signe' => $signe,
    	'numerote' => $numerote,
    	'packaging' => $packaging,
      'hauteur' => $hauteur,
    	'horsCommerce' => $horsCommerce,
    	'largeur' => $largeur,
      'profondeur' => $profondeur,
    	'cote' => $cote,
    	'dateModifCote' => $dateModifCote,
      'cotePerso' => $cotePerso,
    	'origineCote' => $origineCote,
));

/*header('Location: accueil.php');
  exit();*/

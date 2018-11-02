<?php
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=comics;charset=utf8', 'root', '');
}
catch (Exception $e)
{
   die('Erreur : ' . $e->getMessage());
}

$seriesTitre = $_POST["seriesTitre"];
$numero = $_POST["numero"];
$albumTitre = $_POST["albumTitre"];
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
$prixVente = $_POST["prixVente"];
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
$image = $_POST["image"];
$descriptif = $_POST["descriptif"];
$reference = $_POST["reference"];
if(isset($_POST['depotLegal'])){
  $depotLegal = NULL;
}
else {
  $depotLegal = $_POST['depotLegal'];
}
if(isset($_POST['dateSortie'])){
  $dateSortie = NULL;
}
else {
  $dateSortie = $_POST['dateSortie'];
}
if(isset($_POST['dateImpression'])){
  $dateImpression = NULL;
}
else {
  $dateImpression = $_POST['dateImpression'];
}
$commentaire = $_POST["commentaire"];
$image2 = $_POST["image2"];
$image3 = $_POST["image3"];
$image4 = $_POST["image4"];
$nbPages = $_POST["nbPages"];
$matiere = $_POST["matiere"];
$aspect = $_POST["aspect"];
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
$packaging = $_POST["packaging"];
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
if(isset($_POST['dateImpression'])){
  $dateModifCote = NULL;
}
else {
  $dateModifCote = $_POST['dateModifCote'];
}
$origineCote = $_POST["origineCote"];


$reponse =  $bdd->query("SELECT seriesTitre, numero, albumTitre, categorie, idDessinateur,
idScenariste, idColoriste, prixVente, editeur, editionOriginale, image, descriptif, reference,
depotLegal, dateSortie, dateImpression, commentaire, image2, image3, image4, nbPages, matiere,
certificat, aspect, signe, numerote, packaging, hauteur, horsCommerce, largeur, profondeur, cote,
dateModifCote, cotePerso, origineCote FROM titeuf");

$req = $bdd->prepare('INSERT INTO titeuf(seriesTitre, numero, albumTitre, categorie, idDessinateur,
idScenariste, idColoriste, prixVente, editeur, editionOriginale, image, descriptif, reference,
depotLegal, dateSortie, dateImpression, commentaire, image2, image3, image4, nbPages, matiere,
certificat, aspect, signe, numerote, packaging, hauteur, horsCommerce, largeur, profondeur, cote,
dateModifCote, cotePerso, origineCote) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$req->execute([$seriesTitre, $numero, $albumTitre , $categorie, $idDessinateur, $idScenariste,
$idColoriste, $prixVente, $editeur, $editionOriginale, $image, $descriptif, $reference,
$depotLegal, $dateSortie, $dateImpression, $commentaire, $image2, $image3, $image4, $nbPages ,
$matiere, $certificat, $aspect, $signe, $numerote, $packaging, $hauteur, $horsCommerce,
$largeur, $profondeur, $cote, $dateModifCote, $cotePerso, $origineCote]);


header('Location: comicsForm.php');
  exit();
?>

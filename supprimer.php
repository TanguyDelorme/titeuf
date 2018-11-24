
<?php
include 'connection.php';


$id = $_GET['id'];

$sql = 'DELETE FROM titeuf WHERE  id = "'.$id.'"';

// use exec() because no results are returned
$bdd->exec($sql);

header('Location: accueil.php');
  exit();

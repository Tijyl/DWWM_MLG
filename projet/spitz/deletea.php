<?php
require('db.php');

if(isset($_POST["suppr"])){
$id = trim(htmlspecialchars($_POST["suppr"]));

$sql = "DELETE FROM artiste WHERE `artiste`.`idartiste` = $id";
$query = $db->prepare($sql);
$query->execute();
}
header("Refresh: 2; url=./modificationsuppression.php");
echo "Donnée supprimée du site.<br><br><i>Redirection en cours, vers la page de modification...</i>";


?>


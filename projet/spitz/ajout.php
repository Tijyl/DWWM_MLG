<?php
require('db.php');

if(isset($_POST["Nom"]) && !empty($_POST["Nom"])){
$Nom = trim(htmlspecialchars($_POST["Nom"]));

$sql = "INSERT INTO artiste (Nom)  VALUES ('$Nom')";
$query = $db->prepare($sql);
$query->execute();
    }

header("Refresh: 2; url=./modificationsuppression.php");
echo "Donnée enregistrer dans le site.<br><br><i>Redirection en cours, vers la page de modification...</i>";


?>


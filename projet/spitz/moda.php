<?php
require('db.php');

if(isset($_POST["mod"]))
$id = trim(htmlspecialchars($_POST["mod"]));
$Nom = trim(htmlspecialchars($_POST["Nom"]));{

$sql = "UPDATE `artiste` SET `Nom`='$Nom' WHERE idartiste=$id";
$query = $db->prepare($sql);
$query->execute();
    }

header("Refresh: 2; url=./modificationsuppression.php");
echo "Donnée enregistrer dans le site.<br><br><i>Redirection en cours, vers la page de modification...</i>";


?>

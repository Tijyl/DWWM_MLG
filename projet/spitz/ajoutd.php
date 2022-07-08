<?php
require('db.php');

if(isset($_POST)){
    if(isset($_POST["Titre"]) && !empty($_POST["Titre"]) 
    && isset($_POST["Annee"]) && !empty($_POST["Annee"])
    && isset ($_POST["Label"])&& !empty ($_POST["Label"])){
$Titre = trim(htmlspecialchars($_POST["Titre"]));
$Annee = trim(htmlspecialchars($_POST["Annee"]));
$Label = trim(htmlspecialchars($_POST["Label"]));

$sql = "INSERT INTO disque (Titre,Annee,Label)  VALUES ('$Titre','$Annee','$Label')";
$query = $db->prepare($sql);
$query->execute();
    }
}
?>


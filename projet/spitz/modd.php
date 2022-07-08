<?php
require('db.php');

if(isset($_POST["mod1"])){
$Titre = trim(htmlspecialchars($_POST["Titre"]));
$Annee = trim(htmlspecialchars($_POST["Annee"]));
$Label = trim(htmlspecialchars($_POST["Label"]));
$id = trim(htmlspecialchars($_POST["mod1"]));

$sql="UPDATE `disque` SET `Titre`='$Titre' WHERE disque.iddisque=$id";
$query = $db->prepare($sql);
$query->execute();
$sql="UPDATE `disque` SET `Annee`='$Annee' WHERE disque.iddisque=$id";
$query = $db->prepare($sql);
$query->execute();
$sql="UPDATE `disque` SET `Label`='$Label' WHERE disque.iddisque=$id";
$query = $db->prepare($sql);
$query->execute();
}
    
?>

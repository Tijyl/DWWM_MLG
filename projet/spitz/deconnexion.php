<title> Déconnexion </title>
<?php
session_start();
unset($_SESSION['pseudo']);
header("Refresh: 5; url=./index.php");
echo "Vous avez été correctement déconnecté du site.<br><br><i>Redirection en cours, vers la page d'accueil...</i>";
?>
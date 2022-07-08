<?php
 
session_start();
if(!isset($_SESSION['pseudo'])){
    header("Refresh: 5; url=connexion.php");
    echo "Vous devez vous connecter pour accéder à l'espace membre.<br><br><i>Redirection en cours, vers la page de connexion...</i>";
    exit(0);
}
$Pseudo=$_SESSION['pseudo'];

$mysqli=mysqli_connect('localhost','root','','spitz');
if(!$mysqli) {
    echo "Erreur connexion BDD";
    
    exit(0);
}

$req=mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='$Pseudo'");
$info=mysqli_fetch_assoc($req);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Espace membres </title>
</head>
<header>
        <img src="img/logo.png">
        
              <div class="bouton">
                <button type="button" class="button">
              <span><a class="blanc" href="index.php">Accueil</span></a>
            </button>
            <button type="button" class="button">
            <span><a class="blanc" href="inscription.php"> Inscription </span></a>
          </button>
          <button type="button" class="button">
            <a class="blanc" href="connexion.php"><span> Connexion </span></a>
          </button>
          <button type="button" class="button">
             <a class="blanc" href="deconnexion.php"> <span>Déconnexion</span></a>
            </button>
      </div>
      </header> 
      <?php
        if(isset($_GET['supprimer'])){
            if($_GET['supprimer']!="ok"){
                echo "<h2>Êtes-vous sûr de vouloir supprimer votre compte définitivement?</h2>
                <br>
                <a class=ouinon href='sup.php?supprimer=ok' >OUI - NON</a>";
            } else {
                
                if(mysqli_query($mysqli,"DELETE FROM membres WHERE pseudo='$Pseudo'")){
                    echo "Votre compte vient d'être supprimé définitivement.";
                    unset($_SESSION['pseudo']);
                } else {
                    echo "Une erreur est survenue, merci de réessayer ou contactez-nous si le problème persiste.";
                    
                }
            }
        }
?>
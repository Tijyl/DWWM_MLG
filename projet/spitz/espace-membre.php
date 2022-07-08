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
?><!DOCTYPE HTML>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Espace membres </title>
</head>
<body>
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
    <body>
        
        <h1>Espace membre</h1>
      
        <h4>Pour modifier ou supprimer une donnée : <a href="modificationsuppression.php" ><button style="background-color: #82a7a4; color:white;width: 150px; font-size : 20px; border-color:aliceblue;  padding: 5px;" type="submit">Cliquez ici</button></a>
      
        <h4>Pour modifier vos informations : <a href="adressemailmdp.php?modifier"> <button style="background-color: #82a7a4; color:white;width: 150px; font-size : 20px; border-color:aliceblue;  padding: 5px;"  type="submit">Cliquez ici</button></a>
        
        <h4>Pour supprimer votre compte: <a href="sup.php?supprimer" ><button style="background-color: #82a7a4; color:white;width: 150px; font-size : 20px; border-color:aliceblue;  padding: 5px;" type="submit">Cliquez ici</button></a>

  </body>
  <footer>
</html>
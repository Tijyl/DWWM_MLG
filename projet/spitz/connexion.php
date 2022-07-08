<?php

session_start();
?>
<!DOCTYPE HTML>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title> Connexion </title>
</head>
<body>
    <header>
        <img src="img/logo.png">
        <div class="bouton">
                <button type="button" class="button"> <div class="blanc">
              <span><a class= "blanc" href="index.php">Accueil</span></a>
            </button>
            <button type="button" class="button">
            <span><a class= "blanc" href="inscription.php"> Inscription </span></a>
          </button>
          <button type="button" class="button">
            <a class= "blanc" href="connexion.php"><span> Connexion </span></a>
          </button>
          <button type="button" class="button">
             <a class= "blanc" href="deconnexion.php"> <span>Déconnexion</span></a>
            </button>
      </div>
      </header> 

        <div class="Formulaire"> 

        <?php
        
        if(isset($_SESSION['pseudo'])){
            echo "Vous êtes déjà connecté, vous pouvez accéder à l'espace membre en <a href='espace-membre.php'>cliquant ici</a>.";
        } else {
            
            if(isset($_POST['valider'])){
                
                if(!isset($_POST['pseudo'],$_POST['mdp'])){
                    echo "Un des champs n'est pas reconnu.";
                } else {
                
                    $mysqli=mysqli_connect('localhost','root','','spitz');
                    if(!$mysqli) {
                        echo "Erreur connexion BDD";
                        
                    } else {
                        
                        $Pseudo=htmlentities($_POST['pseudo'],ENT_QUOTES,"UTF-8");
                        $Mdp=md5($_POST['mdp']);
                        $req=mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='$Pseudo' AND mdp='$Mdp'");
                        
                        if(mysqli_num_rows($req)!=1){
                            echo "Pseudo ou mot de passe incorrect.";
                        } else {
                            
                            $_SESSION['pseudo']=$Pseudo;
                            echo "Vous êtes connecté avec succès $Pseudo! Vous pouvez accéder à l'espace membre en <a class=noir href='espace-membre.php'>cliquant ici</a>.";
                            $TraitementFini=true;
                        }
                    }
                }
            }
            if(!isset($TraitementFini)){
                ?>

                <form method="post" action="connexion.php">
                <h1>Se connecter</h1>
                <h2>Remplissez le formulaire ci-dessous pour vous connecter:</h2>
                <br>
                <br>
                    <label><b>Nom d'utilisateur :</b></label>
                 <input type="text" name="pseudo" placeholder="Votre pseudo..." required>
                 <label><b>Mot de passe :</b></label>
                    <input type="password" name="mdp" placeholder="Votre mot de passe..." required> <br> <br>
                    <input type="submit" name="valider" value="Connexion"> 
                </form>
        </div>
                <?php
            }
        }
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <footer>
        
    </footer>
    </body>
</html>


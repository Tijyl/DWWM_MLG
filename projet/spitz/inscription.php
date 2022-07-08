<?php


?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Inscription </title>
        
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
      </div>
      </header> 
      <div class="Formulaire">  
       
        <?php
        
        if(isset($_POST['valider'])){
        
            if(!isset($_POST['pseudo'],$_POST['mdp'],$_POST['mail'])){
                echo "Un des champs n'est pas reconnu.";
            } else {
            
                if(!preg_match("#^[a-z0-9]{1,15}$#",$_POST['pseudo'])){
                
                    echo "Le pseudo est incorrect, doit contenir seulement des lettres minuscules et/ou des chiffres, d'une longueur minimum de 1 caractère et de 15 maximum.";
                    
                } else {
                    
                    if(strlen($_POST['mdp'])<5 or strlen($_POST['mdp'])>15){
                        echo "Le mot de passe doit être d'une longueur minimum de 5 caractères et de 15 maximum.";
                    } else {
                        
                        if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,30}$#i",$_POST['mail'])){
                            
                            echo "L'adresse mail est incorrecte.";
                            
                        } else {
                            if(strlen($_POST['mail'])<7 or strlen($_POST['mail'])>50){
                                echo "Le mail doit être d'une longueur minimum de 7 caractères et de 50 maximum.";
                            } else {
                            
                                $mysqli=mysqli_connect('localhost','root','','spitz');
                                if(!$mysqli) {
                                    echo "Erreur connexion BDD";
                                    
                                } else {
                                    $Pseudo=htmlentities($_POST['pseudo'],ENT_QUOTES,"UTF-8");
                                    $Mdp=md5($_POST['mdp']);
                                    $Mail=htmlentities($_POST['mail'],ENT_QUOTES,"UTF-8");
                                    if(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='$Pseudo'"))!=0){
                                        echo "Ce pseudo est déjà utilisé par un autre membre, veuillez en choisir un autre svp.";
                                    } else {
                                        
                                        if(mysqli_query($mysqli,"INSERT INTO membres SET pseudo='$Pseudo', mdp='$Mdp', mail='$Mail'")){
                                            echo "Inscrit avec succès! Vous pouvez vous connecter: <a href='connexion.php'>Cliquez ici</a>.";
                                            $TraitementFini=true;
                                        } else {
                                            echo "Une erreur est survenue, merci de réessayer ou contactez-nous si le problème persiste.";
                                            
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        if(!isset($TraitementFini)){
            ?>
            
            <br>
            <form method="post" action="inscription.php"> 
            <h1>S'inscrire</h1>
            <h2>Remplissez le formulaire ci-dessous pour vous inscrire:</h2>
            <br>
                <label><b>Nom d'utilisateur :</b></label>
                <input type="text" name="pseudo" placeholder="Votre pseudo..." required>
                <label><b>Mot de passe:</b></label>
                <input type="password" name="mdp" placeholder="Votre mot de passe..." required>
                <label><b>Mail :</b></label>
                <input type="email" name="mail" placeholder="Votre mail..." required>
                <br> <br>
                <input type="submit" name="valider" value="S'inscrire">
            </form>
     
            <?php
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
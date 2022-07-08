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
      <html>

</html>


<?php
if(isset($_GET['modifier'])){
            ?>
        
            <h2>Modification du compte</h2>
            <h4>Choisissez une option: </h4>
            
            <p class="adressemail">
                <a class="noir" href="adressemailmdp.php?modifier=mail"> <button style="background-color: #82a7a4; color:white;width: 300px; font-size : 20px; border-color:aliceblue; margin-top: 10px; padding: 10px;" type="submit">Modification de l'adresse mail</button></a>
                <br>
                <a class="noir" href="adressemailmdp.php?modifier=mdp"><button style="background-color: #82a7a4; color:white;width: 300px; font-size : 20px; border-color:aliceblue; margin-top: 10px;margin-bottom:30px; padding: 10px;" type="submit">Modification du mot de passe</button></a>
            </p>
        
            <?php
            if($_GET['modifier']=="mail"){
                echo "<h2 >Renseignez le formulaire ci-dessous pour modifier vos informations:</h2>";
                if(isset($_POST['valider'])){
                    if(!isset($_POST['mail'])){
                        echo "Le champ mail n'est pas reconnu.";
                    } else {
                        if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,30}$#i",$_POST['mail'])){
                            
                            echo "L'adresse mail est incorrecte.";
                            
                        } else {
                            
                            if(mysqli_query($mysqli,"UPDATE membres SET mail='".htmlentities($_POST['mail'],ENT_QUOTES,"UTF-8")."' WHERE pseudo='$Pseudo'")){
                                echo "Adresse mail {$_POST['mail']} modifiée avec succès!";
                                $TraitementFini=true;
                            } else {
                                echo "Une erreur est survenue, merci de réessayer ou contactez-nous si le problème persiste.";
                                
                            }
                        }
                    }
                }
                if(!isset($TraitementFini)){
                    ?>
                    <br>
                    <form method="post" action="espace-membre.php?modifier=mail">
                        <input type="email" name="mail" value="<?php echo $info['mail']; ?>" required>
                        <input type="submit" name="valider" value="Valider la modification">
                    </form>

        
                    <?php
                }
            } elseif($_GET['modifier']=="mdp"){
                echo "<h2>Renseignez le formulaire ci-dessous pour modifier vos informations:</h2>";
                
                if(isset($_POST['valider'])){
                    
                    if(!isset($_POST['nouveau_mdp'],$_POST['confirmer_mdp'],$_POST['mdp'])){
                        echo "Un des champs n'est pas reconnu.";
                    } else {
                        if($_POST['nouveau_mdp']!=$_POST['confirmer_mdp']){
                            echo "Les mots de passe ne correspondent pas.";
                        } else {
                            $Mdp=md5($_POST['mdp']);
                            $NouveauMdp=md5($_POST['nouveau_mdp']);
                            $req=mysqli_query($mysqli,"SELECT * FROM membres WHERE pseudo='$Pseudo' AND mdp='$Mdp'");
                            
                            if(mysqli_num_rows($req)!=1){
                                echo "Mot de passe actuel incorrect.";
                            } else {
                                
                                if(mysqli_query($mysqli,"UPDATE membres SET mdp='$NouveauMdp' WHERE pseudo='$Pseudo'")){
                                    echo "Mot de passe modifié avec succès!";
                                    $TraitementFini=true;
                                } else {
                                    echo "Une erreur est survenue, merci de réessayer ou contactez-nous si le problème persiste.";
                                    
                                }
                            }
                        }
                    }
                }
                if(!isset($TraitementFini)){
                    ?>
                    <br>
                 
                    <form method="post" action="espace-membre.php?modifier=mdp">
                        <input type="password" name="nouveau_mdp" placeholder="Nouveau mot de passe..." required>
                        <input type="password" name="confirmer_mdp" placeholder="Confirmer nouveau passe..." required>
                        <input type="password" name="mdp" placeholder="Votre mot de passe actuel..." required>
                        <input type="submit" name="valider" value="Valider la modification">
                    </form>
                    <?php
                }
            }
        }
    
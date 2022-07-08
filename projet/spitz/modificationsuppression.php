<!DOCTYPE HTML>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title> Artistes </title>
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
<?php

try

{


    $bdd = new PDO('mysql:host=localhost;dbname=spitz', 'root', '');

}

catch(Exception $e)

{

die('Erreur : '.$e->getMessage());

}



$reponse = $bdd->query('SELECT * FROM artiste INNER JOIN disque ON disque.iddisque=artiste.idartiste;');




while ($donnees = $reponse->fetch())

{

?>



<h5>

    <strong> Nom de l'Artiste </strong>: <?php echo $donnees['Nom']; ?>  


<br/>

    <strong>Titre</strong> : <?php echo $donnees['Titre']; ?><br />

    <strong> Date de sortie</strong>: <?php echo $donnees['Annee'];?> </br>


    <strong>Son label est </strong>: <?php echo $donnees['Label']; ?> <br />
<br>
</h5>

<?php

}

$reponse->closeCursor();

?>

                 <div class="tout">
                        <form class="ajouter " name="insertion" action="tout.php" method="POST">
                        <h2 class="choix">Ajoutez</h2>
                                <input class="form-control" type="text" name="Nom" placeholder="Nom/Pseudo/Groupe" >
                                   
    
                        <input class="form-control" type="text" name="Titre" placeholder="Titre">
                           
                                <input class="form-control" type="text" name="Annee" placeholder="Annee">
                       
                            
                                <input class="form-control" type="text" name="Label" placeholder="Label">
                           
                            <div class=>
                                <button style="background-color: #82a7a4; color:white;width: 150px; font-size : 20px; border-color:aliceblue;  padding: 5px;" type="submit" id="submit" type="submit" class="btn btn-primary modifier">Ajoutez</button>
</div>
                        </form>
<br> <br> <br>
                        
                      <?php
                        $sql = "SELECT * FROM artiste INNER JOIN disque ON disque.iddisque=artiste.idartiste;'";
                        $query=$bdd->prepare($sql);
                        $query->execute();
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <form name="modification" action="modtout.php" method="POST">
                        <h2 class="choix">Modifiez</h2>
                            <div class="col-md-12">
                            <select name="mod" id="">
                            <?php
                                    foreach ($result as $value) { 
                                        ?>
                                        
                                    <option value="<?=$value["idartiste"]?>"><?= $value['Nom']?></option>
                                    
                                    
                                <?php    
                                }    
                                ?>
                            </select>
                            <select name="mod1" id="">
                            <?php
                                    foreach ($result as $value) { 
                                        ?>
                                        
                                    <option value="<?=$value["iddisque"]?>"><?= $value['Titre']."  ".$value['Annee']."  ".$value['Label']?></option>
                                    
                                    
                                <?php
                                }    
                                ?>
                            </select>
                            </div>
                           <br> <br> <br>
                            </br>
                            </br>
                          
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="Nom" placeholder="Nom/Pseudo/Groupe" >
                            </div>         
                            
                             
                        <input class="form-control" type="text" name="Titre" placeholder="Titre">
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="Annee" placeholder="Annee">
                            </div>  
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="Label" placeholder="Label">
                            </div>  
                            <div class="form-button mt-3">
                                <button style="background-color: #82a7a4; color:white;width: 150px; font-size : 20px; border-color:aliceblue;  padding: 5px;" type="submit" id="submit" type="submit" class="btn btn-primary modifier">Modifiez</button>
                            </div>
                        </form>
                        <br> <br> <br>
                        
                        <h2 class="choix">Supprimez</h2>
                        <?php
                        $sql = "SELECT * FROM artiste INNER JOIN disque ON disque.iddisque=artiste.idartiste;'";
                        $query=$bdd->prepare($sql);
                        $query->execute();
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                        <form name="" action="deleteall.php" method="POST">
                            <div class="col-md-12">
                            <select name="suppr" id="">
                            <?php
                                    foreach ($result as $value) { 
                                        ?>
                                        
                                    <option value="<?=$value["idartiste"]?>"><?= $value['Nom'] ?></option>
                                    
                                    
                                <?php    
                                }    
                                ?>
                            </select>
                            <select name="supprd" id="">
                            <?php
                                    foreach ($result as $value) { 
                                        ?>
                                        
                                    <option value="<?=$value["iddisque"]?>"><?= $value['Titre']."  ".$value['Label']."  ".$value['Annee']?></option>
                                    
                                    
                                <?php    
                                }    
                                ?>
                            </select>
                            <div class="form-button mt-3">
                                <button style="background-color: #82a7a4; color:white;width: 150px; margin-top: 30px;font-size : 20px; border-color:aliceblue;  padding: 5px;" type="submit"id="submit" type="submit" class="btn btn-primary modifier" name="suppr1">Supprimez</button>
                            </div>
                        </form>
                        </div>
                            </div> 
</body>
</html>



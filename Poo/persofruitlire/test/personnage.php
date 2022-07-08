<?php 
    require_once("classes/personnage.class.php");
    require("common/header.php");
    require("common/menu.php");
   
?>
<h1>Page Personnages</h1>

<?php
//Création d'un personnage
$p1 = new Personnage("Luka","playerF.png",29,false,5,4);
$p2 = new Personnage("Luke", "player.png",32,true,6,7);
$p1->setNom("Kate");

// $p1->afficherImage();

//Affichage des informations
echo $p2->display();
echo $p1->display();


    require("common/footer.php");
?>
<?php 
    require_once("classes/personnage.class.php");
    require("common/header.php");
    require("common/menu.php");
   
?>
<h1>Page Personnages</h1>

<?php
//Création d'un personnage
$p1 = new Personnage("Tifa","playerF.png",29,"Femme",5,4);
$p1->afficherImage();
$p2 = new Personnage("Luke", "player.png",32,"Homme",6,7);
$p2->afficherImage();
// $p1->afficherImage();

//Affichage des informations
// echo $p2->display();
// echo $p1->display();


?>
<?php 
    require("common/footer.php");
?>
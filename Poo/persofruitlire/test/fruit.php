<?php 
    require_once("classes/fruit.class.php");
    require("common/header.php");
    require("common/menu.php");
   
?>
<h1>Page Fruit</h1>

<?php
//Création d'un personnage
$f1 = new Fruit("Cerise",4,5,"cherry.png");
$f2 = new Fruit("Orange",4,7 ,"apple.png");
$f2->setNom("Pomme");

//Affichage des informations
// echo $f1->display();
// echo $f2->display();


    require("common/footer.php");
?>
<?php 
    require_once("classes/livre.class.php");
    require("common/header.php");
    require("common/menu.php");
    
?>
<h1>Page Livre</h1>

<?php

//Création d'un fruit
$l1 = new Livre("Pommes","apple.png","6cm","300gr","1euros");
$l2 = new Livre("Cerises","cherry.png","1cm","10gr","20cts");

// $p1->afficherImage();

//Affichage des informations
echo $l1->display();
echo $l2->display();


?>
<?php 
    require("common/footer.php");
?>
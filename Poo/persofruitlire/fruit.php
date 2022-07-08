<?php 
    require_once("classes/fruit.class.php");
    require("common/header.php");
    require("common/menu.php");
   
?>
<h1>Page Fruits</h1>

<?php
//construct($nom, $img, $poid, $prix) {
//Création d'un personnage
$cherry1 = new Fruit("CERISE rouge France cat.I","cherry.png",28,2.5);
$cherry1->afficherImage();

$cherry2 = new Fruit("CERISE rouge France cat.I","cherry.png",15,3.50);
$cherry2->afficherImage();

$cherry3 = new Fruit("CERISE rouge France cat.I","cherry.png",55,4.50);
$cherry3->afficherImage();

$apple1 = new Fruit("POMME Belchard Sud‑Ouest cat.I","apple.png",78,1);
$apple1->afficherImage();

$apple2 = new Fruit("POMME Golden Sud‑Ouest cat.I","apple.png",150,1);
$apple2->afficherImage();

$apple3 = new Fruit("POMME Bicolore Centre‑Ouest biologique","apple.png",6,1.40);
$apple3->afficherImage();

?>
<?php 
    require("common/footer.php");
?>
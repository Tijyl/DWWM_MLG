<?php 
    require_once("classes/batiment.class.php");
   
?>
<h1>Page Fruits</h1>

<?php
//construct($nom, $img, $poid, $prix) {
//Création d'un personnage
$maison = new maison("Batiment1","batiment.png","3rue pas la");
$maison->afficherImage();

$maison1 = new maison("CERISE rouge France cat.I","cherry.png","22 rue ici");
$maison1->afficherImage();

?>
<?php 
    require("common/footer.php");
?>
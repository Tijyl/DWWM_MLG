<?php 
    require_once("classes/batiment.class.php");

?>
<h1>Page batiment</h1>

<?php
//construct($nom, $img, $poid, $prix) {
//Création d'un personnage
$batiment1 = new batiment("batiment1","batiment.jpg","20 rue pas la");
$batiment1->afficherImage();

$batiment2 = new batiment("batiment2","batiment2.png","2 rue par ici");
$batiment2->afficherImage();



?>
<?php 
    require("common/footer.php");
?>
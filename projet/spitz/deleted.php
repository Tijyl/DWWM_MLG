<?php
require('db.php');

if(isset($_POST["supprd"])){
$id = trim(htmlspecialchars($_POST["supprd"]));

$sql = "DELETE FROM disque WHERE `disque`.`iddisque` = $id";
$query = $db->prepare($sql);
$query->execute();
    }

?>


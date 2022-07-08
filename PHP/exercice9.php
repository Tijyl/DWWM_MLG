<?php
/*Même exercice que l'exercice 8 avec les secondes*/

$heures = readline("Entrez l'heure :");
$minutes = readline("Entrez les minutes :");
$secondes = readline("Entrez les secondes : ");

$secondes = $secondes + 1;

if($secondes == 60){
    $secondes = 0;
    $minutes = $minutes + 1;
}
if($minutes ==60){
    $minutes = 0;
    $heures = $heures + 1;
}
if($heures == 24){
    $heures = 0;
}
echo "Dans une seconde, il sera " . $heures . "h " . $minutes . "m " . $secondes . "s";



?>
<?php
/*Ecrire un algorithme qui demande trois noms à l’utilisateur et l’informe ensuite s’ils sont
rangés ou non dans l’ordre alphabétique.*/

$nom1 = readline("Entrez un nom : ");
$nom2 = readline("Entrez un nom : ");
$nom3 = readline("Entrez un nom : ");

if($nom1 < $nom2 && $nom2 < $nom3){
    echo "Noms rangés par ordre alphabétique";
}else{
    echo "Ces noms ne sont pas rangés par ordre alphabétique";
}
?>
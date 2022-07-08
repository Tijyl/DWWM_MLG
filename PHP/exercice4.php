<?php
/*Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite si ce
nombre est positif ou négatif(on inclut cette fois le traitement du cas où le nombre vaut
zéro).*/

$nombre1 = readline("Entrez un nombre : ");

if($nombre1 > 0){
    echo "C'est un nombre positif";
}elseif($nombre1 == 0){
    echo "C'est un nombre nul ";
}else{
    echo "C'est un nombre négatif";
}



?>
<?php
/*Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si le
produit est négatif ou positif(on inclut cette fois le traitement du cas où le produit peut-être
nul). Attention toutefois, on ne doit pas calculer le produit !*/

$nombre1 = readline("Entrez le premier nombre : ");
$nombre2 = readline("Entrez le deuxième nombre : ");

if($nombre1 == 0 || $nombre2 == 0){
    echo "Le produit est nul";
}elseif(($nombre1>0 && $nombre2>0) || ($nombre1<0) && ($nombre2<0)){
    echo "Le résultat du produit est positif";
}else{
    //Pas la peine de faire le test
    echo "Le résultat du produit est négatif";
}

?>
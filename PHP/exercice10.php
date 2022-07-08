<?php
/* Un magasin de reprographie facture 0,10 E les dix premières photocopies, 0,09 E les
vingt suivantes et 0,08 E au-delà. Ecrivez un algorithme qui demande à l’utilisateur le
nombre de photocopies effectuées et qui affiche la facture correspondante*/

$nbPhotocopie = readline("Entrez le nombre de photocopie :");

if($nbPhotocopie < 11){
    $prix = $nbPhotocopie * 0.10;
}elseif($nbPhotocopie <= 30){
    $prix = 10 * 0.10 + ($nbPhotocopie - 10) * 0.09;
}else{
    $prix = 10*0.10 + 20*0.09 + ($nbPhotocopie-30)*0.08;
}
echo "Le prix est de " . $prix . "€ pour " . $nbPhotocopie . " photocopies"




?>
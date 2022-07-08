<?php
/*Ecrivez un algorithme qui après avoir demandé un numéro de jour, de mois et d'année à 
l'utilisateur, renvoie s'il s'agit ou non d'une date valide*/

$jour = readline( "Quel est le numéro du jour : ");
$mois = readline("Quel est le numéro du mois : ");
$annee = readline("Quelle est l'année : ");
$verif = true;

//vérification si jour n'est pas inf à 0 et n'est pas supérieur à 31 et  si mois pas inf à 0 et sup à 12
if($jour <= 0 || $jour > 31 || $mois < 1 || $mois > 12){
    $verif = false; //hors limite

}elseif($mois == 2 || $mois == 4 || $mois == 6 || $mois == 9 || $mois == 11){ //Ici on verifie le lois si 31 jours
    $verif = false;

}elseif(($mois == 2) && ($jour == 29) && !(($annee % 4 == 0 && $annee % 100 == 0) || ($annee % 400 == 0))){
    $verif = false; //année non bissextile
}else{
    $verif;
}

if($verif){
    echo "Votre date est correcte";
}else{
    echo "Votre date est incorrecte";
}

?>
<?php


// $number1 = readline("Nombre 1 : ");

// $number2 = readline("Nombre 2 : ");

//  if($number1 < 0 && $number2<0){
//      echo "Le produit est positif";
//  }
//  else if($number1 < 0 || $number2 < 0){
//     echo "Le produit est négatif";
// }
// else if($number1 == 0 && $number2 == 0){
//     echo "0";
// }
// else {
//     echo "Le produit est positif";
// }
                //   MINUTES 
// $heures = readline("Entrez heure : ");
// $minutes = readline("Entre minutes : ");
// $secondes = readline ("Entrez secondes : ");

// $secondes = $secondes+1;

// If ($minutes>=60){
//     $minutes=0;
//     $heures= $heures+1;
// }


// If ($heures>=24){
//     $heures= $heures-24;
// }

// If ($secondes >=60){
//     $secondes=0;
//     $minutes=$minutes+1;
// }

// Echo "Dans une seconde il sera $heures,heures $minutes minutes,$secondes seconde."
                    //  PHOTOCOPIE

// $nombre = readline ("Nombre de photocopie :");


// If ($nombre<=10){
//     $prix=$nombre*0.10;
// }
// else if ($nombre ==11 && $nombre <=30 ){
//     $prix=$nombre*0.09;
// }
// else {
//     $prix=$nombre*0.08;
// }
// Echo"Ca vous fera $prix."
                //  IMPOT
// $age = readline("Entrez votre age:");
// $sexe = readline("Entrez votre sexe (H/F):");

// if ($age>=20 && $sexe=="H"){
//     Echo "Vous devez payer des impots";
// }
// else if ($age >=18 && $age<=35 && $sexe=="F"){
//     Echo "Vous devez payer des impots";
// }
// else {
//     Echo "Vous ne devez pas payer des impots";
// }

                //  Voiture 
// $age = readline ("Entrez votre age:");
// $annee =  readline ("Nombre d'année permis:");
// $accident = readline ("Nombre d'accident depuis l'obtention de votre permis:");
// $maison = readline ("Depuis combien de temps habitez vous dans votre maison?(En année):");


// if ($age<25 && $annee<=2 && $accident<1) {
//     echo "Rouge";
// }    
// else if ($accident>=1){
//     echo "Refus";
// }

// Plus petit Plus grand

// $i = readline("Entrez un nombre en 10 et 20 : ");
//  while($i < 10 || $i > 20){
//     if ($i < 10) {
//         echo "Plus grand!"."\n";
//     $i= readline("Entrez un nombre en 10 et 20 : ");
//     }
//     else {
//         echo"Plus Petit!";
//         $i = readline("Entrez un nombre en 10 et 20 : "."\n");
//     }
// }
// if($i <= 20 && $i >= 10){
//     echo"Merci";
// }
// Dix Nombre a la suite
// $i=readline("Entrez un chiffre:");
// $max=$i+10;
// while($i <= $max){
//     $i++;
//     echo "nbr=" . $i . "\n";
//     }


// $i=readline("Entrez un nombre:");
// $max=$i+10;
// for(;$i <= $max;$i++)
// {
//     echo"nbr=".$i."\n";
// }

//Plus petit plus grand
$array=[];
$i=readline("Entrez un nombre:");
while($i!=0){
    array_push($array,$i);
    $i=readline("Entrez un nombre:");
    }
    echo "Le plus grand chiffre est ".max($array)." et sa position est " .array_search(max($array),$array)+1;

//     $i=readline("Entrez un nombre:");
//     $pos=0;
// while($i!= 0){
//     $i=readline ("Entrez un nombre:");
//     $pos++;
//     if($i > $imax) {
//         $imax = $i;
//         $position = $pos;
//     }
// }
// echo "la valeur la plus grande est" .$imax ." et sa position est".$position;

?>
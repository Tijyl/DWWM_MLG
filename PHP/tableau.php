<?php
// tableau de 0
// $array=[];
// for($i=0; $i<=7; $i++) {
// array_push($array,0);
// }
// print_r($array)

// Voyelles

// $array=[];
// array_push($array, "a", "e","i","o","u");
// print_r($array)

// Notes

// $array=[];
// for($i=0; $i<=9; $i++){
// $note=readline("Entrez la note:");
// array_push($array,$note);
// }
// Echo "La moyenne des notes est: " .array_sum($array)/count($array);

// Positif/Negatif

// $array=[];
// $nbpos=0;
// $nbneg=0;
// $nb=0;
// $nbvaleur=readline ("Entrez le nombre de valeurs: ");
// for($i=0;$i<$nbvaleur;$i++){
//     $nb=readline ("Entrez un nombre: ");
//     array_push($array,$nb);
//     }
// for($i=0;$i<count($array);$i++){
//     if($array[$i]>=0){
//         $nbpos++;
//     }
//     else{
//         $nbneg++;
//     }
// }
// Echo ("Il y a dans votre tableau "  . $nbpos . " positifs et " . $nbneg . " negatif");

// Somme valeur tableau
// $array=[4,8,7,9,1,5,4,6];
// echo"somme tableau = " .array_sum($array) . "\n";


// 2 tableaux
// $array1=[4,8,7,9,1,5,4,6];
// $array2=[7,6,5,2,1,3,7,4];
// $som = [];
// foreach (array_keys($array1 + $array2) as $i) {
//     $som[$i] = ($array1[$i] + $array2[$i]);
// } 
// print_r($som);

// The smurf
// $array1=[4,8,7,9,1,5,4,6];
// $array2=[7,6,5,2,1,3,7,4];
// $som = array_sum($array1)*array_sum($array2);
// echo "Le smurf est " . $som;


// +1

// $array=[];
// $array2=[];
// $nb=0;
// $nbvaleur=readline ("Entrez le nombre de valeurs: ");
// for($i=0;$i<$nbvaleur;$i++){
//     $nb=readline ("Entrez un nombre: ");
//     array_push($array,$nb);
//     array_push($array2,$nb+1);
//     }
// print_r($array2);

// + grand

// $array=[];
// $nb=0;
// $nbvaleur=readline ("Entrez le nombre de valeurs: ");
// for ($i=0;$i<$nbvaleur;$i++) {
//     $nb=readline("Entrez un nombre: ");
//     array_push($array, $nb);
// }
//     echo "Le plus grand chiffre est ".max($array)." et sa position est " .array_search(max($array),$array)+1;

// Moyenne

$array=[];
$conteur=0;
$dec=readline('Nombre de notes : ');
for ($i=0;$i<$dec;$i++){
    $nombre = readline ('Entrez les notes :');
    array_push($array,$nombre);
    }
    $moyenne=array_sum($array)/count($array);
    for($i=0;$i<count($array);$i++){
        if($array[$i]>$moyenne){
            $conteur++;
        }
    }
    echo "Moyenne la plus haute " .$conteur;
?>
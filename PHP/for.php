<?php
// 10 a la suite
// $i=readline("Entrez un nombre:");
// while( filter_var($i, FILTER_VALIDATE_INT) === false ) {
//     echo "Ceci n'est pas un nombre\n";
//     $i=readline("Entrez un nombre:");
//   }
//     $max=$i+10;
//     for (;$i <= $max;$i++) {
//         echo"Nbr:".$i."\n";
//     }
// Multiplication 
// $nombre = readline ("Entrez un nombre:");
// while (Filter_var($nombre, FILTER_VALIDATE_INT) === false ) {
//         echo "Ceci n'est pas un nombre\n";
//         $nombre=readline("Entrez un nombre:");
//     }
// $prod = 1;
// for ($i =0 ; $i<=10; $i++) {
//     $prod = $nombre*$i;
//     echo $nombre . ' x ' . $i . ' = ' . $prod  . "\n";
// }

// Somme

// $nombre = readline ("Entrez un nombre:");
// while (Filter_var($nombre, FILTER_VALIDATE_INT) === false ) {
//         echo "Ceci n'est pas un nombre\n";
//         $nombre=readline("Entrez un nombre:");
//     }
// $som = 1;
// for ($i =0 ; $i<=10; $i++) {
//     $som = $nombre+$i;
//     echo $nombre . ' + ' . $i . ' = ' . $som . "\n";
// }
// factorielle

// $nombre = readline ("Entrez un nombre:");
while (Filter_var($nombre, FILTER_VALIDATE_INT) === false ) {
        echo "Ceci n'est pas un nombre\n";
        $nombre=readline("Entrez un nombre:");
    }
// // $fact = 1;
// for ($i = 1; $i <= $nombre; $i++) {
//     $fact = $fact * $i;
// }
// echo 'Le factoriel de ' . $nombre . ' est ' . $fact;

// 20 a la suite

$array=[];
for ($count = 20; $count >0;$count -=1) {
    $count>1;
    $number = readline("Entrez encore " . $count . " nombres :");
    array_push($array, $number);
}
    echo "Le plus grand chiffre est ".max($array)." et sa position est " .array_search(max($array),$array)+1;

// PMU
?>


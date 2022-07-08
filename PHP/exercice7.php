<?php
/*) Formulez un algorithme équivalent à l’algorithme suivant*/

$tata = "OK";
$tutu = 4;
$toto = 3;

// if($tutu > $toto +4 || $tata == "OK"){
//     $tutu = $tutu + 1;
//     echo $tutu;
// }else{
//     $tutu = $tutu - 1;
//     echo $tutu;
// }

if($tutu <= $toto + 4 && $tata <> "OK"){
    $tutu = $tutu - 1;
    echo $tutu;
}else{
    $tutu = $tutu + 1;
    echo $tutu;
}


?>
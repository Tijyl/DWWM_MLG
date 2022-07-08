<?php
// Tableau multi exo 1
// $array=[];
// for ($i=0;$i<6;$i++){
//     echo "\n";
//     for($j=0;$j<13;$j++){
//         $array[$i][$j] = 0;
//         echo $array[$i] [$j];
//     }
// }

$array=[11];
$result=0;
for ($i=0;$i<=11;$i++){
    $array[$i]=7;
}
for ($i=0;$i<=11;$i++){
    for($j=0;$j<=7;$j++){
        $array[$i][$j]=rand(1,100);
    }
}
for($i=0;$i<=11;$i++){
    for($j=0;$j<=7;$j++){
        if($result<$array[$i][$j]){
            $result=$array[$i][$j];
        }
    }
}
echo 'la plus grande valeur du tableau est' .$result;
?>
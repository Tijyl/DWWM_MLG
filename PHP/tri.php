<?php
// triselection
// $longueurTab = readline("Quelle est la longueur du tableau : ");
// $tab = [];
// $temp = 0;

// //Teste si la longueur du tableau est valide
// while($longueurTab<=0 || (intdiv($longueurTab,1) != $longueurTab)){
//     echo "Recommencez \n";
//     $longueurTab = readline("Quelle est la longueur du tableau : ");
// }
// //On dit que le tableau a une longueur de $longueurTab
// $tab[] = $longueurTab;

// //Remplissage du tableau
// for($i=0;$i<$longueurTab;$i++){
//     $tab[$i]=readline("Entrez un nombre : ");
// }
// foreach($tab as $value){
//     echo " ";
//     echo $value;
// }
// echo "\n ";

// //Tri par selection


// for($i=0;$i<count($tab);$i++){
//     for($j=$i+1;$j<count($tab);$j++){
//         if($tab[$j]<$tab[$i]){
//             $temp = $tab[$i];
//             $tab[$i] = $tab[$j];
//             $tab[$j] = $temp;
//         }
//     }
// }

// foreach($tab as $value){
//     echo "  ";
//     echo $value;
//  }
//     tribulle
// $longueurTab = readline("Quelle est la longueur du tableau : ");
// $tab = [];
// $trie = false;


// //Teste si la longueur du tableau est valide
// while($longueurTab<=0 || (intdiv($longueurTab,1) != $longueurTab)){
//     echo "Recommencez \n";
//     $longueurTab = readline("Quelle est la longueur du tableau : ");
// }
// //On dit que le tableau a une longueur de $longueurTab
// $tab[] = $longueurTab;

// //Remplissage du tableau
// for($i=0;$i<$longueurTab;$i++){
//     $tab[$i]=readline("Entrez un nombre : ");
// }
// foreach($tab as $value){
//     echo " ";
//     echo $value;
// }
// echo "\n ";

// // //Tri à bulles

// while(!$trie){
//     $trie = true;
//     for($i=0;$i<count($tab)-1;$i++){
//             if($tab[$i] > $tab[$i+1]){
                
//                 $temp = $tab[$i];
//                 $tab[$i] = $tab[$i + 1];
//                 $tab[$i+1] = $temp;
//                 $trie = false;
//             }
//     }   
// }


// foreach($tab as $value){
//     echo "  ";
//     echo $value;
// }
// croissant / decroissant

// $array=[];
// $nbvaleur=readline ("Entrez le nombre de valeurs: ");
// for ($i=0;$i<$nbvaleur;$i++){
//     $nb=readline("Entrez un nombre:");
//     array_push($array,$nb);
//     // asort($array);
//     arsort($array);
// }

// foreach ($array as  $val){
//     echo "$val\n";
// }

// INVERSE
// $array=[];
// $nbvaleur=readline ("Entrez le nombre de valeurs: ");
// for ($i=0;$i<$nbvaleur;$i++) {
//     $nb=readline("Entrez un nombre:");
//     array_push($array, $nb);
// }
// $reversed = array_reverse($array);
// print_r($array);
// print_r($reversed);


// doublon

// $array=[];
// $nbvaleur=readline ("Entrez le nombre de valeurs: ");
// for ($i=0;$i<$nbvaleur;$i++) {
//     $nb=readline("Entrez un nombre:");
//     array_push($array, $nb);
// }
// if(count(array_unique($array)) != count($array)) {
// 	echo "Il y a un ou des doublon";
// } else {
//     echo "Il n'y a pas de doublon";
// }

// Fusion

$array1=array(1,12,31,40,55);
$array2=array(2,3,4,5,6);
$array3=(array_merge($array1,$array2));
asort($array3);
print_r($array3) ;

?>
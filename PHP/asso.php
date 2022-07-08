<?php
//                                      Nom Ville Age
// $tab=array("Dupont"=>array("Paul","Paris",35),"Durant"=>array("Pierre","Lyon",21),"Smith"=>array("Stan","New York",45));
// 14;
// print_r($tab);

// $tab=array("Dupont"=>array("prenom"=>"Paul","ville"=>"Paris","age"=>27),
// "Durant"=>array("prenom"=>"Pierre","ville"=>"lyon","age"=>21),
// "Smith"=>array("prenom"=>"Stan","ville"=>"New York","age"=>14));
// print_r($tab);


// Foreach

// $tab=array("Dupont"=>array("Paul","Paris",27),
// "Durant"=>array("Pierre","Lyon",21),
// "Smith"=>array("Stan","New york",14
// ));
// foreach($tab as $cle=>$valeur)
// {
// echo "Elément $cle :
// ";
// foreach($valeur as $ind=>$val)
// {
// echo "elément $ind :", $val, "
// ";
// }
// }

// $tab=array("Dupont"=>array("Prenom"=>"Paul","Ville"=>"Paris","Age"=>27),
// "Durant"=>array("Prenom"=>"Pierre","Ville"=>"Lyon","Age"=>35),
// "Smith"=>array("Prenom"=>"Stan","Ville"=>"New York","Age"=>14));
// foreach($tab as $cle=>$valeur)
// {
// echo "" .$cle. "  \n";

// foreach($valeur as $cle2=>$val)
// {
// echo "$cle2  ", $val, "
// ";
// }
// }
// NOTE ECOLE
// $array =[];
// for($i =0;$i<4;$i++){
//     $note = readline("Entrez les notes des étudiants : ");
//     $array['étudiant '.$i+1] = $note;
// }
// $action = readline ("\n Que souhaitez vous faire ?
// \n 1-Modification d’une note.
// \n 2-Supprimer une note.
// \n 3-Déterminer la note maximale et la note minimale.
// \n 4-Afficher le tableau après l’avoir trié par ordre alphabétique.
// \n 5-Classer les étudiants par ordre de mérite et afficher le tableau.
// \n 6-Déterminer la moyenne de la classe.
// \n 7-Afficher le nom de chaque élève et la note correspondante.
// \n 8-Afficher la note de l’étudiant dont le nom sera saisi au clavier. \n");
// switch($action){
//     case 1 :
//         $i = readline ("Quelle note souhaitez vous modifier ? ");
//         $newNote = readline("Nouvelle note ? ");
//         $array['étudiant ' .$i] = $newNote;
//         break;
//     case 2 :
//         $i = readline("Quelle note souhaitez supprimer : ");
//         unset($array['étudiant '.$i]);
//         break;
//     case 3 :
//         $max = max($array);
//         $min = min($array);
//         echo "Note max : ". $max . " Note min : " .$min;
//         break;
//     case 4 :
//         ksort($array);
//         break;
//     case 5 :
//         asort($array);
//         break;
//     case 6 :
//         $moy = array_sum($array)/count($array);
//         echo "Moyenne : " .$moy;
//         break;
//     case 7 :
//         foreach($array as $key => $value){
//                 echo $key . " : ". $value . "\n";
//             }
//         break;
//     case 8 :
//         $i = readline("De quel étudiant souhaitez vous afficher la note ? ");
//         echo "étudiant ".$i. " : " .$array["étudiant ".$i];
// }
// Chommage
$chomage = array( 'Autriche' =>4.9, 'Allemagne' =>9.3 , 'Danemark' =>4.8 , 'Espagne' =>9.4 ,
'France' =>9.7);

foreach($chomage as $key => $value){
        echo $key . "-> Taux de chomage : " .$value ."\n";
}
echo "\n";
echo "Pays avec un taux de chomage inférieur à 5%\n";
echo "\n";

foreach($chomage as $key => $value){
    if($value < 5){
        echo $key . "-> Taux de chomage : " .$value ."\n";
    }
}
echo "\n";
echo "Pays avec le taux de chomage le plus faible\n";
echo "\n";
foreach($chomage as $key => $value){
    if(min($chomage) === $value){
        echo $key . "-> Taux de chomage : " .min($chomage) ."\n";
    }
}
?>

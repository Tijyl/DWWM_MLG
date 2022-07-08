<?php
/*Exercice Compagnie d'assurance....*/

//On va gérer les couleurs d'assurance comme des niveaux
// niveau1= rouge ; niveau2= orange; niveau3=vert; niveau4=bleu

$age = readline("Entrez l'age du conducteur : ");
$permis = readline("Nombre d'année de permis : ");
$accident = readline("Nombre d'années d'accident :");
$fidelite = readline("Nombre d'années de contrat : ");


//On déclare une variable niveau qu'on initialise à 0
$niveau = 0;

//On s'interesse aux 2 critères principaux, chacun fait gagné un point
//si les 2 conditions sont remplies,on ne gagne qu'un point au lieu de 2
if ($age > 25) {
    $niveau = $niveau + 1;
}
if ($permis > 2) {
    $niveau = $niveau + 1; 
}

//on gère le nombre d'accident
//on descend de autant de niveau que d'accidents
$niveau = $niveau - $accident;

//la fidelite fait gagné un niveau si on est assurable
if ($niveau >=0 && $fidelite >=1) {
    $niveau = $niveau + 1;
}

//on informe en fonction du niveau
if($niveau < 0){
    echo  "Vous n'êtes pas assurable";
}elseif($niveau == 0){
    echo "On peut vous assurer sur un contrat rouge";
}elseif($niveau == 1){
    echo "On peut vous assurer sur un contrat orange";
}elseif($niveau == 2){
    echo "On peut vous assurer sur un contrat vert";
}else{
    echo  "On peut vous assurer sur un contrat bleu";
}




?>
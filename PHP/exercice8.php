<?php
/*Cet algorithme est destiné à prédire l'avenir, et il doit être infaillible !
Il lira au clavier l’heure et les minutes, et il affichera l’heure qu’il sera une minute plus tard.
Par exemple, si l'utilisateur tape 21 puis 32, l'algorithme doit répondre :
"Dans une minute, il sera 21 heure(s) 33".*/

$heures = readline("Entrez l'heure :");
$minutes = readline("Entrez les minutes :");

//quelque soit l'heure, on ajoute une minute
$minutes = $minutes + 1;

if($minutes == 60){
    $minutes = 0;
    $heures = $heures + 1;
    if($heures == 24){
        $heures = 0;
    }
}
echo "Dans une minute, il sera " . $heures . " heure(s) et " . $minutes . " minute(s)";


?>
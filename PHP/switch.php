<?php

// Enfant
// $age = readline("Entrez l'âge de enfant : ");
// while (Filter_var($age, FILTER_VALIDATE_INT) === false ) {
//     echo "Ceci n'est pas un nombre\n";
//     $age = readline("Entrez l'âge de enfant : ");
// }
// switch($age){
//     case $age<=12:
//         echo "Catégorie Cadet";
//         break;
//     case $age <=10:
//         echo"Catégorie Minime";
//         break;
//     case $age <=8:
//         echo"catégorie Pupille";
//         break;
//     case $age<=6:
//         echo"Catégorie Poussin";
//         break;
// default:
// echo "Age non pris en compte\n";
// $age = readline("Entrez l'âge de enfant : ");
// }

// Calculatrice
// $first=readline ('Entrez un nombre :');
// $type=readline ("Type du calcule (+,-,*,/):");
// $second=readline ('Entrez un nombre : ');
// switch($type){
//     case $type == "+" :
//         $result=$first + $second;
//         echo"Résultat " .$result;
//         break;
//     case $type == "-" :
//         $result=$first - $second;
//         echo"Résultat " .$result;
//         break;
//     case $type == "*" :
//         $result=$first * $second;
//         echo"Résultat " .$result;
//         break;
//     case $type == "/" :
//         $result=$first / $second;
//         echo"Résultat " .$result;
//         break;
// }

// jeux

$mouv= readline ("Entrez une direction (droite, gauche, haut, bas):");
$win=2;
while ($win!=3) {
    switch ($mouv) {
    case "haut":
    echo"Votre personnage se déplace d'une case vers le haut \n";
    $mouv= readline("Entrez une direction (droite, gauche, haut, bas):");
    $win=0;
    break;

    case "bas":
    echo"Votre personnage se déplace d'une case vers le bas\n";
    $mouv= readline("Entrez une direction (droite, gauche, haut, bas):");
    $win=0;
    break;

    case "droite":
    echo"Votre personnage se déplace d'une case vers la droite\n";
    $mouv= readline("Entrez une direction (droite, gauche, haut, bas):");
    $win=0;
    break;

    case "gauche":
    echo"Votre personnage se déplace d'une case vers la gauche\n";
    $mouv= readline("Entrez une direction (droite, gauche, haut, bas):");
    $win++;
    break;

default:
    echo"Vous vous êtes trompé votre personnage ne bouge pas\n";
    $mouv= readline("Entrez une direction (droite, gauche, haut, bas):");
}
}
echo"Félicitation! Vous avez gagné!";

// richter

// $mag=readline ("Entrez la magnitude (Entre 1 et 9):");
// switch($mag){
//     case 1 :
//         echo"Micro tremblement de terre, non ressentit\n";
//         $mag= readline ("Entrez la magnitude (Entre 1 et 9):");
//     case 2 :
//         echo"Très mineur, non ressenti mais détecté\n";
//         $mag= readline ("Entrez la magnitude (Entre 1 et 9):");
//     case 3 :
//         echo"Mineur, causant rarement des dommages\n";
//         $mag= readline ("Entrez la magnitude (Entre 1 et 9):");
//     case 4 :
//         echo"Léger, secousses notables d'objets à l'intérieur des maisons\n";
//         $mag= readline ("Entrez la magnitude (Entre 1 et 9):");
//     case 5 :
//         echo"Modéré, légers dommages aux édifices bien construits\n";
//         $mag= readline ("Entrez la magnitude (Entre 1 et 9):");
//     case 6 :
//         echo"Fort, destructeur dans des zones allant jusqu'à 180 kilomètres à la ronde si elles sontpeuplées\n";
//         $mag= readline ("Entrez la magnitude (Entre 1 et 9):");
//     case 7 :
//         echo" Majeur, dommages modérés à sévères dans des zones plus vastes\n";
//         $mag= readline ("Entrez la magnitude (Entre 1 et 9):");
//     case 8 :
//         echo"Important, dommages sérieux dans des zones à des centaines de kilomètres à la ronde\n";
//         $mag= readline ("Entrez la magnitude (Entre 1 et 9):");
//     case 9 :
//         echo"Dévastateur, dévaste des zones sur des milliers de kilomètres à la ronde\n";
//         $mag= readline ("Entrez la magnitude (Entre 1 et 9):");
//     default:
//         echo"Saisie incorect\n";
//         $mag= readline ("Entrez la magnitude (Entre 1 et 9):");

// }

?>
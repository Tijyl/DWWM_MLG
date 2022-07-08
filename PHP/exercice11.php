<?php
/* Les habitants de Zorglub paient l’impôt selon les règles suivantes :
Les hommes de plus de 20 ans paient l’impôt
Les femmes paient l’impôt si elles ont entre 18 et 35 ans
Les autres ne paient pas d’impôt
Le programme demandera donc l’âge et le sexe du Zorglubien, et se prononcera donc
ensuite sur le fait que l’habitant est imposable.*/

$age = readline("Donnez votre age : ");
$genre = readline("Donnez votre genre (h/f) : ");

if (($genre == "h" && $age > 20) || ($genre == "f" && $age > 18 && $age < 35)){
    echo "Imposable";
}else{
    echo "Pas imposable";
}


?>
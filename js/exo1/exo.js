// 1°) A partir des variables suivantes, inverser leur valeur :
// • A = 5
// • B = 10

// let A=5;
// let B= 10;
// let temp;
// console.log("Avant inversion");
// console.log("A : " + A);
// console.log("B : "+ B);
// temp=A;
// A=B;
// B=temp;
// console.log("Apres inversion");
// console.log("A : " + A);
// console.log("B : "+ B);



// 2°) Réaliser l’affichage : A partie des variables
// • Nom : Toto
// • Age : 30
// • Homme
// Affichage
// Nom : Toto
// Age : 30
// Sexe : homme

// let nom = "toto";
// let age = 30;
// let homme = true;
// console.log("Nom : " + nom);
// console.log(`Age : ${age}`);
// if(homme){
//     console.log("Sexe : Homme")
// }else{
//     console.log("Sexe : Femme")
// }



// 3°) Réaliser un programme permettant à l’utilisateur de saisir la puissance de 2 qu’il souhait
// afficher

// let readline = require("readline-sync");
// const PUISSANCE = 2;
// let saisie = parseInt(readline.question("Veuillez saisir la puissance : "));
// console.log(PUISSANCE + " à la puissance " + saisie +" = "+Math.pow(PUISSANCE,saisie));


// Vous devez réaliser un programme permettant de saisir le nom, le prénom et l’âge d’un
// utilisateur

// let readline = require("readline-sync");
// let nom = readline.question("Quel est votre nom : ");
// let prenom = readline.question("Quel est votre prenom : ");
// let age = parseInt(readline.question("Quel est votre age : "));

// let txt = "-------------------------------\n";
// txt += "----------Bienvenue------------\n";
// txt += "-------------------------------\n";
// txt += "Votre nom est : " + nom + "\n";
// txt += "Votre prenom est : " + prenom + "\n";
// txt += "Votre age est : " + age + "\n";
// console.log(txt);

// Table de multiplication

// let readline = require("readline-sync");
// let saisie = parseInt(readline.question ("Quelle table de multiplication voulez-vous afficher : "));

// for(let i=1 ;i<=10;i++){
//     let resultat = saisie * i;
//     console.log(saisie + " * " + i + " = " + resultat);
// }

// 6°) Saisie d’un chiffre et vérification de sa valeur
// • Permettre à l’utilisateur de réaliser une saisie clavier
// • Si la saisie n’est pas un chiffre, l’utilisateur doit recommencer

let readline = require("readline-sync");
let saisie = parseInt(readline.question("Quel nombre voulez-vous saisir : "));

let chiffreSaisie = false;

while(!chiffreSaisie){
    if(isNaN(saisie)){
        console.log("Veuillez recommencer la saisie, vous devez saisir un nombre :");
    }else{
        console.log("C'est un chiffre");
        chiffreSaisie = true;
    }
}

console.log("Le chiffre saisi est : " + saisie);
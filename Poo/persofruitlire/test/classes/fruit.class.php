<?php

class Fruit{
    private $nom;
    private $taille;
    private $poids;
    private $image;
    
    public function __construct($nom,$taille,$poids,$image){
        $this->nom = $nom;
        $this->taille = $taille;
        $this->poids = $poids;
        $this->image = $image;
    }
    public function getNom(){return $this->nom;}
    public function getImg(){return $this->image;}
    public function getTaille(){return $this->taille;}
    public function getPoids(){return $this->poids;}

    public function setNom($nom){return $this->nom = $nom;}
    public function setImg($taille){return $this->taille = $taille;}
    public function setAge($image){return $this->image = $image;}
    public function setPoids($poids){return $this->poids = $poids;}

    public function __destruct(){
        echo "Nom : ". $this->nom."</br>";
        echo "Taille : ". $this->taille."</br>";

        echo "Poids : ". $this->poids."</br>";
        echo "<img src = 'sources/images/". $this->image ." 'alt='".$this->image ."' /></br>";

    }
}
?>

<!-- 1) Définir une classe Livre avec les attributs suivants : Titre, Auteur (Nom complet), Prix.
2) Définir à l’aide des propriétés les méthodes d’accès aux différents attributs de la classe.
3) Définir un constructeur permettant d’initialiser les attributs de la méthode par des valeurs saisies par l’utilisateur.
4) Définir la méthode Afficher ( ) permettant d’afficher les informations du livre en cours.
Écrire un programme testant la classe Livre. -->
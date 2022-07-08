<?php
class Livre{
    private $titre;
    private $auteur;
    private $prix;
    
    public function __construct($titre,$auteur,$prix){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }
    public function getTitre(){return $this->titre;}
    public function getAuteur(){return $this->auteur;}
    public function getPrix(){return $this->prix;}

    public function setTitre($titre){return $this->titre = $titre;}
    public function setImg($auteur){return $this->auteur = $auteur;}
    public function setAge($prix){return $this->prix = $prix;}

    public function __destruct(){
        echo "Titre : ". $this->titre."</br>";
        echo "Auteur : ". $this->auteur."</br>";

        echo "Prix : ". $this->prix."</br>";
    

    }
}
?>
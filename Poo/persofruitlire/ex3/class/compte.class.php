<?php

class Compte{

    private $somme;
    private $taux;

    public function __construct($somme,$taux)
    {
        $this->somme = $somme;
        $this->taux = $taux;
    }

    public function affiche(){
        echo "Somme : ". $this->somme ."</br>";
        echo "Taux : ". $this->taux ."</br>";
    }

    public function interets(){
        $result = $this->somme + ($this->somme * ($this->taux / 100));
        $this->result = $result;
    }

    public function __toString()
    {
        echo "La somme du compte après un an sera de : " .$this->result. "€</br>";
    }
}    
?>
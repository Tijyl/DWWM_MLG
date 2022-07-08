<<?php
 class Compte{

    protected $compte;
    protected $somme;
    protected $taux;

    protected static $attribut = [];

    const COMPTE = "compte";
    const SOMME = "somme";
    const TAUX = "taux";

    //construction
    function __construct($compte, $somme,$taux){
    
        $this->compte = $compte;
        $this->somme = $somme;
        $this->taux = $taux;

        self::$attribut[] = $this;
    }

    public function getCompte(){return $this->compte;}
    public function getSomme(){return $this->somme;}
    public function getTaux(){return $this->taux;}

    public function setCompte($compte){return $this->compte=$compte;}
    public function setCompte($somme){return $this->compte=$somme;}
    public function setCompte($taux){return $this->compte=$taux;}

    private function function__init($compte,$somme,$taux);
        




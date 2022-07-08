<?php 
    class Personnage{

        private $nom;
        private $img;
        private $age;
        private $sexe;
        private $force;
        private $agilite;


        public function __construct($nom,$img,$age,$sexe,$force,$agilite){
            $this->nom = $nom;
            $this->img = $img;
            $this->age = $age;
            $this->sexe = $sexe;
            $this->force = $force;
            $this->agilite = $agilite;
        }

        public function getNom(){return $this->nom;}
        public function getImg(){return $this->img;}
        public function getAge(){return $this->age;}
        public function getSexe(){return $this->sexe;}
        public function getForce(){return $this->force;}
        public function getAgilite(){return $this->agilite;}

        public function setNom($nom){return $this->nom = $nom;}
        public function setImg($img){return $this->img = $img;}
        public function setAge($age){return $this->age = $age;}
        public function setSexe($sexe){return $this->sexe = $sexe;}
        public function setForce($force){return $this->force = $force;}
        public function setAgilite($agilite){return $this->agilite = $agilite;}

        public function display(){
            echo "Nom : ". $this->nom."</br>";
            echo "Age : ". $this->age."</br>";
            if($this->sexe){
                echo "Sexe : Homme </br>";
            } else {
                echo 'Sexe : Femme </br>';
            }
            echo "Force : ". $this->force."</br>";
            echo "Agilité : ".$this->agilite."</br>";
            echo "<img src = 'sources/images/". $this->img ." 'alt='".$this->img ."' /></br>";

        }
    }
    require("common/footer.php");
?>
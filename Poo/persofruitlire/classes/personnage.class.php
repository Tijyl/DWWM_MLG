<?php 
    class Personnage{

        // public $nom = "Luke";
        // public $img = "player.png";
        // public $age = 27;
        // public $sexe = true;
        // public $force = 5;
        // public $agilite = 4;

        public $nom;
        public $img;
        public $age;
        public $sexe;
        public $force;
        public $agilite;


        function __construct($nom,$img,$age,$sexe,$force,$agilite){
            $this->nom = $nom;
            $this->img = $img;
            $this->age = $age;
            $this->sexe = $sexe;
            $this->force = $force;
            $this->agilite = $agilite;
        }

        public function afficherInfo(){
            //$this fait référence à l'objet lui même
            //Chacun des objets est capable d'afficher ses informations
            echo "<b>Nom : </b>" . $this->nom . "<br/>";
            echo "<b>Age :  </b>" . $this->age . "<br/>";
            echo "<b>Sexe : </b>" . $this->sexe . "<br/>";
            echo "<b>Force : </b>" . $this->force . "<br/>";
            echo "<b>Agilité : </b>" . $this->agilite . "<br/>";
        }
        //Méthode pour afficher les images
        public function afficherImage(){
            echo "<div class='gauche'>";
                echo "<img class='fit-picture' src = 'sources/images/". $this->img ." 'alt='".$this->img ."' />";
            echo "</div>";
            echo "<div class='gauche'>";
                //Pour appeler une fonction dans une fonction
                $this->afficherInfo();
            echo "</div>";
            echo "<div class='clearB'></div>";

        }
    }
    ?>

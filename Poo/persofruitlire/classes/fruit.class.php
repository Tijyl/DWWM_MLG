<?php 
class Fruit{

        private $nom;
        private $img;
        private $poid;
        private $prix;
        // Construteur
        function __construct($nom, $img, $poid, $prix) {
            $this->nom= $nom;
            $this->img=$img;
            $this->poid= $poid;
            $this->prix= $prix;
        }
        // Getter
        public function getNom(){return $this->nom;}
        public function getImg(){return $this->img;}
        public function getPoid(){return $this->poid;}
        public function getPrix(){return $this->prix;}
        // Setter
        public function setNom($nom){return $this->nom=$nom;}
        public function setImg($img){return $this->img=$img;}
        public function setPoid($poid){return $this->poid=$poid;}
        public function setPrix($prix){return $this->prix=$prix;}
         //Méthode pour afficher les informations de l'objet (ici mes fruits)
        public function afficherInfo(){
            //$this fait référence à l'objet lui même
            //Chacun des objets est capable d'afficher ses informations
            echo "<b>Nom : </b>" . $this->nom . "<br/>";
            echo "<b>Poid disponible en stock :  </b>" . $this->poid . "<br/>";
            echo "<b>Prix (le kilo) : </b>" . $this->prix . "€<br/>";
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
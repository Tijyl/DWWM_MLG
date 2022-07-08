<?php 
    class Livre{

        private $titre;
        private $img;
        private$auteur;
        
        private$prix;



        function __construct($titre,$img,$auteur,$prix){
            $this->titre = $titre;
            $this->img = $img;
            $this->auteur = $auteur;
            $this->prix = $prix;
            
        }
///////////////////////////////////////////////// GET ///////////////////////////////////
        public function getTitre(){return $this->titre;}
        public function getImg(){return $this->img;}
        public function getAuteur(){return $this->auteur;}
        public function getPrix(){return $this->prix;}

///////////////////////////////////////////////// SET ///////////////////////////////////
        public function setTitre($titre){$this->titre = $titre;}
        public function setImg($img){$this->img = $img;}
        public function setAge($auteur){$this->auteur = $auteur;}

        public function setForce($prix){$this->prix = $prix;}


        public function display(){
            echo "Titre : ". $this->titre."</br>";
            echo "Auteur : ". $this->auteur."</br>";
            echo "Prix : ".$this->prix."</br>";
            echo "<img src = 'sources/images/". $this->img ." 'alt='".$this->img ."' /></br>";

        }
    }
    require("common/footer.php");
?>
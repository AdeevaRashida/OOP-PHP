<?php 

    //public
    class PubCinema{

        public $name = "name";
        public $movies = "movies";
        public $location = "location";

        public function playMovie(){
            return "The Movie is being played";
        }

    }

    $cinema_cgv = new PubCinema();

    $cinema_cgv->name = "CGV Cinema";
    echo $cinema_cgv->playMovie();


    //private
    class PrivCinema{

        private $name = "name";
        private $movies = "movies";
        private $location = "location";

        private function playMovie(){
            return ": The Movie is being played";
        }

        public function setMovieName($name){
            $this->name = $name;
        }
    
        public function getprivate(){
            return $this->name ." ". $this->playMovie();
        }

    }

    $cinema_xxi = new PrivCinema();
    $cinema_xxi->setMovieName("Stranger Things 4");
    echo $cinema_xxi->getprivate();


    //Protected
    class ProCinema{

        protected $name = "Mencuri Raden Saleh";

        protected function playMovie(){
            return "The Movie is being played :";
        }

    }

    class ProCinemaa extends ProCinema{
        public function getMovie(){
            return $this->PlayMovie()." ". $this->name;
        } 
    }

    $cinema_tix = new ProCinemaa();

    echo $cinema_tix->getMovie();


?>
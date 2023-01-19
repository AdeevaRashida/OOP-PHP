<?php 

class Cinema{

    public $name = "name";
    public $movies = "movies";
    public $location = "location";

    public function playMovie(){

    }

    public function buyTickets(){

    }

    public function buyPopcorn(){
        
    }

    public function buyDrinks(){
        
    }

    public function getLabel(){
        return "$this->name". " " ."$this->movies". " " . "$this->location";
    }

}

$cinema_xxi = new Cinema();
$cinema_xxi->name = "Cinema XXI";
$cinema_xxi->movies = "Mencuri Raden Saleh, Avatar 2, Stranger Things 4, The Sandman";
$cinema_xxi->location = "BXChange";

echo $cinema_xxi->getLabel();


?>
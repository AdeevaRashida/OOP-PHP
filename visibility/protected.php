<?php 

    class Mobil2{
        
        protected $namamerek = "Daihatsu";

        protected function helloMobil(){
            return "dari kelas mobil";
        }
        
    }

    //membuat kelas inherintance (warisan / child)
    class Mobil extends Mobil2{
        public function getMobil(){
            return $this->hellomobil()." ". $this->namamerek;
        } 
    }

    $mobil2 = new Mobil();

    echo $mobil2->getMobil();

?>
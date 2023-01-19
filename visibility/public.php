<?php 

class Mobil{

    public $namamerek;

    public function hello(){
        return "dari kelas mobil";
    }

}

$mobil = new Mobil();
echo $mobil->namamerek = "Lamborghini Aventador ";
echo $mobil->hello();

?>
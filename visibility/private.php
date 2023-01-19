<?php 

class Mobil{

    private $namamerek;

    private function hello(){
        return "dari kelas mobil";
    }

    public function setnamamerek($namamerek){
        $this->namamerek = $namamerek;
    }

    public function getprivate(){
        return $this->namamerek ." ". $this->hello();
    }

}

$mobil = new Mobil();

$mobil->setnamamerek("Lamborghini");
echo $mobil->getprivate();

?>
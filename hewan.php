<?php 

    interface HewanInterface{
        public function getJenis();
    }

    abstract class Hewan{
        private $jenis;

        public function setJenis($jenis){
            $this->jenis = $jenis;
        }

        public function getJenis(){
            return $this->jenis;
        }
    }

    class Kambing extends Hewan implements HewanInterface{
    }

    class Harimau extends Hewan implements HewanInterface{ 
    }

    class Singa extends Hewan implements HewanInterface{   
    }

    $kambing = new Kambing();
    $kambing->setJenis('Herbivora');

    $harimau = new Harimau();
    $harimau->setJenis('Karnivora');

    $singa = new Singa();
    $singa->setJenis('Karnivora');

    echo $kambing->getJenis();
    echo PHP_EOL;
    echo $harimau->getJenis();
    echo PHP_EOL;
    echo $singa->getJenis();
    echo PHP_EOL;
?>
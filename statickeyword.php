<?php 

    class Computer{

        public static $processor = "Core i5";

        public static function memutar_video(){
            return "Computer is playing a video" . self::$processor;
        }
        
    }

    echo Computer::$processor;
    echo Computer::memutar_video();


    class Nilai{

        public $angka = 1;

        public function halo(){
            return "Halo". $this->angka++ . "Kali <br>" ;
        }

    }

    $obj = new Nilai();
    echo $obj->halo();
    echo $obj->halo();
    echo $obj->halo();

    echo "<br>";

    $obj2 = new Nilai();
    echo $obj2->halo();
    echo $obj2->halo();
    echo $obj2->halo();

?>
<?php 

    // define('NAMA', 'Adeeva');
    // echo NAMA


    class Laptop{
        const DOLLAR = 14000;

        public function belilaptop($harga){
            return "Beli Laptop Baru RP." . $harga*self::DOLLAR;
        }
    }

    $laptop_baru = new Laptop();
    echo $laptop_baru->belilaptop(5000000);

    //class
    echo Laptop::DOLLAR;

    echo __LINE__;

    function coba(){
        return __FUNCTION__;
    }

    echo coba();

?>
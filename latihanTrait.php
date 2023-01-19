<?php 

    trait keliling{
        public function keliling(){
            echo "Input panjang sisi: ";
            $s = trim(fgets(STDIN));
            echo "Keliling Belah Ketupat adalah: ". $s * 4;
        }
    }

    trait luas{
        public function luas(){
            echo "Input d1: ";
            $d1 = trim(fgets(STDIN));
            echo "Input d2: ";
            $d2 = trim(fgets(STDIN));
            echo "luas Belah Ketupat adalah: ". 0.5 * $d1 * $d2;
        }
    }

    class BelahKetupat{
        use keliling, luas;
    }


    $obj = new BelahKetupat();
    $obj->keliling();
    echo "\n";
    $obj->luas();
?>
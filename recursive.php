<?php 

    // function iteration(int $num, int $index = 1){
    //     echo "Proses ke-{$index}\n";

    //     //istilah mencapai akhir untuk di outputkan
    //     //pada code ($index < $num)

    //     if ($index < $num){
    //         iteration($num, $index + 1);
    //     }
    // }

    // iteration(10)



    //menggunakan pengulangan
    function iteration(int $num){
        for ($i = 1; $i <= $num; $i++){
            echo "Perulangan ke {$i}\n";
        }
    }
    iteration(10)

?>
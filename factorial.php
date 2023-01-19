<?php 

    function factorial($n){
        echo "factorial ({$n}) = factorial (" . ($n - 1) . ") \n";

        if ($n > 2){
            factorial($n - 1);
        }
        
    }

    factorial(5)

?>
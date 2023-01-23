<?php

    // // //menggunakan percabangan biasa
    // // if($num > 0){
    // //     echo 2 / $num;
    // // } else {
    // //     echo 'Valid Number';
    // // }


    // $num = 1;

    // // menggunakan try catch untuk exception handling
    // try{
    //     //main code
    //     if($num == 0){
    //         throw new exception('Valid Number');
    //     }
    //     echo 2 / $num;
    // }catch(Exception $e){
    //     //Error handling
    //     echo $e->getMessage();
    // }




    // class MyException extends Exception{}

    // function exception_handler($exception){
    //     echo "Pesan dari masa depan: ", $exception->getMessage(), "\n";
    // }

    // set_exception_handler('exception_handler');

    // try {
    //     throw new Exception("berusaha");
    // }catch(MyException $e){
    //     echo "Pasti bisa";
    //     echo $e->getMessage();
    // }finally{
    //     echo "Aku bisa ";
    // }



    
    $weather = "Panas";

    // menggunakan try catch untuk exception handling
    try{
        if($weather == "Hujan"){
            echo "Bring an Umbrella";
        } else if($weather == "Panas"){
            echo "Don't bring an Umbrella";
        } else{
            throw new exception(' Check the weather ');
        }
    }catch(Exception $e){
        //Error handling
        echo $e->getMessage();
    }

?>
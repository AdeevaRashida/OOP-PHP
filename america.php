<?php 

    include ('negara/america.php');

    class America{
        public $test;
        public function __construct(){
            $this->test=new \OOPHP\negara\America();
            echo "Capital: ". $this->test->ibukota("Washington D.C.");
            echo "\n";
            echo "Language: ". $this->test->bahasa("English");

        }
    }

    $jalan = new America();

?>
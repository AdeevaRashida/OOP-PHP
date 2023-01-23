<?php 

    class Customer{
        private $firstName = "Adeeva";
        private $lastName = "Rashida";

        public function __call($first, $last){
            $this->firstName = $first;
            $this->lastName = $last;
        }
    }
    
    $customer = new Customer;
    var_dump($customer);
?>
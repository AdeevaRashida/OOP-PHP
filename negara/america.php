<?php 

    namespace OOPHP\negara;

    class America{
        public $ibukota;
        public $bahasa;
        
        public function ibukota($ibukota){
            $this->ibukota= $ibukota;
            return $this->ibukota;
        }

        public function bahasa($bahasa){
            $this->bahasa= $bahasa;
            return $this->bahasa;
        }
    }

?>
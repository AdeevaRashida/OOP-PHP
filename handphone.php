<?php 

    class Handphone{
        public $jumlah_pulsa;

        public function __construct($pulsa)
        {
            $this->jumlah_pulsa = $pulsa;
        }

        public function mengirimPesan($tarif, $jumlah_pesan = 1){

            $this->jumlah_pulsa -= $tarif*$jumlah_pesan;

        }

        public function __destruct()
        {
            echo "Jumlah Pulsa Sekarang : ";
            echo $this->jumlah_pulsa;
        }

    }

    $hp_maryam = new Handphone(5000);

    echo "Jumlah Pulsa Maryam Diawal : ";
    echo $hp_maryam->jumlah_pulsa;
    echo "<br>";

    $hp_maryam->mengirimPesan(200);

?>
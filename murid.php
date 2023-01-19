<?php 

    class Murid{

        public $nis, $nama, $kelas;

        public function set_nis($nis_murid){
            $this->nis = $nis_murid;
            return $this;
        }

        public function set_nama($nama_murid){
            $this->nama = $nama_murid;
            return $this;
        }

        public function set_kelas($kelas_murid){
            $this->kelas = $kelas_murid;
            return $this;
        }

        public function get_bio(){
            return "Nama saya adalah " . $this->nama . " dengan NIS " . $this->nis . " kelas "  . $this->kelas;
        }

    }

    $murid_idn = new Murid();
    $murid_idn->set_nis(1177050079);
    $murid_idn->set_nama("Maryam");
    $murid_idn->set_kelas("10 rpl");
    echo $murid_idn->get_bio();

    echo PHP_EOL;

    $murid_idn2 = new Murid();
    echo $murid_idn2->set_nis(1177050080)->set_nama("azkiya")->set_kelas("10 rpl")->get_bio();

?>
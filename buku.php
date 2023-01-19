<?php 

    class Buku{
        public $judul = "judul";
        public $penulis = "penulis";
        public $penerbit = "penerbit";
        public $harga = 0;

        public function __construct($judul, $penulis, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function __destruct()
        {
            echo "Destruct is being executed";
        }

        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }

    }

    $buku1 = new Buku("Atomic Habit", "James Clear", "Penguin Random House", 100000);
    // $buku1->judul = "Atomic Habit";
    // $buku1->penulis = "James Clear";
    // $buku1->penerbit = "Penguin Random House";
    // $buku1->harga = "100000";


    $buku2 = new Buku("Insecurity", "Alvi Syahrin", "Alvi Ardhi Publishing", 99000);
    // $buku2->judul = "Insecurity";
    // $buku2->penulis = "Alvi Syahrin";
    // $buku2->penerbit = "Alvi Ardhi Publishing";
    // $buku2->harga = 99000;

    echo "Buku: " . $buku1->getLabel();
    echo "<br>";
    echo "Buku: " . $buku2->getLabel();
    echo "<br>";
?>
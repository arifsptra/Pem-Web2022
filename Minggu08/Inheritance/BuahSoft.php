<?php
require_once "Buah.php";
class BuahSoft extends Buah{
    public $berat;

    // Override
    public function __construct($nama, $warna, $berat){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
    }

    public function message(){
        echo "Buah Kategori Soft Fruits: <br />";
    }

    public function intro(){
        echo "{$this->nama}, {$this->warna}, berat: {$this->berat}ons<br />";
    }
}
?>
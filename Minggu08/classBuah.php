<?php
class Buah {
    // Properties
    public $nama;
    public $warna;

    // Contructor
    function __construct($nama){
        $this->nama = $nama;
    }

    // Method
    function setNama($nama){
        $this->nama = $nama;
    }
    function getNama(){
        return $this->nama;
    }

    // Destructor
    function __destruct(){
        echo "Buah {$this->nama} telah dihancurkan";
    }
}
?>
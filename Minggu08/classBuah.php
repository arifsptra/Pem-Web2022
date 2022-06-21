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

    // Access Modified
    public $var1; // accessible to anyone
    private $var2; // can only be accessed in class/local only
    protected $var3; // can be accessed within a class and by classes that derive from that class
}
?>
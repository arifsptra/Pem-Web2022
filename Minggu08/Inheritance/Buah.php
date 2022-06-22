<?php 
class Buah{
    public $nama;
    public $warna;
    public function __construct($nama, $warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }

    public function intro(){
        echo "Nama Buah: {$this->nama}, Warna: {$this->warna}<br />";
    }

    protected function printManfaat(){
        echo "{$this->nama}, menghasilkan vitamin alami<br />";
    }
}
?>
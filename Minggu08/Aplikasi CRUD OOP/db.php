<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'S3cur3@$');
define('DB_NAME', 'dborder');

class Database{
    public $conn;
    function __construct(){
        $this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    }
    public function insProduk($id, $nama, $hrg, $jml, $ket, $foto){
        $sql = "INSERT INTO barang (id, nama, hrg, jml, ket, foto) VALUES ('$id', '$nama', '$hrg', '$jml', '$ket', '$foto')";
        $hasil = $this->conn->query($sql);
        return $hasil;
    }
    public function produkAll(){
        $sql = "SELECT * FROM barang";
        $hasil = $this->conn->query($sql);
        return $hasil;
    }
    public function getFoto($id){
        $sql = "SELECT * FROM barang WHERE id='$id'";
        $hasil = $this->conn->query($sql);
        while($row=$hasil->fetch_assoc()){
            $foto = $row['foto'];
        }
        return $foto;
    }
    public function produk($id){
        $sql = "SELECT * FROM barang WHERE id='$id'";
        $hasil = $this->conn->query($sql);
        return $hasil;
    }
    public function updProduk($id, $nama, $hrg, $jml, $ket, $foto){
        if($foto==""){
            $sql = "UPDATE barang SET nama = '$nama', hrg = '$hrg', jml = '$jml', ket = '$ket', WHERE id='$id'";
        }else {
            $sql = "UPDATE barang SET nama = '$nama', hrg = '$hrg', jml = '$jml', ket = '$ket', foto = '$foto' WHERE id='$id'";
        }
        $hasil = $this->conn->query($sql);
        return $hasil;
    }
    public function delProduk($id){
        $sql = "DELETE FROM barang WHERE id='$id'";
        $hasil = $this->conn->query($sql);
        return $hasil;
    }
}
?>
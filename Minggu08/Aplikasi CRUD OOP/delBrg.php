<?php
require_once "db.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $db = new Database();
    $foto = $db->getFoto($id);
    $hasil = $db->delProduk($id);
    if($hasil){
        if($foto!=""){
            unlink("img/".$foto);
        }
        header("location:produk.php");
    }
    else{
        echo "Hapus Data Gagal";
    }
}
?>
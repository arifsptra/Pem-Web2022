<?php
require_once 'db.php';
include "uploadFoto.php"; 
$id = $_POST['tid'];
$nama = $_POST['tnama'];
$hrg = $_POST['thrg'];
$ket = $_POST['tket'];
$jml = $_POST['tjml'];
if(upload_foto($_FILES["foto"])){
    $foto = $_FILES['foto']["name"];
    $hasil = "INSERT INTO barang (id, nama, hrg, jml, ket, foto) VALUES ('$id', '$nama', '$hrg', '$jml', '$ket', '$foto')";
    if($hasil){
      header("location:produk.php");

    }else {
      echo "Gagal Tambah Data";
    }
}else {
    echo "Sorry, error upload file";
}
?>
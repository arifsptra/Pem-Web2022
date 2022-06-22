<?php
include "uploadFoto.php";
require_once "db.php";
$db = new Database();

$id = $_POST['id'];
$nama = $_POST['tnama'];
$hrg = $_POST['thrg'];
$ket = $_POST['tket'];
$jml = $_POST['tjml'];
$foto_lama = $_POST['foto_lama'];
$foto = "";

if(isset($_POST['ubah_foto'])){
    if(upload_foto($_FILES["foto"])){
        $foto = $_FILES["foto"]["name"];
        $hasil = $db->updProduk($id, $nama, $hrg, $jml, $ket, $foto);
        if($conn -> query($hasil) === TRUE){
            if(is_file("img/".$foto_lama)){
                unlink("img/".$foto_lama);
            }
        }
    }else {
        $qry = false;
        echo "Foto Gagal Upload";
    }
}else {
    $hasil->$db->updProduk($id, $nama, $hrg, $jml, $ket, $foto);
}
header("location:produk.php");
?>
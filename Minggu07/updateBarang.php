<?php
    include "connect.php";
    include "uploadFoto.php";
    $id = $_POST['tid'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $keterangan = $_POST['keterangan'];
    $foto_lama = $_POST['foto_lama'];
    $qry = true;
    $flagFoto = true;
    if(isset($_POST['ubah_foto'])){
        if(upload_foto($_FILES["foto"])){
            $foto = $_FILES["foto"]["name"];
            $sql = "UPDATE barang SET nama = '$nama', harga = '$harga', stok = '$stok', keterangan = '$keterangan', foto = '$foto' WHERE id = '$id'";
        }else{
            $qry = false;
            echo "Upload Foto Gagal";
        }
    }else {
        $sql = "UPDATE barang SET nama = '$nama', harga = '$harga', stok = '$stok', keterangan = '$keterangan' WHERE id = '$id'";
        $flagFoto = false;
    }
    if($qry==true){
        if($connect->query($sql) === TRUE){
            if(is_file("img/".$foto_lama) && ($flagFoto==true)){
                unlink("img/".$foto_lama);
                $connect->close();
                header("location:index.php");
            }else {
                $connect-> close();
                header("location:index.php");
            }
        }
    }
?>
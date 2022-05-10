<?php
    include "connect.php";
    include "uploadFoto.php";
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $keterangan = $_POST['keterangan'];
    
    if(upload_foto($_FILES["foto"])){
        $foto = $_FILES["foto"]["name"];
        $sql = "INSERT INTO barang (id, nama, harga, stok, keterangan, foto) VALUES ('$id', '$nama', '$harga', '$stok', '$keterangan', '$foto')";
        if($connect->query($sql)===TRUE){
            $connect->close();
            header("location:index.php");
        }else{
            $connect->close();
            echo "New record failed";
        }
    }else {
        echo "Sorry...";
    }
?>
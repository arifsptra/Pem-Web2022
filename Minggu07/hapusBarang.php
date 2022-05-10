<?php
    include "connect.php";
    $id = $_GET['id'];
    $sql = "SELECT foto FROM barang WHERE id = '$id'";
    $hasil = $connect->query($sql);
    while($row=$hasil->fetch_assoc()){
        $foto = $row['foto'];
    }
    if($foto != ""){
        unlink("img/".$foto);
    }
    $sql = "DELETE FROM barang WHERE id='$id'";
    if($connect->query($sql)===TRUE){
        header("location:index.php");
    }
    $connect->close();
    echo "New Record Failed";
?>
<?php
    include "./connect.php";
    $id = $_GET['id'];
    $sql = "SELECT addPhoto FROM produk WHERE id = '$id'";
    $hasil = $conn->query($sql);
    while($row=$hasil->fetch_assoc()){
        $addPhoto = $row['addPhoto'];
    }
    if($addPhoto != ""){
        unlink("../img/".$addPhoto);
    }
    $sql = "DELETE FROM produk WHERE id='$id'";
    if($conn->query($sql)===TRUE){
        header("location:../index.php?status=berhasilHapusProduk");
    }
    $conn->close();
    echo "New Record Failed";
?>

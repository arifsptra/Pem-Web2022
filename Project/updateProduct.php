<?php
    include "./config/connect.php";
    include "./config/addPhoto.php";
    $foto_lama = $_POST['foto_lama'];
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $category = $_POST['category'];
    $brandName = $_POST['brandName'];
    $descr = $_POST['descr'];
    $minim = $_POST['minim'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $qry = true;
    $flagFoto = true;
    if(isset($_POST['ubah_foto'])){
        if(addPhoto($_FILES["addPhoto"])){
            $addPhoto = $_FILES["addPhoto"]["name"];
            $sql = "UPDATE produk SET productName = '$productName', productDescription = '$productDescription', category = '$category', brandName = '$brandName', descr = '$descr', minim = '$minim', price = '$price', stock = '$stock', addPhoto = '$addPhoto' WHERE id = '$id'";
        }else{
            $qry = false;
            echo "Upload Foto Gagal";
        }
    }else {
        $sql = "UPDATE produk SET productName = '$productName', productDescription = '$productDescription', category = '$category', brandName = '$brandName', descr = '$descr', minim = '$minim', price = '$price', stock = '$stock' WHERE id = '$id'";
        $flagFoto = false;
    }
    if($qry==true){
        if($conn->query($sql) === TRUE){
            if($conn -> query($sql) === TRUE){
                $conn -> close();
                header('location: ./index.php?status=berhasilTambahProduk');
              }else {
                $conn -> close();
                header('location: ./index.php?status=gagalTambahProduk');
              }
            }else {
              echo "<p>Sorry, File gagal diupload.</p>";
        }
    }
?>
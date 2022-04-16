<?php
  include "../Config/connect.php";
  include "../Config/addPhoto.php";
  $productName = $_POST['productName'];
  $productDescription = $_POST['productDescription'];
  $category = $_POST['category'];
  $brandName = $_POST['brandName'];
  $descr = $_POST['descr'];
  $minim = $_POST['minim'];
  $price = $_POST['price'];
  $stock = $_POST['stock'];
       
  if(addPhoto($_FILES["addPhoto"])){
    $addPhoto = $_POST['addPhoto']["name"];
    $sql = "INSERT INTO product (addPhoto, productName, productDescription, category, brandName, descr, minim, price, stock) VALUES ('$addPhoto', '$productName', '$productDescription', '$category', '$brandName', '$descr', '$minim', '$price', '$stock')";
    if($conn -> query($sql) === TRUE){
      $conn -> close();
      header('location: ../Pages/inputProduct.php?status=berhasilTambahProduk');
    }else {
      $conn -> close();
      header('location: ../Pages/inputProduct.php?status=gagalTambahProduk');
    }
  }else {
    echo "<p>Sorry, File gagal diupload.</p>";
  }
?>
<!-- <?php
    include "./config/connect.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id='$id'";
    $hasil = $conn->query($sql);
    while($row=$hasil->fetch_assoc()){
        $addPhoto = $row['addPhoto'];
        $productName = $row['productName'];
        $productDescription = $row['productDescription'];
        $category = $row['category'];
        $brandName = $row['brandName'];
        $descr = $row['descr'];
        $minim = $row['minim'];
        $price = $row['price'];
        $stock = $row['stock'];
    }
?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta author="Arif Saputra" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,500;1,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/09bdcabb66.js" crossorigin="anonymous"></script>

    <!-- My Style CSS -->
    <link rel="stylesheet" href="./css/main.css" />

    <!-- Title -->
    <link rel="icon" href="./img/iLogo.svg" />
    <title>Kutani | Platform Pembantu Petani</title>
  </head>
  <body>
    <!-- Start Navbar -->
    <header id="navbar">
      <div class="container">
        <div class="navLeft">
          <div class="navLogo">
            <a href="index.php"><img src="./img/logoKutani.svg" alt="kutani" /></a>
          </div>
        </div>
        <div class="navRight">
          <div class="burger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
          <div class="bg-sidebar"></div>
          <ul class="sidebar">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="product.php" class="active">Produk</a></li>
            <li><a href="inputProduct.php">Input Produk</a></li>
          </ul>
        </div>
      </div>
    </header>
    <!-- End Navbar -->
    <section id="addProduct">
      <div class="container">
        <div class="servHead">
          <h2>EDIT PRODUK KAMU</h2>
          <div class="servLine"></div>
        </div>
        <form action="./config/updateProduct.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id">
          <label for="addPhoto">
            <a class="addPhoto" rel="nofollow"><i class="fa-solid fa-paperclip"></i> Ubah Foto</a>
          </label>
          <input class="ifoto" type="file" id="addPhoto" name="addPhoto" /><br />
          <input class="cek" type="checkbox" name="ubah_foto" value="true" />Checklist Jika Ingin Mengubah Foto<br />
          <label for="productName">Nama Produk</label><br />
          <input type="text" id="productName" name="productName" value="<?= $productName; ?>" required /><br />
          <label for="productDescription">Deskripsi</label><br />
          <textarea name="productDescription" id="productDescription" cols="30" rows="4" value="<?= $productDescription; ?>" required></textarea><br />
          <label for="category">Kategori</label><br />
          <select name="category" id="catergory" value="<?= $category ?>" required>
            <option value="Pilih Kategori" selected disabled>Pilih Kategori</option>
            <option value="biji-bijian">Biji Bijian</option>
            <option value="buah">Buah</option>
            <option value="daging">Daging</option>
            <option value="ikan">Ikan</option>
            <option value="makananPokok">Makanan Pokok</option>
            <option value="sayuran">Sayuran</option></select
          ><br />
          <label for="brandName">Merk</label><br />
          <input type="text" id="brandName" name="brandName" value="<?= $brandName; ?>" required /><br />
          <label for="descr">Jumlah Produk /kg</label><br />
          <input type="number" id="descr" name="descr" value="<?= $descr; ?>" /><br />
          <label for="minim">Minimal Beli</label><br />
          <input type="text" id="minim" name="minim" value="<?= $minim; ?>" required /><br />
          <label for="price">Harga /kg</label><br />
          <input type="number" id="price" name="price" value="<?= $price; ?>" required /><br />
          <label for="stock">Stok</label><br />
          <input type="number" name="stock" id="stock" value="<?= $stock; ?>" required /><br />
          <input type="submit" value="Edit Produk" id="submit" class="submit" />
        </form>
      </div>
    </section>
    <!-- Start Footer -->
    <div class="footMaker">
      <strong>© 2022 Arif Saputra | <a href="bantuan.php">Bantuan</a></strong>
    </div>
    <!-- End Footer -->

    <!-- js -->
    <script src="./js/navbar.js"></script>
  </body>
</html>

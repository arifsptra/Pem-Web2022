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
    <link rel="stylesheet" href="../Style/main.css" />

    <!-- Title -->
    <link rel="icon" href="../Images/iconKutani.png" />
    <title>Kutani | Platform Pembantu Petani</title>
  </head>
  <body>
    <!-- Start Navbar -->
    <header id="navbar">
      <div class="container">
        <div class="navLeft">
          <div class="navLogo">
            <a href="../Pages/index.php"><img src="../Images/logoKutani.svg" alt="kutani" /></a>
          </div>
        </div>
        <div class="navRight">
          <div class="navList">
            <ul>
              <li><a href="../Pages/index.php">Home</a></li>
              <li><a href="../Pages/product.php">Product</a></li>
              <li><a href="../Pages/community.php">Community</a></li>
              <li><a href="../Pages/article.php">Article</a></li>
              <li><a href="../Pages/about.php">About</a></li>
            </ul>
          </div>
          <div class="navIcon">
            <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
          </div>
          <div class="navLine"></div>
          <div class="navButton">
            <button class="signIn">
              <a href="../Pages/Reg/in.php">Sign In</a>
            </button>
            <button class="signUp">
              <a href="../Pages/Reg/up.php">Sign Up</a>
            </button>
          </div>
        </div>
      </div>
    </header>
    <!-- End Navbar -->
    <!-- Start Add Product -->
    <section id="addProduct">
      <div class="container">
        <div class="servHead">
          <h2>TAMBAH PRODUK KAMU</h2>
          <div class="servLine"></div>
        </div>
        <form action="../Config/inputProduct.php" method="POST" enctype="multipart/form-data">
          <label for="addPhoto">
            <a class="addPhoto" rel="nofollow"><i class="fa-solid fa-paperclip"></i> Tambah Foto</a>
          </label>
          <input type="file" id="addPhoto" name="addPhoto" /><br />
          <label for="productName">Nama Produk</label><br />
          <input type="text" id="productName" name="productName" required /><br />
          <label for="productDescription">Deskripsi</label><br />
          <textarea name="productDescription" id="productDescription" cols="30" rows="4" required></textarea><br />
          <label for="category">Kategori</label><br />
          <select name="category" id="catergory" required>
            <option value="Pilih Kategori" selected disabled>Pilih Kategori</option>
            <option value="biji-bijian">Biji Bijian</option>
            <option value="buah">Buah</option>
            <option value="daging">Daging</option>
            <option value="ikan">Ikan</option>
            <option value="makananPokok">Makanan Pokok</option>
            <option value="sayuran">Sayuran</option></select
          ><br />
          <label for="brandName">Merk</label><br />
          <input type="text" id="brandName" name="brandName" required /><br />
          <label for="descr">Jumlah Produk /kg</label><br />
          <input type="number" id="descr" name="descr" /><br />
          <label for="minim">Minimal Beli</label><br />
          <input type="text" id="minim" name="minim" required /><br />
          <label for="price">Harga /kg</label><br />
          <input type="number" id="price" name="price" required /><br />
          <label for="stock">Stok</label><br />
          <input type="number" name="stock" id="stock" required /><br />
          <input type="submit" value="Tambah Produk" id="submit" class="submit" />
        </form>
      </div>
    </section>
    <!-- End Add Product -->
    <!-- Start Footer -->
    <div class="footMaker">
      <strong>© 2022 Arif Saputra | <a href="../Pages/bantuan.php">Bantuan</a></strong>
    </div>
    <!-- End Footer -->
  </body>
</html>

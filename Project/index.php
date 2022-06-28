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
    <link rel="icon" href="./img/iconKutani.png" />
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
            <li><a href="index.php" class="active">Beranda</a></li>
            <li><a href="product.php">Produk</a></li>
            <li><a href="inputProduct.php">Input Produk</a></li>
          </ul>
        </div>
      </div>
    </header>
    <!-- End Navbar -->
    <!-- Start Hero -->
    <section id="hero">
      <div class="container">
        <div class="heroText">
          <h1>Pemasok komoditas pertanian di seluruh dunia</h1>
          <p>Membantu petani untuk meningkatkan hasil komoditas pertanian di Kabupaten Pati – Indonesia</p>
        </div>
      </div>
    </section>
    <!-- End Hero -->
    <!-- Start Service -->
    <section id="service">
      <div class="container">
        <div class="servHead">
          <h2>LAYANAN KAMI</h2>
          <div class="servLine"></div>
        </div>
        <div class="servMain">
          <div class="servCol">
            <i class="fa-solid fa-user"></i>
            <h3>Merek sendiri</h3>
            <p>Anda dapat menjual produk khusus menggunakan merek anda sendiri</p>
          </div>
          <div class="servCol">
            <i class="fa-solid fa-heart"></i>
            <h3>Komitmen</h3>
            <p>Kami akan terus memberikan yang terbaik kepada anda sepanjang waktu</p>
          </div>
          <div class="servCol">
            <i class="fa-solid fa-newspaper"></i>
            <h3>Memperkenalkan</h3>
            <p>Upload produk anda agar dapat dijangkau dan diketahui oleh banyak orang</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service -->
    <!-- Start Product -->
    <section id="product">
      <div class="container">
        <div class="prodHead">
          <h2>PRODUK KAMI</h2>
          <div class="prodLine"></div>
        </div>
        <div class="prodMain">
          <?php 
            require_once("./config/connect.php");
              $sql = mysqli_query($conn, "SELECT * FROM produk");
            ?>
            <?php
              for($i = 0; $i < 5; $i++){
                $row = mysqli_fetch_array($sql);
            ?>
          <div class="prodCol">
            <a href="">
              <img src="./img/p01.png" alt="product" />
              <div class="prodDesc">
                <p class="prodMerk">KUTANI</p>
                <h4 class="prodHead">Wortel</h4>
                <p class="prodKet">1 pcs/kg</p>
                <p class="prodPrice">Rp. 10000 /kg</p>
                <p class="prodKet2">min. 10 kg</p>
                <div class="buttonAct">
                  <button class="bDel"><a href='hapusBarang.php?id=<?php echo $row["id"] ?>'>Hapus</a></button>
                  <button class="bEdi"><a href='editBarang.php?id=<?php echo $row["id"] ?>'>Edit</a></button>
                </div>
              </div>
            </a>
          </div>
          <?php } ?>
        </div>
        <div class="prodButton">
          <button><a href="product.php">Lihat Lainnya</a></button>
        </div>
      </div>
    </section>
    <!-- End Product -->
    <!-- Start Join -->
    <section id="join">
      <div class="container">
        <div class="joinText">
          <h2>Join Now!</h2>
          <p>Start farming with agricultural experts together with other farmers with our community, and increase your agricultural yield.</p>
        </div>
        <div class="joinButton">
          <button><a href="">Join Now</a></button>
        </div>
      </div>
    </section>
    <!-- End Join -->
    <!-- Start Footer -->
    <footer id="footer">
      <div class="container">
        <div class="footRow">
          <div class="footCol">
            <img src="./img/logoKutaniWhite.svg" alt="kutani" />
            <div class="footInfo">
              <a href="#"><i class="fa-solid fa-phone"></i> +62123456789012</a>
              <a href="#"><i class="fa-solid fa-envelope"></i> info@kutani.id</a>
              <a href="#"><i class="fa-solid fa-location-dot"></i> 59182 Pati, Jawa Tengah - Indonesia</a>
            </div>
          </div>
          <div class="footCol">
            <strong>Ikuti Kami</strong>
            <div class="line"></div>
            <p>Bergabunglah dengan media sosial kami untuk mendapatkan info terbaru tentang pertanian.</p>
            <div class="footMedia">
              <div class="circle">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
              </div>
              <div class="circle">
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
              </div>
              <div class="circle">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
              </div>
              <div class="circle">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="footCol">
            <strong>Peta Situs</strong>
            <div class="line"></div>
            <div class="link">
              <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="product.php">Produk</a></li>
                <li><a href="inputProduct.php">Input Produk</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <div class="footLine"></div>
    <div class="copyright">
      <div class="container">
        <strong class="maker">© 2022 Arif Saputra </strong>
        <strong class="support">Powered by kutani</strong>
      </div>
    </div>

    <!-- js -->
    <script src="./js/navbar.js"></script>
  </body>
</html>

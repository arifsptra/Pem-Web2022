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
    <!-- Start Product -->
    <section id="product" style="padding-top: 8rem;">
      <div class="container">
        <div class="prodMain">
          <?php 
          require_once("./config/connect.php");
            $sql = mysqli_query($conn, "SELECT * FROM produk");
          ?>
          <?php while($row = mysqli_fetch_array($sql)) : ?>
          <div class="prodCol">
            <a href="">
              <img src="./img/<?php echo $row['addPhoto'] ?>" alt="product" />
              <div class="prodDesc">
                <p class="prodMerk"><?php echo $row['brandName'] ?></p>
                <h4 class="prodHead"><?php echo $row['productName'] ?></h4>
                <p class="prodKet"><?php echo $row['descr'] ?> pcs/kg</p>
                <p class="prodPrice">Rp. <?php echo $row['price'] ?> /kg</p>
                <p class="prodKet2">min. <?php echo $row['minim'] ?>Kg</p>
                <div class="buttonAct">
                <button class="bDel"><a href='./config/hapusBarang.php?id=<?php echo $row['id'] ?>'>Hapus</a></button>
                  <button class="bEdi"><a href='editBarang.php?id=<?php echo $row["id"] ?>'>Edit</a></button>
                </div>
              </div>
            </a>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <!-- End Product -->
    <!-- Start Footer -->
    <footer id="footer">
      <div class="container">
        <div class="footRow">
          <div class="footCol">
            <img src="./img/logoKutaniWhite.svg" alt="kutani" />
            <div class="footInfo">
              <a href="#"><i class="fa-solid fa-phone"></i> +62123456789012</a>
              <a href="#"><i class="fa-solid fa-envelope"></i> info@kutani.id</a>
              <a href="#"><i class="fa-solid fa-location-dot"></i> 59182 Pati, Central Java - Indonesia</a>
            </div>
          </div>
          <div class="footCol">
            <strong>Ikuti Kami</strong>
            <div class="line"></div>
            <p>Join our social media to get the latest info about agriculture.</p>
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

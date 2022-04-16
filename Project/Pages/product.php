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
    <section id="category">
        <div class="container">
            <div class="catRow">
                <div class="catCol">
                    <a href="#">Buah</a>
                </div>
                <div class="catCol">
                    <a href="#">Ikan</a>
                </div>
                <div class="catCol">
                    <a href="#">Sayuran</a>
                </div>
                <div class="catCol">
                    <a href="#">Biji BIjian</a>
                </div>
                <div class="catCol">
                    <a href="#">Daging</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Product -->
    <section id="product" style="padding-top: 1rem;">
      <div class="container">
        <div class="prodMain">
          <?php 
          require_once("../Config/connect.php");
            $sql = mysqli_query($conn, "SELECT * FROM product");
          ?>
          <?php while($row = mysqli_fetch_array($sql)) : ?>
          <div class="prodCol">
            <a href="">
              <img src="../Images/<?php echo $row['addPhoto'] ?>" alt="product" />
              <div class="prodDesc">
                <p class="prodMerk"><?php echo $row['brandName'] ?></p>
                <h4 class="prodHead"><?php echo $row['productName'] ?></h4>
                <p class="prodKet"><?php echo $row['descr'] ?> pcs/kg</p>
                <p class="prodPrice">Rp. <?php echo $row['price'] ?> /kg</p>
                <p class="prodKet2">min. <?php echo $row['minim'] ?>Kg</p>
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
            <img src="../Images/logoKutaniWhite.svg" alt="kutani" />
            <div class="footInfo">
              <a href="#"><i class="fa-solid fa-phone"></i> +62123456789012</a>
              <a href="#"><i class="fa-solid fa-envelope"></i> info@kutani.id</a>
              <a href="#"><i class="fa-solid fa-location-dot"></i> 59182 Pati, Central Java - Indonesia</a>
            </div>
          </div>
          <div class="footCol">
            <strong>Follow Us</strong>
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
            <strong>Sitemap</strong>
            <div class="line"></div>
            <div class="link">
              <ul>
                <li><a href="../Pages/index.php">Home</a></li>
                <li><a href="../Pages/product.php">Product</a></li>
                <li><a href="../Pages/community.php">Community</a></li>
                <li><a href="../Pages/article.php">Article</a></li>
                <li><a href="../Pages/about.php">About Us</a></li>
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
  </body>
</html>

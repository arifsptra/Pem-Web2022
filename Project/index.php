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

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

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
          <div class="navList">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="product.php">Product</a></li>
              <li><a href="community.php">Community</a></li>
              <li><a href="article.php">Article</a></li>
              <li><a href="about.php">About</a></li>
            </ul>
          </div>
          <div class="navIcon">
            <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
          </div>
          <div class="navLine"></div>
          <div class="navButton">
            <button class="signIn">
              <a href="Reg/in.php">Sign In</a>
            </button>
            <button class="signUp">
              <a href="Reg/up.php">Sign Up</a>
            </button>
          </div>
        </div>
      </div>
    </header>
    <!-- End Navbar -->
    <!-- Start Hero -->
    <section id="hero">
      <div class="container">
        <div class="heroText">
          <h1>Supplier of agricultural commodities worldwide</h1>
          <p>Helping farmers to increase the yield of agricultural commodities in Pati Regency – Indonesia</p>
        </div>
      </div>
    </section>
    <!-- End Hero -->
    <!-- Start Service -->
    <section id="service">
      <div class="container">
        <div class="servHead">
          <h2>OUR SERVICE</h2>
          <div class="servLine"></div>
        </div>
        <div class="servMain">
          <div class="servCol">
            <i class="fa-solid fa-user"></i>
            <h3>Own Brand</h3>
            <p>You can create custom products using your own brand and monitor your production</p>
          </div>
          <div class="servCol">
            <i class="fa-solid fa-heart"></i>
            <h3>Commitment</h3>
            <p>We will continue to provide the best to our customers and investors all the time</p>
          </div>
          <div class="servCol">
            <i class="fa-solid fa-newspaper"></i>
            <h3>Read Article</h3>
            <p>You can enrich your knowledge by reading articles related to the world of agriculture</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service -->
    <!-- Start Product -->
    <section id="product">
      <div class="container">
        <div class="prodHead">
          <h2>OUR PRODUCT</h2>
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
                <img src="./img/<?php echo $row['addPhoto'] ?>" alt="product" />
                <div class="prodDesc">
                  <p class="prodMerk"><?php echo $row['brandName'] ?></p>
                  <h4 class="prodHead"><?php echo $row['productName'] ?></h4>
                  <p class="prodKet"><?php echo $row['descr'] ?> pcs/kg</p>
                  <p class="prodPrice">Rp. <?php echo $row['price'] ?> /kg</p>
                  <p class="prodKet2">min. <?php echo $row['minim'] ?>Kg</p>
                </div>
              </a>
            </div>
            <?php } ?>
        </div>
        <div class="prodButton">
          <button><a href="product.php">See More</a></button>
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
    <!-- Start Article -->
    <section id="article">
      <div class="container">
        <div class="artMain">
          <div class="artCol">
            <div class="artImg" style="background: url(./img/a01.png)">
              <p class="artHead">Apa Yang Perlu Kita Perhatikan Dalam Memilih Pupuk?</p>
              <time class="artDate">KUTANI | 30 April 2022</time>
            </div>
            <div class="artSni">
              <p class="artSniP">Pupuk merupakan suatu bahan yang memiliki kandungan nutrisi bagi tanaman. Tahukah kamu bahwa setiap pupuk memiliki tujuan dan fungsinya tersendiri?...</p>
              <button><a href="#">Read More</a></button>
            </div>
          </div>
          <div class="artCol">
            <div class="artImg" style="background: url(./img/a03.png)">
              <p class="artHead">Apa Yang Perlu Kita Perhatikan Dalam Memilih Pupuk?</p>
              <time class="artDate">KUTANI | 30 April 2022</time>
            </div>
            <div class="artSni">
              <p class="artSniP">Pupuk merupakan suatu bahan yang memiliki kandungan nutrisi bagi tanaman. Tahukah kamu bahwa setiap pupuk memiliki tujuan dan fungsinya tersendiri?...</p>
              <button><a href="#">Read More</a></button>
            </div>
          </div>
          <div class="artCol">
            <div class="artImg" style="background: url(./img/a02.png)">
              <p class="artHead">Apa Yang Perlu Kita Perhatikan Dalam Memilih Pupuk?</p>
              <time class="artDate">KUTANI | 30 April 2022</time>
            </div>
            <div class="artSni">
              <p class="artSniP">Pupuk merupakan suatu bahan yang memiliki kandungan nutrisi bagi tanaman. Tahukah kamu bahwa setiap pupuk memiliki tujuan dan fungsinya tersendiri?...</p>
              <button><a href="#">Read More</a></button>
            </div>
          </div>
          <div class="artCol">
            <div class="artImg" style="background: url(./img/a03.png)">
              <p class="artHead">Apa Yang Perlu Kita Perhatikan Dalam Memilih Pupuk?</p>
              <time class="artDate">KUTANI | 30 April 2022</time>
            </div>
            <div class="artSni">
              <p class="artSniP">Pupuk merupakan suatu bahan yang memiliki kandungan nutrisi bagi tanaman. Tahukah kamu bahwa setiap pupuk memiliki tujuan dan fungsinya tersendiri?...</p>
              <button><a href="#">Read More</a></button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Article -->
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
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="community.php">Community</a></li>
                <li><a href="article.php">Article</a></li>
                <li><a href="about.php">About Us</a></li>
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

    <!-- File External Javascript -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- My Script JS -->
    <script src="../Script/slideshow.js"></script>
  </body>
</html>

<?php
session_start();
require_once 'db.php';

?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/images/icon.png" type="image/png">
  <title>CineFlix</title>
  <style>
    .preloader {
      bottom: 20px;
      height: 80px;
      width: 80px;
    }

    svg {
      width: 110px;
      height: 110px;
    }

    path {
      stroke: #9ea1a4;
      stroke-width: 0.25;
      fill: #241E20;
    }

    #cloud {
      position: relative;
      z-index: 2;
    }

    #cloud path {
      fill: #efefef;
    }



    @keyframes rotate {
      0% {
        transform: rotateZ(0deg);
      }

      100% {
        transform: rotateZ(360deg);
      }
    }

    /* Rain */
    .rain {
      position: absolute;
      width: 70px;
      height: 70px;
      margin-top: -32px;
      margin-left: 19px;
    }

    .drop {
      opacity: 1;
      background: #9ea1a4;
      display: block;
      float: left;
      width: 3px;
      height: 10px;
      margin-left: 4px;
      border-radius: 0px 0px 6px 6px;
      animation-name: drop;
      animation-duration: 350ms;
      animation-iteration-count: infinite;
    }

    .drop:nth-child(1) {
      animation-delay: -130ms;
    }

    .drop:nth-child(2) {
      animation-delay: -240ms;
    }

    .drop:nth-child(3) {
      animation-delay: -390ms;
    }

    .drop:nth-child(4) {
      animation-delay: -525ms;
    }

    .drop:nth-child(5) {
      animation-delay: -640ms;
    }

    .drop:nth-child(6) {
      animation-delay: -790ms;
    }

    .drop:nth-child(7) {
      animation-delay: -900ms;
    }

    .drop:nth-child(8) {
      animation-delay: -1050ms;
    }

    .drop:nth-child(9) {
      animation-delay: -1130ms;
    }

    .drop:nth-child(10) {
      animation-delay: -1300ms;
    }

    @keyframes drop {
      50% {
        height: 45px;
        opacity: 0;
      }

      51% {
        opacity: 0;
      }

      100% {
        height: 1px;
        opacity: 0;
      }
    }

    .text {
      font-family: Helvetica, 'Helvetica Neue', sans-serif;
      letter-spacing: 1px;
      text-align: center;
      margin-left: -43px;
      font-weight: bold;
      margin-top: 20px;
      font-size: 11px;
      color: #a0a0a0;
      width: 200px;
    }
  </style>
  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/media_query.css">

  <!--
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
</head>

<body>




  <!--
    - main container
  -->
  <div class="container">

    <!--
      - #HEADER SECTION
    -->

    <header class="">
      <div class="navbar">

        <!--
          - menu button for small screen
        -->
        <button class="navbar-menu-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>


        <a href="#" class="navbar-brand">
        </a>


        <div class="navbar-actions">

          <form action="" class="navbar-form">
            <input type="text" name="search" placeholder="Ara" class="navbar-form-search">

            <button class="navbar-form-btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>

            <button class="navbar-form-close">
              <ion-icon name="close-circle-outline"></ion-icon>
            </button>
          </form>


          <button class="navbar-search-btn">
            <ion-icon name="search-outline"></ion-icon>

            <?php
            if (isset($_POST['logout'])) {
              header("Location:admin/index.php");
            }
            ?>

          </button>

          <?php
          if (isset($_SESSION['admin'])) {
            echo '<form action="" method="post">
<button name="logout" class="navbar-signin">
<span>Admin</span>
</button>
</form>';
          } else {
          ?>



            <form action="" method="post">
              <button name="login" class="navbar-signin">
                <span>Admin Girisi</span>
                <ion-icon name="log-in-outline"></ion-icon>
              </button>
            </form>

          <?php
          }
          if (isset($_POST['login'])) {
            echo ("<script> window.location.href='login.php' </script>");
          }
          ?>

        </div>

      </div>

      <?php

      ?>
    </header>





    <!--
      - MAIN SECTION
    -->
    <main>

      <!--
        - #BANNER SECTION
      -->
      <section class="banner">


        <div class="banner-card">

          <img src="./assets/images/John-Wick-3.jpg" class="banner-img" alt="">

          <div class="card-content">
            <div class="card-info">

              <div class="genre">
                <ion-icon name="film"></ion-icon>
                <span>Aksiyon</span>
              </div>

              <div class="year">
                <ion-icon name="calendar"></ion-icon>
                <span>2019</span>
              </div>

          
            </div>

            <h2 class="card-title">John Wick: 3 Parabellum</h2>
          </div>

        </div>


      </section>





      <!--
        - #MOVIES SECTION
      -->
      <section class="movies">

        <!--
          - filter bar
        -->
        <div class="filter-bar">



        </div>


        <!--
          - movies grid
        -->

        <div class="movies-grid">






          <?php

          $movies = getirFilmler();

          if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $movies = Ara($search);
          }

          foreach ($movies as $movie) {
          ?>


            <div class="movie-card">

              <div class="card-head">
                <img src="./assets/images/uploads/<?php echo $movie['foto'] ?>" alt="" class="card-img">

                <div class="card-overlay">

                  <div class="bookmark">
                    <ion-icon name="bookmark-outline"></ion-icon>
                  </div>

                  <div class="rating">
                    <ion-icon name="star-outline"></ion-icon>
                    <span>N/A</span>
                  </div>

                  <div class="play">
                    <ion-icon name="play-circle-outline"></ion-icon>
                  </div>

                </div>
              </div>

              <div class="card-body">
                <h3 class="card-title"><?php echo  $movie['ad'] ?></h3>

                <div class="card-info">
                  
                  <span class="genre"><?php

                                      foreach (getirKategoriler() as $kategori) {
                                        if ($kategori["id"] == $movie['kategori']) {
                                          echo $kategori["Ad"];
                                        }
                                      }

                                      ?>
                    <span class="year"><?php echo  $movie['cikis_yili'] ?></span>
                </div>
              </div>

            </div>


          <?php

          }

          ?>



        </div>


        <section class="category" id="category">

          <h2 class="section-heading">Kategori</h2>

          <div class="category-grid">


            <?php

            foreach (getirKategoriler() as $kategori) {
            ?>
              <div class="category-card">
              <img src="https://images.unsplash.com/photo-1532024802178-20dbc87a312a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bWluaW1hbCUyMGRhcmt8ZW58MHx8MHx8&w=1000&q=80" alt="">  
                <div class="name"><?php echo $kategori["Ad"] ?></div>
              </div>

            <?php
            }
            ?>

          </div>

        </section>






    </main>





    <!--
      - FOOTER SECTION
    -->
    <footer>




      <div class="preloader" style="opacity: 1; ">


        <svg version="1.1" id="cloud" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="10px" viewBox="0 0 10 10" enable-background="new 0 0 10 10" xml:space="preserve">
          <path fill="none" d="M8.528,5.624H8.247c-0.085,0-0.156-0.068-0.156-0.154c0-0.694-0.563-1.257-1.257-1.257c-0.098,0-0.197,0.013-0.3,0.038C6.493,4.259,6.45,4.252,6.415,4.229C6.38,4.208,6.356,4.172,6.348,4.131C6.117,3.032,5.135,2.235,4.01,2.235c-1.252,0-2.297,0.979-2.379,2.23c-0.004,0.056-0.039,0.108-0.093,0.13C1.076,4.793,0.776,5.249,0.776,5.752c0,0.693,0.564,1.257,1.257,1.257h6.495c0.383,0,0.695-0.31,0.695-0.692S8.911,5.624,8.528,5.624z"></path>
        </svg>

        <div class="rain">
          <span class="drop"></span>
          <span class="drop"></span>
          <span class="drop"></span>
          <span class="drop"></span>
          <span class="drop"></span>
          <span class="drop"></span>
          <span class="drop"></span>
          <span class="drop"></span>
          <span class="drop"></span>
          <span class="drop"></span>
        </div>

        <div class="text">
          <?php
          $json = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=kutahya&units=metric&lang=tr&appid=18b7da270bfc7233837e5cb92fd84f38");
          $json = json_decode($json, true);


          echo "<hr>Hava Durumu : ", $json['main']['temp'];


          ?>
        </div>
      </div>






      <div class="footer-content">







        <div class="footer-brand">
          <p class="slogan">



          </p>











        </div>


        <div class="footer-links">


        </div>

      </div>



    </footer>

  </div>





  <!--
    - custom js link
  -->
  <script src="./assets/js/main.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
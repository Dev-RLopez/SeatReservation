<?php
   require_once 'resources/php/init.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="vendor/css/all.css" rel="stylesheet">
    <link href="vendor/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="resources/css/styles.css">
    <link rel="stylesheet" href="resources/css/checkbox.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <title>Cinema Square</title>
  </head>
  <body>
    <header id="home">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <span class="brand"><img class="img-fluid logo"src="resources/img/logo.png" alt="">Cinema Square</span>
          <div class="navbar ml-auto" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="login_page">Sign In</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="container">
        <div class="jumbotron text-center">
          <h1 class="main-h">A theatre you will fall in love with.</h1>
          <p class="small-h">Watch, Repeat, and fall in love.</p>
        </div>
      </div>
    </header>
    <section class="section1" id="showing">
      <div class="container">
      <div class="heading pt-5">
        <p class="ft mb-0">FEATURED</p>
        <span class="header-showing">Now</span>
        <span class="header-showing2">Showing</span>
      </div>
      <?php viewMovs(); ?>
      </div>
    </section>
    <section class="section3">
      <div class="container-fluid pt-5">
        <div class="row">
          <div class="col-lg-6 p-lg-5">
            <div class="sect3-jmb p-0">
              <p class="ft mb-1">BE THE FIRST ONE</p>
              <div class="row pb-2 m-0">
                <h4 class="map-h m-0">FindNearest</h4>
                <h4 class="map-h2 m-0">Branch</h4>
              </div>
              <p class="sypnosis">Here you can find our nearest branch in your area.</p>
                <a class="btn btn-primary btn-lg mt-0 mb-3" href="#" role="button">Learn more</a>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-6">
            <div id="map-container" class="z-depth-1-half map-container" style="height: 500px">
              <<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61776.70117326065!2d120.9445403441018!3d14.596578751727547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca03571ec38b%3A0x69d1d5751069c11f!2sManila%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1619620752267!5m2!1sen!2sph" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <hr class="mb-0 mt-0 hr1">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-6 pt-3">
            <h6>About Cinema Square</h6>
            <p class="ab mb-0 mt-0">Cinema Square Booking System is a PHP/MySQL based seat reservation system allowing reservation in a few easy steps.</p>
          </div>
          <div class="col-lg-3 col-6 pt-3">
            <a class="link-f" href="#"><strong>Links</strong></a>
            <br>
            <a class="link-f" href="#">Screening</a>
            <br>
            <a class="link-f" href="#">Coming Soon</a>
            <br>
            <a class="link-f" href="#">Location</a>
          </div>
          <div class="col-lg-3 col-6 pt-3">
            <a class="link-f" href="#"><strong>Our Social Media</strong></a>
            <br>
              <a class="yt"href="#"><i class="fab fa-youtube"></i>&nbsp;YouTube</a>
              <br>
              <a class="fb"href="#"><i class="fab fa-facebook"></i>&nbsp;Facebook</a>
              <br>
              <a class="ig"href="#"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
          </div>
          <div class="col-lg-3 col-6 pt-3">
            <img class="img-fluid logof"src="resources/img/logo.png" alt="">
          </div>
        </div>
      </div>
    </footer>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/js/baguetteBox.min.js"></script>
    <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
          }
        }
      })
    </script>
  </body>
</html>

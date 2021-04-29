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
        <link rel="stylesheet" href="resources/css/home.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
        <title>Cinema Square</title>
      </head>
      <body>
        <section>
          <div class="container pt-5">
            <br><br><br><br><br>
            <div class="text-center pt-5">
              <span class="header-showing">Admin</span>
              <span class="header-showing2">Tools</span>
            </div>
            <div class="row">
              <div class="col-lg-2 col-md-4 col-sm-4 col-12"></div>
              <div class="col-lg-10 col-md-5 col-sm-12 col-12 pt-3">
                <div class="row text-center">
                  <!-- <div class="col-lg-3 mb-3">
                    <a href="index.php"  class="btn btn-outline-primary">Main Website</a>
                  </div> -->
                  <div class="col-lg-3 mb-3">
                    <a href="addMovie.php"  class="btn btn-outline-primary">Add Movie</a>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <a href="movieAction.php"  class="btn btn-outline-primary">Movie Actions</a>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <!-- <a type="button" name="logout"  class="btn btn-outline-primary">Logout</a> -->
                    <form action="" method="POST">
                    <?php logout(); ?>
                    <input type="submit" name="logout"  class="btn btn-outline-primary" value="Logout">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/js/baguetteBox.min.js"></script>
        <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
      </body>
    </html>

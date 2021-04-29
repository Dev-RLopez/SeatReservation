<?php
   require_once 'resources/php/init.php';
   login();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="vendor/css/all.css" rel="stylesheet">
    <link href="vendor/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/form.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
  <title>Cinema Square</title>
  </head>
  <body>
    <section>
      <div class="container">
      <div class="pt-5 pb-0 mb-0">
          <a class="cancel" href="index.php">Homepage</a>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-12"></div>
          <div class="col-lg-4 col-md-5 col-sm-12 col-12">
            <div class="text-center pb-3">
              <span class="brand"><img class="logo pr-1 mr-1"src="resources/img/logo2.png" alt=""></span>
              <h6 class="pt-2">Cinema Square</h6>
            </div>
            <form action="" method="post">
              <div class="form-group">
                <label for="inputEmail4">Username</label>
                <input type="text" class="form-control" id="inputEmail4" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password"  placeholder="Password">
              </div>
              <input type="submit" class="btn btn-primary btn-block" name="login" value="SIGN IN"/>
            </form>
            <div class="text-center pt-2">
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

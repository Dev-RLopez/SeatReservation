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
    <link rel="stylesheet" href="resources/css/summary.css">
    <link rel="stylesheet" href="resources/css/checkbox.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <section class="section1">
      <div class="container">
        <div class="row text-white">
          <div class="col-lg-3 col-md-3 col-sm-3 col-12"></div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="heading p-0 mb-0">
              <span class="h-1">Booking</span>
              <span class="h-2">Summary</span>
            </div>
            <hr>
            <div class="row text-white">
              <div class="col-lg-6 col-6">
                <h5 class="text-white">Movie:</h5>
                <h5 class="text-white">Iron Man</h5>
              </div>
              <div class="col-lg-6 col-6">
                <h5 class="text-white">Date:</h5>
                <h5 class="text-white">April 21</h5>
              </div>
            </div>
            <!-- <h5 class="text-white">Movie:</h5>
            <h5 class="text-white">Iron Man</h5> -->
            <br>
            <div class="row text-white">
              <div class="col-lg-6 col-6">
                <h5 class="text-white">Time:</h5>
                <h5 class="text-white">10:00 - 12:00</h5>
              </div>
              <div class="col-lg-6 col-6">
                <h5 class="text-white">Seats:</h5>
                <h5 class="text-white">F1</h5>
              </div>
            </div>
            <br>
            <form class="" action="" method="">
              <label for="name">Email Address</label>
              <input type="text" class="form-control form-control-md mb-2" name="name" placeholder="Enter Email" required>
              <input class="btn btn-success float-right mt-2 mb-4" type="submit" name="submit" value="Confirm Booking">
            </form>
          </div>
        </div>
      </div>
    </section>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/js/baguetteBox.min.js"></script>
  </body>
</html>

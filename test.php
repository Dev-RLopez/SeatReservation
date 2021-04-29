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
    <link rel="stylesheet" href="resources/css/timeslot.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <header id="home" style="background-image: linear-gradient(rgba(20, 20, 20, 0.69),rgba(20, 20, 20, 0.69)),url(resources/img/s1.jpg);">
      <div class="container">
        <div class="pb-3 pt-3">
          <a class="cancel" href="#">Cancel</a>
        </div>
        <div class="row no-gutter pt-4">
          <div class="col-lg-6 d-flex flex-row justify-content-center pb-2">
            <div class="jumbotron m-0 p-0 text-center">
              <!-- <img class="img-fluid cs" src="resources/img/s1.jpg"/> -->
              <a type="button" class="cs-btn2 btn-primary btn-lg" href="#"><i class="fab fa-youtube"></i>&nbsp;Watch Trailer</a>
            </div>
            <!-- <img class="img-fluid cs" src="resources/img/s2.jpg"/> -->
          </div>
          <!--  -->
          <div class="col-lg-6 p-3">
            <h4 class="cs-title">Iron Man</h4>
              <h6 class="pg">PG-18</h6>
            <p class="sypnosis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <form class="" action="" method="">
              <label for="time">Select Screening</label>
              <select class="form-control form-control-lg mb-2  " name="date">
                <option>Wednesday, April 21</option>
                <option>Thursday, April 22</option>
                <option>Friday, April 23</option>
              </select>
              <select class="form-control form-control-lg" name="time">
                <option>6:00 PM</option>
                <option>9:00 PM</option>
                <option>12:00 PM</option>
              </select>
                <input class="btn btn-success mt-3 float-lg-right float-md-right float-sm-right" type="submit" name="" value="Proceed">
            </form>
          </div>
        </div>
      </div>
    </header>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/js/baguetteBox.min.js"></script>
  </body>
</html>

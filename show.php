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
  <title>Cinema Square</title>
  </head>
  <body>
    <header id="home" style="background-image: linear-gradient(rgba(20, 20, 20, 0.69),rgba(20, 20, 20, 0.69)),url(resources/img/show-1.jpg);">
      <div class="container">
        <div class="pb-5 pt-3">
          <a class="cancel" href="index.php">Cancel</a>
        </div>
        <div class="row no-gutter pt-4">
          <?php viewMovScreen(); ?>
        </div>
      </div>
    </header>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/js/baguetteBox.min.js"></script>
  </body>
</html>

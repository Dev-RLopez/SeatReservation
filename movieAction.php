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
    <link rel="stylesheet" href="resources/css/delete.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <section>
      <div class="container pt-3 pb-5">
        <a href="homepage.php" class="cancel">Cancel</a>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-4 col-12"></div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <span class="header-showing">Movie</span>
            <span class="header-showing2">List</span>
            <form class="" method="POST">
              <table class="table table-dark text-center">
              <thead>
                <tr>
                  <!-- <th scope="col">#</th> -->
                  <th scope="col">Title</th>
                  <th scope="col" rowspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php showMovieAction(); ?>
              </tbody>
            </table>
            </form>
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

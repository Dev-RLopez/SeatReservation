<?php
   require_once 'resources/php/init.php';
       // var_dump($_POST['movImg']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="vendor/css/all.css" rel="stylesheet">
    <link href="vendor/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/add.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <section>
      <div class="container pb-5">
      <div class="pt-3">
          <a class="cancel" href="homepage.php">Cancel</a>
        </div>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-4 col-12"></div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <span class="header-showing">Add</span>
            <span class="header-showing2">Movie</span>
          <form action="" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="inputEmail4">Title</label>
                  <input type="text" name="mov_name" class="form-control" id="inputEmail4" placeholder="Title">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4">Film Rating</label>
                  <input type="text" name="f_rating" class="form-control" id="inputPassword4" placeholder="Rating">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Sypnosis</label>
                <textarea class="form-control" name="descript" id="exampleFormControlTextarea1" placeholder="Sypnosis" rows="3"></textarea>
              </div>
              <div class="form-group">
                  <label for="inputPassword4">Trailer</label>
                  <input type="text" name="trailer" class="form-control" placeholder="Embed Trailer">
                </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Upload Cover</label>
                <input name="movImg" class="form-control-file" id="exampleFormControlFile1" type="file">
              </div>
                <input type="submit" name="submit" class="btn btn-primary float-right" value="Add Movie"/>
                <?php insertM(); ?>
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

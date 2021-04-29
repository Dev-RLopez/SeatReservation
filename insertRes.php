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
    <link rel="stylesheet" href="resources/css/seats.css">
    <link rel="stylesheet" href="resources/css/checkbox.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <title>Cinema Square</title>
  </head>
  <body>
    <section class="section1">
      <div class="container box-con">
      <div class="pb-3 pt-3">
          <a class="cancel" href="index.php">Cancel</a>
        </div>
        <div class="heading pb-0 mb-0">
          <span class="h-1">Select</span>
          <span class="h-2">Seat</span>
        </div>
        <?php viewAvailableSeats(); ?>
        <div class="legend mt-2">
          <div class="legend-box">
            <div class="row">
              <div class="col-lg-2 col-6">
                <span class="pl-3 text-white"><i class="selected fas fa-stop"></i> Selected</span>
              </div>
              <div class="col-lg-2 col-6">
                <span class="pl-3 text-white"><i class="available fas fa-stop"></i> Available</span>
              </div>
              <div class="col-lg-2 col">
                <span class="pl-3 text-white"><i class="occupied fas fa-stop"></i> Occupied</span>
              </div>
              <div class="col">
                <input type="text" class="form-control form-control-md mb-2" name="name" placeholder="E-mail" autocomplete="off" required>
              </div>
            </div>
          </div>
        </div>
        <input type="text" class="form-control form-control-lg mt-3" name="time" hidden value='<?php echo $_POST['time']; ?>'>
        <input type="text" class="form-control form-control-lg mt-3" name="mov" hidden value='<?php echo $_POST['mov']; ?>'>
        <input type="date" class="form-control form-control-lg mt-3" name="date" hidden value='<?php echo $_POST['date']; ?>'>
        <input class="btn btn-success float-right mt-2 mb-4" type="submit" name="submit" value="Checkout">
      </form>
      </div>
    </section>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/js/baguetteBox.min.js"></script>
  </body>
</html>

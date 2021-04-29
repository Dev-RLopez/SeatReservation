<?php
   require_once 'resources/php/init.php';
    ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>MilkTea Shop</title>
      <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
      <link href="vendor/css/all.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css"  href="resources/css/styles.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
   <body data-spy="scroll" data-target=".navbar" data-offset="50">
     <form class="" action="" method="POST">
     <?php
     deleteMov(); 
      viewMovTbl();
      ?>
     </form>
   </body>
   <script src="vendor/js/jquery.js"></script>
   <script src="vendor/js/bootstrap.bundle.min.js"></script>
   </body>
</html>

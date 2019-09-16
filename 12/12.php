<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

  <?php
  if (!class_exists('lessc')) {
      include ('./libs/lessc.inc.php');
  }
  $less = new lessc;
  $less->compileFile('less/type-12.less', 'css/type-12.css');
  ?>
   <link href="css/type-12.css" rel="stylesheet" type="text/css" />

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="css/swiper.min.css">

</head>
<body>
  
  <?php include './12-content.php'; ?>

  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>
  <script src="js/12.js"></script>

</body>
</html>
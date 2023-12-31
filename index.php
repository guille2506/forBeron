<?php include("configuracion.php");
//var_dump($contenido);die();
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Fanzolato</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>

  <!-- header section -->
<?php include'./componentes/header.php' ?>
  <!-- header end -->


  <!-- special section -->
<?php include'./componentes/SpecialSection.php' ?>
  <!-- end special section -->


 <!-- start about section -->
<?php include'./componentes/about.php' ?>
  <!-- end about section -->


  <!-- course section -->
 <?php include'./componentes/course.php' ?>
  <!-- end course section -->


  <!-- login section -->
  <?php include'./componentes/loginSection.php' ?>
  <!-- end login section -->


  <!-- event section -->
   <?php include'./componentes/eventSection.php' ?>
  <!-- end event section -->

  <!-- client section -->
  <?php include'./componentes/clientSection.php' ?>
  <!-- end client section -->


  <!-- contact section -->
  <?php include'./componentes/contactSection.php' ?>
  <!-- end contact section -->


  <!-- info section -->
  <?php include'./componentes/infoSection.php' ?>
  <!-- end info section -->


  <!-- footer section -->
 <?php include'./componentes/footer.php' ?>

  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
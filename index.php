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
<?php include'./componentes/nanv.php' ?>

    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                      <?php echo $contenido["header"]["EDUCATION"];?>
                      </h1>
                      <a href="">
                      <?php echo $contenido["header"]["LeerMas"];?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                      <?php echo $contenido["header"]["EDUCATION"];?>
                      </h1>
                      <a href="">
                      <?php echo $contenido["header"]["LeerMas"];?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                      <?php echo $contenido["header"]["EDUCATION"];?>
                      </h1>
                      <a href="">
                      <?php echo $contenido["header"]["LeerMas"];?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- special section -->

  <section class="special_section">
    <div class="container">
      <div class="special_container">
        <div class="box b1">
          <div class="img-box">
            <img src="images/award.png" alt="" />
          </div>
          <div class="detail-box">
            <h4>
            <?php echo $contenido["header"]["logro1"];?> <br />
            <?php echo $contenido["header"]["logro1br"];?>
            </h4>
            <a href="">
            <?php echo $contenido["header"]["LeerMasSpecial1"];?>
            </a>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="images/study.png" alt="" />
          </div>
          <div class="detail-box">
            <h4>
            <?php echo $contenido["header"]["logro2"];?> <br />
            <?php echo $contenido["header"]["logro2br"];?>
            </h4>
            <a href="">
            <?php echo $contenido["header"]["leermasSpecial2"];?>
            </a>
          </div>
        </div>
        <div class="box b3">
          <div class="img-box">
            <img src="images/books-stack-of-three.png" alt="" />
          </div>
          <div class="detail-box">
            <h4>
            <?php echo $contenido["header"]["logro3"];?> <br />
            <?php echo $contenido["header"]["logro3br"];?>
            </h4>
            <a href="">
            <?php echo $contenido["header"]["leermasSpecial3"];?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end special section -->

  <section class="about_section layout_padding">
    <!-- about section -->
    <div class="side_img">
      <img src="images/side-img.png" alt="" />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="images/a-1.jpg" alt="" />
            </div>
            <div class="img-box b2">
              <img src="images/a-2.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h3>
                <?php echo $contenido["header"]["acerca2"];?>
              </h3>
              <p>
              <?php echo $contenido["header"]["maravilla"];?>
              </p>
              <a href="">
              <?php echo $contenido["header"]["leerAbaout"];?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- course section -->

  <section class="course_section layout_padding-bottom">
    <div class="side_img">
      <img src="images/side-img.png" alt="" />
    </div>
    <div class="container">
      <div class="heading_container">
        <h3>
        <?php echo $contenido["header"]["CursoPopulares"];?>
        </h3>
        <p>
        <?php echo $contenido["header"]["CurseCourse"];?>
        </p>
      </div>
      <div class="course_container">
        <div class="course_content">
          <div class="box">
            <img src="images/c-1.jpg" alt="" />
            <a href="" class="">
              <img src="images/link.png" alt="" />
            </a>
            <h5>
              <?php echo $contenido["header"]["LMScourse"];?><br />
              <?php echo $contenido["header"]["ContentCourse"];?>
            </h5>
          </div>
          <div class="box">
            <img src="images/c-2.jpg" alt="" />
            <a href="" class="">
              <img src="images/link.png" alt="" />
            </a>
            <h5>
              <?php echo $contenido["header"]["CourseHero"];?> <br />
              <?php echo $contenido["header"]["ZerotoHero"];?>
            </h5>
          </div>
        </div>
        <div class="course_content">
          <div class="box">
            <img src="images/c-3.jpg" alt="" />
            <a href="" class="">
              <img src="images/link.png" alt="" />
            </a>
            <h5>
              <?php echo $contenido["header"]["LearnCuorse"];?> <br />
              <?php echo $contenido["header"]["PythonCurose"];?>
            </h5>
          </div>
          <div class="box">
            <img src="images/c-4.jpg" alt="" />
            <a href="" class="">
              <img src="images/link.png" alt="" />
            </a>
            <h5>
              <?php echo $contenido["header"]["TuCurose"];?> <br />
              <?php echo $contenido["header"]["GuiaCompletaCurse"];?>
            </h5>
          </div>
          <div class="box">
            <img src="images/c-5.jpg" alt="" />
            <a href="" class="">
              <img src="images/link.png" alt="" />
            </a>
            <h5>
            <?php echo $contenido["header"]["PhotoCurse"];?>
            </h5>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
        <?php echo $contenido["header"]["LeerCuorse"];?>
        </a>
      </div>
    </div>
  </section>

  <!-- end course section -->

  <!-- login section -->

  <section class="login_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
            <?php echo $contenido["header"]["freecourses"];?>
            </h3>
            <p>
            <?php echo $contenido["header"]["freeaccount"];?>
            </p>
            <a href="">
            <?php echo $contenido["header"]["signuploginsection"];?>
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="login_form">
            <h5>
            <?php echo $contenido["header"]["inicialoginsection"];?>
            </h5>
            <form action="">
              <div>
                <input type="email" placeholder="Email " />
              </div>
              <div>
                <input type="password" placeholder="Password" />
              </div>
              <button type="submit"><?php echo $contenido["header"]["button1loginsection"];?></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end login section -->

  <!-- event section -->
  <section class="event_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h3>
          <?php echo $contenido["header"]["EventosEvents"];?>
        </h3>
        <p>
        <?php echo $contenido["header"]["ParrafoEvent"];?>
        </p>
      </div>
      <div class="event_container">
        <div class="box">
          <div class="img-box">
            <img src="images/event-img.jpg" alt="" />
          </div>
          <div class="detail-box">
            <h4>
              <?php echo $contenido["header"]["EducacionEvents"];?>
            </h4>
            <h6>
              <?php echo $contenido["header"]["HoraEvents"];?>
            </h6>
          </div>
          <div class="date-box">
            <h3>
              <span>
              <?php echo $contenido["header"]["15"];?>
              </span>
              <?php echo $contenido["header"]["Marzo"];?>
            </h3>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/event-img.jpg" alt="" />
          </div>
          <div class="detail-box">
            <h4>
            <?php echo $contenido["header"]["EducacionEvents"];?>
            </h4>
            <h6>
            <?php echo $contenido["header"]["HoraEvents"];?>
            </h6>
          </div>
          <div class="date-box">
            <h3>
              <span>
              <?php echo $contenido["header"]["15"];?>
              </span>
              <?php echo $contenido["header"]["Marzo"];?>
            </h3>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
        <?php echo $contenido["header"]["LeerEvents"];?>
        </a>
      </div>
    </div>
  </section>

  <!-- end event section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h3>
           <?php echo $contenido["header"]["PeopleCliet"];?>
        </h3>
        <p>
          </p>
          <?php echo $contenido["header"]["TestimonioClient"];?>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                <?php echo $contenido["header"]["MariaCliente"];?>
                </h5>
                <p>
                <?php echo $contenido["header"]["MariaClienteTestimonio"];?>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                <?php echo $contenido["header"]["MariaCliente"];?>
                </h5>
                <p>
                <?php echo $contenido["header"]["MariaClienteTestimonio"];?>

                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                <?php echo $contenido["header"]["MariaCliente"];?>
                </h5>
                <p>
                <?php echo $contenido["header"]["MariaClienteTestimonio"];?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h3>
              <?php echo $contenido["header"]["contactenoscontactsection"];?>
              </h3>
              <p>
              <?php echo $contenido["header"]["porquecontactarnos"];?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-form">
            <h5>
            <?php echo $contenido["header"]["ponerseencontactsection"];?>
            </h5>
            <form action="">
              <div>
                <input type="text" placeholder= <?php echo $contenido["header"]["namecontactsection"];?> />
              </div>
              <div>
                <input type="text" placeholder=<?php echo $contenido["header"]["numberphonecontactsection"];?> />
              </div>
              <div>
                <input type="email" placeholder=<?php echo $contenido["header"]["emailcontactsection"];?> />
              </div>
              <div>
                <input type="text" placeholder=<?php echo $contenido["header"]["messagecontactsection"];?> class="input_message" />
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn_on-hover">
                <?php echo $contenido["header"]["buttonenviarcontactsection"];?>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_menu">
            <h5>
              <?php echo $contenido["header"]["ENLACESRAPIDOSinfo"];?>
            </h5>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
              <a class="nav-link" href="index.php"><?php echo $contenido["header"]["home"];?> <span class="sr-only">(current)</span></a>
 
            </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> <?php echo $contenido["header"]["acerca"];?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="course.html"> <?php echo $contenido["header"]["curso"];?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="event.html"> <?php echo $contenido["header"]["eventos"];?> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html"><?php echo $contenido["header"]["contactenos"];?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html"><?php echo $contenido["header"]["ingreso"];?></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_course">
            <h5>
            <?php echo $contenido["header"]["CursoInfo"];?>
            </h5>
            <p>
            <?php echo $contenido["header"]["CalificacionInfo"];?>
            </p>
          </div>
        </div>

        <div class="col-md-5 offset-md-1">
          <div class="info_news">
            <h5>
              <?php echo $contenido["header"]["WriteInfo"];?>
            </h5>
            <div class="info_contact">
              <a href="">
                <?php echo $contenido["header"]["UbicacionInfo"];?>
              </a>
              <a href="">
              <?php echo $contenido["header"]["GmailsInfo"];?>
              </a>
              <a href="">
              <?php echo $contenido["header"]["numeroInfo"];?>
              </a>
            </div>
            <form action="">
              <input type="text" placeholder="<?php echo $contenido["header"]["enterYourEmail"];?>" />
              <button>
              <?php echo $contenido["header"]["subsInfo"];?>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; 2021 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  
  </footer>

   
  <footer class="container-fluid footer_section">
  
      <p>
        Distributed By 
        <a href="https://themewagon.com/">Themewagon</a>
      </p>
  
  </footer>
 
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
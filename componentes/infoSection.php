<infoSection>
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
</infoSection>
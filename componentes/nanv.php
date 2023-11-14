<nav>
    <body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <h3>
            <?php echo $contenido["header"]["nombre"];?>
            </h3>
            <span><?php echo $contenido["header"]["nombre2"];?></span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
              <a class="nav-link" href="index.php"><?php echo $contenido["header"]["home"];?><span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"><?php echo $contenido["header"]["acerca"];?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="course.html"><?php echo $contenido["header"]["curso"];?> </a>
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
            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>
          </div>
        </nav>
      </div>
</body>
</nav>
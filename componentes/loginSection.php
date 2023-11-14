<loginSection.php>
    <body>   
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
    </body>
</loginSection.php>
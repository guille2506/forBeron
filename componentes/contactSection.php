<contactSection>
    <body>
        
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
    </body>
</contactSection>
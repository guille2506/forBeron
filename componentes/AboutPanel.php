<?php
include("configuracion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contenido["header"]["acerca2"] = $_POST["acerca2"];
    $contenido["header"]["maravilla"] = $_POST["maravilla"];
    $config_string = '';
    foreach ($contenido as $section => $values) {
        $config_string .= "[$section]\n";
        foreach ($values as $key => $value) {
            $config_string .= "$key = \"$value\"\n";    
        }
    }
    file_put_contents("config_app.ini", $config_string);

    header("Location: Panelabout.php");
    exit();
}
?>

<AboutPanel>
    <body>
        <section class="contact_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h3>Aqui puedes modificar los valores!</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <form method="post" action="">  
                            <div>
                                    <input type="text" name="acerca2" placeholder="cuadroN1" value="<?php echo $contenido["header"]["acerca2"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <textarea name="maravilla" class="input_message styled-textarea" rows="5" cols="50"><?php echo $contenido['header']['maravilla']; ?></textarea>
                                </div>
                                
                                    <button type="submit" class="btn_on-hover"> 
                                         Guardar cambios
                                     </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</AboutPanel>
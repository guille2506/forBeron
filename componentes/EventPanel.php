<?php
include("configuracion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contenido["header"]["EventosEvents"] = $_POST["EventosEvents"];
    $contenido["header"]["ParrafoEvent"] = $_POST["ParrafoEvent"];
    $contenido["header"]["EducacionEvents"] = $_POST["EducacionEvents"];
    $contenido["header"]["HoraEvents"] = $_POST["HoraEvents"];
    $contenido["header"]["15"] = $_POST["15"];
    $contenido["header"]["Marzo"] = $_POST["Marzo"];
    $contenido["header"]["EducacionEvents2"] = $_POST["EducacionEvents2"];
    $contenido["header"]["HoraEvents2"] = $_POST["HoraEvents2"];
    $contenido["header"]["152"] = $_POST["152"];
    $contenido["header"]["Marzo2"] = $_POST["Marzo2"];

    foreach ($contenido as $section => $values) {
        $config_string .= "[$section]\n";
        foreach ($values as $key => $value) {
            $config_string .= "$key = \"$value\"\n";    
        }
    }
    file_put_contents("config_app.ini", $config_string);

    header("Location: Panelevent.php");
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
                                    <input type="text" name="EventosEvents" placeholder="cuadroN1" value="<?php echo $contenido["header"]["EventosEvents"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="ParrafoEvent" placeholder="cuadroN1" value="<?php echo $contenido["header"]["ParrafoEvent"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="EducacionEvents" placeholder="cuadroN1" value="<?php echo $contenido["header"]["EducacionEvents"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="HoraEvents" placeholder="cuadroN1" value="<?php echo $contenido["header"]["HoraEvents"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="15" placeholder="cuadroN1" value="<?php echo $contenido["header"]["15"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="Marzo" placeholder="cuadroN1" value="<?php echo $contenido["header"]["Marzo"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="Marzo" placeholder="cuadroN1" value="<?php echo $contenido["header"]["Marzo"];?>" class="styled-input"/> 
                                </div>



                                <div>
                                    <input type="text" name="EducacionEvents2" placeholder="cuadroN2" value="<?php echo $contenido["header"]["EducacionEvents2"];?>" class="styled-input"/> 
                                </div>
                                 <div>
                                    <input type="text" name="HoraEvents2" placeholder="cuadroN2" value="<?php echo $contenido["header"]["HoraEvents2"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="152" placeholder="cuadroN2" value="<?php echo $contenido["header"]["152"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="Marzo2" placeholder="cuadroN2" value="<?php echo $contenido["header"]["Marzo2"];?>" class="styled-input"/> 
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
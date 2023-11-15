<?php
include("configuracion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contenido["header"]["LMScourse"] = $_POST["LMScourse"];
    $contenido["header"]["ContentCourse"] = $_POST["ContentCourse"];
    $contenido["header"]["CourseHero"] = $_POST["CourseHero"];
    $contenido["header"]["ZerotoHero"] = $_POST["ZerotoHero"];
    $contenido["header"]["LearnCuorse"] = $_POST["LearnCuorse"];
    $contenido["header"]["PythonCurose"] = $_POST["PythonCurose"];
    $contenido["header"]["TuCurose"] = $_POST["TuCurose"];
    $contenido["header"]["GuiaCompletaCurse"] = $_POST["GuiaCompletaCurse"];
    $contenido["header"]["PhotoCurse"] = $_POST["PhotoCurse"];
    $config_string = '';
    foreach ($contenido as $section => $values) {
        $config_string .= "[$section]\n";
        foreach ($values as $key => $value) {
            $config_string .= "$key = \"$value\"\n";    
        }
    }
    file_put_contents("config_app.ini", $config_string);

    header("Location: Panelcourse.php");
    exit();
}
?>

<CursePanel>
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
                                    <input type="text" name="LMScourse" placeholder="cuadroN1" value="<?php echo $contenido["header"]["LMScourse"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="ContentCourse" placeholder="cuadroN1" value="<?php echo $contenido["header"]["ContentCourse"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="CourseHero" placeholder="cuadroN2" value="<?php echo $contenido["header"]["CourseHero"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="ZerotoHero" placeholder="cuadroN2" value="<?php echo $contenido["header"]["ZerotoHero"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="LearnCuorse" placeholder="cuadroN3" value="<?php echo $contenido["header"]["LearnCuorse"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="PythonCurose" placeholder="cuadroN3" value="<?php echo $contenido["header"]["PythonCurose"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="TuCurose" placeholder="cuadroN4" value="<?php echo $contenido["header"]["TuCurose"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="GuiaCompletaCurse" placeholder="cuadroN4" value="<?php echo $contenido["header"]["GuiaCompletaCurse"];?>" class="styled-input"/> 
                                </div>
                                <div>
                                    <input type="text" name="PhotoCurse" placeholder="cuadroN5" value="<?php echo $contenido["header"]["PhotoCurse"];?>" class="styled-input"/> 
                                </div>
                            
                                <!-- <div>
                                    <textarea name="ContentCourse" class="input_message styled-textarea" rows="5" cols="50"></textarea>
                                </div>
                                 -->
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
</CursePanel>
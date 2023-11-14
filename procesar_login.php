<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Recuperar los datos del formulario
$email = $_POST["email"];
$password = $_POST["password"];

$usuarios = parse_ini_file("config_app.ini");

if (isset($usuarios[$email])) {
    if ($password === $usuarios[$email]) {
        echo '<script>
                alert("Autenticación exitosa");
                window.location.href = "course.php";
             </script>';
        exit();
    } else {
        echo '<script>
                alert("Autenticación fallida: Contraseña incorrecta");
                window.location.href = "login.php";
             </script>';
        exit();
    }
} else {
    echo '<script>
            alert("Autenticación fallida: Usuario no encontrado");
            window.location.href = "login.php";
         </script>';
    exit();
}
?>

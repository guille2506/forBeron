<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Recuperar los datos del formulario
$email = $_POST["email"];
$password = $_POST["password"];

// Ejemplo básico usando un archivo INI
$usuarios = parse_ini_file("config_app.ini");

if (isset($usuarios[$email])) {
    // Verificar si la contraseña ingresada coincide con la almacenada
    if ($password === $usuarios[$email]) {
        // La autenticación fue exitosa
        echo '<script>
                alert("Autenticación exitosa");
                window.location.href = "course.html";
             </script>';
        exit();
    } else {
        // La autenticación falló
        echo '<script>
                alert("Autenticación fallida: Contraseña incorrecta");
                window.location.href = "login.html";
             </script>';
        exit();
    }
} else {
    // La autenticación falló
    echo '<script>
            alert("Autenticación fallida: Usuario no encontrado");
            window.location.href = "login.html";
         </script>';
    exit();
}
?>

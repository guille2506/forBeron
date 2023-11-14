<?php
// Cargando información de .ini
if (!function_exists('config_read')) {
    function config_read($config_file) {
        return parse_ini_file($config_file, true);
    }
}

// Actualiza una nueva configuración en datos de archivo inicial cargados
if (!function_exists('config_set')) {
    function config_set(&$config_data, $section, $key, $value) {
        $config_data[$section][$key] = $value;
    }
}

// Organiza los datos de configuración del archivo ini de nuevo en el disco.
if (!function_exists('config_write')) {
    function config_write($config_data, $config_file) {
        $new_content = '';
        foreach ($config_data as $section => $section_content) {
            $section_content = array_map(function($value, $key) {
                return "$key=$value";
            }, array_values($section_content), array_keys($section_content));
            $section_content = implode("\n", $section_content);
            $new_content .= "[$section]\n$section_content\n";
        }
        file_put_contents($config_file, $new_content);
    }
}

// Función abreviada para actualizar un único valor de configuración en un archivo.
if (!function_exists('config_set_file')) {
    function config_set_file($config_file, $section, $key, $value) {
        $config_data = config_read($config_file);
        config_set($config_data, $section, $key, $value);
        config_write($config_file, $section, $key, $value);
    }
}

// leer la información desde el archivo ini
// poner la ruta del archivo aquí
$filepath = 'config_app.ini';
// parsear el archivo ini usando la función parse_ini_file() de PHP
$contenido = parse_ini_file($filepath, true);
?>

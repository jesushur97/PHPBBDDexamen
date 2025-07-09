<?php
define("DB_HOST", "localhost");
define("DB_USUARIO", "messi");
define('DB_PASSWORD', '1234');
define("DB_NOMBRE", "seneca");

// iniciar sesión en PHP
session_start();

// conectar a la bases de datos
$conexion = mysqli_connect(DB_HOST, DB_USUARIO, DB_PASSWORD,DB_NOMBRE);
if (!$conexion) {
    echo "<h3>No se ha podido conectar al servidor </h3>";
    return;
} /*else  {
    echo "<h3>Conexión establecida correctamente</h3>";
}*/
?>

<?php
$host = "localhost:33306"; // Cambia a tu host si es diferente
$username = "root";
$password = "";
$database = "crud_php";

$conexion = new mysqli($host, $username, $password, $database);

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>

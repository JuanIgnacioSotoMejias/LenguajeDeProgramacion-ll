<?php

$servidor = "localhost"; 
$usuario = "root"; 
$contraseña = "";
$base_de_datos = "corte1pastas"; // 
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

<?php
$servidor = "localhost";
$usuario = "root";
$pw = "";    // Contraseña (dejo vacío porque no tengo una definida)
$bd = "practica"; 

$conexion = mysqli_connect($servidor, $usuario, $pw, $bd);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>

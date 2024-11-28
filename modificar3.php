<?php
$paterno = isset($_REQUEST['campo_paterno']) ? $_REQUEST['campo_paterno'] : '';
$materno = isset($_REQUEST['campo_materno']) ? $_REQUEST['campo_materno'] : '';
$nombre = isset($_REQUEST['campo_nombre']) ? $_REQUEST['campo_nombre'] : '';
$telefono = isset($_REQUEST['campo_telefono']) ? $_REQUEST['campo_telefono'] : ''; 
$ciudad = isset($_REQUEST['campo_ciudad']) ? $_REQUEST['campo_ciudad'] : '';
$pais = isset($_REQUEST['campo_pais']) ? $_REQUEST['campo_pais'] : '';
$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0; 

$servidor = "localhost";
$usuario = "root";
$pw = "";
$bd = "practica";

$conn = mysqli_connect($servidor, $usuario, $pw, $bd);

if (!$conn) {
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
}

$query = "UPDATE visitantes SET 
    paterno = '" . mysqli_real_escape_string($conn, $paterno) . "',
    materno = '" . mysqli_real_escape_string($conn, $materno) . "',
    nombre = '" . mysqli_real_escape_string($conn, $nombre) . "',
    telefono = '" . mysqli_real_escape_string($conn, $telefono) . "',
    ciudad = '" . mysqli_real_escape_string($conn, $ciudad) . "',
    pais = '" . mysqli_real_escape_string($conn, $pais) . "' 
    WHERE id = $id";

if (mysqli_query($conn, $query)) {
    
    echo "<script language='javascript'>
        var respuesta = confirm('Deseas modificar otro registro?');  
        if (respuesta) {
            window.location.href = 'modificar.php';
        } else {
            window.location.href = 'Altas3.html';
        }
    </script>";
} else {
    
    echo "Error al actualizar los datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

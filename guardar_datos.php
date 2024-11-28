<?php 
$paterno = isset($_POST['campo_paterno']) ? $_POST['campo_paterno'] : '';
$materno = isset($_POST['campo_materno']) ? $_POST['campo_materno'] : '';
$nombre = isset($_POST['campo_nombre']) ? $_POST['campo_nombre'] : '';
$telefono = isset($_POST['campo_telefono']) ? $_POST['campo_telefono'] : '';
$ciudad = isset($_POST['campo_ciudad']) ? $_POST['campo_ciudad'] : '';
$pais = isset($_POST['campo_pais']) ? $_POST['campo_pais'] : '';

$servidor = "localhost";  
$usuario = "root";    
$pw = "";   
$bd = "practica";       

$conn = mysqli_connect($servidor, $usuario, $pw, $bd);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$sql = "INSERT INTO visitantes (paterno, materno, nombre, telefono, ciudad, pais) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {
    die("Error al preparar la consulta: " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssss", $paterno, $materno, $nombre, $telefono, $ciudad, $pais);

if (mysqli_stmt_execute($stmt)) {
    echo "Registro guardado exitosamente.";
    echo "<script language=\"javascript\"> 
            alert(\"Registro guardado\"); 
            window.location.href=\"Altas3.html\"; 
          </script>";
} else {
    echo "Error al guardar el registro: " . mysqli_stmt_error($stmt);
    echo "<script language=\"javascript\"> 
            alert(\"Error en el registro\"); 
            window.location.href=\"idnex.html\"; 
          </script>";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

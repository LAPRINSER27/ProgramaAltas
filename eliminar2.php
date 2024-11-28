<?php
$servidor = "localhost";
$usuario = "root";   
$pw = "";            // Contraseña (dejo vacío porque no tengo una definida)
$bd = "practica";    

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];  

    $conn = mysqli_connect($servidor, $usuario, $pw, $bd);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "DELETE FROM visitantes WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
      
        echo "<script language=\"javascript\">
                var respuesta = confirm(\"Deseas eliminar otro registro?\");
                if (respuesta) {
                    window.location.href = \"eliminar.php\"; // Redirigir a la página de eliminar registros
                } else {
                    window.location.href = \"Altas3.html\"; // Redirigir al inicio
                }
              </script>";
    } else {

        echo "Error al eliminar el registro: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "No se proporcionó un ID válido.";
}
?>

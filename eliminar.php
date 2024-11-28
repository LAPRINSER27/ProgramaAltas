<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script language="javascript" src="validar_datos.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset-iso-8859-1"/>
    <style type="text/css">
        #Layer1 {
            position: absolute;
            left: 636px;
            top: 152px;
            width: 311px;
            height: 191px;
            z-index: 1;
            background-color: #FFFFFF;
        }
        .Estilo4 {
            font-size: 15px
        }
    </style>
</head>
<body>
<table width="600" border="1" align="center" bgcolor="#66FFFF">
    <tr>
    <td colspan="9" valign="top"><div align="center"><span class="Estilo2"><strong>TECNOLOGICO DE MATAMOROS</strong></span></div></td>
  </tr>
        <tr>
    <td colspan="9" valign="top"><div align="center">ELIMINAR CONSULTA</div></td>
  </tr>
        <tr>
    <td colspan="2" valign="top" bgcolor="#FF5F00"><div align="center" class="Estilo2"><a href="Altas3.html" target="_self">INICIO</a></div></td>
    <td colspan="1" bgcolor="#FF3F00"><div align="center"><a href="lista.php" target="_self">CONSULTAS</a></div></td>
    <td colspan="2" bgcolor="#FF5F55"><div align="center"><a href="lista.php">MOSTRAR LISTA</a></div></td>
    <td colspan="2" bgcolor="#FF5F55"><div align="center"><a href="eliminar.php">ELIMINAR</a></div></td>
    <td colspan="2" bgcolor="#FF5F55"><div align="center"><a href="modificar.php">MODIFICAR</a></div></td>
    </tr>

    <tr>
            <td colspan="9" valign="top">
                <table width="100%" border="2" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF">
                <tr>
                <td>ID</td>
                <td>APATERNO</td>
                <td>AMATERNO</td>
                <td>NOMBRE</td>
                <td>TELEFONO</td>
                <td>CIUDAD</td>
                <td>PAIS</td>
                </tr>

                    <?php
                    $servidor = "localhost";  
                    $usuario = "root";        
                    $pw = "";                 
                    $bd = "practica";        

                    $conn = mysqli_connect($servidor, $usuario, $pw, $bd);

                    if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                    }

                    $conn = mysqli_connect($servidor, $usuario, $pw, $bd);

                    if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                    }

                    $resultado = mysqli_query($conn, "SELECT * FROM visitantes");

                    if ($resultado) {
 
                        while ($renglon = mysqli_fetch_array($resultado)) {
                            echo "<tr>
                                <td height=\"24\" valign=\"top\"><span class=\"Estilo4\">$renglon[id]</span></td>
                                <td valign=\"top\"><span class=\"Estilo4\"><a href=\"eliminar2.php?id=$renglon[id]\">$renglon[paterno]</a></td>
                                <td valign=\"top\"><span class=\"Estilo4\">$renglon[materno]</span></td>
                                <td valign=\"top\"><span class=\"Estilo4\">$renglon[nombre]</span></td>
                                <td valign=\"top\"><span class=\"Estilo4\">$renglon[telefono]</span></td>
                                <td valign=\"top\"><span class=\"Estilo4\">$renglon[ciudad]</span></td>
                                <td valign=\"top\"><span class=\"Estilo4\">$renglon[pais]</span></td>
                            </tr>";
                        }
                    } else {
                       
                        echo "Error en la consulta: " . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                    ?>
                </table>
            </td>
            
        </tr>
    </table>
</body>
</html>

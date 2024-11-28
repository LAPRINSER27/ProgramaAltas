<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" src="validar_datos.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modificar Datos</title>
<style type="text/css">
#Layer1 {
  position:absolute;
  left:636px;
  top:152px;
  width:311px;
  height:191px;
  z-index:1;
  background-color: #FFFFFF;
}
.Estilo1 {color: #FF1F00}
.Estilo2 {color: #0000FF}
.Estilo3 {color: #AA1F00}
</style>
</head>
<body>
<table width="508" border="1" align="center" bgcolor="#66FFFF">
  <tr>
    <td height="23" colspan="5" valign="top"> 
      <div align="center"><span class="Estilo2"><strong>TECNOLOGICO DE MATAMOROS</strong></span></div>
    </td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FF5F00"><div align="center"><a href="Altas3.html">INICIO</a></div></td>
    <td bgcolor="#FF3F00"><div align="center"><a href="lista.php">CONSULTAS</a></div></td>
    <td bgcolor="#FF5F55"><div align="center"><a href="lista.php">MOSTRAR LISTA</a></div></td>
    <td bgcolor="#FF5F55"><div align="center"><a href="eliminar.php">ELIMINAR</a></div></td>
    <td bgcolor="#FF5F55"><div align="center"><a href="modificar.php">MODIFICAR</a></div></td>
  </tr>
  <tr>
    <td height="68" colspan="5" bgcolor="#AADF55">
      <div align="center" class="Estilo3">MODIFICAR DATOS</div>
      
      <?php
      $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

      $con = mysqli_connect("localhost", "root", "", "practica");
      if (!$con) {
          die("Error en la conexión: " . mysqli_connect_error());
      }

      $query = "SELECT * FROM visitantes WHERE id='$id'";
      $resultado = mysqli_query($con, $query);

      if ($resultado && mysqli_num_rows($resultado) > 0) {
          $renglon = mysqli_fetch_assoc($resultado);
      } else {
          echo "<p>Error: No se encontraron datos para el ID proporcionado.</p>";
          exit;
      }
      ?>

      <form action="modificar3.php?id=<?php echo $id; ?>" name="form1" method="post" onsubmit="return validar(this);">
        <p>
          Paterno
          <input name="campo_paterno" type="text" size="50" maxlength="50" 
          value="<?php echo htmlspecialchars($renglon['paterno'], ENT_QUOTES); ?>" />
        </p>
        <p>
          Materno
          <input name="campo_materno" type="text" size="30" maxlength="30" 
          value="<?php echo htmlspecialchars($renglon['materno'], ENT_QUOTES); ?>" />
        </p>
        <p>
          Nombre
          <input name="campo_nombre" type="text" size="30" maxlength="30" 
          value="<?php echo htmlspecialchars($renglon['nombre'], ENT_QUOTES); ?>" />
        </p>
        <p>
          Teléfono
          <input name="campo_telefono" type="text" size="30" maxlength="30" 
          value="<?php echo htmlspecialchars($renglon['telefono'], ENT_QUOTES); ?>" />
        </p>
        <p>
          Ciudad
          <input name="campo_ciudad" type="text" size="30" maxlength="30" 
          value="<?php echo htmlspecialchars($renglon['ciudad'], ENT_QUOTES); ?>" />
        </p>
        <p>
          País
          <input name="campo_pais" type="text" size="30" maxlength="30" 
          value="<?php echo htmlspecialchars($renglon['pais'], ENT_QUOTES); ?>" />
        </p>
        <p>
          <input type="submit" name="Submit" value="Guardar Cambios" />
          <input type="reset" name="Submit2" value="Restablecer" />
        </p>
      </form>
    </td>
  </tr>
</table>
</body>
</html>

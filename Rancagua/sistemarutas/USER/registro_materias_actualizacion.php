<?php include("conexion.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Pesaje</title>

<link rel="stylesheet" href="styles.css" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {
	color: #000066;
	font-weight: bold;
	font-size: 22px;
}
-->
</style>
<? 
$id=$_REQUEST["id"];

$sql =" SELECT * FROM ingreso_materias where id=".$id." ";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ 
      
             			 $n_orden=$row[1];
						$n_guia=$row[2];
						$fecha=$row[5];
						$cantidad=$row[6];
						$precio=$row[7];
						$patente=$row[8];
						$proveedor1=$row[3];
						$materias1=$row[4];
              			}


$sql ="SELECT * FROM materias  where id=".$materias1."";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ 
              
             			 $proveedor=  $row[1]; 
              			}

$sql ="SELECT * FROM proveedor  where id=".$proveedor1."";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ 
              
             			 $materia= $row[1]; 
              			}
?>
    
    	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar.js"></script>
    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK>
    <style type="text/css">
<!--
.Estilo4 {color: #666666; font-weight: bold; }
body{
background-color:#FFFFFF !important;
}
#centro{
margin-left:320px;
}
-->
    </style>
</head>
<body>
<table width="559" height="369" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div id="centro">
      <div align="center">
        <!-- CONTENT -->
        <span class="Estilo1">Ingreso de Materias Primas </span> </div>
      <fieldset>
        <legend></legend>
        </fieldset>
      <form action="index.php" method="post" id="form">
        <div align="center">
          <table width="561" border="0">
            <tr>
              <td height="50"><span class="Estilo4">N&deg; Orden de Compra</span></td>
              <td><input name="orden" type="text" id="orden" value="<? echo $n_orden; ?>" size="14" /></td>
              <td><span class="Estilo4">N&deg; Guia</span></td>
              <td><input name="guia" type="text" id="guia" value="<? echo $n_guia; ?>" size="14" /></td>
            </tr>
          </table>
          <table width="559" height="357">
            <tr>
              <td><span class="Estilo4">Proveedor</span></td>
              <td>
              <input name="proveedor" type="text" value="<? echo $proveedor; ?>" />
              </td>
            </tr>
            <tr>
              <td><span class="Estilo4">Materia Prima</span></td>
              <td><input name="proveedor2" type="text" value="<? echo $materia; ?>" /></td>
            </tr>
            <tr>
              <td><span class="Estilo4">Fecha Guia</span></td>
              <td><input name="fecha" type="text" value="<? echo $fecha; ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td><span class="Estilo4">Cantidad</span></td>
              <td><input name="cantidad" type="text" id="cantidad" value="<? echo $cantidad; ?>" /></td>
            </tr>
            <tr>
              <td><span class="Estilo4">Precio Unitario</span></td>
              <td><input name="precio" type="text" id="precio" value="<? echo $precio; ?>" /></td>
            </tr>
            <tr>
              <td><span class="Estilo4">Patente</span></td>
              <td><input name="patente" type="text" id="patente" value="<? echo $patente; ?>" /></td>
            </tr>
            <tr>
              <td><input type="hidden" name="oculto" id="oculto" value="ingreso_materias"/></td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <table width="561" border="0">
            <tr>
              <td height="50"><div align="center">
                <input type="submit" name="send" class="formbutton" value="Volver al Inicio" />
              </div></td>
              </tr>
          </table>
        </div>
      </form>
      <fieldset>
        </fieldset>
    </div></td>
  </tr>
</table>
</body>
</html>

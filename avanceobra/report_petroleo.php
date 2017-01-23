<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	//echo $usuario;
	//print_r($usuario);
//if($usuario!="mchaura")
//if($usuario!="mchaura" || $usuario!="prueba" || $usuario!="usuario2")
if($usuario!="eorellana" && $usuario!="mchaura" && $usuario!="ahernandez")

	{	
		header("Location: login.php");		
	}
	else 
	{
	?>
    
<?php
$state = false;
if ($_POST['action'] == "add") { 
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);

	//bandera=venta
	$que = "INSERT INTO petroleo_transvial (fecha, patente, chofer, litros, km, precio) ";
	$que.= "VALUES ('".$_POST['fecha']."', '".$_POST['patente']."', '".$_POST['chofer']."', '".$_POST['litros']."', '".$_POST['km']."', '".$_POST['precio']."') ";
//	echo $que;
	$res = mysql_query($que, $conexion) or die(mysql_error());
	$state = true;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<script type="text/javascript" src="lib/jquery-1.4.2.js"></script>
	<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.datepicker.js"></script>
	<script>
	$(function() {
		$( "#fecha" ).datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true
		});
		$( "#fecha_ter_pro" ).datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true
		});
	});
	</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Equipos</title>
<style type="text/css">
<!--
.Estilo1 {
	color: #84B412;
	font-weight: bold;
}
.Estilo2 {
	color: #000000;
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
<table width="720" border="0" align="center">
          <tr>
            <td><div align="center"><span class="Estilo2">REGISTRO REPORT PETRÓLEO<br /> 
              TRANSVIAL Ltda.
</span></div></td>
            <td><div align="center"><img src="rutas_small.jpg" width="189" height="84" /></div></td>
          </tr>
        </table>
<form id="insertar" name="insertar" method="post" action="">
<div align="center"></div>
<p>&nbsp;</p>
<table width="516" border="0" align="center">
  <tr>
    <td colspan="3"><div align="center">
      <p class="Estilo1"><br />
        <br />
      </p>
 
      </div></td>
  </tr>
  <tr>
    <td width="174"><strong>Fecha de Trabajo</strong></td>
    <td width="439" colspan="2"><input type="text" name="fecha" id="fecha" /></td>
  </tr>
  <tr>
    <td><strong>Patente</strong></td>
    <td colspan="2"><select name="patente" id="patente" >
      <option ></option>
      <?php
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);

   			
			$result=mysql_query("select patente from mant_maqtra where patente!=' ' order by patente asc",$conexion);
	
			while($row = mysql_fetch_array($result))
			{
			 if(!$row[0]==""){
				printf("<option value='%s'>%s</option>",$row["0"] , $row["0"]);
   			}
			}
   			mysql_free_result($result);
			mysql_close($link); 
		 ?>
    </select></td>
  </tr>
  <tr>
    <td><strong>Chofer</strong></td>
    <td colspan="2"><select name="chofer" id="chofer" >
      <option ></option>
      <?php
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);

   			
			$result=mysql_query("select chofer from mant_maqtra where chofer!=' ' order by chofer asc",$conexion);
	
			while($row = mysql_fetch_array($result))
			{
			 if(!$row[0]==""){
				printf("<option value='%s'>%s</option>",$row["0"] , $row["0"]);
   			}
			}
   			mysql_free_result($result);
			mysql_close($link); 
		 ?>
    </select></td>
  </tr>
  <tr>
    <td><strong>Litros Cargados</strong></td>
    <td colspan="2"><input name="litros" type="text" id="litros" size="10" /></td>
  </tr>
<select name="bandera" id="bandera" hidden>
      <option >Venta</option>
          </select>
  <tr>
    <td><strong>Odómetro</strong></td>
    <td colspan="2"><input name="km" type="text" id="km" size="10" /></td>
  </tr>
  <tr>
    
  </tr>
  <tr>
    <td><strong>Precio Litro</strong></td>
    <td colspan="2"><input name="precio" type="text" id="precio" size="10" /></td>
    </tr>
  <tr>
    <td colspan="3"><div align="center">
      <p><input type="submit" name="Submit" value="Insertar Registro" /></p>
    </div></td>
  </tr>
</table>
<table width="509" border="0" align="center">
          <tr>
            <td><div align="center"></div></td>
            <td>&nbsp;</td>
            <td><div align="right"><a href="index.php"><img src="img_bot/volver_v2.jpg" width="120" height="34" /></a></div></td>
          </tr>
        </table>
        <input type="hidden" name="action" value="add" />
      <a href="index.php"> </a></p>
    </form>
    <?php if ($state) { ?>
<p><em>Registro insertado correctamente</em></p>
<?php } ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<?php 
	}	
?>

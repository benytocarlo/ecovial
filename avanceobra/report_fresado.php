<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	//echo $usuario;
	//print_r($usuario);
//if($usuario!="mchaura")
//if($usuario!="mchaura" || $usuario!="prueba" || $usuario!="usuario2")
if($usuario!="eorellana" && $usuario!="mchaura")

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
	$que = "INSERT INTO control_fresado (fecha, report, operador, equipo, obra, horas, cliente, trabajo) ";
	$que.= "VALUES ('".$_POST['fecha']."', '".$_POST['report']."', '".$_POST['operador']."', '".$_POST['equipo']."', '".$_POST['obra']."', '".$_POST['horas']."', '".$_POST['cliente']."', '".$_POST['trabajo']."') ";
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
            <td><div align="center"><span class="Estilo2">REGISTRO REPORT FRESADO<br /> 
              ECOVIAL MAQUINARIAS Ltda.
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
    <td><strong>Nro. de Report</strong></td>
    <td colspan="2"><input name="report" type="text" id="report" size="10" /></td>
  </tr>
  <tr>
    <td><strong>Cliente</strong></td>
    <td colspan="2"><select name="cliente" id="cliente" >
      <option ></option>
      <?php
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);

   			
			$result=mysql_query("select cliente from mant_maqtra where cliente!=' ' order by cliente asc",$conexion);
	
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
    <td><strong>Operador</strong></td>
    <td colspan="2"><select name="operador" id="operador" >
      <option ></option>
      <?php
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
   			
			$result=mysql_query("select operador from mant_maqtra where operador!=' ' order by operador asc",$conexion);
	
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
<select name="bandera" id="bandera" hidden>
      <option >Venta</option>
          </select>
  <tr>
    <td><strong>Equipo</strong></td>
    <td colspan="2"><select name="equipo" id="equipo" >
      <option ></option>
      <?php
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);

   			
			$result=mysql_query("select equipo from mant_maqtra where equipo!=' ' order by equipo asc",$conexion);
	
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
    <td><strong>Trabajo</strong></td>
    <td colspan="2"><select name="trabajo" id="trabajo">
      <option >Fresado</option>
      <option >Disponible</option>
          </select></td>
  </tr>
  <tr>
    <td><strong>Total Horas</strong></td>
    <td colspan="2"><input name="horas" type="text" id="horas" size="10" /></td>
  </tr>				
  <tr>
    <td><strong>Obra</strong></td>
    <td colspan="2"><select name="obra" id="obra" >
      <option ></option>
      <?php
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);

   			
			$result=mysql_query("select obra from mant_maqtra where obra!=' ' order by obra asc",$conexion);

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
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
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

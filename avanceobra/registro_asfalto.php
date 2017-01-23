<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	//echo $usuario;
	//print_r($usuario);
//if($usuario!="mchaura")
//if($usuario!="mchaura" || $usuario!="prueba" || $usuario!="usuario2")
if($usuario!="jalbornoz" && $usuario!="mchaura" && $usuario!="erivera")

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
	$que = "INSERT INTO control_dia (fecha, nombre_obra, eq_asfalto, mezcla, m3, eq_maq_fre, eq_maq_maf, m2_fresado, m2_maf, m2_asf, imprimacion, riego) ";
	$que.= "VALUES ('".$_POST['fecha']."', '".$_POST['nombre_obra']."', '".$_POST['eq_asfalto']."', '".$_POST['mezcla']."', '".$_POST['m3']."', '".$_POST['eq_maq_fre']."', '".$_POST['eq_maq_maf']."', '".$_POST['m2_fresado']."', '".$_POST['m2_maf']."', '".$_POST['m2_asf']."', '".$_POST['imprimacion']."', '".$_POST['riego']."') ";
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
    <style type="text/css">
<!--
.Estilo3 {	color: #000000;
	font-size: 24px;
	font-weight: bold;
}
-->
    </style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control de Avance de Obra</title>
<style type="text/css">
<!--
.Estilo1 {
	color: #84B412;
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
            <td><div align="center"><span class="Estilo3">REGISTRO COLOCACIÓN ASFALTO<br />
              ECOVIAL ASFALTO Ltda. </span></div></td>
            <td><div align="center"><img src="rutas_small.jpg" width="189" height="84" /></div></td>
          </tr>
        </table>
<form id="insertar" name="insertar" method="post" action="">
<div align="center"></div>
<p>&nbsp;</p>
<table width="709" border="0" align="center">
  <tr>
    <td colspan="2"><div align="center">
      <p class="Estilo1"><br />
      </p>
 
      </div></td>
  </tr>
  <tr>
    <td width="249"><strong>Fecha de Trabajo</strong></td>
    <td width="428">
      <div align="left">
        <input type="text" name="fecha" id="fecha" />
        </div></td>
  </tr>
<select name="bandera" id="bandera" hidden>
      <option >Venta</option>
          </select>
  <tr>
    <td><strong>Nombre de la Obra</strong></td>
    <td>
      <div align="left">
        <select name="nombre_obra" id="nombre_obra" >
          <option ></option>
          <?php
		  
///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);	
   			
			$result=mysql_query("select nombre_obra from mantenedor where nombre_obra!=' ' order by nombre_obra asc",$conexion);
	
			while($row = mysql_fetch_array($result))
			{
			 if(!$row[0]==""){
				printf("<option value='%s'>%s</option>",$row["0"] , $row["0"]);
   			}
			}
   			mysql_free_result($result);
			mysql_close($link); 
		 ?>
        </select>
        </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="left"></div></td>
  </tr>
  <tr>
    <td><strong>Tipo de Mezcla</strong></td>
    <td>
      <div align="left">
        <select name="mezcla" id="mezcla" >
          <option ></option>
          <?php
 
///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
   			
			$result=mysql_query("select mezcla from mantenedor where mezcla!=' ' order by mezcla asc",$conexion);
	
			while($row = mysql_fetch_array($result))
			{
			 if(!$row[0]==""){
				printf("<option value='%s'>%s</option>",$row["0"] , $row["0"]);
   			}
			}
   			mysql_free_result($result);
			mysql_close($link); 
		 ?>
        </select>
        </div></td>
    </tr>
  <tr>
    <td><strong>Equipo de Asfalto</strong></td>
    <td>
      <div align="left">
        <select name="eq_asfalto" id="eq_asfalto" >
          <option ></option>
          <?php

///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
   			
			$result=mysql_query("select eq_asfalto from mantenedor where eq_asfalto!=' ' order by eq_asfalto asc",$conexion);
	
			while($row = mysql_fetch_array($result))
			{
			 if(!$row[0]==""){
				printf("<option value='%s'>%s</option>",$row["0"] , $row["0"]);
   			}
			}
   			mysql_free_result($result);
			mysql_close($link); 
		 ?>
        </select>
        </div></td>
    </tr>
  <tr>
    <td><div align="left"><strong>Cantidad de M3</strong></div></td>
    <td>
      
        <div align="left">
          <input name="m3" type="text" id="m3" size="10" />
        </div></td>
    </tr>
  <tr>
    <td><strong>Superficie de Colocación M2</strong></td>
    <td><input name="m2_asf" type="text" id="m2_asf" size="10" /></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="left">---------------------------------------------------------------------------------------</div></td>
    </tr>
  <tr>
    <td><strong>Superficie de Imprimación M2</strong></td>
    <td><input name="imprimacion" type="text" id="imprimacion" size="10" /></td>
  </tr>
  <tr>
    <td><strong>Superficie de Riego de Liga M2</strong></td>
    <td><input name="riego" type="text" id="riego" size="10" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
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

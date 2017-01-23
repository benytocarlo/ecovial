<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	//echo $usuario;
	//print_r($usuario);
//if($usuario!="mchaura")
//if($usuario!="mchaura" || $usuario!="prueba" || $usuario!="usuario2")
if($usuario!="mchaura" && $usuario!="eorellana")

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
	$que = "INSERT INTO mantenedor (eq_asfalto, eq_maq_fre, eq_maq_maf, nombre_obra, residente, mandante, mezcla) ";
	$que.= "VALUES ('".$_POST['eq_asfalto']."', '".$_POST['eq_maq_fre']."', '".$_POST['eq_maq_maf']."', '".$_POST['nombre_obra']."', '".$_POST['residente']."', '".$_POST['mandante']."', '".$_POST['mezcla']."') ";
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
		$( "#fecha_ini_pro" ).datepicker({
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
.Estilo5 {
	color: #000000;
	font-weight: bold;
	font-size: 24px;
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
        <br />
        <br />
<table width="720" border="0" align="center">
          <tr>
            <td><div align="center"><span class="Estilo5">MANTENEDOR DE <br />
            BASE DE DATOS</span></div></td>
            <td><div align="center"><img src="rutas_small.jpg" width="189" height="84" /></div></td>
          </tr>
        </table>
<form id="insertar" name="insertar" method="post" action="">
<div align="center"></div>
<p>&nbsp;</p>
<table width="627" border="0" align="center">
<select name="bandera" id="bandera" hidden>
      <option >Venta</option>
          </select>
  <tr>
    <td colspan="3"><div align="center"></div>      <div align="center"></div></td>
    </tr>
  <tr>
    <td colspan="2"><strong>Nombre de Obra
      
    </strong></td>
    <td width="449"><strong>
      <input name="nombre_obra" type="text" id="nombre_obra" size="70" />
    </strong></td>
  </tr>
  <tr>
    <td colspan="2"><strong>PROVEEDOR</strong></td>
    <td><strong>
      <input type="text" name="residente" id="residente" size="70"/>
    </strong></td>
  </tr>
  <tr>
    <td colspan="2"><strong>Mandante</strong></td>
    <td><input type="text" name="mandante" id="mandante" size="70"/></td>
  </tr>
  <tr>
    <td colspan="2"><strong>Nombre de Mezcla</strong></td>
    <td><strong>
      <input type="text" name="mezcla" id="mezcla" size="70"/>
    </strong></td>
  </tr>
  <tr>
    <td colspan="2"><strong>Equipo de Asfalto
      
    </strong></td>
    <td><strong>
      <input type="text" name="eq_asfalto" id="eq_asfalto" size="70" />
    </strong></td>
  </tr>
  <tr>
    <td colspan="2"><strong>Equipo de Fresado</strong></td>
    <td><strong>
      <input type="text" name="eq_maq_fre" id="eq_maq_fre" size="70" />
    </strong></td>
  </tr>
  <tr>
    <td colspan="2"><strong>Equipo de MAF</strong></td>
    <td><strong>
      <input type="text" name="eq_maq_maf" id="eq_maq_maf" size="70"/>
    </strong></td>
  </tr>
  <tr>
    <td width="163">&nbsp;</td>
    <td width="1">&nbsp;</td>
    <td>&nbsp;</td>
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
            <td><a href="mantenedor_maqtra.php">BD MaqTRA</a></td>
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
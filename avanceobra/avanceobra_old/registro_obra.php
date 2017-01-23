<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	//echo $usuario;
	//print_r($usuario);
//if($usuario!="mchaura")
//if($usuario!="mchaura" || $usuario!="prueba" || $usuario!="usuario2")
if($usuario!="ljofre" && $usuario!="mchaura")

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
	$que = "INSERT INTO obra (nombre_obra, residente, mandante, fecha_ini_pro, fecha_ter_pro, m_fresado, m_maf, binder ,media_serviu,trescuartos_modificado,trescuartos_mop,trescuartos_serviu,baga, bagg, mac, imprimacion, riego) ";
	$que.= "VALUES ('".$_POST['nombre_obra']."', '".$_POST['residente']."', '".$_POST['mandante']."', '".$_POST['fecha_ini_pro']."', '".$_POST['fecha_ter_pro']."', '".$_POST['m_fresado']."', '".$_POST['m_maf']."', '".$_POST['binder']."', '".$_POST['media_serviu']."', '".$_POST['trescuartos_modificado']."', '".$_POST['trescuartos_mop']."', '".$_POST['trescuartos_serviu']."', '".$_POST['baga']."', '".$_POST['bagg']."', '".$_POST['mac']."', '".$_POST['imprimacion']."', '".$_POST['riego']."') ";
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
.Estilo4 {font-size: 24px}
-->
    </style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control de Avance de Obra</title>
<style type="text/css">
<!--
.Estilo2 {
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
        <form id="insertar" name="insertar" method="post" action="">
<table width="720" border="0" align="center">
  <tr>
    <td><div align="center"><span class="Estilo2 Estilo4">REGISTRO INICIAL DE  LA OBRA</span></div></td>
    <td><div align="center"><img src="rutas_small.jpg" width="189" height="84" /></div></td>
  </tr>
</table>
<div align="center"></div>
<p>&nbsp;</p>
<table width="627" border="0" align="center">
  
  <tr>
    <td colspan="2"><strong>Nombre de la Obra</strong></td>
    <td colspan="2"><select name="nombre_obra" id="nombre_obra" >
        <option >Seleccione Nombre de la Obra</option>
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
      </select></td>
  </tr>
<select name="bandera" id="bandera" hidden>
      <option >Venta</option>
          </select>
  <tr>
    <td colspan="2"><strong>Residente</strong></td>
    <td colspan="2"><select name="residente" id="residente" >
      <option >Seleccione Residente</option>
   <?php
///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
   			
			$result=mysql_query("select residente from mantenedor where residente!=' ' order by residente asc",$conexion);
	
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
    <td colspan="2"><strong>Mandante</strong></td>
    <td colspan="2"><label>
      <select name="mandante" id="mandante" >
        <option >Seleccione Mandante</option>
        <?php
///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);	
   			
			$result=mysql_query("select mandante from mantenedor where mandante!=' ' order by mandante asc",$conexion);
	
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
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><strong>Fecha de Inicio Programada</strong></td>
    <td colspan="2"><input type="text" name="fecha_ini_pro" id="fecha_ini_pro" /></td>
  </tr>
  <tr>
    <td colspan="2"><strong>Fecha de Término Programada</strong></td>
    <td colspan="2"><input type="text" name="fecha_ter_pro" id="fecha_ter_pro" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><strong>Ecovial Maquinarias Ltda.</strong></div></td>
    <td colspan="2"><div align="center"><strong>Ecovial Asfalto Ltda.</strong></div></td>
  </tr>
  <tr>
    <td width="136"><strong>M2 Fresado</strong></td>
    <td width="100"><input name="m_fresado" type="text" id="m_fresado" size="10" /></td>
    <td width="227"><strong>Binder
      
    </strong></td>
    <td width="146"><strong>
      <input name="binder" type="text" id="binder" size="10" />
    </strong></td>
  </tr>
  <tr>
    <td><strong>M2 Slurry</strong></td>
    <td><input name="m_maf" type="text" id="m_maf" size="10" /></td>
    <td><strong>Mezcla Asfaltica T.M 1/2 Serviu
      
    </strong></td>
    <td><strong>
      <input type="text" name="media_serviu" id="media_serviu" size="10"/>
    </strong></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td><strong>Mezcla asfaltica 3/4 Modificado</strong></td>
    <td><input type="text" name="trescuartos_modificado" id="trescuartos_modificado" size="10"/></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td><strong>Mezcla Asfaltica T.M 3/4 MOP
      
    </strong></td>
    <td><strong>
      <input type="text" name="trescuartos_mop" id="trescuartos_mop" size="10"/>
    </strong></td>
  </tr>
  <tr>
    <td><strong>M2 Imprimación</strong></td>
    <td><input name="imprimacion" type="text" id="imprimacion" size="10" /></td>
    <td><strong>Mezcla Asfaltica T.M. 3/4 Serviu
      
    </strong></td>
    <td><strong>
      <input type="text" name="trescuartos_serviu" id="trescuartos_serviu" size="10" />
    </strong></td>
  </tr>
  <tr>
    <td><strong>M2 Riego de Liga</strong></td>
    <td><input name="riego" type="text" id="riego" size="10" /></td>
    <td><strong>BAGA
      
    </strong></td>
    <td><strong>
      <input type="text" name="baga" id="baga" size="10" />
    </strong></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td><strong>BAGG
      
    </strong></td>
    <td><strong>
      <input type="text" name="bagg" id="bagg" size="10"/>
    </strong></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td><strong>M.A.C
      
    </strong></td>
    <td><strong>
      <input type="text" name="mac" id="mac" size="10"/>
    </strong></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">
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
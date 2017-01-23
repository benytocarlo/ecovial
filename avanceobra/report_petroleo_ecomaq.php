<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	//echo $usuario;
	//print_r($usuario);
//if($usuario!="mchaura")
//if($usuario!="mchaura" || $usuario!="prueba" || $usuario!="usuario2")
if($usuario!="eorellana" && $usuario!="mchaura" && $usuario!="iyanez" && $usuario!="ahernandez" && $usuario!="vretamal" && $usuario!="citurriaga" && $usuario!="rancagua")

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
	$que = "INSERT INTO petroleo_ecomaq (fecha, report, cliente, opecho, eqcam, obra, litros, horo, proveedor, precio) ";
	$que.= "VALUES ('".$_POST['fecha']."', '".$_POST['report']."', '".$_POST['cliente']."', '".$_POST['opecho']."', '".$_POST['eqcam']."', '".$_POST['obra']."', '".$_POST['litros']."', '".$_POST['horo']."', '".$_POST['proveedor']."', '".$_POST['precio']."') ";
	//echo $que;
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
    <td width="174"><strong>Fecha de Carga</strong></td>
    <td width="439" colspan="2"><input type="text" name="fecha" id="fecha" /></td>
  </tr>
  <tr>
    <td><strong>Nro. de Report</strong></td>
    <td colspan="2"><input name="report" type="text" id="report" size="10" /></td>
  </tr>
  <tr>
    <td><strong>Cliente</strong></td>
    <td colspan="2"><select name="cliente" id="cliente" >
      <option >Seleccione Cliente</option>
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
    <td><strong>Operador/Chofer</strong></td>
    <td colspan="2"><select name="opecho" id="opecho" >
      <option >Seleccione Operador</option>
      <?php
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);

   			
			$result=mysql_query("select opecho from mant_maqtra where opecho!=' ' order by opecho asc",$conexion);
	
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
    <td><strong>Patente / Maquina</strong></td>
    <td colspan="2"><select name="eqcam" id="eqcam" >
      <option >Seleccione Patente / Máquina</option>
      <?php
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);

   			
			$result=mysql_query("select eqcam from mant_maqtra where eqcam!=' ' order by eqcam asc ",$conexion);
	
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
      <a href="mantenedor_maqtra.php">Agregar Patente</a></td>
  </tr>
  <tr>
    <td><strong>Obra</strong></td>
    <td colspan="2"><select name="obra" id="obra" >
      <option >Seleccione Obra</option>
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
    <td><strong>Litros</strong></td>
    <td colspan="2"><input name="litros" type="text" id="litros" size="10" /></td>
  </tr>
  <tr>
    <td><strong>Precio por Litro</strong></td>
    <td colspan="2"><input name="precio" type="text" id="precio" size="10" /></td>
  </tr>
  <tr>
    <td><strong>Horometro/Odómetro</strong></td>
    <td colspan="2"><input name="horo" type="text" id="horo" size="10" /></td>
    </tr>
  <tr>
    <td><strong>Proveedor</strong></td>
    <td colspan="2"><select name="proveedor" id="proveedor" >
                <option >Seleccione Proveedor</option>
       
		  <option value='Curico'>Planta Curico</option>
		  <option value='Rancagua'>Planta Rancagua</option>
		  <option value='Planta_Movil'>Planta Movil</option>	
		  <option value='Camion_Surtidor'>Camion de Petroleo</option>	
				
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

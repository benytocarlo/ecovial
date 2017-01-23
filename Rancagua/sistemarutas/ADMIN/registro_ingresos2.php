<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<html>
<head>
<title>Registro de Petróleo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
body {
	margin:0;
	padding:0;
	font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
}
td {
font-size:18px;
}

</style>
<?php $xajax->printJavascript('includes/xajax/'); ?>
</head>

<? 
include("conexion.php");
$cliente=$_POST["cliente"];
$sql3="select nombre from cliente where id='".$cliente."' ";
//echo $sql3;
$result3 = mysql_query($sql3); 
 while($row = mysql_fetch_row($result3))
			{
			$nombre=$row[0];
			}
$sql4="select * from equipo where id='".$e_asfalto."' ";
//echo $sql4;
$result4 = mysql_query($sql4); 
 while($row = mysql_fetch_row($result4))
			{
			$equipo=$row[1];
			}	

$sql5="select nombre from obra where id='".$obra."' ";
//echo $sql5;
$result5 = mysql_query($sql5); 
 while($row = mysql_fetch_row($result5))
			{
			$n_obra=$row[0];
			}
//echo $n_obra;
		
			
	$r_planta=$_POST["r_planta"];
	$patente=$_POST["patente"];
	$e_asfalto=$_POST["equipo"];
	//$n_obra=$_POST["n_obra"];
						if ($r_planta!= '')
								{
									$detalle=$r_planta;
								}
								else if ($patente!='') 
								{
									$detalle=$patente;
								}
								
								else{
									$detalle=$equipo;
								}
								
	$fecha = date("Y-m-d H:i:s");
	$vale=$_POST["vale"];
	$item=$_POST["item"];
	$r_planta=$_POST["r_planta"];
	$patente=$_POST["patente"];
	$e_asfalto=$_POST["e_asfalto"];
	$producto=$_POST["producto"];
	$chofer=$_POST["chofer"];
	$litros=$_POST["litros"];
	$odo=$_POST["odo"];
	$cliente=$_POST["cliente"];
	$obra=$_POST["obra"];
//echo $obra;

	$sql="insert into ingreso_petroleo(fecha, vale, item, r_planta, patente, e_asfalto, producto, chofer, litros, odo, cliente, obra) values ('$fecha','$vale','$item','$r_planta','$patente','$equipo', '$producto', '$chofer', '$litros', '$odo', '$cliente', '$n_obra')";
	
	$result = mysql_query($sql);

?><body>
<center>
<p><!--<!--<br><br><br><br><br><br>-->
</p>
<table width="913" border="0">
      <?
	  
	  $fecha= trim(date("d m Y"));
	  $mes=substr($fecha,2,3);
	  
	  $dia= substr($fecha,0,2);
	switch ($mes) 
	{
  		case '01':
        	$mesa = "Enero";
          	break;
		case '02':
        	$mesa =  "Febrero";
        	break;
    	case '03':
        	$mesa = "Marzo";
        	break;
		case '04':
        	$mesa =  "Abril";
        	break;
		case '05':
        	$mesa = "Mayo";
        	break;
		case '06':
        	$mesa = "Junio";
        	break;
		case '07':
        	$mesa = "Julio";
        	break;
		case '08':
        	$mesa = "Agosto";
        	break;
		case '09':
        	$mesa =  "Septiembre";
        	break;
		case '10':
        	$mesa =  "Octubre";
        	break;
		case '11':
        	$mesa = "Noviembre";
        	break;
		case '12':
        	$mesa = "Diciembre";
        	break;	
	}
$año= substr($fecha,6);
?>
      
  <tr>
    <td width="172"><img src="../rutas_small.jpg" width="172" height="84"></td>
    <td colspan="4" align="center"><strong>REGISTRO INTERNO PETR&Oacute;LEO</strong><br>
      <strong>PLANTA RANCAGUA</strong></td>
    <td width="87" align="center">Nro. Vale<br>
      <? echo $vale; ?></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
    </tr>
  <tr>
    <td>Fecha:</td>
    <td colspan="3"><? echo $dia; ?> <? echo $mesa?> <? echo $año;?><br></td>
    <td width="220">&nbsp;</td>
    <td><p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td>Departamento:</td>
    <td width="124"><? echo $item; ?></td>
    <td width="93">Detalle:</td>
    <td width="177"><? echo $detalle; ?></td>
    <td>Litros:</td>
    <td><? echo $litros; ?></td>
  </tr>
  <tr>
    <td>Nombre receptor del suministro:</td>
    <td colspan="3"><? echo $chofer; ?></td>
    <td>Kms. /Hor&oacute;metro</td>
    <td><? echo $odo; ?></td>
  </tr>
  <tr>
    <td>Cliente:</td>
    <td width="135"><? echo $nombre; ?></td>
    <td>Obra:</td>
    <td colspan="5"><? echo $n_obra; ?></td>
  </tr>
  <tr>
    <td colspan="6" align="center"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>_____________________</p></td>
  </tr>
  <tr>
    <td colspan="6" align="center">V&deg;B&deg; Jefe de Planta</td>
  </tr>
  <tr>
    <td colspan="6"><p>&nbsp;</p>
      <p>Carga efectiva de Litros de petr&oacute;leo:_________</p></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left">______________________</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>______________________</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left">V&deg;B&deg; Operador de Planta:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">V&deg;B&deg; Receptor Suministro</td>
    <td>&nbsp;</td>
  </tr>
  </table>
<br>
<table width="913" border="0">
  <tr>
    <td>------------------------------------------------------------------------------------------------------------------------------------------------------</td>
  </tr>
</table>
<br>
<table width="913" border="0">
  <?
	  
	  $fecha= trim(date("d m Y"));
	  $mes=substr($fecha,2,3);
	  
	  $dia= substr($fecha,0,2);
	switch ($mes) 
	{
  		case '01':
        	$mesa = "Enero";
          	break;
		case '02':
        	$mesa =  "Febrero";
        	break;
    	case '03':
        	$mesa = "Marzo";
        	break;
		case '04':
        	$mesa =  "Abril";
        	break;
		case '05':
        	$mesa = "Mayo";
        	break;
		case '06':
        	$mesa = "Junio";
        	break;
		case '07':
        	$mesa = "Julio";
        	break;
		case '08':
        	$mesa = "Agosto";
        	break;
		case '09':
        	$mesa =  "Septiembre";
        	break;
		case '10':
        	$mesa =  "Octubre";
        	break;
		case '11':
        	$mesa = "Noviembre";
        	break;
		case '12':
        	$mesa = "Diciembre";
        	break;	
	}
$año= substr($fecha,6);
?>
  <tr>
    <td width="172"><img src="../rutas_small.jpg" width="172" height="84"></td>
    <td colspan="4" align="center"><strong>REGISTRO INTERNO PETR&Oacute;LEO</strong><br>
      <strong>PLANTA CURIC&Oacute;</strong></td>
    <td width="87" align="center">Nro. Vale<br>
      <? echo $vale; ?></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td>Fecha:</td>
    <td colspan="3"><? echo $dia; ?> <? echo $mesa?> <? echo $año;?><br></td>
    <td width="220">&nbsp;</td>
    <td><p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td>Departamento:</td>
    <td width="124"><? echo $item; ?></td>
    <td width="93">Detalle:</td>
    <td width="177"><? echo $detalle; ?></td>
    <td>Litros:</td>
    <td><? echo $litros; ?></td>
  </tr>
  <tr>
    <td>Nombre receptor del suministro:</td>
    <td colspan="3"><? echo $chofer; ?></td>
    <td>Kms. /Hor&oacute;metro</td>
    <td><? echo $odo; ?></td>
  </tr>
  </tr>
  <tr>
    <td>Cliente:</td>
    <td width="135"><? echo $nombre; ?></td>
    <td>Obra:</td>
    <td colspan="5"><? echo $n_obra; ?></td>
  </tr>
  <tr>
    <td colspan="6" align="center"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>_____________________</p></td>
  </tr>
  <tr>
    <td colspan="6" align="center">V&deg;B&deg; Jefe de Planta</td>
  </tr>
  <tr>
    <td colspan="6"><p>&nbsp;</p>
      <p>Carga efectiva de Litros de petr&oacute;leo:_________</p></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left">______________________</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>______________________</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left">V&deg;B&deg; Operador de Planta:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">V&deg;B&deg; Receptor Suministro</td>
    <td>&nbsp;</td>
  </tr>
</table>
</center>
</body>
</html>

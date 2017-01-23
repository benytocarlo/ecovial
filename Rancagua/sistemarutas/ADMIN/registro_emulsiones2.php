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
$fecha=$_POST["fecha"];
//echo $fecha;
$chofer=$_POST["chofer"];
$patente=$_POST["patente"];
$obra=$_POST["obra"];

$sql3="select nombre from cliente where id='".$cliente."' ";
//echo $sql3;
$result3 = mysql_query($sql3); 
 while($row = mysql_fetch_row($result3))
			{
			$nombre=$row[0];
			}
$sql4="select * from camiones where id='".$patente."' ";
//echo $sql4;
$result4 = mysql_query($sql4); 
 while($row = mysql_fetch_row($result4))
			{
			$patente=$row[1];
			}	

$sql5="select nombre from obra where id='".$obra."' ";
//echo $sql5;
$result5 = mysql_query($sql5); 
 while($row = mysql_fetch_row($result5))
			{
			$n_obra=$row[0];
			}
			
$sql5="select nombre from chofer where id='".$chofer."' ";
//echo $sql5;
$result5 = mysql_query($sql5); 
 while($row = mysql_fetch_row($result5))
			{
			$n_chofer=$row[0];
			}
//echo $n_obra;
//$n_obra=$_POST["n_obra"];
					
	$chofer=$_POST["chofer"];
	//echo $chofer;
	$patente=$_POST["patente"];							
	//echo $chofer;
	$fecha =$_POST["fecha"];
//	 date("Y-m-d H:i:s");
	//echo $patente;
	$guia=$_POST["guia"];
	//echo $guia;
	$obra=$_POST["obra"];
	//echo $obra;
	$producto=$_POST["producto"];
	//echo $producto;
	$litros=$_POST["litros"];
	//echo $litros;
	$superficie=$_POST["superficie"];
	//echo $superficie;
	$cliente=$_POST["cliente"];
	//echo $cliente;
//echo $obra;

	$sql="insert into ingreso_emulsiones(chofer, patente, fecha, guia, obra, producto, litros, superficie, cliente) values ('$chofer','$patente','$fecha','$guia','$obra','$producto', '$litros', '$superficie', '$cliente')";
	
	$result = mysql_query($sql);

?><body>
<center>
<p><!--<!--<br><br><br><br><br><br>-->
</p>
<br>
<table width="913" border="0">
  <tr>
    <td align="center"><p>-------------------------------------------------Registro Insertado Exitosamente!!!!!------------------------------------------------------</p>
      <p><a href="index.php">Volver</a></p></td>
  </tr>
</table>

<p><br>
</p>
</center>
</body>
</html>

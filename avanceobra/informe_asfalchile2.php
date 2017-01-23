<?php 
//print_r($_POST);
?>
<?php 
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
	
	
	$cliente = $_POST["cliente"];
	$obra = $_POST["obra"];
	$equipo = $_POST["equipo"];

$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$sql = "SELECT ce.fecha, ce.equipo, ce.obra, ce.h_termino FROM control_equipos ce, asfalchile ac WHERE ce.equipo=ac.equipo and ce.fecha between '$fecha_inicio' and '$fecha_termino' and ce.h_termino!='' ORDER BY ce.fecha, ce.obra, ce.equipo asc ";
//$sql = "select * from datos where cliente='$cliente' and  fecha  between '$fecha_inicio' and '$fecha_termino' ";
//echo $sql;
$result = mysql_query($sql,$conexion) or die(mysql_error());
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body,td,th {
	font-size: 16px;
}
</style>
</head>
<body>
<div align="center" > 
  <p><font color="#BABBD8" class="fondo1"><i><b>
    </b></i></font>
  <table width="944" border="0">
    <tr>
      <td width="435" height="93"><p><font face="Trebuchet MS"><strong>Constructora RUTAS SpA<br>
RUT: 76.495.749-0 </strong><br>
        <br>
      </font></p></td>
      <td width="431"><div align="right"><img src="rutas_small.jpg" width="191" height="84"></div></td>
    </tr>
  </table>
<center>
      <p><font color="#000000" size="5" face="Trebuchet MS" class="fondo1"><b>INFORME  HOROMETROS</b></font><font color="#000000" size="5" face="Trebuchet MS" class="fondo1"><b> POR PERÍODO</b></font></p>
    
<table width="346" border="0">
        <tr>
          <td width="130">Desde:</td>
          <td width="695"><?php echo $fecha_inicio; ?></td>
        </tr>
        <tr>
          <td>Hasta:</td>
          <td><?php echo $fecha_termino; ?></td>
        </tr>
      </table>
    <p>&nbsp;</p>
  </center><form name="form1" method="post" action="informe_proveedores2.php" target="_blank">
    <table width="981" border="1">
      <tr>
        <td width="116" align="center"><div align="center"><strong>FECHA</strong></div></td>
		<td width="145" align="center"><div align="center"><strong>EQUIPO</strong></div></td>
        <td width="453" align="center"><div align="center"><strong>OBRA </strong></div></td>
        <td width="239" align="center"><div align="center"><strong>HOROMETRO DE TÉRMINO </strong></div></td>

	  </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[0];
		$equipo = $row[1];
		$obra=$row[2];
		$h_termino=$row[3];


				echo "<tr>";
		echo"<td>$fecha</td><td>$equipo</td><td>$obra</td><td>$h_termino</td>";
     	echo "</tr>";	      
         }?>  
                  <tr>
      
    
        </tr>
    </table>
  </form>
  <p class="texto2">&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
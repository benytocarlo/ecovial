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
	
	$opecho = $_POST["opecho"];
//echo $opecho;
//	$obra = $_POST["obra"];
//	echo $obra;
//	$maquina = $_POST["maquina"];
//echo $maquina;
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$sql = "select * from petroleo_ecomaq where opecho='$opecho' and fecha between '$fecha_inicio' and '$fecha_termino' order by fecha asc";
//$sql = "select * from datos where cliente='$cliente' and  fecha  between '$fecha_inicio' and '$fecha_termino' ";
//
$result = mysql_query($sql,$conexion) or die(mysql_error());
//echo $sql;
?>
<html>

<body>
<div align="center" > 
  <p><font color="#BABBD8" class="fondo1"><i><b>
    </b></i></font>
  <table width="975" border="0">
    <tr>
      <td height="137"><p><font face="Trebuchet MS"><strong>Constructora RUTAS SpA<br>
RUT: 76.495.749-0 </strong><br>
      </font></p></td>
      <td><div align="right"><img src="rutas_small.jpg" width="191" height="84"></div></td>
    </tr>
  </table>
<center>
      <p><font color="#000000" size="5" face="Trebuchet MS" class="fondo1"><b><font face="Arial, Helvetica, sans-serif">INFORME    
  PETR&Oacute;LEO </font></b></font><b><font color="#000000" size="5" face="Arial, Helvetica, sans-serif">POR CHOFER</font></b> </p>
      <p>&nbsp;</p>
<table width="451" border="0">
        <tr>
          <td width="130">Chofer:</td>
          <td width="695"><?php echo $opecho; ?></td>
        </tr>
        <tr>
          <td>Desde:</td>
          <td><?php echo $fecha_inicio; ?></td>
        </tr>
        <tr>
          <td>Hasta:</td>
          <td><?php echo $fecha_termino; ?></td>
        </tr>
      </table>
    <p>&nbsp;</p>
  </center>
<form name="form1" method="post" action="informe_proveedores2.php" target="_blank">
  <table width="947" border="1">
      <tr>
        <td width="84"><div align="center"><font size="3" face="Arial, Helvetica, sans-serif">Fecha</font></div></td>
		<td width="52"><div align="center"><font size="3" face="Arial, Helvetica, sans-serif">	    Report</font></div></td>
        <td width="301"><div align="center"><font size="3" face="Arial, Helvetica, sans-serif">Obra</font></div></td>
        <td width="68"><div align="center"><font size="3" face="Arial, Helvetica, sans-serif">Patente</font></div></td>
        <td width="68" align="center">Od&oacute;metro</td>
        <td width="166"><div align="center"><font size="3" face="Arial, Helvetica, sans-serif">Proveedor</font></div></td>
        <td width="68"><div align="center"><font size="3" face="Arial, Helvetica, sans-serif">Total <br>
        Litros </font></div></td>
      </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[1];
		$report = $row[2];
		//$maquina = $row[6];
		$obra = $row[6];
		$eqcam=$row[5];
		$proveedor=$row[9];
		//$t_horas=$row[9];
		$litros=$row[7];
		$horo=$row[8];
		//$d_trabajos=$row[13];
	$suma=$suma+$litros;

{
//$horas_fact=0;
}

	//					$suma2=$suma2+$horas_fact;
				echo "<tr>";
		echo"<td>$fecha</td><td>$report</td><td>$obra</td><td>$eqcam</td><td>$horo</td><td>$proveedor</td><td>$litros</td>";
     	echo "</tr>";	      
         }?>  
                  <tr>
        <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"><strong>Total Litros del Período</strong></div></td>
        <td><div align="right"><strong><?php echo $suma; ?> </strong></div></td>
        </tr>
    </table>
  </form>
  <p>&nbsp;</p>
  <p class="texto2">&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
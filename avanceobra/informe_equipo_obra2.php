<?php 
header('Content-Type: text/html; charset=iso-8859-1');
//print_r($_POST);
?>
<?php 
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
	
	$equipo = $_POST["equipo"];
	$operador = $_POST["operador"];
//echo $cliente;
	$obra = $_POST["obra"];
	//echo $obra;
//	$maquina = $_POST["maquina"];
//echo $maquina;
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$sql = "select * from control_equipos where equipo='$equipo' and obra='$obra' and fecha between '$fecha_inicio' and '$fecha_termino' order by fecha asc";
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
  <table width="894" border="0">
    <tr>
      <td height="137"><p><font face="Trebuchet MS"><strong>Constructora RUTAS SpA<br>
RUT: 76.495.749-0 </strong><br>
      </font></p></td>
      <td><div align="right"><img src="rutas_small.jpg" width="191" height="84"></div></td>
    </tr>
  </table>
<center>
      <p>&nbsp;</p>
      <p><font color="#000000" size="5" face="Trebuchet MS" class="fondo1">	 <b>INFORME DE EQUIPO  </b></font><b><font color="#000000" size="5" face="Trebuchet MS"> POR OBRA</font></b></p>
<table width="451" border="0">
        <tr>
          <td>Equipo:</td>
          <td><?php echo $equipo; ?></td>
        </tr>
        <tr>
          <td width="130">Obra:</td>
          <td width="695"><?php echo $obra; ?></td>
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
    <br>
</center><form name="form1" method="post" action="informe_proveedores2.php" target="_blank">
    <table width="837" border="1">
      <tr>
        <td width="100"><div align="center"><font size="4" face="Trebuchet MS">Fecha</font></div></td>
		<td width="59"><div align="center"><strong><font face="Trebuchet MS">	    Report</font></strong></div></td>
        <td width="73"><div align="center"><font face="Trebuchet MS"><strong> Horas</strong></font></div></td>
        <td width="316"><div align="center"><font face="Trebuchet MS"><strong>Operador</strong></font></div></td>
        <td width="255"><div align="center"><font face="Trebuchet MS"><strong>Cliente</strong></font></div></td>
      </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[1];
		$report = $row[2];
		//$maquina = $row[6];
	//	$obra = $row[6];
		$horas=$row[6];
		$operador=$row[3];
		//$t_horas=$row[9];
		$cliente=$row[7];
		//$t_realizados=$row[12];
		//$d_trabajos=$row[13];
	$suma=$suma+$horas;

{
//$horas_fact=0;
}

	//					$suma2=$suma2+$horas_fact;
				echo "<tr>";
		echo"<td>$fecha</td><td>$report</td><td>$horas</td><td>$operador</td><td>$cliente</td>";
     	echo "</tr>";	      
         }?>  
                  <tr>
        <td colspan="2"><strong>Total Horas del Período</strong></td>
         <td><strong><?php echo $suma; ?></strong>Horas</td>
        <td><div align="right"></div></td>
        <td><div align="right"></div></td>
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
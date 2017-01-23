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

	
	$operador = $_POST["operador"];
	//echo $clientes;
//	$maquina = $_POST["maquina"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$sql = "select * from control_equipos where operador='$operador' and equipo!= ' ' order by fecha asc ";
	echo $sql;
$result = mysql_query($sql,$conexion) or die(mysql_error());

//$sql2 = "select * from control_dia where nombre_obra='$nombre_obra' and (eq_maq_fre!= ' ' or eq_maq_maf!= ' ') order by fecha asc ";
	//echo $sql2;
//$result2 = mysql_query($sql2,$conexion) or die(mysql_error());

//$sql3 = "select * from control_dia where nombre_obra='$nombre_obra' and (imprimacion!= ' ' or riego!= ' ') order by fecha asc ";
	//echo $sql3;
//$result3 = mysql_query($sql3,$conexion) or die(mysql_error());

?>
<html>

<body>
<div align="center" > 
  <p><font color="#BABBD8" class="fondo1"><i><b>
    </b></i></font>
  <table width="801" border="0">
    <tr>
      <td width="469" height="90"><p><font face="Trebuchet MS"><strong>Constructora RUTAS SpA<br>
RUT: 76.495.749-0 </strong></font></p></td>
      <td width="367"><div align="right"><img src="rutas_small.jpg" width="191" height="84"></div></td>
    </tr>
  </table>
  <center>
    <p><font color="#000000" size="5" face="Trebuchet MS" class="fondo1"><i><b>INFORME ESTADO AVANCE DE OBRA</b></i></font></p>
  </center>
  <center><p>&nbsp;</p>
  </center>
  <table width="778" border="0">
    <tr>
      <td width="130">Operador:</td>
      <td width="695"><?php echo $operador; ?></td>
    </tr>

    <tr>
      <td>Desde:</td>
      <td><?php echo $fecha_inicio; ?></td>
    </tr>
    <tr>
      <td>Hasta</td>
      <td><?php echo $fecha_termino; ?></td>
    </tr>
  </table>
<table width="791" border="1">
      <tr>
        <td width=""><div align="center"><font size="4" face="Trebuchet MS">Fecha</font></div></td>
		<td width=""><div align="center"><strong><font face="Trebuchet MS">Report</font></strong></div></td>
		<td width=""><div align="center"><strong><font face="Trebuchet MS">Cliente</font></strong></div></td>
        <td width=""><div align="center"><strong><font face="Trebuchet MS">Equipo</font></strong></div></td>
        <td width=""><div align="center"><strong><font face="Trebuchet MS">Obra</font></strong></div></td>
        <td width=""><div align="center"><strong><font face="Trebuchet MS">horas</font></strong></div></td>
        
      </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[1];
		$report = $row[2];
		$cliente = $row[7];
		$equipo = $row[4];
		$obra = $row[5];
		$horas = $row[6];
	//	$eq_maq_fre=$row[5];
	//	$m2_fresado=$row[7];
	//	$eq_maq_maf=$row[6];
	//	$m2_maf=$row[8];
			//	$suma=$suma+$monto;
		$suma1=$suma1+$m3;
		$sumita=$sumita+$m2_asf;
	//	$suma2=$suma2+$m2_fresado;
	//	$suma3=$suma3+$m2_maf;
	echo "<tr>";
		//echo"<td>$fecha_compra</td><td>$tipo_compra</td><td>$producto</td><td>$factura</td><td>$fecha_pago</td><td>$monto</td>";
     	echo "<td>".$fecha."</td>";
		echo "<td>".$report."</td>";
		echo "<td>".$cliente."</td>";
		echo "<td>".$equipo."</td>";
		echo "<td>".$obra."</td>";
     	echo "<td>".number_format($horas, 0, '', '.')."</td>";	
//		echo "<td>".number_format($m2_asf, 0, '', '.')."</td>";		
     //	echo "<td>".$eq_maq_fre."</td>";	
	//	echo "<td>".$m2_fresado."</td>";
	//	echo "<td>".$eq_maq_maf."</td>";
	//	echo "<td>".$m2_maf."</td>";		
	//	echo "<td>".number_format($monto, 0, '', '.')."</td>";
//		echo "<td>".$fletero."</td>";
	//	echo "<td>".$patente."</td>";
		echo "</tr>";	      
         }?>  
               <tr>
        <td><div align="center"></div></td>
        <td></td>
        <td><div align="right"><strong>Totales</strong></div></td>
                   <?php echo "<td>".number_format($suma1, 0, '', '.')."</td>"; ?>
                   <?php echo "<td>".number_format($sumita, 0, '', '.')."</td>"; ?>
                      
      <strong> </strong>      </tr>
    </table>
  
    <p class="texto2">&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
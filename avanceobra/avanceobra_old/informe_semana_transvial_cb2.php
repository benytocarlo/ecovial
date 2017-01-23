<?php 
///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);

	
		$chofer = $_POST["chofer"];
		$dt = $_POST["dt"];
	//	echo $dt;
		$df = $_POST["df"];
	//	echo $df;
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$fecha_inicio_aux	= $fecha_inicio." 00:00:01";
$fecha_final_aux	= $fecha_termino." 23:59:59";

$sql = "select * from control_cama where chofer='$chofer' and fecha  between '$fecha_inicio_aux' and '$fecha_final_aux' order by fecha asc";
//echo $sql;
//$sql = "select * from datos where cliente='$cliente' and fecha  between '$fecha_inicio' and '$fecha_termino' ";


$result = mysql_query($sql,$conexion) or die(mysql_error());

$sql2 = "select * from petroleo_ecomaq where opecho='$chofer' and fecha between '$fecha_inicio' and '$fecha_termino' order by fecha asc";
//$sql = "select * from datos where cliente='$cliente' and  fecha  between '$fecha_inicio' and '$fecha_termino' ";
//echo $sql;
$result2 = mysql_query($sql2,$conexion) or die(mysql_error());

?>
<html>

<body>
<div align="center" > 
  <p><font color="#BABBD8" class="fondo1"><i><b>
    </b></i></font>
  <center>
    <p><font color="#000000"><strong><font size="5" face="Trebuchet MS">INFORME POR CHOFER CAMA BAJA</font></strong></font></p>
  </center>
  <table width="841" border="0">
    <tr>
      <td width="182">Chofer:</td>
      <td colspan="4"><?php echo $chofer; ?></td>
    </tr>

    <tr>
      <td>Desde:</td>
      <td colspan="4"><?php echo $fecha_inicio; ?></td>
    </tr>
    <tr>
      <td>Hasta:</td>
      <td colspan="4"><?php echo $fecha_termino; ?></td>
    </tr>
    <tr>
      <td colspan="2">D&iacute;as Trabajados del Periodo</td>
      <td width="59"><?php echo $dt; ?></td>
      <td width="197">Dias Festivos del Periodo</td>
      <td width="384"><?php echo $df; ?></td>
    </tr>
  </table>
  </p>
  <form name="form1" method="post" action="informe_proveedores2.php" target="_blank">
   <strong><font face="Trebuchet MS"><br>
   </font></strong>
   <table width="800" border="0" align="center">
     <tr>
       <td align="center"><strong>PRODUCCI&Oacute;N</strong><br>
         <table width="" border="1" align=center>
         <tr>
             <td width=""><div align="center"><font size="4" face="Trebuchet MS"><br>
              Fecha</font></div></td>
             <td width=""><div align="center"><strong><font face="Trebuchet MS"><br>
              Report</font></strong></div></td>
             <td width=""><div align="center"><font face="Trebuchet MS"><strong><br>
               Patente<br>
             </strong></font></div></td>
             <td width=""><div align="center"><font face="Trebuchet MS"><strong><br>
               Precio</strong></font></div></td>
           </tr>
           <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[1];
		$report = $row[2];
		$guia = $row[3];
		$m3 = $row[5];
		$patente=$row[11];
		$precio=$row[12];
		$cliente=$row[4];
		$obra=$row[9];
//		$obra=$row[3];
//		$o_compra=$row[19];
	$suma=$suma+$m3;
	$suma2=$suma2+$precio;	
						$suma1=$suma1+$fresado;
						if($t_horas<=5 and $horas>=1)
						{
							$horas_fact=6;
						}
				
						if($horas>=6)
						{
							//$horas_fact=t_horas;
							$horas_fact=$horas;
						}
						if($horas==0)
{
$horas_fact=0;
}

					//	$suma2=$suma2+$horas_fact;
				echo "<tr>";
		echo"<td>$fecha</td><td>$report</td><td>$patente</td><td>$precio</td>";
     	echo "</tr>";	      
         }?>
           <tr>
             <td colspan="3"><strong>Totales</strong></td>
             <td><div align="right"><strong><?php echo number_format($suma2, 0, ',', '.'); ?></strong></div></td>
           </tr>
    </table></td>
       <td>&nbsp;</td>
       <td align="center"><strong>PETR&Oacute;LEO</strong><br>
         <table width="" border="1" align=center>
         <tr>
             <td width=""><div align="center"><font size="4" face="Trebuchet MS">Fecha</font></div></td>
             <td width=""><div align="center"><strong><font face="Trebuchet MS">Patente</font></strong></div></td>
             <td width=""><div align="center"><font face="Trebuchet MS"><strong>Litros</strong></font></div></td>
             <td width=""><div align="center"><font face="Trebuchet MS"><strong>Precio <br>
              x Litro</strong></font></div></td>
             <td width=""><div align="center"><font face="Trebuchet MS"><strong>Precio Total</strong></font></div></td>
           </tr>
           <?php while($row =mysql_fetch_row($result2))
		{
		$fecha = $row[1];
		$patente = $row[5];
		$litros = $row[7];
		$km = $row[8];
		$precio=$row[10];
//		$patente=$row[11];
//		$chofer=$row[10];
//		$obra=$row[9];
//		$obra=$row[3];
//		$o_compra=$row[19];
	$suma=$suma+$precio;
	$tprecio=$litros*$precio;
	$tprecio2=$tprecio2+$tprecio;
	$suma2=$suma2+$litros;	
						$suma1=$suma1+$fresado;
						if($t_horas<=5 and $horas>=1)
						{
							$horas_fact=6;
						}
				
						if($horas>=6)
						{
							//$horas_fact=t_horas;
							$horas_fact=$horas;
						}
						if($horas==0)
{
$horas_fact=0;
}

					//	$suma2=$suma2+$horas_fact;
				echo "<tr>";
		echo"<td>$fecha</td><td>$patente</td><td>$litros</td><td>$precio</td><td>$tprecio</td>";
     	echo "</tr>";	      
         }?>
           <tr>
             <td colspan="4"><strong>Totales</strong></td>
             <td><strong><?php echo number_format($tprecio2, 0, ',', '.'); ?></strong></td>
           </tr>
    </table></td>
     </tr>
   </table>
   <br>
   <table width="336" border="1">
     <tr>
     <?php $pneta=$suma2-$tprecio2;
	          $pneta2=$pneta*(8/100);
			//echo $pneta;
			//$pneta3=$pneta+$pneta2;
			//echo $pneta2;
		$valorpro=($pneta2/$dt)*$df;	  
	  ?>
       <td width="172">&nbsp;</td>
       <td width="148"><?php // echo number_format($valorpro, 0, ',', '.'); ?></strong></td>
     </tr>
     <tr>
       <td><strong>Bono Producci&oacute;n</strong></td>
       <td>$ <?php echo number_format($pneta2, 0, ',', '.'); ?></td>
     </tr>
   </table>
   <p>&nbsp;</p>
   <p><strong><font face="Trebuchet MS"><br>
     </font></strong><font face="Trebuchet MS"><strong><br>
      </strong></font><br>
     
   </p>
   <p>&nbsp;</p>
  </form>
  </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
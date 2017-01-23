<?php 
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
	
		$operador = $_POST["operador"];
		$trato = $_POST["trato"];
		$habiles = $_POST["habiles"];
		$festivos = $_POST["festivos"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$sql = "select * from control_equipos where operador='$operador' and fecha  between '$fecha_inicio' and '$fecha_termino' order by fecha asc";
//$sql = "select * from datos where cliente='$cliente' and fecha  between '$fecha_inicio' and '$fecha_termino' ";
//echo $sql; 

$result = mysql_query($sql,$conexion) or die(mysql_error());
?>
<html>

<body>
<div align="center" > 
  <p><font color="#BABBD8" class="fondo1"><i><b>
    </b></i></font>
  <table width="825" border="0">
    <tr>
      <td height="75"><p><font face="Trebuchet MS"><strong>Constructora RUTAS SpA<br>
RUT: 76.495.749-0 </strong></font></p></td>
      <td><div align="right"><img src="rutas_small.jpg" width="189" height="84"></div></td>
    </tr>
  </table>
<center>
      <p><font color="#000000"><strong><font size="5" face="Trebuchet MS">INFORME HORAS POR OPERADOR </font></strong></font></p>
  </center>
  <table width="841" border="0">
    <tr>
      <td width="130">Operador:</td>
      <td colspan="5"><?php echo $operador; ?></td>
    </tr>

    <tr>
      <td>Desde:</td>
      <td colspan="5"><?php echo $fecha_inicio; ?></td>
    </tr>
    <tr>
      <td>Hasta:</td>
      <td colspan="5"><?php echo $fecha_termino; ?></td>
    </tr>
    <tr>
      <td>Dias Habiles</td>
      <td width="120"><?php echo $habiles; ?></td>
      <td width="91">Dias Festivos</td>
      <td width="93"><?php echo $festivos; ?></td>
      <td width="126">Valor Trato</td>
      <td width="255"><?php echo $trato; ?></td>
    </tr>
  </table>
  </p>
  <form name="form1" method="post" action="informe_proveedores2.php" target="_blank">
    <br>
    <table width="920" border="1">
      <tr>
        <td width="93"><div align="center"><font size="4" face="Trebuchet MS">Fecha</font></div></td>
		<td width="74"><div align="center"><strong><font face="Trebuchet MS"> Report</font></strong></div></td>
        <td width=""><div align="center"><strong><font face="Trebuchet MS">M&aacute;quina</font></strong></div></td>
        <td width=""><div align="center"><strong><font face="Trebuchet MS">Obra</font></strong></div></td>
        <td width="77"><div align="center"><font face="Trebuchet MS"><strong>Total Horas </strong></font></div></td>
        <td width="94"><div align="center"><font face="Trebuchet MS"><strong> Horas a Pagar</strong></font></div></td>
   	      </tr>
	  <?php
	  $suma=0; while($row =mysql_fetch_row($result))
		{
		$fecha = $row[1];
		$report = $row[2];
		$equipo=$row[4];
		$obra = $row[5];
		$horas = $row[6];
//		$t_horas=$row[9];

				$suma=$suma+$horas;
						$suma1=$suma1+$fresado;
						if($horas<=5 and $horas>=1)
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
		$suma2=$suma2+$horas_fact;
		echo "<tr>";
		echo"<td>$fecha</td><td>$report</td><td>$equipo</td><td>$obra</td><td>$horas</td><td>$horas_fact</td>";
     	echo "</tr>";	      
         }?>  
		 <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><div align="right"><strong>Total :</strong></div></td>
		<td><div align="center"><strong> <?php echo $suma; ?> Hrs.</strong></div></td>
		<td><div align="center"><strong> <?php echo $suma2; ?> Hrs.</strong></div></td>
        
</tr><?php $tratito=$suma2*$trato; ?>
<?php $semana=($tratito/$habiles)*$festivos; ?>
		 <tr>
		   <td colspan="5" align="right"><strong>Total Horas del Trato</strong></td>
		   <td align="right"><strong>$ <?php echo number_format($tratito, 0, ',', '.'); ?></strong></td>
      </tr>
		 <tr>
		   <td colspan="5" align="right"><strong>Total Semana Corrida</strong></td>
		   <td align="right"><strong>$ <?php echo number_format($semana, 0, ',', '.'); ?></strong></td>
      </tr>
		 <tr>
		   <td colspan="5" align="right"><input name="textfield" type="text" id="textfield" size="25"></td>
		   <td align="right"><input name="textfield2" type="text" id="textfield2" size="10"></td>
      </tr>
    </table>
    
    <p>&nbsp;</p>
  </form>
  </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
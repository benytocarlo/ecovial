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
	//$obra = $_POST["obra"];
	$equipo = $_POST["equipo"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$sql = "select * from control_equipos where equipo='$equipo' and cliente='$cliente' and fecha between '$fecha_inicio' and '$fecha_termino' order by fecha asc";
//$sql = "select * from datos where cliente='$cliente' and  fecha  between '$fecha_inicio' and '$fecha_termino' ";
//echo $sql;
$result = mysql_query($sql,$conexion) or die(mysql_error());
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
      <p><font color="#000000" size="5" face="Trebuchet MS" class="fondo1">	 <b><font face="Arial, Helvetica, sans-serif">INFORME  FRESADORA </font></b></font><font face="Arial, Helvetica, sans-serif"><b><font color="#000000" size="5">POR</font></b><font color="#000000" size="5" class="fondo1"><b> CLIENTE</b></font></font></p>
<table width="841" border="0">
        <tr>
          <td width="130">Maquina:</td>
          <td width="695"><?php echo $equipo; ?></td>
        </tr>
        <tr>
          <td width="130">Cliente:</td>
          <td width="695"><?php echo $cliente; ?></td>
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
      <p><br>
    </p>
  </center><form name="form1" method="post" action="informe_proveedores2.php" target="_blank">
    <table width="879" border="1">
      <tr>
        <td width="86"><div align="center"><font size="3" face="Trebuchet MS">Fecha</font></div></td>
		<td width="80"><div align="center"><font size="3" face="Trebuchet MS">	    Report</font></div></td>
        <div align="center"> </div></td>
 <td width="76"><div align="center"><font size="3" face="Trebuchet MS">Operador <br>
        </font></div></td>
        <td width="88"><div align="center"><font size="3" face="Trebuchet MS">Total <br>
        Horas </font></div></td>
          <td width="88"><div align="center"><font size="3" face="Trebuchet MS">Horas<br>
        Facturadas </font></div></td>
        <td width="161"><div align="center"><font size="3" face="Trebuchet MS">Trabajo</font></div></td>
		      </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[1];
		$report = $row[2];
		//$maquina = $row[6];
	//	$cliente= $row[7];
		$operador=$row[3];
		$horas=$row[6];
		$trabajo=$row[8];
//		$t_realizados=$row[12];
//		$fresado=$row[14];
//		$d_trabajos=$row[13];
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
	echo"<td>$fecha</td><td>$report</td><td>$operador</td><td>$horas</td><td>$horas_fact</td><td>$trabajo</td>";
     	echo "</tr>";      
         }?>  
                  <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="right"><strong>Totales</strong></div></td>
        <td><strong><?php echo $suma; ?> </strong>Horas</td>
        <td><strong><?php echo $suma2; ?> </strong>Horas</td>
   
 
      </tr>
    </table>
  </form>
  <p class="texto2">&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
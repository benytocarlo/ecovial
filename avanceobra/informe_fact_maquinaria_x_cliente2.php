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

$sql = "select * from control_equipos where equipo='$equipo' and cliente='$cliente' and fecha between '$fecha_inicio' and '$fecha_termino' order by fecha asc";
//$sql = "select * from datos where cliente='$cliente' and  fecha  between '$fecha_inicio' and '$fecha_termino' ";
//echo $sql;
$result = mysql_query($sql,$conexion) or die(mysql_error());
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div align="center" > 
  <p><font color="#BABBD8" class="fondo1"><i><b>
    </b></i></font>
  <table width="975" border="0">
    <tr>
      <td height="137"><p><font face="Trebuchet MS"><strong>Constructora RUTAS SpA<br>
RUT: 76.495.749-0 </strong><br>
      </font></p></td>
      <td><div align="right"><img src="rutas_small.jpg" width="189" height="84"></div></td>
    </tr>
  </table>
<center>
      <p><font color="#000000" size="5" face="Trebuchet MS" class="fondo1"><b>INFORME  FACTURACIÓN MAQUINA POR CLIENTE</b></font></p>
    
<table width="477" border="0">
        <tr>
          <td width="130">Equipo:</td>
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
    <p>&nbsp;</p>
  </center><form name="form1" method="post" action="informe_proveedores2.php" target="_blank">
    <table width="960" border="1">
      <tr>
        <td width="115"><div align="center"><font size="4" face="Trebuchet MS">Fecha</font></div></td>
		<td width="92"><div align="center"><strong><font face="Trebuchet MS">  
	    Report</font></strong></div></td>
        <td width="122"><div align="center"><font face="Trebuchet MS"><strong>Total 
        Horas </strong></font></div></td>
        <td width="162"><div align="center"><font face="Trebuchet MS"><strong>Total 
        Facturaci&oacute;n </strong></font></div></td>

		<td width="435"><div align="center"><strong><font face="Trebuchet MS">Obra</font></strong></div></td>

      </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[1];
		$report = $row[2];
		//$maquina = $row[6];
		//$obra = $row[3];
		//$equipo=$row[4];
		$horas=$row[6];
		$obra=$row[5];
//		$t_realizados=$row[12];
//		$obra=$row[3];
//		$o_compra=$row[19];
	$suma=$suma+$horas;
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

						$suma2=$suma2+$horas_fact;
				echo "<tr>";
		echo"<td>$fecha</td><td>$report</td><td>$horas</td><td>$horas_fact</td><td>$obra</td>";
     	echo "</tr>";	      
         }?>  
                  <tr>
        <td>&nbsp;</td>
        <td><strong>Totales</strong></td>
        <td><div align="right"><strong><?php echo $suma; ?> </strong>Horas</div></td>
        <td><strong><?php echo $suma2; ?> </strong> Horas</td>
        <td>&nbsp;</td>
   
             </tr>
    </table>
  </form>
  <p class="texto2">&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
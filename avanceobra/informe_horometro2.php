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
	
	
	//$cliente = $_POST["cliente"];
//	$obra = $_POST["obra"];
//	$equipo = $_POST["equipo"];

$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$sql = "select * from control_equipos where fecha between '$fecha_inicio' and '$fecha_termino' and h_termino != '' order by fecha  asc";
//$sql = "select * from datos where cliente='$cliente' and  fecha  between '$fecha_inicio' and '$fecha_termino' ";
//echo $sql;
$result = mysql_query($sql,$conexion) or die(mysql_error());
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
.Estilo2 {color: #000000;
	font-size: 24px;
	font-weight: bold;
}
</style>
</head>
<body>
<div align="center" > 
  <p><font color="#BABBD8" class="fondo1"><i><b>
    </b></i></font>
  <table width="975" border="0">
    <tr>
      <td height="137"><p><font face="Trebuchet MS"><strong>Constructora RUTAS SpA<br>
RUT: 76.495.749-0 </strong></font></p></td>
      <td><div align="right"><img src="rutas_small.jpg" width="189" height="84"></div></td>
    </tr>
  </table>
<center>
      <p><span class="Estilo2">INFORME 
HOROMETROS POR PERÍODO</span></p>
    
<table width="477" border="0">
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
    <table width="" border="1">
      <tr>
        <td width=""><div align="center"><font size="4" face="Trebuchet MS">Fecha</font></div></td>
		<td width=""><div align="center"><strong>Equipo  
	    </strong></div></td>
        <td width=""><div align="center"><font face="Trebuchet MS"><strong>Horometro <br>
          Termino<br>
        </strong></font></div></td>
        <td width=""><div align="center">Operador </div></td>
        <td width=""><font face="Trebuchet MS"><strong>Obra</strong></font></td>

	  </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[1];
		$equipo = $row[4];
		$h_termino = $row[8];
		//$obra = $row[3];
		//$equipo=$row[4];
		$operador=$row[3];
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
		echo"<td>$fecha</td><td>$equipo</td><td>$h_termino</td>
		<td>$operador</td><td>$obra</td>";
     	echo "</tr>";	      
         }?>
    </table>
  </form>
  <p class="texto2">&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
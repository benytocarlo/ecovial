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
	$obra = $_POST["obra"];
	$cliente = $_POST["cliente"];

$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$sql = "select * from control_equipos where fecha between '$fecha_inicio' and '$fecha_termino' order by fecha asc";
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
  <table width="900" border="0">
    <tr>
      <td width="563" height="137"><p><font face="Trebuchet MS"><strong>Constructora RUTAS SpA<br>
RUT: 76.495.749-0 </strong></font></p></td>
      <td width="402"><div align="right"><img src="rutas_small.jpg" width="191" height="84"></div></td>
    </tr>
  </table>
<center>
      <p><span class="Estilo2">INFORME DE
EQUIPOS POR PERÍODO</span></p>
    
<table width="477" border="0">
       
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
    <table width="900" border="1">
      <tr>
        <td width="90"><div align="center"><font size="4" face="Trebuchet MS">Fecha</font></div></td>
		<td width=""><div align="center"><strong><font face="Trebuchet MS">  
	    Report</font></strong></div></td>
        <td width=""><div align="center"><font face="Trebuchet MS"><strong>Total 
                <br>
        Horas </strong></font></div></td>
        <td width=""><div align="center"><font face="Trebuchet MS"><strong>Total 
                <br>
        Facturaci&oacute;n </strong></font></div></td>
        <td width=""><font face="Trebuchet MS"><strong>Equipo</strong></font></td>

		<td width=""><div align="center"><strong><font face="Trebuchet MS">Obra</font></strong></div></td>
        <td width=""><div align="center"><strong><font face="Trebuchet MS">Operador</font></strong></div></td>
<td width=""><div align="center"><strong><font face="Trebuchet MS">Cliente</font></strong></div></td>

      </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[1];
		$report = $row[2];
		$operador = $row[3];
		//$obra = $row[3];
		$equipo=$row[4];
		$horas=$row[6];
		$obra=$row[5];
//		$t_realizados=$row[12];
		$cliente=$row[7];
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
		echo"<td>$fecha</td><td>$report</td><td>$horas</td><td>$horas_fact</td><td>$equipo</td><td>$obra</td><td>$operador</td><td>$cliente</td>";
     	echo "</tr>";	      
         }?>  
                  <tr>
        <td>&nbsp;</td>
        <td><strong>Totales</strong></td>
        <td><div align="right"><strong><?php echo $suma; ?> </strong>Horas</div></td>
        <td><strong><?php echo $suma2; ?> </strong> Horas</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
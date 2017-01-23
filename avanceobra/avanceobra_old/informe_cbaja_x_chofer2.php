<?php 
//print_r($_POST);
?>
<?php 
//////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
	
	
	$chofer = $_POST["chofer"];
	$obra = $_POST["obra"];
	$equipo = $_POST["equipo"];

$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$sql = "select * from control_cama where chofer='$chofer' and fecha between '$fecha_inicio' and '$fecha_termino' order by fecha asc";
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
        <br>
      </font></p></td>
      <td><div align="right"><img src="rutas_small.jpg" width="191" height="84"></div></td>
    </tr>
  </table>
<center>
      <p><font color="#000000" size="5" face="Trebuchet MS" class="fondo1"><b>INFORME  CAMAS BAJA POR CHOFER</b></font></p>
    
<table width="477" border="0">
        <tr>
          <td width="130">Chofer:</td>
          <td width="695"><?php echo $chofer; ?></td>
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
        <td width="88"><div align="center"><font size="4" face="Trebuchet MS">Fecha</font></div></td>
		<td width="67"><div align="center"><strong><font face="Trebuchet MS">Report</font></strong></div></td>
        <td width="61"><div align="center"><font face="Trebuchet MS"><strong>Guía</strong></font></div></td>
		<td width="48"><div align="center"><font face="Trebuchet MS"><strong>Obra</strong></font></div></td>
        <td width="63"><div align="center"><font face="Trebuchet MS"><strong>Precio</strong></font></div></td>
        <td width="95"><div align="center"><font face="Trebuchet MS"><strong>Patente</strong></font></div></td>
        <td width="170"><div align="center"><font face="Trebuchet MS"><strong>Cliente</strong></font></div></td>
     </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[1];
		$report = $row[2];
		$guia = $row[3];
		$obra_transvial = $row[5];
		$precio=$row[12];
		$patente=$row[11];
		$cliente=$row[4];
//		$obra=$row[9];
//		$obra=$row[3];
//		$o_compra=$row[19];
	//$suma=$suma+$m3;
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
		echo"<td>$fecha</td><td>$report</td><td>$guia</td><td>$obra_transvial</td><td>$precio</td><td>$patente</td><td>$cliente</td>";
     	echo "</tr>";	      
         }?>  
                  <tr>
        <td>&nbsp;</td>
 <td>&nbsp;</td>
          <td>&nbsp;</td>
        <td><strong>Totales</strong></td>
     
        <td><strong><?php echo number_format($suma2, 0, ',', '.'); ?></strong> </td>
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
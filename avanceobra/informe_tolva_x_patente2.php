﻿<?php 
//print_r($_POST);
?>
<?php 
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
	
	
	$patente = $_POST["patente"];
//echo $patente;
	$obra = $_POST["obra"];
	$equipo = $_POST["equipo"];

$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$sql = "select * from control_tolvas where patente='$patente' and fecha between '$fecha_inicio' and '$fecha_termino' order by fecha asc";
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
      <td><div align="right"><img src="rutas_small.jpg" width="189" height="84"></div></td>
    </tr>
  </table>
<center>
      <p><font color="#000000" size="5" face="Trebuchet MS" class="fondo1"><b>INFORME  TOLVAS POR PATENTE</b></font></p>
    
<table width="477" border="0">
        <tr>
          <td width="130">Patente:</td>
          <td width="695"><?php echo $patente; ?></td>
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
		<td width="48"><div align="center"><font face="Trebuchet MS"><strong>M3</strong></font></div></td>
        <td width="63"><div align="center"><font face="Trebuchet MS"><strong>Valor M3</strong></font></div></td>
<td width="63"><div align="center"><font face="Trebuchet MS"><strong>Total Flete</strong></font></div></td>
        <td width="95"><div align="center"><font face="Trebuchet MS"><strong>Chofer</strong></font></div></td>
       
        <td width="316"><div align="center"><font face="Trebuchet MS"><strong>Obra</strong></font></div></td>
      </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[1];
		$report = $row[2];
		$guia = $row[3];
		$m3 = $row[5];
		$precio=$row[6];
		$chofer=$row[8];
		//$cliente=$row[4];
		$obra=$row[9];
//		$obra=$row[3];
//		$o_compra=$row[19];
	$suma=$suma+$m3;
	$multi=$m3*$precio;	
	$suma2=$suma2+$multi;	
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
		echo"<td>$fecha</td><td>$report</td><td>$guia</td><td>$m3</td><td>$precio</td><td>$multi</td><td>$chofer</td><td>$obra</td>";
     	echo "</tr>";	      
         }?>  
                  <tr>
        <td>&nbsp;</td>

          <td>&nbsp;</td>
        <td><strong>Totales</strong></td>
        <td><div align="right"><strong><?php echo number_format($suma, 0, ',', '.'); ?></strong></div></td>
        <td><strong><?php echo number_format($suma2, 0, ',', '.'); ?></strong> </td>
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
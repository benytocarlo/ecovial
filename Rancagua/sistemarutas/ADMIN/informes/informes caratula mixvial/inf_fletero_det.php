<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$transportista=$_POST["transportista"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$sql="select * from transportista where id=".$transportista."";
		  $result = mysql_query($sql); 
			while($row = mysql_fetch_row($result))
			{
			$nombre_cliente=$row[1];
			}	

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo3 {font-size: 24px}
.Estilo5 {font-size: 24px; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="861" border="0" align="center">
  <tr>
    <td width="851" height="333"><table width="851" height="331" border="0">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="542" height="138"><table width="525" border="0">
              <tr>
                <td width="83" height="23"><p><img src="Ecovial_chico.jpg" width="200" height="66" /></p></td>
                <td width="432"><div align="center"><span class="Estilo5">Informe por Fletero</span></div></td>
              </tr>

            </table>            </td>
          <td width="283"><p align="center">Ecovial Ltda.<br />
77.580.000-3<br />
Hijuela 10 Lote A Maquehua<br />
Fono (75) 2543470<br />
recepcion@ecovial.cl<br />
Curicó</p></td>
          </tr>
        </table>          </td>
        </tr>
      <tr>
        <td height="74"><table width="841" border="0">
          <tr>
            <td width="130">Fletero:</td>
            <td width="695"><?php echo $nombre_cliente; ?></td>
          </tr>
          <tr>
            <td>Desde:</td>
            <td><?php echo $fecha_inicio; ?></td>
          </tr>
          <tr>
            <td>Hasta:</td>
            <td><?php echo $fecha_final; ?></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="105">
<?		 
		/*  $sql2="select * from pesaje pe, obra ob,camiones cam  where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.transportista=".$transportista." and pe.nula!='si' and pe.obra=ob.id and pe.patente=cam.id GROUP BY pe.obra";
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{	
							$obra=$row[15];
							$obraid=$row[9];
							$patente=$row[20];
							$guia=$row[0];
							$tipo_mezcla=$row[13];
							if($tipo_mezcla!="emulsion")
							{
								$sql3="select *,SUM(producto)AS Total  from detalle_pesaje dp where guia=".$guia." group by guia";
								$result3 = mysql_query($sql3); 
								echo "<table width='200' border='1'> <tr><td height='62'><table width='840' border='1'> <tr><td width='133' height='39'>Obra</td><td width='691'><p>".$obra."</p></td> </tr></table> <table width='839' border='1'><tr><td width='134'>Patente</td><td width='689'>Total (M3)</td></tr>";
								while($row2 = mysql_fetch_row($result3))
								{	
									$cantidad=$row2[2];
									echo "<tr><td>".$patente."</td><td>".$cantidad."</td></tr>";
								}
								echo "</table></td></tr></table> <br>";
							}else{
							
							$sql4="select *,SUM(producto)AS Total  from detalle_pesaje dp where guia=".$guia." group by guia";
								$result4 = mysql_query($sql4); 
								echo "<table width='200' border='1'> <tr><td height='62'><table width='840' border='1'> <tr><td width='133' height='39'>Obra</td><td width='691'><p>".$obra."</p></td> </tr></table> <table width='839' border='1'><tr><td width='134'>Patente</td><td width='689'>Total (Litros)</td></tr>";
								while($row4 = mysql_fetch_row($result4))
								{	
									$cantidad=$row4[2];
									echo "<tr><td>".$patente."</td><td>".$cantidad."</td></tr>";
								}
								echo "</table></td></tr></table> <br>";
							
							}
					}*/
					
					 $sql2="select * from pesaje pe, obra ob,camiones cam  where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.transportista=".$transportista." and pe.nula!='si' and pe.tipo_guia!='traslado' and pe.obra=ob.id and pe.patente=cam.id GROUP BY pe.obra";
				//	echo $sql2;
					 $result2 = mysql_query($sql2); 
           			while($row = mysql_fetch_row($result2))
						{	
							$obra=$row[15];
							$obraname=$row[16];
							$patente=$row[21];
							$guia=$row[0];
							$tipo_mezcla=$row[13];
							$sql4="select *,SUM(dp.litros)AS Total  from detalle_pesaje dp ,camiones cam, pesaje pe where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.transportista=".$transportista." and pe.obra=".$obra." and pe.id=dp.guia and cam.id=pe.patente GROUP BY pe.patente";
								$result4 = mysql_query($sql4); 
								echo "<table width='200' border='1'> <tr><td height='62'><table width='840' border='1'> <tr><td width='133' height='39'>Obra</td><td width='691'><p>".$obraname."</p></td> </tr></table> <table width='839' border='1'><tr><td width='134'>Patente</td><td width='689'>Total (Litros)</td></tr>";
								while($row4 = mysql_fetch_row($result4))
								{	
									$patente=$row4[7];
									$cantidad=$row4[29];
									echo "<tr><td>".$patente."</td><td>".$cantidad."</td></tr>";
								}
								echo "</table></td></tr></table> <br>";
							
							}
				
			?>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

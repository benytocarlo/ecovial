<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$patente=$_POST["centro"];
$cliente=$_POST["cliente"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
/* while($row = mysql_fetch_row($result))
			{
			$nombre_centro=$row[1];
			}	
*/
		$sql3="select nombre from cliente where id='".$cliente."' ";
//echo $sql3;
$result3 = mysql_query($sql3); 
 while($row = mysql_fetch_row($result3))
			{
			$nombre=$row[0];
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
                <td width="83" height="23"><p><img src="../../rutas_small.jpg" width="172" height="84" /></p></td>
                <td width="432"><div align="center"><span class="Estilo5">Informe Interno de Petroleo</span></div></td>
              </tr>

            </table>            </td>
            <td width="283"><p align="center"><strong><br />
              </strong><strong>Constructora RUTAS SpA<br />
              RUT: 76.495.749-0<br />
              Planta Rancagua
              </strong></p>            
            </td>
          </tr>
        </table>          </td>
        </tr>
      <tr>
        <td height="74"><table width="841" border="0"> 
<tr>
            <td>Cliente:</td>
            <td><?php echo $nombre; ?></td>
          </tr>
          <tr>
            <td width="130">Desde:</td>
            <td width="695"><?php echo $fecha_inicio; ?></td>
          </tr>
          <tr>
            <td>Hasta:</td>
            <td><?php echo $fecha_final; ?></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="105">
        <table width='845' height="29" border='1'> <tr>
          <td width="" align="center">Fecha</td>
          <td width="" align="center">Vale</td>
          <td width="" align="center">Item</td>
          <td width="" align="center">Detalle</td>
          <td width="" align="center">Chofer/Operador</td>
          <td width="" align="center">Litros</td>
         
          <td width="" align="center">Obra</td>
        </tr>
        <? 
		
		
			
		$total=0;
		$cant=0;
		$full=0;
		$full_2=0;
		$sql2="select distinct (vale), fecha, item, r_planta, patente, e_asfalto, producto, chofer, litros, odo, cliente, obra from ingreso_petroleo  where fecha  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' order by fecha, vale ASC";
		//echo $sql2;
		//$sql2="select * from ingreso_petroleo  where fecha  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' order by fecha ASC";
						 $result2 = mysql_query($sql2); 
           			while($row = mysql_fetch_row($result2))
						{	
							
							$fecha=$row[1];
							$vale=$row[0];
							$item=$row[2];
							$r_planta=$row[3];
							$patente=$row[4];
							$e_asfalto=$row[5];
						//	$producto=$row[7];
							$chofer=$row[7];
							$litros=$row[8];
						//	$odo=$row[10];
							$obra=$row[11];
							$full=$litros*$precio;
							
						//	echo $r_planta;
						//	echo $e_asfalto;
$sql3="select nombre from cliente where id='".$cliente."' ";
$result3 = mysql_query($sql3); 
 while($row = mysql_fetch_row($result3))
			{
			$nombre=$row[0];
			}						

$sql4="select * from equipo where id='".$e_asfalto."' ";
//echo $sql4;
$result4 = mysql_query($sql4); 
 while($row = mysql_fetch_row($result4))
			{
			$e_asfalto=$row[1];
			}						

						//	echo $patente;
													
							if ($r_planta!= '')
								{
									$detalle=$r_planta;
								}
								else if ($patente!='') 
								{
									$detalle=$patente;
								}
								
								else{
									$detalle=$e_asfalto;
								}
								
						//echo $detalle;
												
							
							
							echo "<tr><td>".$fecha."</td>";
							echo "<td>".$vale."</td>";
							echo "<td>".$item."</td>";
							//echo "<td>".$r_planta."</td>";
							//echo "<td>".$patente."</td>";
							echo "<td>".$detalle."</td>";
//							echo "<td>".$producto."</td>";
							echo "<td>".$chofer."</td>";
							echo "<td>".$litros."</td>";
						//	echo "<td>".$odo."</td>";
							echo "<td>".$obra."</td>";
						//	echo "<td>".$full."</td></tr>";
							$total=$total+$litros;
							$cant=$cant+$precio;
							$full_2=$full_2+$full;
							
						}
		
		
		?>
        
        <tr>
          <td width=""></td>
          <td width=""></td>
      
          <td width="">&nbsp;</td>
          <td width="" align="right"></td>
          <td width=""><strong>Total:</strong></td>
          <td width="" align="right"><? echo $total; ?></td>
          
           <td width="">&nbsp;</td>
           
        </tr>
        </table> 
        <br>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

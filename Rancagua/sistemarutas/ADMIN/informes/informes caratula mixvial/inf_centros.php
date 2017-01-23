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
                <td width="83" height="23"><p><img src="Ecovial_chico.jpg" width="200" height="66" /></p></td>
                <td width="432"><div align="center"><span class="Estilo5">Informe Interno de Petroleo</span></div></td>
              </tr>

            </table>            </td>
            <td width="283"><p align="center"><strong><br />
              </strong>Ecovial Ltda.<br />
77.580.000-3<br />
Hijuela 10 Lote A Maquehua<br />
Fono (75) 2543470<br />
recepcion@ecovial.cl<br />
Curicó</p>            
            </td>
          </tr>
        </table>          </td>
        </tr>
      <tr>
        <td height="74"><table width="841" border="0">
         <tr>
            <td width="130">Cliente:</td>
            <td width="695"><?php echo $nombre; ?></td>
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
        <table width='845' height="29" border='1'> <tr>
          <td width="109">Fecha</td>
          <td width="144">Veh&iacute;culo</td>
          <td width="103">Patente</td>
          <td width="300">Producto</td>
          <td width="118">Litros</td>
          <td width="118">Precio x Litro</td>
          <td width="118">Precio Total</td>
        </tr>
        <? 
		$total=0;
		$cant=0;
		$full=0;
		$full_2=0;
		$sql2="select * from ingreso_petroleo  where fecha  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and cliente='".$cliente."'  order by fecha ASC";
		//echo $sql2;
		//$sql2="select * from ingreso_petroleo  where fecha  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' order by fecha ASC";
						 $result2 = mysql_query($sql2); 
           			while($row = mysql_fetch_row($result2))
						{	
							
							$fecha=$row[1];
							$item=$row[3];
							$patente=$row[4];
							$producto=$row[5];
							$litros=$row[6];
							$precio=$row[7];
							$full=$litros*$precio;
							echo "<tr><td>".$fecha."</td>";
							echo "<td>".$item."</td>";
							echo "<td>".$patente."</td>";
							echo "<td>".$producto."</td>";
							echo "<td>".$litros."</td>";
							echo "<td>".$precio."</td>";
							echo "<td>".$full."</td></tr>";
							$total=$total+$litros;
							$cant=$cant+$precio;
							$full_2=$full_2+$full;
							
						}
		
		
		?>
        
        <tr>
          <td width="109"></td>
          <td width="144"></td>
          <td width="103"></td>
          <td width="300"><strong>Total:</strong> </td>
          <td width="118"><? echo $total; ?> </td>
          <td width="103"></td>
          <td width="118"><? echo $full_2; ?> </td>
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

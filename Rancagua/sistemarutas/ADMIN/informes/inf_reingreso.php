<?php 
include("conexion.php"); 
$producto=$_POST["materia"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$sql="select * from mezclas where id=".$producto."";
		  $result = mysql_query($sql); 
			while($row = mysql_fetch_row($result))
			{
			$nombre_mezcla=$row[2];
			}	
			//echo $tipo_mezcla;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
    <td width="851" height="315"><table width="851" height="313" border="0">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="542" height="138"><table width="548" border="0">
                <tr>
                  <td width="227" height="23"><p><img src="rutas_small.jpg" width="172" height="84" /></p></td>
                  <td width="311"><div align="center"><span class="Estilo5">Informe Reingreso de Emulsiones</span></div></td>
                </tr>
            </table></td>
            <td width="283"><p align="center"><strong>Constructora RUTAS SpA<br />
RUT: 76.495.749-0<br />
Planta Rancagua </strong></p></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="74"><table width="841" border="0">
          <tr>
            <td width="130">Producto:</td>
            <td width="695"><?php echo $nombre_mezcla; ?></td>
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
        <td height="87">
        <div align="center">
         
          <br />
          
            <strong>Detalle        </strong>
        </div>
        <table  border="1">
         <tr>
            <td width="50">N° Guia</td>
            <td width="50">Fecha</td>
            <td width="200">Obra</td>
			<td width="200">Cliente</td>
			<td width="100">Patente</td>
            <td width="50">Cantidad</td>
            <td width="200">Tipo</td>
          </tr>
 <? $sql2="select * from  devoluciones dv  where dv.fecha  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and dv.id_materia='".$producto."' order by dv.fecha asc ";
		
		$sumacantidad=0;
		$sumatotal=0;
		$result2 = mysql_query($sql2); 
		//echo $sql2;	
		while($row = mysql_fetch_row($result2))
		{	
			$guia=$row[1];
			$fecha=$row[5];	
			$patente=$row[6];
			$obra=$row[7];
			$cantidad=$row[9];
			$cliente=$row[8];
			$sql2list="select * from pesaje pe, camiones cam, obra ob, mezclas ml, detalle_pesaje dp , cliente cli where pe.id=dp.guia and dp.guia='".$guia."' and cli.id=pe.cliente and ml.id=dp.producto and dp.producto=".$producto." and cam.id=pe.patente and ob.id=pe.obra";
			
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
						
									$obra1=$row[25];
									$cantidad1=$row[34];
									$patente1=$row[21];
									$fecha1=$row[4];
									$cliente1=$row[38];
									echo "<tr>";
									echo "<td>".$guia."</td>";
									echo "<td>".$fecha1."</td>";
									echo "<td>".$obra1."</td>";
									echo "<td>".$cliente1."</td>";
									echo "<td>".$patente1."</td>";
									echo "<td>".$cantidad1."</td>";
									echo "<td> VENTA - SALIDA</td>";
									echo "</tr>";
							}
					$total=$cantidad1-$cantidad;
			echo "<tr>";
			echo "<td height='24'>".$guia."</td>";
			echo "<td height='24'>".$fecha."</td>";
			echo "<td>".$obra."</td>";
			echo "<td>".$cliente."</td>";
			echo "<td>".$patente."</td>";
			echo "<td>".$cantidad."</td>";
			echo "<td> REINGRESO </td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<td height='24'></td>";
			echo "<td height='24'></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td><strong> TOTAL </strong></td>";
			echo "<td>".$total."</td>";
			echo "<td> </td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<td height='24'></td>";
			echo "<td height='24'></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td> </td>";
			echo "<td></td>";
			echo "<td> </td>";
			echo "</tr>";
						}
			?>        </table>
          </td>
      </tr>
    </table>
     
          </td>
      </tr>
    </table>
    </td>
  </tr>
</table></body>
</html>

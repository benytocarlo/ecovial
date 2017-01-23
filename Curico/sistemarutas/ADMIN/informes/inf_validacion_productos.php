<?php 
include("conexion.php"); 
$tipo_mezcla=$_POST["tipo_mezcla"];
$mezclita=$_POST["mezclita"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$sql="select * from mezclas where id=".$mezclita."";
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
                  <td width="227" height="23"><p><img src="../../rutas_small.jpg" width="172" height="84" /></p></td>
                  <td width="311"><div align="center"><span class="Estilo5">Informe de Validación por Productos</span></div></td>
                </tr>
            </table></td>
            <td width="283"><p align="center"><strong>Constructora RUTAS SpA<br />
RUT: 76.495.749-0<br />
Planta Curicó</strong></p></td>
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
          
            <strong>Detalle General Clientes</strong></div>
        <table width="841" border="1">
          <tr>
          <td width="173" height="24">Cantidad Vendida </td>
            <td width="652" height="24">Nombre Cliente</td>
            </tr>
 <? $sql2="		 SELECT SUM( det.litros ) AS cantidad, cli.nombre
					FROM pesaje pes, detalle_pesaje det, cliente cli, transportista tra
						WHERE det.producto = ".$mezclita."
							AND pes.id = det.guia
							AND pes.fecha_hora
							BETWEEN '".$fecha_inicio."'
							AND '".$fecha_final."'
							AND pes.nula != 'si'
							AND cli.id = pes.cliente
							AND pes.transportista = tra.id
							GROUP BY pes.cliente ASC";
		//echo $sql2;
		$sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{	
								
									$cantidad=$row[0];
									$nombreobra=$row[1];
									
									echo "<tr>";
									echo "<td height='24'>".$cantidad."</td>";
									echo "<td>".$nombreobra."</td>";
									echo "</tr>";
									$sumacantidad=$sumacantidad+$cantidad;
									
							}
			?>        </table>
         <div align="center"><br />
             <? //echo $cantidad; ?>
			 <br />
             <strong>Detalle General Obras</strong></div>
         <table width="841" border="1">
          <tr>
          <td width="162" height="24">Cantidad Vendida </td>
            <td width="350" height="24">Nombre Obra</td>
            <td width="307">Cliente</td>
          </tr>
 <? $sql2="		 		SELECT SUM( det.litros ) AS cantidad, obr.nombre, cli.nombre
						FROM pesaje pes, detalle_pesaje det, obra obr, transportista tra,cliente cli
						WHERE det.producto = ".$mezclita."
						AND pes.id = det.guia
						AND pes.fecha_hora
						BETWEEN '".$fecha_inicio."'
						AND '".$fecha_final."'
						AND pes.nula != 'si'
						AND cli.id = pes.cliente
						AND obr.id = pes.obra
						AND pes.transportista = tra.id
						GROUP BY pes.obra ASC ";
						//echo $sql2;
		$sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{	
								
									$cantidad=$row[0];
									$nombreobra=$row[1];
									$nombrecliente=$row[2];
									echo "<tr>";
									echo "<td height='24'>".$cantidad."</td>";
									echo "<td>".$nombreobra."</td>";
									echo "<td>".$nombrecliente."</td>";
									echo "</tr>";
									
							}
			?>        </table>
          </td>
      </tr>
    </table>
      <div align="center"><br />
      
      
          </td>
      </tr>
    </table>
    </td>
  </tr>
</table>



</body>
</html>

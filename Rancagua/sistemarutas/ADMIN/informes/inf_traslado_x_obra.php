﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$obra=$_POST["obra"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];

$sql="select * from obra where id=".$obra."";
		  $result = mysql_query($sql); 
			while($row = mysql_fetch_row($result))
			{
			$nombre_obra=$row[1];
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
    <td width="851" height="333"><table width="851" height="309" border="0">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="542" height="138"><table width="525" border="0">
              <tr>
                <td width="83" height="23"><p><img src="rutas_small.jpg" width="172" height="84" /></p></td>
                <td width="432"><div align="center"><span class="Estilo5">Informe Guías de Traslado</span></div></td>
              </tr>

            </table>            </td>
         <td width="283"><p align="center"><strong>Constructora RUTAS SpA<br />
RUT: 76.495.749-0<br />
Planta Rancagua </strong></p></td>
          </tr>
        </table>          </td>
        </tr>
      <tr>
        <td height="52"><table width="841" border="0">
          <tr>
            <td>Obra:</td>
            <td><?php echo $nombre_obra; ?></td>
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
        <table width="841" border="1">
          <tr>
            <td width="62" height="23">N° Guia</td>
		
            <td width="63">Fecha </td>
         
			
			
			<td width="241">Patente </td>
			<td width="241">Producto </td>
            <td width="66">Cantidad</td>
            </tr>
<?		 
		  $sql2last="select * from pesaje dp,obra ob,camiones ca,transportista tra, cliente cli where dp.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' AND dp.obra=".$obra." and dp.tipo_guia='traslado' and dp.obra=ob.id and tra.id=dp.transportista and ca.id=dp.patente and cli.id=dp.cliente";
	// echo $sql2last;
			$sumacantidad=0;
		  $sumatotal=0;
		  $totaltraslado=0;
		  $totalemulsion=0;
		  $totalmezclas=0;
		  $totalcombustible=0;
		  $totalfinal=0;
		  $resultt = mysql_query($sql2last); 
					while($row = mysql_fetch_row($resultt))
						{
							$n_guia=$row[0];
							$fecha=$row[4];	
						//	$cliente=$row[27];	
							//$transportista=$row[25];
							$patente=$row[21];							
							$tipo=$row[13];	
							//$obra=$row[16];
							//$partidacontrol=$row[14];		
							if($tipo=="traslado")
							{
								$sql2 ="select * from  detalle_traslado where n_guia='".$n_guia."'";
								$result2 = mysql_query($sql2); 
								while($row = mysql_fetch_row($result2))
								{ 
										$producto=$row[2];
										$cantidad=$row[3];
										echo "<tr>";
										echo "<td height='24'>".$n_guia."</td>";
										//echo "<td height='24'>".$partidacontrol."</td>";
										echo "<td>".$fecha."</td>";
									//	echo "<td>".$obra."</td>";
										//echo "<td>".$transportista."</td>";
										//echo "<td>".$cliente."</td>";
										echo "<td>".$patente."</td>";
										echo "<td>".$producto."</td>";
										echo "<td>".$cantidad."</td>";
										echo "</tr>";
										$totaltraslado=$totaltraslado+1;
										$totalfinal=$totalfinal+$total;
			 					}     
							}
							
						}
          ?>
      
        </table>
<br />
        
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$transportista=$_POST["transportista2"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"]." 23:59:59";
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
    <td width="851" height="333"><table width="851" height="309" border="0" align="center">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="542" height="138"><table width="525" border="0">
              <tr>
                <td width="83" height="23"><p><img src="../../rutas_small.jpg" width="172" height="84" /></p></td>
                <td width="432"><div align="center"><span class="Estilo5">Informe Carga de <br />
                Combustible</span></div></td>
              </tr>

            </table>          </td>
            <td width="283"><div align="center">
              <p align="center"><strong><br />
              </strong><strong>Constructora RUTAS SpA<br />
RUT: 76.495.749-0<br />
Planta Curicó</strong></p>
              <p align="center"></p>
            </div></td>
          </tr>
        </table>          </td>
        </tr>
      <tr>
        <td height="52"><table width="841" border="0">
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
            <td width="" height="23">Fecha</td>
			<td width="" height="23">Tipo de Carga </td>
            <td width="">Patente</td>
            <td width="">Empresa</td>
            <td width="">Chofer</td>
            <td width="">Cantidad de Litros </td>
            <td width="">Observaciones</td>
            
            </tr>
<?		 
		  $sql2last="select * from petroleo pt, chofer cho, transportista tr where pt.chofer=cho.id AND pt.empresa=tr.id AND pt.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' ";
		 
			 echo $sql2last;
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
							$fecha_hora=$row[0];
							$tipo=$row[1];	
							$patente=$row[2];		
							$empresa=$row[16];	
							$chofer=$row[9];	
							$litros=$row[5];	
							$observaciones=$row[6];	
							//if($fecha_hora=!" ")
							//{
								//$sql2 ="select * from  detalle_traslado where n_guia='".$n_guia."'";
								
							///	$result2 = mysql_query($sql2); 
								//while($row = mysql_fetch_row($result2))
								//{ 
										//$producto=$row[2];
										//$cantidad=$row[3];
										echo "<tr>";
										echo "<td height='24'>".$fecha_hora."</td>";
										echo "<td height='24'>".$tipo."</td>";
										echo "<td>".$patente."</td>";
										echo "<td>".$empresa."</td>";
										echo "<td>".$chofer."</td>";
										echo "<td>".$litros."</td>";
											$total=$litros;
										echo "<td>".$observaciones."</td>";
									//	echo "<td> 0 </td>";
									//	echo "<td> 0 </td>";
									//	echo "<td> Guia Traslado </td>";
									//	echo "</tr>";
									$totaltraslado=$totaltraslado+1;
									$totalfinal=$totalfinal+$total;
			 				//	}     
							}
							
							if($tipo=="emulsion")
							{
								$sql2 ="select * from detalle_pesaje dp, mezclas ml where dp.guia='".$n_guia."' and dp.producto=ml.id";
								$result2 = mysql_query($sql2); 
								while($row = mysql_fetch_row($result2))
								{ 
										$producto=$row[7];
										$cantidad=$row[2];
										$valor=str_replace(',', '.',$row[3]);
										echo "<tr>";
										echo "<td height='24'>".$n_guia."</td>";
										echo "<td height='24'>".$partidacontrol."</td>";
										echo "<td>".$fecha."</td>";
										echo "<td>".$cliente."</td>";
										echo "<td>".$producto."</td>";
										echo "<td>".$cantidad."</td>";
										echo "<td>".$valor."</td>";
										$total=$valor*$cantidad;
										echo "<td>".number_format($total, 0, '', '.')."</td>";
										echo "<td> Guia Emulsion </td>";
										echo "</tr>";
										$totalemulsion=$totalemulsion+1;
										$totalfinal=$totalfinal+$total;
			 					}     
							}
							
							if($tipo=="")
							{
								$sql2 ="select * from detalle_pesaje dp, mezclas ml where dp.guia='".$n_guia."' and dp.producto=ml.id";
								//echo $sql2;
								$result2 = mysql_query($sql2); 
								while($row = mysql_fetch_row($result2))
								{ 
										$producto=$row[7];
										$cantidad=$row[2];
										$valor=$row[3];
										echo "<tr>";
										echo "<td height='24'>".$n_guia."</td>";
										echo "<td>".$fecha."</td>";
										echo "<td>".$cliente."</td>";
										echo "<td>".$producto."</td>";
										echo "<td>".$cantidad."</td>";
										echo "<td>".$valor."</td>";
										$total=$valor*$cantidad;
										echo "<td>".number_format($total, 0, '', '.')."</td>";
										echo "<td> Guia Mezclas </td>";
										echo "</tr>";
										$totalmezclas=$totalmezclas+1;
										$totalfinal=$totalfinal+$total;
			 					}     
							}
							
							if($tipo=="combustible")
							{
								$sql2 ="select * from detalle_pesaje dp, mezclas ml where dp.guia='".$n_guia."' and dp.producto=ml.id";
								$result2 = mysql_query($sql2); 
								while($row = mysql_fetch_row($result2))
								{ 
										$producto=$row[7];
										$cantidad=$row[2];
										$valor=$row[3];
										echo "<tr>";
										echo "<td height='24'>".$n_guia."</td>";
										echo "<td>".$fecha."</td>";
										echo "<td>".$cliente."</td>";
										echo "<td>".$producto."</td>";
										echo "<td>".$cantidad."</td>";
										echo "<td>".$valor."</td>";
										$total=$valor*$cantidad;
										echo "<td>".number_format($total, 0, '', '.')."</td>";
										echo "<td> Guia Combustible </td>";
										echo "</tr>";
										$totalcombustible=$totalcombustible+1;
										$totalfinal=$totalfinal+$total;
			 					}     
							}
			//			}
          ?>
      
        </table>
        <table width="840" border="1">
            <tr>
              <td width="532">&nbsp;</td>
 				<td width="95">Total Litros</td>
                <td><? echo number_format($totalfinal, 0, '', '.'); ?></td>
            </tr>
          </table>
          <br />
        </td>
  </tr>
</table>
</body>
</html>

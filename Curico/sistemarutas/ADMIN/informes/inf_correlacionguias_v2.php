<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
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
                <td width="83" height="23"><p><img src="../../rutas_small.jpg" width="172" height="84" /></p></td>
                <td width="432"><div align="center"><span class="Estilo5">Informe Correlación de Guías</span></div></td>
              </tr>

            </table>            </td>
            <td width="283"><p align="center"><strong><br />
            </strong><strong>Constructora RUTAS SpA<br />
RUT: 76.495.749-0<br />
Planta Curicó</strong></p></td>
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
            <td width="62" height="23">N° Guia</td>
			<td width="63">Fecha </td>
            <td width="79">Cliente</td>
            <td width="241">Producto </td>
            <td width="66">Cantidad</td>
            <td width="54">Valor </td>
            <td width="54">Total</td>
            <td width="76">Obra</td>
            </tr>
<?		 
		  $sql2last="select * from pesaje dp, cliente li, obra ob where dp.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and dp.cliente=li.id and dp.obra=ob.id ";
			//echo $sql2last;
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
							$cliente=$row[16];		
							$obra=$row[25];	
					//		$partidacontrol=$row[14];	
							if($tipo="traslado")
							{
								$sql2 ="select * from  detalle_traslado where n_guia='".$n_guia."'";
								
								$result2 = mysql_query($sql2); 
								while($row = mysql_fetch_row($result2))
								{ 
										$producto=$row[2];
										$cantidad=$row[3];
										echo "<tr>";
										echo "<td height='24'>".$n_guia."</td>";
							//			echo "<td height='24'>".$partidacontrol."</td>";
										echo "<td>".$fecha."</td>";
										echo "<td>".$cliente."</td>";
										echo "<td>".$producto."</td>";
										echo "<td>".$cantidad."</td>";
										echo "<td> 0 </td>";
										echo "<td> 0 </td>";
										echo "<td>".$obra."</td>";
										echo "</tr>";
										$totaltraslado=$totaltraslado+1;
										$totalfinal=$totalfinal+$total;
			 					}     
							}
							
							if($tipo="emulsion")
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
						//				echo "<td height='24'>".$partidacontrol."</td>";
										echo "<td>".$fecha."</td>";
										echo "<td>".$cliente."</td>";
										echo "<td>".$producto."</td>";
										echo "<td>".$cantidad."</td>";
										echo "<td>".$valor."</td>";
										$total=$valor*$cantidad;
										echo "<td>".number_format($total, 0, '', '.')."</td>";
										echo "<td>".$obra."</td>";
										echo "</tr>";
										$totalemulsion=$totalemulsion+1;
										$totalfinal=$totalfinal+$total;
			 					}     
							}
							
							if($tipo="")
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
										//echo "<td height='24'>".$partidacontrol."</td>";
										echo "<td>".$fecha."</td>";
										echo "<td>".$cliente."</td>";
										echo "<td>".$producto."</td>";
										echo "<td>".$cantidad."</td>";
										echo "<td>".$valor."</td>";
										$total=$valor*$cantidad;
										echo "<td>".number_format($total, 0, '', '.')."</td>";
										echo "<td>".$obra."</td>";
										echo "</tr>";
										$totalmezclas=$totalmezclas+1;
										$totalfinal=$totalfinal+$total;
			 					}     
							}
							
							if($tipo="combustible")
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
									//	echo "<td height='24'>".$partidacontrol."</td>";
										echo "<td>".$fecha."</td>";
										echo "<td>".$cliente."</td>";
										echo "<td>".$producto."</td>";
										echo "<td>".$cantidad."</td>";
										echo "<td>".$valor."</td>";
										$total=$valor*$cantidad;
										echo "<td>".number_format($total, 0, '', '.')."</td>";
										echo "<td>".$obra."</td>";
										echo "</tr>";
										$totalcombustible=$totalcombustible+1;
										$totalfinal=$totalfinal+$total;
			 					}     
							}
						}
          ?>
      
        </table>
        <table width="840" border="1">
            <tr>
              <td width="421">&nbsp;</td>
 				<td width="91">&nbsp;</td>
                <td width="78">&nbsp;</td>
                <td width="58">Total</td>
                <td width="63"><? echo number_format($totalfinal, 0, '', '.'); ?></td>
                <td width="89">&nbsp;</td>
            </tr>
          </table>
          <br />
          <table width="840" border="1">
            <tr>
              <td width="255">Total Guias Emulsion</td>
 				<td width="569"><? echo $totalemulsion; ?></td>
              </tr>
            <tr>
              <td>Total Guias Mezclas</td>
              <td><? echo $totalmezclas; ?></td>
              </tr>
            <tr>
              <td>Total GuiasTraslados</td>
              <td><? echo $totaltraslado; ?></td>
              </tr>
            <tr>
              <td>Total Guias Combustibles</td>
              <td><? echo $totalcombustible; ?></td>
              </tr>
          </table>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

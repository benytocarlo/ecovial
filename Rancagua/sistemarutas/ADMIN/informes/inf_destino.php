<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$cliente=$_POST["cliente2"];
$sql="select * from cliente where id=".$cliente."";
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
    <td width="851" height="333"><table width="851" height="309" border="0" align="center">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="542" height="138"><table width="525" border="0">
              <tr>
                <td width="83" height="23"><p><img src="rutas_small.jpg" width="172" height="84" /></p></td>
                <td width="432"><div align="center"><span class="Estilo5">Informe Destino <br />
                  Clientes</span></div></td>
              </tr>

            </table>            </td>
         <td width="283"><p align="center"><strong>Constructora RUTAS SpA<br />
           RUT: 76.495.749-0<br />
           Planta Rancagua</strong></p>
           <p align="center">&nbsp;</p></td>
          </tr>
        </table>          </td>
        </tr>
         <tr>
        <td height="74"><table width="841" border="0">
          <tr>
            <td width="135">Cliente:</td>
            <td width="702"><?php echo $nombre_cliente; ?></td>
            <td width="1">&nbsp;</td>
          </tr>
      <tr>
        <td height="52" colspan="2"><table width="841" border="0">
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
        <td height="105" colspan="2">
        <br />
        <table width="819" border="1">
          <tr>
            <td width="527" height="23">Obra</td>
            <td width="62">M3</td>
            <td width="208">Producto </td>
            </tr>
<?		 
//$cliente=$_POST["nombre_cliente"];

		  $sql2last=" select sum(litros) total_litros, obra, producto from detalle_pesaje dp, pesaje pe where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' AND pe.cliente='".$cliente."' and pe.id=dp.guia and pe.tipo_guia='servicio' and pe.nula!='si' GROUP BY dp.producto ";
		  
		//  echo $sql2last;
		  
//		  $sumacantidad=0;
		//  $total_litros=0;
		  
		  $totalfinal=0;
		  	  $total_litros=$total_litros+litros;
		  $resultt = mysql_query($sql2last); 
					while($row = mysql_fetch_row($resultt))
						{
						
							
							$obra=$row[1];
							$total_litros=$row[0];	
							$producto=$row[2];
							
//							$total_litros=$total_litros+$litros;	
		//////////////////////////////////////////////////////////////////////////////
     	////////////////////////Nombre de la Mezcla///////////////////////
		//				$sql2m="select * from mezclas where id=".$producto."";
           				//	echo $sql2m;
		//						$result2m = mysql_query($sql2m); 
		//						while($row = mysql_fetch_row($result2m))
		//						{
		//							$nombre_mezcla=$row[2];
								//	$tipo_me=$row[1];
		//						}
      	//////////////////////////////////////////////////////////////////////////////
     	//////////////////////////////////////////////////////////////////////////////
		///////////////////////Nombre de la Obra/////////////////////
     							$sql2m="select * from obra where id=".$obra."";
           			//		echo $sql2m;
								$result2m = mysql_query($sql2m); 
								while($row = mysql_fetch_row($result2m))
								{
									$nombre_obra=$row[1];
									//$tipo_me=$row[1];
								}
  
										
										echo "<tr>";
										echo "<td height='24'>".$nombre_obra."</td>";
										echo "<td height='24'>".number_format($total_litros, 0, '', '.')."</td>";
										echo "<td>".$producto."</td>";
										
										$totalfinal=$totalfinal+$total_litros;
			 					}     
							
							
							
						
          ?>
        </table>
        <table width="818" border="1">
          <tr>
            <td width="528"><div align="right"><strong>Total M3</strong></div></td>
            <td><?  echo number_format($totalfinal, 0, '', '.');   ?></td>
            </tr>
        </table>
        <br />
         
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

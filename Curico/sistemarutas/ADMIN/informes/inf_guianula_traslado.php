<?php 
include("conexion.php"); 

$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];


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
    <td width="851"><table width="851" height="312" border="0">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="542" height="138"><table width="525" border="0">
                <tr>
                  <td width="83" height="23"><p><span class="Estilo3"><img src="../../rutas_small.jpg" width="172" height="84" /></span></p></td>
                  <td width="432"><div align="center"><span class="Estilo5">Informe Guias Nulas Traslado</span></div></td>
                </tr>
            </table></td>
         <td width="283"><p align="center"><strong><br />
              </strong><strong>Constructora RUTAS SpA<br />
              RUT: 76.495.749-0<br />
              Planta Curicó
              </strong></p>  </td>
            </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="74"><table width="841" border="0">
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
        <td height="86">
        <br /> <center>
          <strong>  </strong>
        </center>
        <br />
        <table width="841" border="1">
          <tr>
             <td width="77">Fecha</td>
            <td width="73" height="23">N° Guia</td>
			<td width="65"><p>Cantidad</p>                </td>
            
           <td width="231">Descripcion</td>
           <td width="101">Patente</td>
          </tr>
           <? $sql2="select * from pesaje pe,camiones cam where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and  cam.id=pe.patente and pe.nula='si' and pe.tipo_guia='traslado'";
				//echo $sql2;
		   	//	 $sumacantidad=0;
		  //$sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$guia=$row[0];
						//	$n_orden=$row[12];
							$fletero=$row[1];
							$fecha=$row[4];	
							$patente=$row[17];
						//	$tipo_mezcla=$row[13];
					//	$partidacontrol=$row[14];				
							$sql2list="select * from detalle_traslado dt where dt.n_guia='".$guia."' ";
							//		echo $sql2list;
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
								if($tipo_mezcla=="emulsion" || $tipo_mezcla=="combustible")
								{
									if($tipo_mezcla=="emulsion")
										{
										$entro1="si";
										}
									if($tipo_mezcla=="combustible")
										{
										$entro2="si";
										}
							
								}else{
									$descripcion=$row[2];
									$cantidad=$row[3];
									//$precio=$row[7];
									//$total=$cantidad*$precio;
									//$sumacantidad=$sumacantidad+$cantidad ;
									echo "<tr>";
									echo "<td>".$fecha."</td>";
									echo "<td height='24'>".$guia."</td>";
									//echo "<td height='24'>".$partidacontrol."</td>";
									echo "<td>".$cantidad."</td>";
									//echo "<td>".number_format($precio, 0, '', '.')."</td>";
									echo "<td>".$descripcion."</td>";
									echo "<td>".$patente."</td>";
									echo "</tr>";
								}
							}
						}
			?>
        </table>
        
          
          <? // }  ?>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

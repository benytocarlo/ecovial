<?php 
include("conexion.php"); 
$obra=$_POST["obra"];
$transportista=$_POST["transportista"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$sql3li="select * from obra where id=".$obra."";
		  $result3 = mysql_query($sql3li); 
			while($row3 = mysql_fetch_row($result3))
			{
				$nombre_obra2=$row3[1];
			}	

	$sql2li="select * from transportista where id=".$transportista."";
		  $result2 = mysql_query($sql2li); 
			while($row2 = mysql_fetch_row($result2))
			{
			$nombre_tranportista=$row2[1];
			}
			

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
                  <td width="83" height="23"><p><span class="Estilo3"><img src="Logo+ISO.jpg" alt="" width="227" height="130" /></span></p></td>
                  <td width="432"><div align="center"><span class="Estilo5">Informe de Transportista por Obra</span></div></td>
                </tr>
            </table></td>
            <td width="283"><div align="center">Sociedad de Mezclas Viales Mixvial Ltda. <br />
76.979.030-6 <br />
Fundo Santa Teresa de La Puente Alta, Camino a Doñihue S/N <br />
Fono (72)585376 <br />
Fax (72)585379 <br />
Rancagua</div>
            </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="74"><table width="841" border="0">
          <tr>
            <td width="130">Obra:</td>
            <td width="695"><?php echo $nombre_obra2; ?></td>
          </tr>
           <tr>
            <td width="130">Transportista:</td>
            <td width="695"><?php echo $nombre_tranportista; ?></td>
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
        <td height="86">
        <br /> <center>
          <strong> Detalle Mezclas </strong>
        </center>
        <br />
        <table width="841" border="1">
          <tr>
            <td width="73" height="23">N° Guia</td>
			<td width="62" height="23">Partida Control</td>
            <td width="65"><p>Cantidad</p>                </td>
            <td width="89">Precio</td>
            <td width="101">Patente</td>
            <td width="77">Fecha</td>
            <td width="231">Producto Comprado</td>
          </tr>
           <? $sql2="select * from pesaje pe,camiones cam where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.obra=".$obra." and pe.transportista=".$transportista."  and  cam.id=pe.patente and pe.nula!='si' and pe.nula!='traslado'";
		   		 $sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$guia=$row[0];
							$n_orden=$row[10];
							$fletero=$row[5];
							$fecha=$row[4];	
							$patente=$row[17];
							$tipo_mezcla=$row[13];
							$partidacontrol=$row[14];		
							$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$guia."' and ml.id=dp.producto";
									
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
								if($tipo_mezcla=="emulsion" || $tipo_mezcla=="combustible")
								{
									if($tipo_mezcla=="emulsion")
										{
										$entro="si";
										}
									if($tipo_mezcla=="combustible")
										{
										$entro2="si";
										}
								
									
									
									
								}else{
									
									
									$producto=$row[2];
									$cantidad=$row[6];
									$precio=$row[7];
									$total=$cantidad*$precio;
									$sumacantidad=$sumacantidad+$cantidad ;
									echo "<tr>";
									echo "<td height='24'>".$guia."</td>";
									echo "<td height='24'>".$partidacontrol."</td>";
									echo "<td>".$cantidad."</td>";
									echo "<td>".number_format($precio, 0, '', '.')."</td>";
									echo "<td>".$patente."</td>";
									echo "<td>".$fecha."</td>";
									echo "<td>".$producto."</td>";
									echo "</tr>";
								
								}
							}
						}
			?>
        </table>
          <table width="841" border="1">
            <tr>
              <td width="94">Total</td>
              <td width="80"><p><? echo $sumacantidad; ?></p>                </td>
              <td width="117">&nbsp;</td>
              <td width="125">&nbsp;</td>
              <td width="391">&nbsp;</td>
            </tr>
          </table>
          <? 
		  if($entro=="si")
		  {
		  ?> <br /> <center>
          <strong> Detalle Emulsiones </strong>
        </center>
        <br />
        <table width="841" border="1">
          <tr>
            <td width="73" height="23">N° Guia</td>
            <td width="65"><p>Cantidad</p>                </td>
            <td width="89">Precio</td>
            <td width="101">Patente</td>
            <td width="77">Fecha</td>
            <td width="231">Producto Comprado</td>
          </tr>
           <? $sql2="select * from pesaje pe ,camiones cam where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.obra=".$obra." and pe.transportista=".$transportista." and  cam.id=pe.patente and pe.nula!='si' and pe.tipo_guia='emulsion'";

		 $sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$guia=$row[0];
							$n_orden=$row[12];
							$fletero=$row[1];
							$fecha=$row[4];	
							$patente=$row[17];
							$tipo_mezcla=$row[16];
							$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$guia."' and ml.id=dp.producto";
									
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
								
									$producto=$row[2];
									$cantidad=$row[6];
									$precio=$row[7];
									$total=$cantidad*$precio;
									$sumacantidad=$sumacantidad+$cantidad ;
									echo "<tr>";
									echo "<td height='24'>".$guia."</td>";
									echo "<td>".$cantidad."</td>";
									echo "<td>".number_format($precio, 0, '', '.')."</td>";
									echo "<td>".$patente."</td>";
									echo "<td>".$fecha."</td>";
									echo "<td>".$producto."</td>";
									echo "</tr>";
							
							}
						}
			?>
        </table>
          <table width="841" border="1">
            <tr>
              <td width="95" height="23">Total</td>
              <td width="82"><p><? echo $sumacantidad; ?></p>                </td>
              <td width="114">&nbsp;</td>
              <td width="125">&nbsp;</td>
              <td width="391">&nbsp;</td>
            </tr>
          </table>
          
          <? }  ?>
           <? 
		  if($entro2=="si")
		  {
		  ?> <br /> <center>
          <strong> Detalle Combustibles </strong>
        </center>
        <br />
        <table width="841" border="1">
          <tr>
            <td width="73" height="23">N° Guia</td>
            <td width="65"><p>Cantidad</p>                </td>
            <td width="89">Precio</td>
            <td width="101">Patente</td>
            <td width="77">Fecha</td>
            <td width="231">Producto Comprado</td>
          </tr>
           <? $sql2="select * from pesaje pe,camiones cam where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.obra=".$obra." and pe.transportista=".$transportista." and cam.id=pe.patente and pe.nula!='si' and pe.tipo_guia='combustible'";

		 $sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$guia=$row[0];
							$n_orden=$row[12];
							$fletero=$row[1];
							$fecha=$row[4];	
							$patente=$row[17];
							$tipo_mezcla=$row[16];
							$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$guia."' and ml.id=dp.producto";
									
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
								
									$producto=$row[2];
									$cantidad=$row[6];
									$precio=$row[7];
									$total=$cantidad*$precio;
									$sumacantidad=$sumacantidad+$cantidad ;
									echo "<tr>";
									echo "<td height='24'>".$guia."</td>";
									echo "<td>".$cantidad."</td>";
									echo "<td>".number_format($precio, 0, '', '.')."</td>";
									echo "<td>".$patente."</td>";
									echo "<td>".$fecha."</td>";
									echo "<td>".$producto."</td>";
									echo "</tr>";
							
							}
						}
			?>
        </table>
          <table width="841" border="1">
            <tr>
              <td width="95" height="23">Total</td>
              <td width="82"><p><? echo $sumacantidad; ?></p>                </td>
              <td width="114">&nbsp;</td>
              <td width="125">&nbsp;</td>
              <td width="391">&nbsp;</td>
            </tr>
          </table>
          
          <? }  ?>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

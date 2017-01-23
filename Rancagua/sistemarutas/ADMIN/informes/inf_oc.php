<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$cliente=$_POST["cliente2"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
//$sql="select * from cliente where id=".$cliente."";
	//	  $result = mysql_query($sql); 
		//	while($row = mysql_fetch_row($result))
//			{
	//		$nombre_cliente=$row[1];
		//	}	

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo3 {font-size: 24px}
.Estilo5 {font-size: 24px; font-weight: bold; }
.Estilo6 {
	font-size: 18px;
	font-weight: bold;
}
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
                <td width="83" height="23"><p><img src="rutas_small.jpg" width="172" height="84" /></p></td>
                <td width="432"><div align="center"><span class="Estilo5">Informe Orden de Compra </span></div></td>
              </tr>

            </table>            </td>
            <td width="283"><div align="center"><strong>Constructora RUTAS SpA<br />
RUT: 76.495.749-0<br />
Planta Rancagua</strong></div></td>
          </tr>
        </table>          </td>
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
        <td height="105"><br />
        <div align="center"><span class="Estilo6">Detalle Orden de Compra</span>
        </div><br />
        <table width="841" border="1">
          <tr>
            <td width="" height="23">N° Orden de Compra</td>
            <td width=""><p>Fecha</p></td>
            <td width="">Proveedor</td>
            <td width="">1ra. Descripción</td>
            <td width="">Monto Neto Total</td>
			<td width="">Observaciones</td>
           
          </tr>
<? //$sql2="select * from orden_compra pe,proveedor pro, detalle_orden_compra de where pe.fecha BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.cliente=pro.id and de.id_orden_compra=pe.id order by pe.id DESC" ;
$sql2="select * from orden_compra pe,proveedor pro, detalle_orden_compra de where pe.fecha BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.cliente=pro.id and de.id_orden_compra=pe.id group by pe.id" ;

		 //	echo $sql2;
		  $sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$orden=$row[0];
							$fecha=$row[1];
							$c=$row[2];
							$descripcion=$row[26];	
							$total=$row[20];
							$observaciones=$row[10];
							
											
									// $temperatura=$row[1];
									$producto=$row[2];
									$cantidad=$row[6];
									$precio=$row[7];
									$cliente=$row[15];
									$total=$row[3];
									$observaciones=$row[10];
									$sumacantidad=$sumacantidad+$cantidad ;
									$sumatotal= $sumatotal+$total;
									echo "<tr>";
									echo "<td height='24'>".$orden."</td>";
									echo "<td>".$fecha."</td>";
									echo "<td>".$cliente."</td>";
									echo "<td>".$descripcion."</td>";
									echo "<td>".number_format($total, 0, '', '.')."</td>";
									echo "<td>".$observaciones."</td>";
									echo "</tr>";
								}
							
						
			?>
          
        </table>
          <table width="841" border="1">
            <tr>
              <td>&nbsp;</td>
              </tr>
          </table>
          <div align="center"><br />
          </div>
          <div align="center"></div>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

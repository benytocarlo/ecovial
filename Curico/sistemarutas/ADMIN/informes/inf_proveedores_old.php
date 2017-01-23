<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$proveedor=$_POST["proveedor"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$sql="select * from proveedor where id=".$proveedor."";
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
    <td width="851" height="333"><table width="851" height="331" border="0">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="542" height="138"><table width="525" border="0">
              <tr>
                <td width="83" height="23"><p><img src="../../rutas_small.jpg" width="172" height="84" /></p></td>
                <td width="432"><div align="center"><span class="Estilo5">Informe por Proveedor</span></div></td>
              </tr>

            </table>            </td>
            <td width="283"><p align="center"><strong>Constructora RUTAS SpA<br />
RUT: 76.495.749-0<br />
Planta Curicó</strong></p></td>
          </tr>
        </table>          </td>
        </tr>
      <tr>
        <td height="74"><table width="841" border="0">
          <tr>
            <td width="130">Proveedor:</td>
            <td width="695"><?php echo $nombre_cliente; ?></td>
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
        <td height="105"><table width="841" border="1">
          <tr>
            <td width="87" height="23">N° Orden de Compra</td>
            <td width="78"><p>N° Guia</p>                </td>
            <td width="69">Cantidad</td>
            <td width="65">Precio</td>
            <td width="85">Total</td>
            <td width="89">Fecha</td>
            <td width="322">Producto Comprado</td>
          </tr>
<?		 
		 $sql2="select * from ingreso_materias ing_mat, materias mat where ing_mat.fecha_guia  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and ing_mat.proveedor=".$proveedor." and ing_mat.materia=mat.id order by ing_mat.id";
	// echo $sql2;
		  $sumacantidad=0;
		  $sumatotal=0;
	
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$orden=$row[1];
							$n_guia=$row[2];
							$cantidad =$row[7];
							$precio=$row[8];
							$total=$cantidad*$precio;
							$fecha=$row[6];	
							$producto=$row[16];	
							$sumacantidad=$sumacantidad+$cantidad ;
							 $sumatotal= $sumatotal+$total;
							echo "<tr>";
							echo "<td height='24'>".$orden."</td>";
							echo "<td>".$n_guia."</td>";
							echo "<td>".$cantidad."</td>";
							echo "<td>".number_format($precio, 0, '', '.')."</td>";
							echo "<td>".number_format($total, 0, '', '.')."</td>";
							echo "<td>".$fecha."</td>";
							echo "<td>".$producto."</td>";
						    echo "</tr>";
						}
		
 //           $sql3="select * from orden_compra orcomp, detalle_orden_compra detcompra where  orcomp.fecha  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and orcomp.cliente=".$proveedor." and detcompra.id_orden_compra=orcomp.id ";
//		 echo $sql3;
	//		 $result3 = mysql_query($sql3); 
	//					while($row = mysql_fetch_row($result3))
						{
							$orden=$row[14];
							$n_guia=$row[0];
							$cantidad =$row[16];
							$precio=$row[19];
							$total=$cantidad*$precio;
							$fecha=$row[1];	
							$producto=$row[18];	
							$sumacantidad=$sumacantidad+$cantidad ;
							 $sumatotal= $sumatotal+$total;
							echo "<tr>";
							echo "<td height='24'>".$n_guia."</td>";
							echo "<td></td>";
							echo "<td>".$cantidad."</td>";
							echo "<td>".$precio."</td>";
							echo "<td>".$total."</td>";
							echo "<td>".$fecha."</td>";
							echo "<td>".$producto."</td>";
						    echo "</tr>";
						}
			?>
          
        </table>
          <table width="841" border="1">
            <tr>
              <td width="89">Total</td>
              <td width="78"><p>&nbsp;</p>                </td>
              <td width="70"><? echo number_format($sumacantidad, 0, '', '.'); ?></td>
              <td width="61">&nbsp;</td>
              <td width="89"><? echo number_format($sumatotal, 0, '', '.'); ?></td>
              <td width="414">&nbsp;</td>
            </tr>
          </table>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

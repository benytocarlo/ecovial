<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$materia=$_POST["materia"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$sql="select * from materias where id=".$materia."";
		  $result = mysql_query($sql); 
			while($row = mysql_fetch_row($result))
			{
			$nombre_materia=$row[1];
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
                <td width="432"><div align="center"><span class="Estilo5">Informe de Materias Primas</span></div></td>
              </tr>

            </table>            </td>
            <td width="283"><p align="center"><strong><br />
              </strong><strong><br />
              </strong><strong>Constructora RUTAS SpA<br />
RUT: 76.495.749-0<br />
Planta Rancagua</strong></p>  </td>
          </tr>
        </table>          </td>
        </tr>
      <tr>
        <td height="74"><table width="841" border="0">
          <tr>
            <td width="130">Materia:</td>
            <td width="695"><?php echo $nombre_materia; ?></td>
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
            <td width="78"><p>N° Guia</p>       </td>
		   	<td width="89">Fecha</td>
			<td width="89">Proveedor</td>
			<td width="89">Patente</td>
			<td width="89">Cantidad</td>
            <td width="85">Precio</td>
            <td width="89">Total</td>
          </tr>
<?		 
		 $sql2="select * from ingreso_materias ing_mat, proveedor pro, materias mat where ing_mat.fecha_guia  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and ing_mat.materia=".$materia."  and ing_mat.nula!='si' and  ing_mat.proveedor=pro.id and ing_mat.materia=mat.id order by ing_mat.fecha_guia ASC";
		//echo $sql2;
		$sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$orden=$row[1];
							$n_guia=$row[2];
							$n_pesaje=$row[12];
							$fecha=$row[6];	
							$proveedor=$row[18];	
							$patente=$row[9];	
							$cantidad =$row[7];
							$precio=str_replace(',', '.',$row[8]);
							if($patente>0){
								$sql22="select * from camiones where id='".$patente."'";
								$result22 = mysql_query($sql22); 
								while($row2 = mysql_fetch_row($result22))
								{
									$patente=$row2[2];
								}							
							}else{
								$patente="";
							}
							$total=$cantidad*$precio;
							$sumacantidad=$sumacantidad+$cantidad ;
							$sumatotal= $sumatotal+$total;
							echo "<tr>";
							echo "<td>".$n_guia."</td>";
							echo "<td>".$fecha."</td>";
							echo "<td>".$proveedor."</td>";
							echo "<td>".$patente."</td>";
							echo "<td>".$cantidad." M3</td>";
							echo "<td>$".number_format($precio, 0, '', '.')."</td>";
							echo "<td>$".number_format($total, 0, '', '.')."</td>";
						    echo "</tr>";
						}
          ?>
        </table>
          <table width="841" border="1">
            <tr>
              <td width="89">Total</td>
              <td width="213"><p>&nbsp;</p>                </td>
			<td width="213"><p>&nbsp;</p>                </td>
              <td width="101"><? echo number_format($sumacantidad, 0, '', '.'); ?> M3</td>
			   <td width="89"></td>
              <td width="108">$<? echo number_format($sumatotal, 0, '', '.'); ?></td>
             
            </tr>
          </table>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>


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
<?php 
include("conexion.php"); 
$cliente=$_POST["proveedor"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
?>
<table width="861" border="0" align="center">
  <tr>
    <td width="851"><table width="851" height="312" border="0">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="542" height="138"><table width="525" border="0">
                <tr>
                  <td width="83" height="23"><p><span class="Estilo3"><img src="Logo+ISO.jpg" alt="" width="227" height="130" /></span></p></td>
                  <td width="432"><div align="center"><span class="Estilo5">Informe por Proveedores</span></div></td>
                </tr>
            </table></td>
            <td width="283"><p align="center">Sociedad de Mezclas Viales Mixvial Ltda. <br />
76.979.030-6 <br />
Fundo Santa Teresa de La Puente Alta, Camino a Doñihue S/N <br />
Fono (72)585376 <br />
Fax (72)585379 <br />
Rancagua </p></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="74"><table width="841" border="0">
          <tr>
            <td width="130">Proveedor:</td>
            <td width="695">&nbsp;</td>
          </tr>
          <tr>
            <td>Desde:</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Hasta:</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="86"><table width="853" border="1">
          <tr>
            <td width="126" height="23">N° Guia Despacho</td>
            <td width="67"><p>Cantidad</p>                </td>
            <td width="88">Precio</td>
            <td width="83">Total</td>
            <td width="72">Fecha</td>
            <td width="377">Materia Prima</td>
            </tr>
 <? $sql2="select * from cliente cli,  ingreso_orden ing_or  , mezclas mle where ing_or.fecha  BETWEEN ".$fecha_inicio." AND ".$fecha_final." and ing_or.id=".$cliente." and ing_or.mezcla=mle.id";
echo $sql2;		 
		 $result2 = mysql_query($sql2); 
		  $sumacantidad=0;
		  $sumatotal=0;
						while($row = mysql_fetch_row($result2))
						{
							$orden=$row[8];
							$n_guia=$row[2];
							$cantidad =$row[14];
							$precio=$row[19];
							$total=$cantidad*$precio;
							$fecha=$row[11];	
							$producto=$row[18];	
							$sumacantidad=$sumacantidad+$cantidad ;
							 $sumatotal= $sumatotal+$total;
							echo "<tr>";
							echo "<td height='24'>".$orden."</td>";
							echo "<td>".$orden."</td>";
							echo "<td>".$cantidad."</td>";
							echo "<td>".$precio."</td>";
							echo "<td>".$total."</td>";
							echo "<td>".$fecha."</td>";
							echo "<td>".$producto."</td>";
						    echo "</tr>";
						}
			?>         
		 <tr>
            <td height="24">32132</td>
            <td>3321</td>
            <td>12332</td>
            <td>12334</td>
            <td>12/23/2009</td>
            <td>&nbsp;</td>
            </tr> 
        </table>
          <table width="841" border="1">
            <tr>
              <td width="123">Totales</td>
              <td width="70"><p><? echo $sumacantidad; ?></p>                </td>
              <td width="87">&nbsp;</td>
              <td width="82"><? echo $sumatotal; ?></td>
              <td width="445">&nbsp;</td>
            </tr>
          </table>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

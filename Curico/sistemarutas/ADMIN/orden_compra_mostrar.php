<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$num_orden=$_POST["num_orden"];



$result = mysql_query($sql_update);
		  $sql="select * from orden_compra where  id=".$num_orden."";
		  $result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{
							$total_neto=$row[3];
							$descuento=$row[4];
							$total_descuento=$row[5];
							$iva=$row[6];
							$total_bruto=$row[7];
							$cliente=$row[2];
							$fecha=	$row[1];
							$forma_pago=$row[8];
							$plazo_entrega=$row[9];
							$observaciones=$row[10];
							$extra_iva=$row[11];
							$dirigido=$row[13];
							
							
					}
			$sql2="select * from proveedor where  id=".$cliente."";
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$nombre=$row[1];
							$calle=$row[2];
							$comuna =$row[3];
							$ciudad=$row[4];
							$telefono=$row[5];
							$rut=$row[6];				
						}
						
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo3 {font-size: 24px}
.Estilo5 {font-size: 24px; font-weight: bold; }
.Estilo6 {
	font-size: 11px
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
            <td width="709" height="138"><table width="710" border="0">
              <tr>
                <td width="227" height="23"><p><span class="Estilo3"><img src="Logo+ISO.jpg" alt="" width="236" height="145" /></span></p></td>
                <td width="473"><div align="center"><span class="Estilo5">Orden de Compra N° <? echo $num_orden;?></span></div></td>
              </tr>

            </table>            </td>
            <td width="122"></td>
          </tr>
        </table>          </td>
        </tr>
      <tr>
        <td height="74">Datos Proveedor:</br>
          <table width="200" border="1">
            <tr>
              <td><table width="841" border="0">
                  <tr>
                    <td width="100">Señor (es):</td>
                    <td width="411"><? echo $nombre; ?></td>
                    <td width="64">Fecha:</td>
                    <td width="248"><? echo $fecha; ?></td>
                  </tr>
                  <tr>
                    <td>Dirección:</td>
                    <td><? echo $calle; ?></td>
                    <td>Comuna</td>
                    <td><? echo $comuna; ?></td>
                  </tr>
                  <tr>
                    <td>Ciudad:</td>
                    <td><? echo $ciudad; ?></td>
                    <td>Fono:</td>
                    <td><? echo $telefono; ?></td>
                  </tr>
                  <tr>
                    <td>Atencion Señor:</td>
                    <td><? echo $dirigido; ?></td>
                    <td>Rut:</td>
                    <td><? echo $rut; ?></td>
                  </tr>
              </table></td>
            </tr>
          </table>
          <br />
            De acuerdo a lo solicitado, se extiende el presente Presupuesto para:</br>
          <table width="855" border="1">
            <tr>
              <td width="845"><table width="842" border="0">
                  <tr>
                     <td width="92" height="23"><div align="center">Activo/Gasto</div></td>
                    <td width="162" height="23"><div align="center">Centro de Costo</div></td>
                    <td width="76">Cantidad</td>
                    <td width="113"><div align="center">Unidad</div></td>
                    <td width="373"><div align="center">Descripción</div></td>
                    <td width="104"><div align="center">Precio. Unitario</div></td>
                    <td width="100"><div align="center">Total</div></td>
                  </tr>
                   <?	
				   $suma=0;
				    $sql_list ="select * from detalle_orden_compra where id_orden_compra=".$num_orden."";
					
						$result_list = mysql_query($sql_list); 
						while($row = mysql_fetch_row($result_list))
						{ 
						?>
                      <tr>
                        <td><div align="center"><? echo $row[7]; ?></div></td>
                       
                       
                      <?
					  $centrocc=$row[8];
					  	 $sql_list2 ="select * from centrocostos where id=".$centrocc."";
						$result_list2 = mysql_query($sql_list2); 
						while($row2 = mysql_fetch_row($result_list2))
						{ 
							$nombre_costo=$row2[1];
						}
						$preciofinal=$row[2]*$row[5];
						?>
                        <td><div align="center"><? echo $nombre_costo; ?></div></td>
                        <td><div align="center"><? echo $row[2]; ?></div></td>
                        <td><div align="center"><? echo $row[3]; ?></div></td>
                        <td><div align="center"><? echo $row[4]; ?></div></td>
                        <td><div align="center"><? echo $row[5]; ?></div></td>
                        <td><div align="right">$ <? echo number_format($preciofinal, 0, '', '.'); ?> </div></td>
                  </tr>
                  <? } ?>
                </table></td>
            </tr>
          </table>
          <table width="858" border="1">
            <tr>
              <td width="621" height="183"><table width="621" border="0">
                  <tr>
                    <td width="551">Forma de Pago::</td>
                    <td width="60">&nbsp;</td>
                    </tr>
                  <tr>
                    <td><? echo $forma_pago; ?></td>
                    <td>&nbsp;</td>
                    </tr>
                  <tr>
                    <td>Plazo Entrega::</td>
                    <td>&nbsp;</td>
                    </tr>
                  <tr>
                    <td><? echo $plazo_entrega; ?></td>
                    <td>&nbsp;</td>
                    </tr>
                  <tr>
                    <td height="83">Observaciones: <? echo $observaciones; ?></td>
                    <td>&nbsp;</td>
                  </tr>
              </table>
                </td>
              <td width="221"><table width="210"  align="right">
                <tr>
                  <td width="111" nowrap="nowrap" border="1" bordercolor="#000000">Sub NETO:</td>
                  <td width="83" align="right">$ <? echo number_format($total_neto, 0, '', '.'); ?> </td>
                </tr>
                <tr>
                  <td nowrap="nowrap">% Dcto.:</td>
                  <td align="right">	<?if($descuento){ ?>
						<?  echo number_format($descuento, 0, '', '.'); ?> %
						<?} else{ ?>
						0%
						<? } ?>
						</td>
                </tr>
                <tr>
                  <td nowrap="nowrap">Neto:</td>
                  <td align="right"> <?if($descuento){ ?>
					$ <? $des=($total_neto*$descuento)/100;
						$tdesc=$total_neto-$des;
						echo number_format($tdesc,0, '', '.'); 
						$tdesc=$total_neto-$des+$iva;
					?> </td>
				  <?} else{ ?>
					$ <? echo number_format($total_neto, 0, '', '.'); ?> </td>
						<? } ?>
                </tr>
				<? 
					if($extra_iva!="Ord Compra SIN IVA"){ ?>
                <tr>
                  <td nowrap="nowrap">19% IVA:</td>
                  <td align="right">$<? echo number_format($iva, 0, '', '.');; ?></td>
                </tr>
				<? } ?>
                <tr>
                  <td nowrap="nowrap">Total:</td>
				  <? if($descuento){ ?>
                  <td align="right">$ <? echo number_format($tdesc, 0, '', '.'); ?> </td>
				  <? } else { ?>
				  <td align="right">$ <? echo number_format($total_bruto, 0, '', '.'); ?> </td>
				  <? } ?>
                </tr>
                <tr>
                  <td height="60" nowrap="nowrap">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td height="105"><p>&nbsp;</p>
          <p><br />
              <br />
            </p>
          <table width="857" border="0">
          <tr>
            <td><div align="center">___________________________</div>
                 
               <div align="center">V°B° Jefe Area Solicitante</div>
                <div align="center">&nbsp;
                  <p>&nbsp;</p>
                </div>
                <div align="center">_____________________________&nbsp;</div>
                <div align="center">Departamento de Finanzas</div>
               
              </div></td>
            <td><div align="center">___________________________&nbsp;</div>
              <div align="center">V°B° Gerente Operaciones</div>
                           <div align="center">&nbsp;</div>
                <div align="center">&nbsp;
                  <p>&nbsp;</p>
                </div>
                <div align="center">_____________________________&nbsp;</div>
                <div align="center">V°B° Gerente General
                  </div>
                </div></td>
          </tr>
          
        </table><br />
  <div align="center" style="font-size:15px !important">Facturar a: <br />
Ecovial Ltda. Rut: 77.580.000-3 <br />
Hijuela 10 Lota A Maquehua <br />
Fono (75)543470 - cfuenzalida@ecovial.cl
 <br />
Curicó</div>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$n_presupuesto=$_POST["n_presupuesto"];
$observaciones=$_POST["observaciones"];
$forma_pago=$_POST["forma_pago"];
$plazo_entrega=$_POST["plazo_entrega"];
$validez=$_POST["validez"];
$reajustes=$_POST["reajustes"];

$sql_update="update presupuesto set forma_de_pago='$forma_pago' ,plazo_entrega='$plazo_entrega',validez_prespuesto='$validez' ,reajustes='$reajustes' ,observaciones='$observaciones' where id=$n_presupuesto";
$result = mysql_query($sql_update);
		  $sql="select * from presupuesto where  id=".$n_presupuesto."";
		  $result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{
							$total_neto=$row[4];
							$descuento=$row[5];
							$total_descuento=$row[6];
							$iva=$row[7];
							$total_bruto=$row[8];
							$cliente=$row[2];
							$obra=$row[3];	
							$fecha=	$row[1];				
					}
			$sql2="select * from cliente where  id=".$cliente."";
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
		$sql3="select * from obra where  id=".$obra."";
		  $result3 = mysql_query($sql3); 
						while($row = mysql_fetch_row($result3))
						{
							$nombre_obra=$row[1];
							$ubicacion=$row[2];
							$ciudad_obra =$row[3];		
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
    <td width="851" height="333"><table width="851" height="991" border="0">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="709" height="138"><table width="710" border="0">
              <tr>
                <td width="227" height="23"><p><span class="Estilo3"><img src="Logo+ISO.jpg" alt="" width="236" height="145" /></span></p></td>
                <td width="473"><div align="center"><span class="Estilo5">Presupuesto N° <? echo $n_presupuesto; ?></span></div></td>
              </tr>

            </table>            </td>
            <td width="122"></td>
          </tr>
        </table>          </td>
        </tr>
      <tr>
        <td height="675">Datos Cliente:</br>
          <table width="200" border="1">
            <tr>
              <td><table width="841" border="0">
                  <tr>
                    <td width="85">Empresa:</td>
                    <td width="374"><? echo $nombre; ?></td>
                    <td width="116">Fecha:</td>
                    <td width="248"><? echo $fecha; ?></td>
                  </tr>
                  <tr>
                    <td>Dirección:</td>
                    <td><? echo $calle; ?></td>
                    <td>Fono:</td>
                    <td><? echo $telefono; ?></td>
                  </tr>
                  <tr>
                    <td>Ciudad:</td>
                    <td><? echo $ciudad; ?></td>
                    <td>Rut:</td>
                    <td><? echo $rut; ?></td>
                  </tr>
                  <tr>
                    <td>Comuna:</td>
                    <td><? echo $comuna; ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
              </table></td>
            </tr>
          </table>
          <br />
            De acuerdo a lo solicitado, se extiende el presente Presupuesto para:</br>
          <table width="855" border="1">
            <tr>
              <td width="845"><table width="841" border="0">
                <tr>
                  <td width="85">Obra:</td>
                  <td width="746"><? echo  $nombre_obra; ?></td>
                </tr>
                <tr>
                  <td>Ubicación:</td>
                  <td><? echo  $ubicacion; ?></td>
                </tr>
                <tr>
                  <td>Ciudad:</td>
                  <td><? echo $ciudad_obra; ?></td>
                </tr>
              </table>
                <table width="842" border="1">
                  <tr>
                    <td width="50" height="23"><div align="center">ITEM</div></td>
                    <td width="436"><div align="center">Descripción </div></td>
                    <td width="60"><div align="center">Unidad</div></td>
                    <td width="70"><div align="center">Cantidad</div></td>
                    <td width="90"><div align="center">P. Unitario</div></td>
                    <td width="96"><div align="center">P. Total</div></td>
                  </tr>
                 
                  <?	
				   $suma=0;
				    $sql_list ="select * from detalle_presupuesto dp, mezclas ml where id_presupuesto=".$n_presupuesto." and dp.id_mezcla=ml.id";
						$result_list = mysql_query($sql_list); 
						while($row = mysql_fetch_row($result_list))
						{ 
						?>
                      <tr>
                        <td height="24"><? echo $suma=$suma+1; ?></td>
                        <td><? echo $row[10]; ?></td>
                        <td><? echo $row[3]; ?></td>
                        <td><? echo $row[4]; ?></td>
                        <td><? echo $row[5]; ?></td>
                        <td><? echo $row[6]; ?></td>
                  </tr>
                  <? } ?>
                </table>
                <table width="210"  align="right">
                  <tr>
                    <td width="111" nowrap="nowrap" border="1" bordercolor="#000000">TOTAL NETO:</td>
                    <td width="83"><? echo $total_neto; ?></td>
                  </tr>
                  <tr>
                    <td nowrap="nowrap">Descuento:</td>
                    <td><? echo $descuento; ?> %</td>
                  </tr>
                 <!-- <tr>
                    <td nowrap="nowrap">Total Descuento:</td>
                    <td><? echo $total_descuento; ?></td>
                  </tr> -->
                  <tr>
                    <td nowrap="nowrap">19% IVA:</td>
                    <td><? echo $iva; ?></td>
                  </tr>
                  <tr>
                    <td nowrap="nowrap">TOTAL BRUTO:</td>
                    <td><? echo $total_bruto; ?></td>
                  </tr>
                </table>
                <p>&nbsp;</p>
                <p>&nbsp;</p></td>
            </tr>
          </table>
       
         Condiciones de Venta:</br>
          <table width="200" border="1">
            <tr>
              <td><table width="844" border="0">
                  <tr>
                    <td width="158">Forma de Pago::</td>
                    <td width="673"><? echo $forma_pago; ?></td>
                    </tr>
                  <tr>
                    <td>Plazo Entrega::</td>
                    <td><? echo $plazo_entrega; ?></td>
                    </tr>
                  <tr>
                    <td>Validez Presupuesto:</td>
                    <td><? echo $validez; ?></td>
                    </tr>
                  <tr>
                    <td>Reajustes:</td>
                    <td><? echo $reajustes; ?></td>
                    </tr>
                  <tr>
                    <td height="83">Observaciones:</td>
                    <td><? echo $observaciones; ?></td>
                  </tr>
              </table></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="105"><table width="857" border="0">
          <tr>
            <td><div align="center">_______________________</div>
              <div align="center"><input name="name" style="border:0px" type="text" value="Ingrid Lazcano"/></div>
              <div align="center"><input name="tipo" style="border:0px" type="text" value="Recepción"/></div>
              <div align="center">MIXVIAL</div></td>
            <td><div align="center">_______________________</div>
              <div align="center">Cristian Araya Bravo</div>
              <div align="center">Gerente General</div>
              <div align="center">MIXVIAL</div></td>
          </tr>
          
        </table><br />
          <div align="center" class="Estilo6">Sociedad de Mezclas Viales Mixvial Ltda. <br />
76.979.030-6 <br />
Fundo Santa Teresa de La Puente Alta, Camino a Doñihue S/N <br />
Fono (72)585376 - 
Fax (72)585379 <br />
Rancagua</div>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<html>
<head>
<title>Guia de Despacho</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
body {
	margin:0;
	padding:0;
	font-family:Arial, Helvetica, sans-serif;
	font-size:18px;
}
td {
font-size:18px;
}

</style>
<?php $xajax->printJavascript('includes/xajax/'); ?>
</head>

<? 
include("conexion.php");
	$fecha = date("Y-m-d H:i:s");
	$n_pesaje=$_POST["n_pesaje"];
	$peso=$_POST["peso"];
	$tara=$_POST["tara"];
	$odcompra=$_POST["orden_compra"];
	
	$patente=$_POST["patente"];
	$chofer=$_POST["chofer"];
	$transportista=$_POST["transportista"];
	$obra=$_POST["obra"];
	$cliente=$_POST["cliente"];
	$temperatura=$_POST["temperatura"];
	$tipo_mezcla=$_POST["tipo_mezcla"];
	$mezclita=$_POST["mezclita"];
	$m3=$_POST["m3"];
	$sql="insert into pesaje (patente,fecha_hora,transportista,chofer,obra,cliente,tipo_guia,peso_bruto,tara ) values ('$patente','$fecha','$transportista','$chofer','$obra','$cliente','combustible','$peso','$tara')";
			
	$result = mysql_query($sql);
	//echo $sql;

		$sqlcount="SELECT * FROM pesaje ORDER BY id DESC LIMIT 1";
 $result = mysql_query($sqlcount); 
         while($row = mysql_fetch_row($result))
                                {
                               $n_guia=$row[0];
                                }
								
	$sqlcountpesaje="SELECT * FROM detalle_pesaje dp, mezclas ml where dp.producto=ml.id and dp.guia='$n_guia'";
	$result = mysql_query($sqlcountpesaje); 
         while($row = mysql_fetch_row($result))
                                {
                               $m3=$row[2];
							    $nombre_mezcla=$row[7];
								 $valor_mezcla=$row[3];
                                }
	$total2=$valor_mezcla*$m3;
	$total=number_format($total2, 0, ".", "");
	$iva2=$total*0.19;
	$totalfinal=$total+$iva2;
	$totaltruncado= number_format($totalfinal, 0, ".", "");
	$iva= number_format($iva2, 0, ".", "");
	$sql1 ="select * from cliente where id='$cliente'";
	$result1 = mysql_query($sql1); 
	while($row = mysql_fetch_row($result1))
	{ 
		$nombre_cliente=$row[1];
		$direccion_cliente=$row[2];
		$comuna_cliente=$row[3];
		$ciudad_cliente=$row[4];
		$telefono_cliente=$row[5];
		$rut_cliente=$row[6];
	}

	
	
	 $sql2 ="select * from chofer where id='$chofer'";
	$result2 = mysql_query($sql2); 
	while($row = mysql_fetch_row($result2))
	{ 
		$nombre_chofer=$row[2];
		$rut_chofer=$row[1];
	}

	 $sql3 ="select * from obra where id='$obra'";
	$result3 = mysql_query($sql3); 
	while($row = mysql_fetch_row($result3))
	{ 
		$nombre_obra=$row[1];
	}

	$sqlm ="select * from mezclas where id='$mezclita'";
	$result2m = mysql_query($sqlm); 
	while($row = mysql_fetch_row($result2m))
	{ 
		$nombre_mezcla=$row[2];
	}
	
	 $sqlpat="select * from camiones where id='$patente'";
	$resultpat = mysql_query($sqlpat); 
	while($row = mysql_fetch_row($resultpat))
	{ 
		$patente=$row[2];
	}


	

?><body>
<center>
<p><!--<!--<br><br><br><br><br><br>-->--></p>
<p>&nbsp; </p>
<table width="1024" height="550" border="0" >
  <tr>
    <td width="1024" >
<form name="guia" id="guia">
  <table width="1025" height="152" border="0">
    <tr>
      <td height="94"><p><br>
      </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp; </p></td>
    </tr>
  </table>
  <br><br><br><br><br>
  <table width="1024" border="0" cellpadding="0" cellspacing="0" frame="void" rules="groups" >
    <tr>
      <td height="25" colspan="0"></td>
      <td width="4%" valign="bottom"></td>
      <?
	  
	  $fecha= trim(date("d m Y"));
	  $mes=substr($fecha,2,3);
	  
	  $dia= substr($fecha,0,2);
	switch ($mes) 
	{
  		case '01':
        	$mesa = "Enero";
          	break;
		case '02':
        	$mesa =  "Febrero";
        	break;
    	case '03':
        	$mesa = "Marzo";
        	break;
		case '04':
        	$mesa =  "Abril";
        	break;
		case '05':
        	$mesa = "Mayo";
        	break;
		case '06':
        	$mesa = "Junio";
        	break;
		case '07':
        	$mesa = "Julio";
        	break;
		case '08':
        	$mesa = "Agosto";
        	break;
		case '09':
        	$mesa =  "Septiembre";
        	break;
		case '10':
        	$mesa =  "Octubre";
        	break;
		case '11':
        	$mesa = "Noviembre";
        	break;
		case '12':
        	$mesa = "Diciembre";
        	break;	
	}
$año= substr($fecha,6);
?>
      <td width="6%" valign="bottom" align="right"> <? echo $dia; ?></td>
      <td colspan="3" valign="bottom" align="right"><? echo $mesa?></td>
      <td width="7%" valign="bottom" align="right"><? echo $año;?></td>
    </tr>

    <tr>
      <td width="64%" height="19"><? echo $nombre_cliente; ?></td>
      <td width="4%" valign="top" >&nbsp;</td>
      <td>&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="4%">&nbsp;</td>
      <td colspan="3" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="21"><? echo $direccion_cliente; ?></td>
      <td height="21" valign="top">&nbsp;</td>
      <td colspan="3"></td>
      <td colspan="3" valign="to"p align="right"><? echo $ciudad_cliente; ?></td>
    </tr>
    <tr>
      <td height="19"><? echo $comuna_cliente; ?></td>
      <td height="19" valign="top">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"></td>

      <td colspan="2" valign="top" align="right"><? echo $odcompra; ?></td>
    </tr>
    <tr>
      <td height="19"><? echo $n_guia; ?></td>
      <td height="19" valign="top">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"><? echo $telefono_cliente; ?></td>

      <td colspan="2" valign="top" align="right"><? echo $rut_cliente; ?></td>
    </tr>
  </table><br><br> <br>
  <table width="1024" border="0" cellpadding="0" cellspacing="0" frame="void" rules="groups" >
    <? 
	$sql2 ="SELECT * from detalle_pesaje dp , mezclas ml where guia=".$n_guia." and dp.producto=ml.id";
	$result2 = mysql_query($sql2); 
		while($row = mysql_fetch_row($result2))
		{ 
	
          $cantidad_litros=$row[2];
            $nom_emulsion=$row[7];
			$val_emulsion=$row[3];
			$total_final_emulsion=$row[2]*$row[3];
			$total_aux=$total_aux+$total_final_emulsion;
			
			
			
	?>
    <tr> 
      <td width="13%" height="27"><table width="113" border="0" > 
          <tr>
            <td width="77"><? echo $cantidad_litros; ?></td>
          </tr>
        </table>        </td>
      <td colspan="5"><? echo $nom_emulsion; ?></td>
      <td width="14%" align="right"><? echo $val_emulsion; ?></td>
      <td width="16%" height="27" align="right"><? echo $total_final_emulsion; ?></td>
    </tr>
    <? }
	        $iva2=$total_aux*0.19;
			$totalfinal=$total_aux+$iva2;
			$totaltruncado= number_format($totalfinal, 0, ".", "");
			$iva= number_format($iva2, 0, ".", "");
	 ?>
    <tr> 
      <td height="23"><table width="113" border="0">
          <tr>
            <td width="26">&nbsp;</td>
            <td width="77">&nbsp;</td>
          </tr>
        </table>        </td>
      <td height="23" colspan="5">&nbsp;</td>
      <td height="23">&nbsp;</td>
      <td height="23">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" colspan="8">&nbsp;</td>
    </tr>
    <tr> 
      <td height="21" colspan="8"></td>
    </tr>
    <tr> 
      <td height="21" colspan="8"></td>
    </tr>
    <tr> 
      <td height="21" colspan="8"></td>
    </tr>
    <tr valign="bottom"> 
      <td height="23"><br><br><br><br>&nbsp;</td>
      <td width="2%" height="23">&nbsp;</td>
      <td colspan="4" ><? echo number_format($totaltruncado, 0, '', '.'); ?></td>
      <td height="23">&nbsp;</td>
      <td height="23">&nbsp;</td>
    </tr>
    <tr> 
      <td height="32">&nbsp;</td>
      <td height="21">&nbsp;</td>
      <td width="4%" height="21">&nbsp;</td>
      <td width="8%"><? echo $dia;?></td>
      <td width="23%"><? echo $mesa;?></td>
      <td width="20%"><? echo $año; ?></td>
      <td height="21">&nbsp;</td>
      <td height="21">&nbsp;</td>
    </tr> 
    <tr> 
      <td height="32" colspan="5">  &nbsp;&nbsp;&nbsp;&nbsp;<? echo $nombre_chofer; ?>   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Patente : <? echo $patente; ?> </td>
      <td height="34">Hora : <? $hora = date("H:i:s"); 
			
			list($hora1, $minut, $seg) = split('[:]', $hora);
			$hora=date("H:i:s", mktime($hora1, $minut, $seg));
			echo $hora;
			?></td>
      <td height="32">&nbsp;</td>
      <td height="32" align="right"><? echo number_format($total_aux, 0, '', '.');?></td>
    </tr>
     <tr> 
      <td height="38" colspan="5">  &nbsp;&nbsp;&nbsp;&nbsp;<? echo $rut_chofer; ?>   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
      <td height="30" align="right"><? echo $dia;?>/<? echo $mesa;?>/<? echo $año; ?> </td>
      <td height="30">&nbsp;</td>
      <td height="30" align="right"><? echo number_format($iva, 0, '', '.'); ?></td>
    </tr>
    <tr> 
      <td height="38" colspan="6"> &nbsp;&nbsp;&nbsp;&nbsp;<? echo $nombre_obra; ?></td>
      <td height="30">&nbsp;</td>
      <td height="30" align="right"><? echo number_format($totaltruncado, 0, '', '.'); ?></td>
    </tr>
  </table>
</form></td>
  </tr>
</table></center>
</body>
</html>

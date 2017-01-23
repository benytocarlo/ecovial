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
	$odcompra=$_POST["orden_comra"];
	
	$patente=$_POST["patente"];
	$chofer=$_POST["chofer"];
	$transportista=$_POST["transportista"];
	$obra=$_POST["obra"];
	$cliente=$_POST["cliente"];
	$temperatura=$_POST["temperatura"];
	$tipo_mezcla=$_POST["tipo_mezcla"];
	$mezclita=$_POST["mezclita"];
	$m3=$_POST["m3"];
	$sql="insert into pesaje (temperatura,num_pesaje,patente,fecha_hora,transportista,chofer,peso_bruto,tara,tipo_mezcla,conver_m3,obra ) values ('$temperatura','$n_pesaje','$patente','$fecha','$transportista','$chofer','$peso','$tara','$mezclita','$m3','$obra')";
	$result = mysql_query($sql);
	$nombre_mezcla=$_POST["id_mezcla"];
	$valor_mezcla=$_POST["valor_mezcla"];
	
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

	 $sqlpat="select * from camiones where id='$patente'";
	$resultpat = mysql_query($sqlpat); 
	while($row = mysql_fetch_row($resultpat))
	{ 
		$patente=$row[2];
	}

	
$sqlcount="SELECT * FROM pesaje ORDER BY id DESC LIMIT 1";
 $result = mysql_query($sqlcount); 
         while($row = mysql_fetch_row($result))
                                {
                               $n_guia=$row[0] + 1;
                                }
	

?><body>
<center>
<!--<!--<br><br><br><br><br><br>-->-->
<table width="1024" height="550" border="0" >
  <tr>
    <td width="1024" >
<form name="guia" id="guia">
  <table width="1025" height="243" border="0">
    <tr>
      <td height="243"><br></td>
    </tr>
  </table>
  <br><br><br><br><br>
  <table width="1024" border="0" cellpadding="0" cellspacing="0" frame="void" rules="groups" >
    <tr>
      <td height="25" colspan="0"></td>
      <td width="22%" valign="bottom"></td>
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
      <td width="46%" height="19"><? echo $nombre_cliente; ?></td>
      <td width="22%" valign="top" >&nbsp;</td>
      <td>&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="4%">&nbsp;</td>
      <td colspan="3" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td height="21"><? echo $direccion_cliente; ?></td>
      <td height="21" valign="top">&nbsp;</td>
      <td colspan="3"></td>
      <td colspan="3" valign="top" align="right"><? echo $ciudad_cliente; ?></td>
    </tr>
    <tr>
      <td height="19"><? echo $comuna_cliente; ?></td>
      <td height="19" valign="top">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"></td>
      <td>
        <label></label></td>
      <td colspan="2" valign="top" align="right"><? echo $odcompra; ?></td>
    </tr>
    <tr>
      <td height="19"><? echo $n_guia; ?></td>
      <td height="19" valign="top">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"><? echo $telefono_cliente; ?></td>
      <td width="10%" align="right">&nbsp;</td>
      <td colspan="2" valign="top" align="right"><? echo $rut_cliente; ?></td>
    </tr>
  </table><br><br> <br>
  <table width="1024" border="0" cellpadding="0" cellspacing="0" frame="void" rules="groups" >
    <tr> 
      <td width="13%" height="27"><table width="113" border="0" > 
          <tr>
            <td width="77"><? echo $m3; ?></td>
          </tr>
        </table>        </td>
      <td colspan="5"><? echo $nombre_mezcla; ?></td>
      <td width="14%" align="right"><? echo $valor_mezcla; ?></td>
      <td width="16%" height="27" align="right"><? echo $total; ?></td>
    </tr>
    <tr> 
      <td height="27"><table width="113" border="0">
        <tr>
          <td width="24">&nbsp;</td>
          <td width="79">&nbsp;</td>
        </tr>
      </table>        </td>
      <td height="27" colspan="5">&nbsp;</td>
      <td height="27">&nbsp;</td>
      <td height="27">&nbsp;</td>
    </tr>
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
      <td colspan="4" ><? echo $total; ?></td>
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
			$hora=date("H:i:s", mktime($hora1-1, $minut, $seg));
			echo $hora;
			?></td>
      <td height="32">&nbsp;</td>
      <td height="32" align="right"><? echo $total; ?></td>
    </tr>
     <tr> 
      <td height="38" colspan="5">  &nbsp;&nbsp;&nbsp;&nbsp;<? echo $rut_chofer; ?>   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
      <td height="30" align="right"><? echo $dia;?>/<? echo $mesa;?>/<? echo $año; ?> </td>
      <td height="30">&nbsp;</td>
      <td height="30" align="right"><? echo $iva; ?></td>
    </tr>
    <tr> 
      <td height="38" colspan="6"> &nbsp;&nbsp;&nbsp;&nbsp;<? echo $nombre_obra; ?></td>
      <td height="30">&nbsp;</td>
      <td height="30" align="right"><? echo $totaltruncado; ?></td>
    </tr>
       <tr> 
      <td height="26" colspan="6">Temperatura : <? echo $temperatura; ?> &ordm;C </td>
      <td height="26">&nbsp;</td>
      <td height="26" align="right"></td>
    </tr>
  </table>
</form></td>
  </tr>
</table></center>
</body>
</html>

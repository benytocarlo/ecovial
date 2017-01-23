<?php require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php require_once('includes/func_inc.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Pesaje</title>
<?php $xajax->printJavascript('includes/xajax/'); ?>
<link rel="stylesheet" href="styles.css" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {
	color: #000066;
	font-weight: bold;
	font-size: 22px;
}
.Estilo3 {font-size: 12px}
-->
</style>
<script type="text/javascript">
function valida_envia(){
    //valido el nombre
    if (document.form.tipo_cliente.value=="AR"){
       location.href='registro_pesaje.php';
    }
	 if (document.form.tipo_cliente.value=="EM"){
       if(document.form.tipo_venta.value=="CP"){
			location.href='registro_pesaje_emu_cp.php';
	   }else{
			location.href='registro_pesaje_emu_sp.php';
		}
	}
	 if (document.form.tipo_cliente.value=="GS"){
	 location.href='registro_pesaje_sincosto.php';

    }
	 if (document.form.tipo_cliente.value=="OT"){
	 if(document.form.tipo_venta.value=="CP"){
			location.href='registro_pesaje_otro.php';
	   }else{
			location.href='registro_pesaje_otro2.php';
		}
    }
	if (document.form.tipo_cliente.value=="SF"){
	location.href='registro_pesaje_servicio.php';
    }

    //el formulario se envia
    //alert("Muchas gracias por enviar el formulario");
    //document.fvalida.submit();
} 
</script>

</head>
<body>
<div class="wrapper">
	<div class="top">
		<div class="header">
		</div>
		<div class="menu">
	<?php	include("menu.php");  ?>
		</div>
	</div>		
	<div class="content">
<div class="sidebar column-left">
  <ul>
    <li>
      <h4>Mantenedores</h4>
      <ul>
        <li><a href="buscar_guia2.php" > Buscar Guia Cliente Ecovial</a></li>
        <li><a href="buscar_guia3.php" > Buscar Guia Cliente RUTAS SpA</a></li>
        <li><a href="buscar_guia.php" > Buscar Guia Cliente Externo</a></li>
    
      </ul>
    </li>
  </ul>
  <ul>
    <?php	include("menu_informes.php");  ?>
  </ul>
  <ul>
    <li></li>
  </ul>
</div>
<div class="page-content">	
			<!-- CONTENT -->
			<div id="form_pesaje"><span class="Estilo1">Emitir Guia</span>
			  <fieldset>
				<legend></legend>
              </fieldset>
		<form action="registro_orden_paso1.php" method="post" name="form" id="form" >
        <center>
<table width="443" height="150" align="center">
<tr>
                        <td width="165" height="81"><strong>Tipo de Guía</strong>
                          <select name="tipo_cliente" id="tipo_cliente" onchange="xajax_tipoventa(document.form.tipo_cliente.value);">
                            <option value="">Seleccione una Opcion</option>
                            <option value="AR">Aridos - Mezlcas</option>
                            <option value="EM">Emulsión</option>
                            <option value="GS">Guia de Traslado</option>
                            <option value="OT">Combustibles</option>
                            <option value="SF">Servicio de Planta</option>
                          </select></td>
            <td width="262"><label></label>
              <input type="button" class="formbutton" value="Siguiente" onclick="valida_envia()"/></td>
            </tr>
<tr id="ocultotipo1" style="display:none">
  <td width="165" height="81"><strong>Tipo de Venta<br />
      <select name="tipo_venta" id="tipo_venta">
        <option value="CP">Con Pesaje de Camion</option>
        <option value="SP">Sin Pesaje de Camion</option>
      </select>
  </strong></td>
  <td>&nbsp;</td>
  </tr>
                    </table>	
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <fieldset>
        <legend></legend>
        </fieldset>
        </center>	  
      </form>
<fieldset>
				<legend></legend>
              </fieldset>
	  </div>
     
	 
     
   
        <div class="clear"></div>	
	</div>		

	<p class="footer">Mixvial Ltda</div>

			

</body>
</html>

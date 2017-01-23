<?php include("conexion.php"); ?>
<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<?
$num_orden=$_POST["num_orden"];
$total_neto=$_POST["total_neto"];
$iva=$_POST["iva"];
$descuento=$_POST["descuento"];
$total_bruto=$_POST["total_bruto"];
$total_descuento=$_POST["total_descuento"];
$sql="update orden_compra set sub_neto='$total_neto' ,descuento='$descuento',descuento='$total_descuento' ,iva='$iva' , total='$total_bruto' where id=$num_orden";
$result = mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
-->
</style>
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
        <li><a href="listado_obras.php" > Obras</a></li>
        <li><a href="listado_mezclas.php" >Productos</a></li>
        <li><a href="listado_clientes.php" >Clientes</a></li>
        <li><a href="registro_camion.php" >Proveedores</a></li>
        <li><a href="registro_camion.php" >Camiones</a></li>
        <li><a href="listado_transportista.php" >Transportistas</a></li>
        <li><a href="listado_usuarios.php" >Usuarios</a></li>
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
            	<form action="orden_compra.php" method="post" name="form" id="form"  target="_blank">
			<div id="form_pesaje"><span class="Estilo1">Orden de Compra N°
		    <input name="num_orden" type="text" id="num_orden" size="5" maxlength="5" value="<? echo $num_orden;?>" readonly="readonly"/> 
		    - Paso 4</span>
	        <fieldset>
				<legend></legend>
              </fieldset>
	
        <center>
<table width="443" height="87" align="center">
<tr>
                        <td width="208" height="81"><strong>Forma de Pago</strong>
                          <input name="forma_pago" type="text" id="forma_pago" size="40" /></td>
            <td width="219"><strong>Plazo de entrega</strong>
              <input name="plazo_entrega" type="text" id="plazo_entrega" size="30" ¿/></td>
            </tr>
                    </table>	
        <table width="658" border="0">
          <tr>
            <td width="648"><strong>Observaciones</strong><br>
              <label>
              <textarea name="observaciones" id="observaciones" cols="65" rows="7"></textarea>
              <br />
              <br />
              <input type="submit" name="nuevo_obra2" class="formbutton" value="Finalizar y Generar Orden de Compra" id="nuevo_obra2"/>
              </label></td>
          </tr>
        </table>
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
      <div id="form_patente" style="display:none" ><span class="Estilo1">Registro de Camión</span>
      <fieldset>
				<legend></legend>
        </fieldset>
        <form method="post" id="formulario_patente" name="formulario_patente">
        
          <table width="558" height="129">
            <tr>
              <td width="200"><strong>Tipo de vehiculo
                <label> </label>
              </strong></td>
              <td width="346"><select name="ing_tipo_vehiculo" id="ing_tipo_vehiculo">
                  <option value="Camion">Camion</option>
                  <option value="Camioneta">Camioneta</option>
              </select></td>
            </tr>
            <tr>
              <td><strong>Patente
                <label> </label>
              </strong></td>
              <td><input type="text" name="ing_patente" id="ing_patente" /></td>
            </tr>
            <tr>
              <td><strong>Tara</strong></td>
              <td><input type="text" name="ing_tara" id="ing_tara" /></td>
            </tr>
            <tr>
              <td><strong>Empresa Transportista </strong></td>
              <td><input type="text" name="ing_empresa_transportista" id="ing_empresa_transportista" /></td>
            </tr>

            <tr>
              <td><input type="hidden" name="oculto" id="oculto" value="camion"/></td>
              <td><input type="button" name="send_camion" class="formbutton" value="Guardar" onclick="xajax_registro_camion()" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>
        </form><fieldset>
				<legend></legend>
                </fieldset>
      </div>
      <div id="form_chofer" style="display:none">
      <span class="Estilo1">Registro de Chofer</span>
      <fieldset>
				<legend></legend>
        </fieldset>
        <form  method="post" id="formulario_chofer" name="formulario_chofer">
          <table width="558" height="129">
            <tr>
              <td width="200"><strong>Rut</strong></td>
              <td width="346"><input type="text" name="cho_rut" id="cho_rut" /></td>
            </tr>
            <tr>
              <td><strong>Nombre</strong></td>
              <td><input type="text" name="cho_nombre" id="cho_nombre" /></td>
            </tr>
            <tr>
              <td><strong>Camión</strong></td>
              <td><select name="cho_camion" id="cho_camion">
                  <option value="Camion">Camion</option>
                  <option value="Camioneta">Camioneta</option>
              </select></td>
            </tr>

            <tr>
              <td><input type="hidden" name="oculto" id="oculto" value="camion"/></td>
              <td><input type="button" name="send_chofer" class="formbutton" value="Guardar"  onclick="xajax_registro_chofer()" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>  <p>&nbsp;</p>
        </form>
        <fieldset>
				<legend></legend>
        </fieldset>
      </div>
      
       <div id="form_transportista" style="display:none">
      <span class="Estilo1">Registro de Transportista</span>
      <fieldset>
				<legend></legend>
         </fieldset>
        <form  method="post" id="formulario_transportista" name="formulario_transportista">
          <table width="558" height="112">
            <tr>
              <td width="200"><strong>Nombre</strong></td>
              <td width="346"><input type="text" name="cho_nombre" id="cho_nombre" /></td>
            </tr>

            <tr>
              <td height="46"><input type="hidden" name="oculto" id="oculto" value="camion"/></td>
              <td><input type="button" name="send_chofer" class="formbutton" value="Guardar"  onclick="xajax_registro_transportista()" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>  <p>&nbsp;</p> <p>&nbsp;</p>
        </form>
        <fieldset>
				<legend></legend>
         </fieldset>
      </div>
      
        <div id="form_obra" style="display:none">
      <span class="Estilo1">Registro de Obra</span>
      <fieldset>
				<legend></legend>
         </fieldset>
        <form  method="post" id="formulario_obra" name="formulario_obra">
          <table width="558" height="112">
            <tr>
              <td width="200"><strong>Nombre</strong></td>
              <td width="346"><input type="text" name="ob_nombre" id="ob_nonbre" /></td>
            </tr>

            <tr>
              <td height="46"><input type="hidden" name="oculto" id="oculto" value="camion"/></td>
              <td><input type="button" name="send_chofer" class="formbutton" value="Guardar"  onclick="xajax_registro_obra()" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>  <p>&nbsp;</p> <p>&nbsp;</p>
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

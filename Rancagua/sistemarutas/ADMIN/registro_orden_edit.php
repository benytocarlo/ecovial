<?php include("conexion.php"); ?>
<?php 
	include("conexion.php"); 
	$n_guia=$_POST["n_guia"];
	$sql="SELECT * FROM orden_compra where id=$n_guia";
	$result = mysql_query($sql); 
    while($row = mysql_fetch_row($result))
         {
			$proveedor= $row[2];
			$tipo_oc= $row[11];
			$dirigido= $row[13];
         }
?>
<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
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
.Estilo3 {font-size: 12px}
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
      <h4>Acciones</h4>
      <ul>
        <li><a href="buscar_orden_compra.php" > Buscar Orden de Compra</a></li>
        <li><a href="eliminar_orden_compra.php" >Eliminar Orden de Compra</a></li>
        <li><a href="editar_oc.php" >Editar  Orden de Compra</a></li>
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
			<div id="form_pesaje"><span class="Estilo1">Orden de Compra</span>
			  <fieldset>
				<legend></legend>
              </fieldset>
		<form action="registro_orden_paso2.php" method="post" name="form" id="form" >
        <center>
<table width="675" height="152" align="center">
<tr>
                        <td width="190" height="81"><strong>N° Orden de Compra</strong>
              <input name="num_orden" type="text" id="num_orden" size="10" readonly="readonly" value="<? echo $n_guia; ?>"/></td>					 
						 
                          
            <td width="268"><strong>Proveedor</strong>
              <div id="select_cliente">
                <select name="cliente" id="cliente">
                  <option value="">Elija una Opci&oacute;n</option>
                  <?$sql ="SELECT * FROM proveedor order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                  <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                  <?}?>
                </select>
              </div><a href="registro_proveedor.php" > Nuevo Proveedor</a>
              <input style="display:none" type="button" name="nuevo_cliente" class="formbutton2" value="Nuevo Cliente"  onclick="xajax_nuevo_cliente(xajax.getFormValues())" id="nuevo_cliente"/>
             </td>
            <td width="201"><input type="submit" name="nuevo_obra2" class="formbutton" value="Siguiente"  id="nuevo_obra2"/></td>
            </tr>
                      <tr>
                        <td height="63" id="mezcla_name"><strong>Dirigido a:<br /> </strong>
                          <input name="dirigido" type="text" id="dirigido" size="20"  /></td>
                        <td><strong>Tipo de Orden</strong>
                          <div id="tipo_orden">
                            <select name="tipo_orden" id="tipo_orden">
                              <option value="">Elija una Opci&oacute;n</option>
                              
                              <option value="Ord Compra CON IVA">Orden de Compra Con IVA </option>
							  <option value="Ord Compra SIN IVA">Orden de Compra Sin IVA </option>
                            </select>
                          </div>
                        </td>
                        <td >&nbsp;</td>
            </tr>
                    </table>	
        <p><span class="Estilo1">Ingreso de Productos  a la Orden de Compra</span></p>
        <table width="657" height="155">
          <tr>
            <td height="81"><strong>Tipo de Compra</strong><br />
                <select name="tipo_compra" id="tipo_compra">
                  <option value="">Elija una Opci&oacute;n</option>
                  <option value="Activo">Activo</option>
                  <option value="Gasto">Gasto</option>
              </select></td>
            <td><strong>Centro de Costo</strong><br />
                <select name="centrocostos" id="centrocostos">
                  <option value="">Elija una Opci&oacute;n</option>
                  <? $sql ="SELECT * FROM centrocostos";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                { ?>
                  <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                  <?}?>
              </select></td>
            <td >&nbsp;</td>
          </tr>
          <tr>
            <td height="81"><strong>Cantidad</strong><br />
                <input name="cantidad" type="text" id="cantidad" size="10" "/></td>
            <td><strong>Nombre Producto</strong><br />
                <input name="producto" type="text" id="producto" size=" " "/></td>
            <td ><input type="hidden" name="cliente2" id="cliente2" value="<? echo $cliente; ?>"/>
                <input type="hidden" name="dirigido2" id="dirigido2" value="<? echo $dirigido; ?>"/></td>
          </tr>
          <tr>
            <td height="66"><strong>Valor Unitario </strong><br/>
                <input name="valor_unitario" type="text" id="valor_unitario" size="10" "/></td>
            <td  id="mezcla_name2"><strong>Unidad</strong><br />
                <input name="unidad" type="text" id="unidad" size="10" "/></td>
            <td ><div align="center">
                <input type="button" name="nuevo_obra" class="formbutton2" value="Agregar Producto"  onclick="xajax_lista_orden(xajax.getFormValues('form'))" id="nuevo_obra"/>
            </div></td>
          </tr>
        </table>
        <p><span class="Estilo1">Listado de Productos Agregados a la Orden de Compra</span> </p>
        <fieldset>
        <legend></legend>
        <table id="listado_productos">
          <tr>
            <th>Nombre Producto</th>
            <th>Cantidad</th>
            <th>Valor Unitario</th>
            <th>Unidad</th>
            <th>Total</th>
            <th>Eliminar</th>
          </tr>
        </table>
        </fieldset>
        <p><span class="Estilo1">Totales</span></p>
        <table width="657" height="152">
          <tr>
            <td height="81"><strong>Total Neto</strong>
                <input name="total_neto" type="text" id="total_neto" value="<? echo $total; ?>" readonly="readonly"/></td>
            <td><strong>Descuento</strong> %
              <input name="descuento" type="text" id="descuento" "/>
                <input type="button" name="nuevo_cliente2" class="formbutton2" value="Aplicar Descuento"  onclick="xajax_aplicar_descuento(xajax.getFormValues('form'))" id="nuevo_cliente2"/></td>
            <td><strong>Total Descuento</strong>
                <input name="total_descuento" type="text" id="total_descuento" "/></td>
          </tr>
          <tr>
            <td height="63" id="mezcla_name3"><strong>19 % IVA</strong>
                <input name="iva" type="text" id="iva" value="<? echo $totaliva; ?>" readonly="readonly"/></td>
            <td><strong>Total Bruto</strong>
                <input name="total_bruto" type="text" id="total_bruto" value="<? echo $totaltruncado; ?>" readonly="readonly"/></td>
            <td ><input type="submit" name="nuevo_obra3" class="formbutton" value="Finalizar Orden de Compra" target="_blank" id="nuevo_obra3"/></td>
          </tr>
        </table>
        <p><span class="Estilo1">Forma de Pago - Plazo de Entrega</span></p>
        <table width="443" height="87">
          <tr>
            <td height="81"><strong>Forma de Pago</strong>
                <input name="forma_pago" type="text" id="forma_pago" size="40" /></td>
            <td><strong>Plazo de entrega</strong>
                <input name="plazo_entrega" type="text" id="plazo_entrega" size="30" ¿/></td>
          </tr>
        </table>
        <table width="658" border="0">
          <tr>
            <td><strong>Observaciones</strong><br />
                <label>
                <textarea name="observaciones" id="observaciones" cols="65" rows="7"></textarea>
                <br />
                <br />
                <input type="submit" name="nuevo_obra4" class="formbutton" value="Finalizar y Generar Orden de Compra" id="nuevo_obra4"/>
              </label></td>
          </tr>
        </table>
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
      <div id="form_obra" style="display:none"><span class="Estilo1">Registro de Obra</span>
        <fieldset>
				<legend></legend>
        </fieldset>
        <form method="post" id="formulario_obra" name="formulario_obra">
        
          <table width="558" height="129">
            <tr>
              <td width="200"><strong>Nombre
                  <label> </label>
              </strong></td>
              <td width="346"><input type="text" name="obra_nombre" id="obra_nombre" /></td>
            </tr>
            <tr>
              <td><strong>Ubicación</strong></td>
              <td><input type="text" name="obra_ubicacion" id="obra_ubicacion" /></td>
            </tr>
            <tr>
              <td><strong>Ciudad</strong></td>
              <td><input type="text" name="obra_ciudad" id="obra_ciudad" /></td>
            </tr>

            <tr>
              <td><input type="hidden" name="oculto" id="oculto" value="camion"/></td>
              <td><input type="button" name="send_camion" class="formbutton" value="Guardar" onclick="xajax_registro_obra()" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>
        </form><fieldset>
				<legend></legend>
                </fieldset>
      </div>
     
      
       <div id="form_cliente" style="display:none" >
      <span class="Estilo1">Registro de Cliente</span>
      <fieldset>
				<legend></legend>
         </fieldset>
        <form  method="post" id="formulario_cliente" name="formulario_cliente">
          <table width="558" height="112">
            <tr>
              <td width="200"><strong>Nombre</strong></td>
              <td width="346"><input type="text" name="cliente_nombre" id="cliente_nombre" /></td>
            </tr>
            <tr>
              <td><strong>Rut</strong></td>
              <td><input type="text" name="cliente_rut" id="cliente_rut" /></td>
            </tr>
            <tr>
              <td><strong>Direcci&oacute;n</strong></td>
              <td><input type="text" name="cliente_direccion" id="cliente_direccion" /></td>
            </tr>
            <tr>
              <td><strong>Comuna</strong></td>
              <td><input type="text" name="cliente_comuna" id="cliente_comuna" /></td>
            </tr>
            <tr>
              <td><strong>Ciudad</strong></td>
              <td><input type="text" name="cliente_ciudad" id="cliente_ciudad" /></td>
            </tr>
            <tr>
              <td><strong>Fono</strong></td>
              <td><input type="text" name="cliente_fono" id="cliente_fono" /></td>
            </tr>
            <tr>
              <td><strong>Email</strong></td>
              <td><input type="text" name="cliente_email" id="cliente_email" /></td>
            </tr>
            <tr>
              <td><input type="hidden" name="oculto2" id="oculto2" value="cliente"/></td>
              <td><input type="button" name="send2" class="formbutton" value="Guardar" onclick="xajax_registro_cliente()"/></td>
            </tr>
          </table>
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

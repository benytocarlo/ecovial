<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("conexion.php"); 

$tipo_cliente=$_POST["tipo_cliente"];

if($tipo_cliente=="EM"){

}else{
$sql="SELECT * FROM orden_compra ORDER BY id DESC LIMIT 1";
$result = mysql_query($sql); 
         while($row = mysql_fetch_row($result))
                                {
							   $contador_presupuesto= $row[0] + 1;
                                }
}


?>
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
<script type="text/javascript">
function valida(){
var x1 = document.form.num_orden.value;
var x2 = document.form.cliente.value;
var x3 = document.form.dirigido.value;
var x4 = document.form.total_neto.value;
var x5 = document.form.iva.value;
var x6 = document.form.total_bruto.value;
var x7 = document.form.forma_pago.value;
var x8 = document.form.plazo_entrega.value;
var x9 = document.form.observaciones.value;


    //valido el nombre
    if (x1=="" || x2=="" || x3=="" || x4=="" || x5==""  || x6==""  || x7==""  || x8==""  || x9=="" ){
       alert("Faltan Datos que Ingresar");
	}else{
		document.form.submit();
	}
    //el formulario se envia
    //alert("Muchas gracias por enviar el formulario");
    //document.fvalida.submit();
} 
</script>
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
		<form action="insert.php" method="post" name="form" id="form" >
        <center>
<table width="687" height="152" align="center">
<tr>
                        <td width="195" height="81"><strong>N° Orden de Compra</strong>
              <input name="num_orden" type="text" id="num_orden" size="10" readonly="readonly" value="<? echo $contador_presupuesto; ?>"/></td>					 
						 
                          
            <td width="480"><strong>Proveedor</strong>
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
              <input style="display:none" type="button" name="nuevo_cliente" class="formbutton2" value="Nuevo Cliente"  onclick="xajax_nuevo_cliente(xajax.getFormValues())" id="nuevo_cliente"/>             </td>
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
                          </div>                        </td>
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
                <input name="cantidad" type="text" id="cantidad" size="10" /></td>
            <td><strong>Nombre Producto</strong><br />
                <input name="producto" type="text" id="producto" /></td>
            <td ><input type="hidden" name="cliente2" id="cliente2" value="<? echo $cliente; ?>"/>
                <input type="hidden" name="dirigido2" id="dirigido2" value="<? echo $dirigido; ?>"/></td>
          </tr>
          <tr>
            <td height="66"><strong>Valor Unitario </strong><br/>
                <input name="valor_unitario" type="text" id="valor_unitario" size="10" />
			</td>
            <td id="mezcla_name2"><strong>Unidad</strong><br />
                <input name="unidad" type="text" id="unidad" size="10" /></td>
            <td><div align="center">
			<input type="hidden" name="oculto" id="oculto" value="compra_insumos"/>
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
                <input name="total_descuento" type="text" id="total_descuento"/></td>
          </tr>
          <tr>
            <td height="63" id="mezcla_name3"><strong>19 % IVA</strong>
                <input name="iva" type="text" id="iva" value="<? echo $totaliva; ?>" readonly="readonly"/></td>
            <td><strong>Total Bruto</strong>
                <input name="total_bruto" type="text" id="total_bruto" value="<? echo $totaltruncado; ?>" readonly="readonly"/></td>
            <td></td>
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
                <center><input type="button" onclick="valida()" name="nuevo_obra4" class="formbutton" value="Finalizar y Generar Orden de Compra" id="nuevo_obra4"/></center>
              </label></td>
          </tr>
        </table>
 
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

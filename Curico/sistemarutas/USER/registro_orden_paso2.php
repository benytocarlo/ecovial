<?php include("conexion.php"); ?>
<?php
require_once('includes/func_inc.php');

$num_orden=$_POST["num_orden"];
$tipo_orden=$_POST["tipo_orden"];
$cliente=$_POST["cliente"];
$dirigido=$_POST["dirigido"];
$fecha=date("Y-m-d");
$sql="insert into orden_compra(fecha,cliente,extra_iva,dirigido) values ('$fecha','$cliente','$tipo_orden','$dirigido')";
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
			<form action="registro_orden_paso3.php" method="post" name="form" id="form" >
			  <div id="form_pesaje"><span class="Estilo1">Orden de Compra N° 
			  <input name="num_orden" type="text" id="num_orden" size="5" maxlength="5" value="<? echo $num_orden;?>" readonly="readonly"/> 
			  - Paso 2
			</span>
			  - <span class="Estilo1">
			  <input name="tipo_orden" type="text" id="tipo_orden" size="17" maxlength="17" value="<? echo $tipo_orden;?>" readonly="readonly"/>
			  </span>
			  <fieldset>
				<legend></legend>
              </fieldset>
		
        <center>
<table width="657" height="155" align="center">
<tr>
                        
              <td width="169" height="81"><strong>Tipo de Compra</strong><br />
                <select name="tipo_compra" id="tipo_compra">
                              <option value="">Elija una Opci&oacute;n</option>
                              
                              <option value="Activo">Activo</option>
							  <option value="Gasto">Gasto</option>
              </select></td>
              <td width="265"><strong>Centro de Costo</strong><br />
                <select name="centrocostos" id="centrocostos">
                  <option value="">Elija una Opci&oacute;n</option>
                  <? $sql ="SELECT * FROM centrocostos";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                { ?>
                  <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                  <?}?>
                </select></td>
              <td width="207" >&nbsp;</td>
</tr>
<tr>
                        
                        <td width="169" height="81"><strong>Cantidad</strong><br />
                          <input name="cantidad" type="text" id="cantidad" size="10" "/></td>
                        <td width="265"><strong>Nombre Producto</strong><br />
                          <input name="producto" type="text" id="producto" size=" " "/></td>
            <td width="207" ><div align="center">
              <input type="submit" name="nuevo_obra" class="formbutton" value="Finalizar Orden de Compra"   id="nuevo_obra"/>
            </div></td>
</tr>
                      <tr>
                        <td height="66"><strong>Valor Unitario </strong>
                        <input name="valor_unitario" type="text" id="valor_unitario" size="10" "/></td>
                        <td  id="mezcla_name"><strong>Unidad</strong><br />
                          <input name="unidad" type="text" id="unidad" size="10" "/></td>
                        <td ><div align="center">
   <input type="button" name="nuevo_obra2" class="formbutton2" value="Agregar Producto"  onclick="xajax_lista_orden(xajax.getFormValues('form'))" id="nuevo_obra2"/>
                          </div>                        </td>
                      </tr>
                    </table>	
        <p><span class="Estilo1">Listado de Productos Agregados a la Orden de Compra</span> </p>
        <fieldset>
        <legend></legend>
        <table id="listado_productos">
          <tr>
            <th width="296">Nombre Producto</th>
            <th width="87">Cantidad</th>
            <th width="78">Valor Unitario</th>
            <th width="73">Unidad</th>
            <th width="56">Total</th>
            <th width="80">Eliminar</th>
          </tr>
        </table>
        <p>&nbsp;</p>
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

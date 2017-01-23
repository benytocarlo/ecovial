<?php include("conexion.php");
require_once('includes/func_inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Pesaje</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar.js"></script>
    <?php $xajax->printJavascript('includes/xajax/'); ?>
    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK>
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
<script type="text/javascript">
function valida(){
var x1 = document.form.num_orden.value;
var x2 = document.form.fecha.value;
var x3 = document.form.cliente.value;
var x4 = document.form.cantidad.value;
var x5 = document.form.tipo_mezcla.value;


    //valido el nombre
    if (x1=="" || x2=="" || x3=="" || x4=="" || x5=="" ){
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
<?php include("conexion.php"); 
$sql="SELECT COUNT(id) FROM orden_compra";
$result = mysql_query($sql);
$count = mysql_fetch_array($result); 
$contador_presupuesto= $count[0] + 1;
?>
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
					  <li><a href="registro_proveedor.php" >Proveedores</a></li>
					  <li><a href="registro_camion.php" >Camiones</a></li>
					  <li><a href="listado_transportista.php" >Transportistas</a></li>
					  <li><a href="listado_usuarios.php" >Usuarios</a></li>
				  </ul>
				</li>
				
				<li></li>
		  </ul>
	  <ul>	
				<?php	include("menu_informes.php");  ?>
				
				<li></li>
		  </ul>
	  </div>	
<div class="page-content">	
			<!-- CONTENT -->
			<span class="Estilo1">Ingreso Orden de Compra</span>
			<fieldset>
				<legend></legend>
      </fieldset>
		<form action="insert.php" method="post" id="form" name="form">
<table width="664" border="0">
  <tr>
    <td width="219" height="50"><strong>N&deg; Orden de Compra</strong>
      <input name="num_orden" type="text" id="num_orden" size="10" /><br /><br /><br /></td>
    <td width="174"><strong>Fecha
        <input type="text" value="" readonly="readonly" name="fecha" id="fecha" />
        <input type="button" value="Ver Calendario" onclick="displayCalendar(document.forms[0].fecha,'yyyy/mm/dd',this)" />
    </strong></td>
    <td width="257"><br />
      <br /></td>
    </tr>
</table>
<table width="660" height="190">
<tr>
                        <td width="268"><strong>Cliente<br />
                            <select name="cliente" id="cliente">
                            <option value="">Elija una Opcion</option>
                            <? $sql ="SELECT * FROM cliente order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                            <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                            <?}?>
                          </select>
                        </strong></td>
            <td width="380" height="43"><strong>Cantidad</strong><br />
                          <input type="text" name="cantidad" id="cantidad" />
            <br /></td>
          </tr>
                      <tr>
                        <td><strong>Tipo Producto
                          <select name="tipo_mezcla" id="tipo_mezcla" onchange="xajax_mezcla2(document.form.tipo_mezcla.value)">
                            <option value="">Elija una Opci&oacute;n</option>
                            <? $sql ="SELECT tipo, COUNT(DISTINCT tipo) as tipo_id FROM mezclas GROUP BY tipo";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                            <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
                            <? } ?>
                          </select>
                        <br />
                        </strong></td>
                        <td height="44"><input type="button" name="send" onclick="xajax_lista_oc(xajax.getFormValues('form'))" class="formbutton2" value="Agregar Producto" /></td>
                      </tr>
                      <tr>
                        <td id="mezcla_name">&nbsp;</td>
                        <td height="44">&nbsp;</td>
          </tr>
                      <tr>
                        <td height="46"><input type="hidden" name="oculto" id="oculto" value="ingreso_orden"/></td>
                        <td>&nbsp;</td>
          </tr>
          </table>
          
          
          
	  <p class="Estilo1"><strong>Productos Agregado a la Orden de Compra</strong></p>
	  <table id="listado_productos">
        <tr>
          <th width="67">ID</th>
          <th width="318">Nombre Producto</th>
          <th width="125">Cantidad</th>
          <th width="170">Eliminar</th>
        </tr>
      </table><br /><br /><br />
      <center><input type="button" name="send" class="formbutton" onclick="valida()"  value="Finalizar Orden de Compra" /></center>
	  </form>
	<fieldset>
	</fieldset>
	  </div>
	  <div class="clear"></div>	
	</div>		

	<p class="footer">Constructora Rutas</p>
</div>

			

</body>
</html>

<?php include("conexion.php"); ?>
<?php
require_once('includes/func_inc.php');

$num_presupuesto=$_POST["num_presupuesto"];
$cliente=$_POST["cliente"];
$obra=$_POST["obra"];
 $fecha=date("Y-m-d");
$sql="insert into presupuesto(fecha,cliente,obra) values ('$fecha','$cliente','$obra')";
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
			<form action="registro_presupuesto_paso3.php" method="post" name="form" id="form" ><div id="form_pesaje"><span class="Estilo1">Presupuesto N° 
			  <input name="n_presupuesto" type="text" id="n_presupuesto" size="5" maxlength="5" value="<? echo $num_presupuesto;?>" readonly="readonly"/> 
			  - Paso 2
			</span>
			  <fieldset>
				<legend></legend>
              </fieldset>
		
        <center>
<table width="657" height="155" align="center">
<tr>
                        <td width="208" height="81"><strong>Cantidad</strong><br />
                          <input name="cantidad" type="text" id="cantidad" size="10" "/><input type="hidden" name="id_mezcla" id="id_mezcla" /></td>
            <td width="219"><strong>Tipo Producto<br />
                <select name="tipo_mezcla" id="tipo_mezcla" onchange="xajax_mezcla(document.form.tipo_mezcla.value)">
                  <option value="">Elija una Opci&oacute;n</option>
                  <? $sql ="SELECT tipo, COUNT(DISTINCT tipo) as tipo_id FROM mezclas GROUP BY tipo";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                  <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
                  <? } ?>
                </select>
            </strong></td>
            <td ><div align="center">
              <input type="submit" name="nuevo_obra" class="formbutton" value="Finalizar Presupuesto"   id="nuevo_obra"/>
            </div></td>
</tr>
                      <tr>
                        <td height="66"><strong>Valor Unitario Producto</strong>
                          <input name="valor_unitario" type="text" id="valor_unitario" size="10" /></td>
                        <td  id="mezcla_name">&nbsp;</td>
                        <td ><div align="center">
   <input type="button" name="nuevo_obra2" class="formbutton2" value="Agregar Producto"  onclick="xajax_lista_productos(xajax.getFormValues('form'))" id="nuevo_obra2"/>
                          </div>                        </td>
                      </tr>
                    </table>	
        <p><span class="Estilo1">Listado de Productos Agregados al Presupuesto</span> </p>
        <fieldset>
        <legend></legend>
        <table id="listado_productos">
          <tr>
            <th width="127">Tipo Producto</th>
            <th width="154">Nombre Producto</th>
            <th width="122">Valor Unitario</th>
            <th width="87">Cantidad</th>
            <th width="94">Total</th>
          </tr>
        </table>
        <p>&nbsp;</p>
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

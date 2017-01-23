<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("conexion.php"); 

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
        <li><a href="editar_orden_compra.php" >Editar  Orden de Compra</a></li>
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
		<form action="editar_orden_paso2.php" method="post" name="form" id="form" >
        <center>
<table width="657" height="152" align="center">
<tr>
                        <td width="208" height="81"><strong>N° Orden de Compra</strong>
                     <input name="num_orden" type="text" id="num_orden" size="10" readonly="readonly" value="<? echo $n_guia; ?>"/></td>					 
						 
                          
            <td width="219"><strong>Proveedor</strong>
              <div id="select_cliente">
                <select name="cliente" id="cliente">
                  <option value="">Elija una Opci&oacute;n</option>
                  <? $sql ="SELECT * FROM proveedor order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {
                                ?>
                               <? if($proveedor==$row[0]) { ?>
                  					<option value="<? echo $row[0]; ?>" selected="selected"> <? echo $row[1]; ?></option>
                               <? }else{ ?>
                               		<option value="<? echo $row[0]; ?>" > <? echo $row[1]; ?></option>
                               <? } ?>
                                    
                  <? } ?>
                </select>
              </div><a href="registro_proveedor.php" > Nuevo Proveedor</a>
              <input style="display:none" type="button" name="nuevo_cliente" class="formbutton2" value="Nuevo Cliente"  onclick="xajax_nuevo_cliente(xajax.getFormValues())" id="nuevo_cliente"/>
             </td>
            <td width="214"><input type="submit" name="nuevo_obra2" class="formbutton" value="Siguiente"  id="nuevo_obra2"/></td>
            </tr>
                      <tr>
                        <td height="63" id="mezcla_name"><strong>Dirigido a:<br /> </strong>
                          <input name="dirigido" type="text" id="dirigido" value="<? echo  $dirigido; ?>" size="20"  /></td>
                        <td><strong>Tipo de Orden</strong>
                          <div id="tipo_orden">
                            <select name="tipo_orden" id="tipo_orden">
                              <option value="">Elija una Opci&oacute;n</option>
                                <? if($tipo_oc=="Ord Compra SIN IVA") { ?>
                              <option value="Ord Compra CON IVA" >Orden de Compra Con IVA </option>
                                <option value="Ord Compra SIN IVA" selected="selected">Orden de Compra Sin IVA </option>
                              <? }else{ ?>
							        <option value="Ord Compra CON IVA" selected="selected">Orden de Compra Con IVA </option>
                                <option value="Ord Compra SIN IVA">Orden de Compra Sin IVA </option>
                              <? } ?>
                            </select>
                          </div>
                        </td>
                        <td >&nbsp;</td>
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

<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include("conexion.php"); 
include("conexcion_sql.php");
$sqlcount="SELECT * FROM pesaje ORDER BY id DESC LIMIT 1";
 $result = mysql_query($sqlcount); 
         while($row = mysql_fetch_row($result))
                                {
                               $n_guia=$row[0] + 1;
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
			<div id="form_pesaje"><span class="Estilo1">Guia de Traslado</span>
			  <fieldset>
				<legend></legend>
              </fieldset>
		<form action="guia3.php" method="post" name="form" id="form" >
        <center>
<table width="566" height="438" align="center">
<tr>
              <td width="297" height="81"><strong>Patente</strong> <br />
                <div id="select_patente">
                  <select name="patente" id="patente" >
                    <option value="">Elija una Opci&oacute;n</option>
                    <?$sql ="SELECT * FROM camiones order by patente";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                    <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                    <?}?>
                  </select>
                </div>
              <a href="registro_camion.php" > Nueva Patente</a>
                <input type="button" name="nueva_patente" class="formbutton2" style="display:none" value="Nueva Patente"  onclick="xajax_nueva_patente()" id="nueva_patente"/></td>
              <td><strong>N° de Guía</strong>
                <input name="n_guia" type="text" id="n_guia" value="<? echo $n_guia; ?>" readonly="readonly"/><br /></td>
</tr>
                      <tr>
                        <td height="81"><strong>Chofer </strong><br />
                            <div id="select_chofer">
                              <select name="chofer" id="chofer">
                                <option value="">Elija una Opci&oacute;n</option>
                                <?$sql ="SELECT * FROM chofer order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                                <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                                <?}?>
                              </select>
                            </div>
                          <a href="registro_chofer.php" >Nuevo Chofer</a>
                            <input type="button" name="nuevo_chofer" class="formbutton2" style="display:none" value="Nuevo Chofer"  onclick="xajax_nuevo_chofer()" id="nuevo_chofer"/></td>
                        <td><strong>Descripción</strong>
                          <input name="descripcion" type="text" id="descripcion" /> </td>
            </tr>
                      <tr>
                        <td height="86"><strong>Obra</strong>
                            <div id="select_obra">
                              <select name="obra" id="obra">
                                <option value="">Elija una Opci&oacute;n</option>
                                <?$sql ="SELECT * FROM obra order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                                <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                                <?}?>
                              </select>
                            </div>
                          <a href="registro_obra.php" >Nueva Obra</a>
                            <input type="button" name="nuevo_obra" class="formbutton2" style="display:none" value="Nueva Obra"  onclick="xajax_nuevo_obra()" id="nuevo_obra"/></td>
                        <td><strong>Cantidad</strong><br />
                          <input name="cantidad" type="text" id="cantidad" />
                        
                          <div align="center">
                            <input type="button" name="nuevo_obra3" class="formbutton2" value="Agregar Producto"  onclick="xajax_lista_traslado(xajax.getFormValues('form'))" id="nuevo_obra3"/>
                          </div>                          
                        </td>
            </tr>
                      <tr>
                        <td height="93" ><strong>Transportista</strong>
                            <div id="select_transportista">
                              <select name="transportista" id="transportista">
                                <option value="">Elija una Opci&oacute;n</option>
                                <?$sql ="SELECT * FROM transportista order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                                <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                                <?}?>
                              </select>
                            </div>
                          <a href="registro_transportista.php" >Nuevo Transportista</a>
                            <input type="button" name="nuevo_transportista" class="formbutton2" style="display:none" value="Nuevo Transportista"  onclick="xajax_nuevo_transportista()" id="nuevo_transportista"/></td>
                        <td><p>&nbsp;</p></td>
            </tr>
                      <tr>
                        <td height="69"><strong>Cliente</strong>
                            <div id="select_cliente">
                              <select name="cliente" id="cliente">
                                <option value="">Elija una Opci&oacute;n</option>
                                <?$sql ="SELECT * FROM cliente order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                                <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                                <?}?>
                              </select>
                            </div>
                          <a href="registro_cliente.php" >Nuevo Cliente</a>
                            <input type="button" name="nuevo_cliente" class="formbutton2" style="display:none" value="Nuevo Cliente"  onclick="xajax_nuevo_cliente()" id="nuevo_cliente"/></td>
                        <td id="mezcla_name"><input type="submit" class="formbutton" id="guia" value="Generar Guia" /></td>
            </tr>
          </table>	
       <span> <strong>Listado de Productos Agregados a la Guia de Traslado</strong></span>
       <legend></legend>
        <table id="listado_productos">
          <tr>
            <th width="34">ID</th>
            <th width="443">Nombre Producto</th>
            <th width="123">Cantidad</th>
            <th width="80">Eliminar</th>
          </tr>
        </table>

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

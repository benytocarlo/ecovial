<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include("conexion.php"); 
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
<script type="text/javascript">
function valida(){
var x1 = document.form.patente.value;
var x2 = document.form.chofer.value;
var x3 = document.form.obra.value;
var x4 = document.form.transportista.value;
var x5 = document.form.cliente.value;
var x6 = document.form.n_guia.value;
var x7 = document.form.descripcion.value;
var x8 = document.form.cantidad.value;
var x9 = document.form.precio.value;

    //valido el nombre
    if (x1=="" || x2=="" || x3=="" || x4=="" || x5=="" || x6=="" || x7=="" || x8=="" || x9==""){
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
			<div id="form_pesaje"><span class="Estilo1">Guia de Servicio de Pesaje</span>
			  <fieldset>
				<legend></legend>
              </fieldset>
		<form action="guia_servicio.php" method="post" name="form" id="form"  target="_blank">
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
                        <div id="servicio">
                              <select name="descripcion" id="descripcion">
                                <option value="">Elija una Opci&oacute;n</option>
                                <? $sql ="SELECT distinct nombre FROM mezclas where nombre!=' ' and tipo='Mezcla' order by nombre asc";
       // echo $sql;
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                                <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
                                <?}?>
                              </select>
                            </div>
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
                        <td><strong>Precio</strong><br />
                          <input type="text"  id="precio" name="precio"/></td>
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
                        <td id="mezcla_name"><input type="button" onclick="valida()" class="formbutton" id="guia" value="Generar Guia" /></td>
            </tr>
          </table>	
       <legend></legend>
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

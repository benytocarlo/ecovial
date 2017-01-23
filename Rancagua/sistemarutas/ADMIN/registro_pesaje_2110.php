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
			<div id="form_pesaje"><span class="Estilo1">Registro de Pesaje</span>
			<fieldset>
				<legend></legend>
              </fieldset>
		<form action="guia.php" method="post" name="form" id="form" >
        <center>
<table width="502" height="637" align="center">
<tr>
              <td width="250" height="81"><strong>Patente</strong> <br />
                <div id="select_patente">
                  <select name="patente" id="patente" onchange="xajax_tara(document.form.patente.value)">
                    <option value="">Elija una Opci&oacute;n</option>
                    <?$sql ="SELECT * FROM camiones";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                    <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                    <?}?>
                  </select>
                </div>
              <a href="registro_camion.php" > Nueva Patente</a>
                <input type="button" name="nueva_patente" class="formbutton2" style="display:none" value="Nueva Patente"  onclick="xajax_nueva_patente()" id="nueva_patente"/></td>
            <td width="236"><strong>N&deg; Pesaje</strong><br />
				<select name="n_pesaje" id="n_pesaje" onchange="xajax_buscarpesaje(document.form.n_pesaje.value);"/>
                <option value="">Elija una Opci&oacute;n</option>
			<?php
				$sql2="select * from PESAJEEJES order by PEjNro DESC";
				$rs=odbc_exec($cid,$sql2)or die(exit("Error en odbc_exec"));
				while (odbc_fetch_row($rs))
				 {
					$peso=odbc_result($rs,"PEjNro");
				 ?>
				 <option value="<? echo $peso;?>"> <? echo $peso; ?></option>
				  
				  <?php
				  }
				?>
			</select>	
            <br />
            
            
            <strong> Orden de Compra</strong><br />
				<select name="orden_comra" id="orden_comra" />
              <option value="">Elija una Opci&oacute;n</option>
                <? $sql ="SELECT * FROM ingreso_orden order by orden ASC";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                                <option value="<? echo $row[1]; ?>"> <? echo $row[1]; ?></option>
                                <?}?>
                              </select>       		  </td>
			</tr>
                      <tr>
                        <td height="81"><strong>Chofer </strong><br />
                            <div id="select_chofer">
                              <select name="chofer" id="chofer">
                                <option value="">Elija una Opci&oacute;n</option>
                                <? $sql ="SELECT * FROM chofer";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                                <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                                <?}?>
                              </select>
                            </div>
                          <a href="registro_chofer.php" >Nuevo Chofer</a>
                            <input type="button" name="nuevo_chofer" class="formbutton2" style="display:none" value="Nuevo Chofer"  onclick="xajax_nuevo_chofer()" id="nuevo_chofer"/></td>
                        <td><strong>N° Guía</strong>
                          <input name="temperatura2" type="text" id="temperatura2" value="<? echo $n_guia; ?>" readonly="readonly"/></td>
                      </tr>
                      <tr>
                        <td height="86"><strong>Obra</strong>
                            <div id="select_obra">
                              <select name="obra" id="obra">
                                <option value="">Elija una Opci&oacute;n</option>
                                <?$sql ="SELECT * FROM obra";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                                <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                                <?}?>
                              </select>
                            </div>
                          <a href="registro_obra.php" >Nueva Obra</a>
                            <input type="button" name="nuevo_obra" class="formbutton2" style="display:none" value="Nueva Obra"  onclick="xajax_nuevo_obra()" id="nuevo_obra"/></td>
                        <td><strong>Tipo Producto<br />
                              <select name="tipo_mezcla" id="tipo_mezcla" onchange="xajax_mezcla(document.form.tipo_mezcla.value)">
                                <option value="">Elija una Opci&oacute;n</option>
                                <? $sql ="SELECT tipo, COUNT(DISTINCT tipo) as tipo_id FROM mezclas GROUP BY tipo";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{
						  if($row[1]!="Emulsion"){?>
                                <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
                                <? } } ?>
                              </select>
                        </strong></td>
            </tr>
                      <tr>
                        <td height="93" ><strong>Transportista</strong>
                            <div id="select_transportista">
                              <select name="transportista" id="transportista">
                                <option value="">Elija una Opci&oacute;n</option>
                                <?$sql ="SELECT * FROM transportista";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                                <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                                <?}?>
                              </select>
                            </div>
                          <a href="registro_transportista.php" >Nuevo Transportista</a>
                            <input type="button" name="nuevo_transportista" class="formbutton2" style="display:none" value="Nuevo Transportista"  onclick="xajax_nuevo_transportista()" id="nuevo_transportista"/></td>
                        <td id="mezcla_name">&nbsp;</td>
            </tr>
                      <tr>
                        <td height="69"><strong>Cliente</strong>
                            <div id="select_cliente">
                              <select name="cliente" id="cliente">
                                <option value="">Elija una Opci&oacute;n</option>
                                <?$sql ="SELECT * FROM cliente";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                                <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                                <?}?>
                              </select>
                            </div>
                          <a href="registro_cliente.php" >Nuevo Cliente</a>
                            <input type="button" name="nuevo_cliente" class="formbutton2" style="display:none" value="Nuevo Cliente"  onclick="xajax_nuevo_cliente()" id="nuevo_cliente"/></td>
                        <td><strong>Valor Unitario Producto<br />
                              <input name="valor_mezcla" type="text" id="valor_mezcla" />
                        </strong></td>
            </tr>
                      <tr>
                        <td id="peso_brutoid" height="69"><strong>Peso Bruto</strong><br />
                          <input name="peso" type="text" id="peso" size="10"  readonly="readonly"/></td>
                        <td><strong>Temperatura</strong> <br />
                          <input name="temperatura" type="text" id="temperatura" size="10" /></td>
                      </tr>
                      <tr>
                        <td height="69"><strong>Tara</strong> <br />
                          <input name="tara" type="text" id="tara" size="10" readonly="readonly"/></td>
                        <td><input type="hidden" name="id_mezcla" id="id_mezcla" />
                          <strong>M3 Total<br />
                          <input name="m3" type="text" id="m3"  readonly="readonly"/>
                          <input type="button" name="calcular" class="formbutton2"  value="Calcular M3" id="calcular" onclick="xajax_calcularm3(document.form.mezclita.value,document.form.peso.value,document.form.tara.value);" />
                          </strong></td>
                      </tr>
                      <tr>
                        <td height="69">&nbsp;</td>
                        <td><input type="submit" class="formbutton" id="guia" value="Generar Guia" /></td>
                      </tr>
                    </table>	
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

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
<script type="text/javascript">
function valida(){
var x1 = document.form.patente.value;
var x2 = document.form.chofer.value;
var x3 = document.form.obra.value;
var x4 = document.form.transportista.value;
var x5 = document.form.cliente.value;
var x6 = document.form.orden_compra.value;
var x7 = document.form.valor_mezcla.value;
var x8 = document.form.peso.value;
var x9 = document.form.tara.value;
var x10 = document.form.m3.value;
var x11 = document.form.temperatura.value;
var x12 = document.form.tipo_mezcla.value;
var x13 = document.form.n_pesaje.value;
var x14 = document.form.n_orden.value;
    //valido el nombre
if (x1=="" || x2=="" || x3=="" || x4=="" || x5=="" || x6=="" || x7=="" || x8=="" || x9=="" || x10=="" || x11=="" || x12=="" || x13=="" || x14=="" ){
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
			<div id="form_pesaje2" >
			  <div id="form_pesaje" style="display:block">
			<span class="Estilo1">Registro de Pesaje</span>
			<fieldset>
				<legend></legend>
              </fieldset>
		<form action="guia.php" method="post" name="form" id="form" target="_blank">
        <center>
<table width="608" height="637" align="center">
<tr>
              <td width="240" height="81"><strong>Obra</strong>
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
                <input type="button" name="nuevo_obra" class="formbutton2" style="display:none" value="Nueva Obra"  onclick="xajax_nuevo_obra()" id="nuevo_obra"/>
                <input type="button" name="nueva_patente" class="formbutton2" style="display:none" value="Nueva Patente"  onclick="xajax_nueva_patente()" id="nueva_patente"/></td>
            <td width="356"><strong>N&deg; Pesaje</strong><br />
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
				<select name="orden_compra" id="orden_compra" />                
              <option value="">Elija una Opcion</option>
                <? $sql ="SELECT * FROM ingreso_orden order by orden ASC";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                                <option value="<? echo $row[1]; ?>"> <? echo $row[1]; ?></option>
                                <?}?>
                              </select> 
							  
							  <br>
							  <strong> Partida de Control</strong><br />
						<input name="partidacontrol" type="text" id="partidacontrol" />
						</td>
			</tr>
                      <tr>
                        <td height="81"><strong>Cliente</strong>
                          <select name="cliente" id="cliente">
                            <option value="">Elija una Opci&oacute;n</option>
                            <?$sql ="SELECT * FROM cliente order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                            <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                            <?}?>
                          </select>
                          <div id="select_cliente"></div>
                          <a href="registro_cliente.php" >Nuevo Cliente</a>
                          <input type="button" name="nuevo_cliente" class="formbutton2" style="display:none" value="Nuevo Cliente"  onclick="xajax_nuevo_cliente()" id="nuevo_cliente"/></td>
                        <td><strong>N° Guía</strong>
                          <input name="n_orden" type="text" id="n_orden" value="<? echo $n_guia; ?>" readonly="readonly"/></td>
            </tr>
                      <tr>
                        <td height="86"><strong>Patente</strong> <br />
                          <div id="select_patente">
                            <select name="patente" id="patente" onchange="xajax_tara(document.form.patente.value)">
                              <option value="">Elija una Opci&oacute;n</option>
                              <?$sql ="SELECT * FROM camiones order by patente asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                              <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                              <?}?>
                            </select>
                          </div>
                        <a href="registro_camion.php" > Nueva Patente</a> </td>
      <td><strong>Tipo Producto<br />
                              <select name="tipo_mezcla" id="tipo_mezcla" onchange="xajax_mezcla(document.form.tipo_mezcla.value)">
                                <option value="">Elija una Opcion</option>
                                <? $sql ="SELECT tipo, COUNT(DISTINCT tipo) as tipo_id FROM mezclas GROUP BY tipo";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{
						  if($row[0]!="Emulsion" && $row[0]!="Otro"){?>
                                <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
                                <? } } ?>
                              </select>
                        </strong></td>
            </tr>
                      <tr>
                        <td height="93" ><strong>Transportista</strong>
                            <select name="transportista" id="transportista">
                              <option value="">Elija una Opci&oacute;n</option>
                              <?$sql ="SELECT * FROM transportista order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                              <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                              <?}?>
                            </select>
                            <div id="select_transportista"></div>
                          <a href="registro_transportista.php" >Nuevo Transportista</a>
                        <input type="button" name="nuevo_transportista" class="formbutton2" style="display:none" value="Nuevo Transportista"  onclick="xajax_nuevo_transportista()" id="nuevo_transportista"/></td>
                        <td id="mezcla_name">&nbsp;</td>
            </tr>
                      <tr>
                        <td height="69"><strong>Chofer </strong><br />
                          <div id="select_chofer">
                            <select name="chofer" id="chofer">
                              <option value="">Elija una Opci&oacute;n</option>
                              <? $sql ="SELECT * FROM chofer order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                              <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                              <?}?>
                            </select>
                          </div>
                          <a href="registro_chofer.php" >Nuevo Chofer</a>
                          <input type="button" name="nuevo_chofer" class="formbutton2" style="display:none" value="Nuevo Chofer"  onclick="xajax_nuevo_chofer()" id="nuevo_chofer"/></td>
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
                          <input type="button" name="calcular" class="formbutton2"  value="Calcular M3" id="calcular" onclick="xajax_calcularm3_aux(document.form.cliente.value,document.form.orden_compra.value,document.form.mezclita.value,document.form.peso.value,document.form.tara.value,document.form.orden_compra.value);" />
                          </strong></td>
            </tr>
                      <tr>
                        <td height="69">&nbsp;</td>
                        <td><input type="button" onclick="valida()" class="formbutton" id="guia" value="Generar Guia" /></td>
            </tr>
            </table>	
        </center>
		</div>
           <div id="form_alerta" style="display:none">
      <span class="Estilo1">Alerta Cantidad de M3 Excedida</span>
      <fieldset>
				<legend></legend>
        </fieldset>

          <table width="558" height="129">
            <tr>
              <td width="200"><strong>Nombre Autoriza</strong></td>
              <td width="346"><input type="text" name="nom_autoriza" id="nom_autoriza" /></td>
            </tr>
            <tr>
              <td><strong>M3 Autorizado</strong></td>
              <td><input type="text" name="m3_autoriza" id="m3_autoriza" /></td>
            </tr>
            <tr>
              <td><strong>Observación</strong></td>
              <td><label>
                <textarea name="observacion" id="observacion" cols="45" rows="5"></textarea>
              </label></td>
            </tr>

            <tr>
              <td></td>
              <td><input type="button" name="send_chofer" class="formbutton" value="Guardar"  onclick="xajax_observacion(              document.form.nom_autoriza.value,document.form.m3_autoriza.value,document.form.observacion.value,document.form.n_orden.value);" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>  <p>&nbsp;</p>

        <fieldset>
				<legend></legend>
        </fieldset>
    </div>	  
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

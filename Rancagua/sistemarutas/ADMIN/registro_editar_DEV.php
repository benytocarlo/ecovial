<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include("conexion.php"); 


$n_guia=$_POST["n_guia"];
$sqlcount="SELECT * FROM pesaje where id=".$n_guia."";

 $result = mysql_query($sqlcount); 
         while($row = mysql_fetch_row($result))
                                {
                               $patente =$row[3];
							   $transportista =$row[5];
							   $chofer 	=$row[6];
							   $cliente  =$row[11];
							   $n_orden =$row[10];
							   $obra 	=$row[9];
							   $tipo_guia=$row[13];
                                }
								
		if($tipo_guia=="")
		{
			$sqlcount="SELECT * FROM detalle_pesaje where guia=".$n_guia."";
			 $result = mysql_query($sqlcount); 
        	 while($row = mysql_fetch_row($result))
                                {
                               $producto =$row[1];
							   $cantidad =$row[2];
							   $valor 	=$row[3];
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
.Estilo2 {
	color: #999999;
	font-weight: bold;
}
.Estilo3 {color: #999999}
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
			<div id="form_pesaje2" >
			  <div id="form_pesaje" style="display:block">
			<span class="Estilo1">Edici&oacute;n de Pesaje</span>
		<fieldset>
				<legend></legend>
              </fieldset>
		<form action="actualizar_guia.php" method="post" name="form" id="form" >
        <center>
<table width="608" height="353" align="center">
<tr>
              <td width="240" height="81"><span class="Estilo2">Obra</span>
                <div id="select_obra">
                  <select name="obra" id="obra">
                    <option value="">Elija una Opci&oacute;n</option>
                    <? $sql ="SELECT * FROM obra order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {
                                $obraaux=$row[0];
                               if($obraaux==$obra ) {
                               ?>
                    <option SELECTED value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                    <?
                    	} else {
						?>
                        <option  value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                        <? } }?>
                  </select>
              </div>                </td>
            <td width="356"><span class="Estilo3"><br />
            
            
                  <strong> Orden de Compra</strong><br />
				  <select name="orden_compra" id="orden_compra" />
			                    
                  <option value="">Elija una Opcion</option>
                <? $sql ="SELECT * FROM ingreso_orden order by orden ASC";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{       
                              $n_ordenaux=$row[1];
                               if($n_ordenaux==$n_orden ) {
                               ?>
                    <option SELECTED value="<? echo $row[1]; ?>"> <? echo $row[1]; ?></option>
                    <?
                    	} else {
						?>
                        <option  value="<? echo $row[1]; ?>"> <? echo $row[1]; ?></option>
                        <? } }?>  
                              </span></td>
	  </tr>
                      <tr>
                        <td height="81"><span class="Estilo3"><strong>Cliente</strong>
                          <select name="cliente" id="cliente">
                            <option value="">Elija una Opci&oacute;n</option>
                            <? $sql ="SELECT * FROM cliente order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {    
                              $clienteaux=$row[0];
                               if($clienteaux==$cliente ) {
                               ?>
                    <option SELECTED value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                    <?
                    	} else {
						?>
                        <option  value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                        <? } }?>  
                        </span>
                          <div class="Estilo3" id="select_cliente"></div>                          </td>
                        <td><span class="Estilo3"><strong>N° Guía</strong>
                        <input name="n_guia" type="text" id="n_guia" value="<? echo $n_guia; ?>" readonly="readonly"/>
                        </span></td>
            </tr>
                      <tr>
                        <td height="86"><span class="Estilo3"><strong>Patente</strong> <br />
                        </span>
                          <div class="Estilo3" id="select_patente">
                            <select name="patente" id="patente" onchange="xajax_tara(document.form.patente.value)">
                              <option value="">Elija una Opci&oacute;n</option>
                              <? $sql ="SELECT * FROM camiones order by patente asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ 
							$camionesaux=$row[0];
                               if($camionesaux==$patente ) {
                               ?>
                    <option SELECTED value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                    <?
                    	} else {
						?>
                        <option  value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                        <? } }?>  
                          </div>                        </td>
      <td><span class="Estilo3"><strong>Transportista</strong>
          <select name="transportista" id="transportista">
            <option value="">Elija una Opci&oacute;n</option>
            <? $sql ="SELECT * FROM transportista order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {
                                  $transportistaaux=$row[0];
                               if($transportistaaux==$transportista) {
                               ?>
                    <option SELECTED value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                    <?
                    	} else {
						?>
                        <option  value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                        <? } }?>  
      </span></td>
            </tr>
                      <tr>
                        <td height="93" ><div class="Estilo3" id="select_transportista"><strong>Chofer </strong><br />
                            <div id="select_chofer2">
                              <select name="chofer" id="chofer">
                                <option value="">Elija una Opci&oacute;n</option>
                                <? $sql ="SELECT * FROM chofer order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{$choferuax=$row[0];
                               if($choferuax==$chofer) {
                               ?>
                    <option SELECTED value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                    <?
                    	} else {
						?>
                        <option  value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                        <? } }?>  
                            </div>
                        </div>
                          <span style="color: #999999">
                           <input type="button" name="nuevo_transportista" class="formbutton2" style="display:none" value="Nuevo Transportista"  onclick="xajax_nuevo_transportista()" id="nuevo_transportista"/>
                        </span></td>
                       <? if($tipo_guia<>"") { ?>  <td id="mezcla_name"> <input type="submit" class="formbutton " id="guia" value="Actualizar Guia" /></td>   <? } ?>
            </tr>
            <? if($tipo_guia=="") { ?>
            <tr>
            <td> Seleccione Producto<select name="prod" id="prod">
                              <option value="">Elija una Opci&oacute;n</option>
                              <? $sql2 ="SELECT * FROM mezclas where tipo!='Emulsion' ";

						$result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{	
							$aux=$row[0];
							if($producto==$aux){
							?> 
                            <option selected="selected" value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                            <? } else { ?>
                              <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                           <? } }?>
      </select><input name="op" type="hidden" id="op" value="noemulsion"/></td>
            <td> Valor
                	 <input name="valor" type="text" id="valor" value="<? echo $valor; ?>"/></td>
            </tr>
            <tr>
            	<td>Cantidad
                	 <input name="cantidad" type="text" id="Cantidad" value="<? echo $cantidad; ?>"/>
                </td>
                <td>
               	  <input type="submit" class="formbutton " id="guia" value="Actualizar Guia" />
                </td>
            </tr>
            
            
          </table>	
            <div align="center">
              <? } else { ?>
              </table>	
              
              <br /> 
              <strong>Agregar o Eliminar un Producto            </strong>
            </div>
            <table width="566" height="202" align="center">
                     <? if($tipo_guia=="emulsion") { ?>
                      <tr>
                        <td width="316" height="81"><strong>N° de Litros</strong>
                          <input name="n_litros" type="text" id="n_litros" /></td>
                        <td width="238"><strong>Tipo Emulsión<br />
                            <select name="tipo_mezcla" id="tipo_mezcla">
                              <option value="">Elija una Opci&oacute;n</option>
                              <?$sql ="SELECT * FROM mezclas where tipo='Emulsion' order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                              <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                              <?}?>
                            </select>
                        </strong></td>
              </tr>
              <? } ?>
              <? if($tipo_guia=="combustible") { ?>
                      <tr>
                        <td width="316" height="81"><strong>N° de Litros</strong>
                          <input name="n_litros" type="text" id="n_litros" /></td>
                        <td width="238"><strong>Tipo Combustible<br />
                            <select name="tipo_mezcla" id="tipo_mezcla">
                              <option value="">Elija una Opci&oacute;n</option>
                              <?$sql ="SELECT * FROM mezclas where tipo='Otro' order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                              <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                              <?}?>
                            </select>
                        </strong></td>
              </tr>
              <? } ?>
                      <tr>
                        <td height="113"><strong>Valor Unitario Producto<br />
                            <input name="valor_mezcla" type="text" id="valor_mezcla" />
                        </strong>
                          <div align="center">
                            <input type="button" name="nuevo_obra2" class="formbutton2" value="Agregar Producto"  onclick="xajax_lista_guia_edit(xajax.getFormValues('form'))" id="nuevo_obra2"/>
                          </div>
                        <p></p></td>
                        <td>&nbsp;</td>
              </tr>
          </table>	
       <span> <strong>Listado de Productos Agregados a la Orden de Compra</strong></span> </p>
        <fieldset>
        <legend></legend>
        <table id="listado_productos">
          <tr>
            <th width="34">ID</th>
            <th width="275">Nombre Producto</th>
            <th width="66">N° Litros</th>
            <th width="120">Valor Unitario</th>
            <th width="97">Total</th>
            <th width="80">Eliminar</th>
          </tr>
		     <? 
	$sql2 ="SELECT * from detalle_pesaje dp, mezclas ml where dp.guia=".$n_guia." and ml.id=dp.producto ";
	
	$result2 = mysql_query($sql2); 
	$contenido="";
		while($row = mysql_fetch_row($result2))
		{ 
		$contenido.="<tr>";
		$contenido.="<td >".$row[4]."</td>";
          $contenido.="<td >".$row[7]."</td>";
            $contenido.="<td>".$row[2]."</td>";
           $contenido.="<td> ".$row[3]."</td>";
			$total_final=$row[2]*$row[3];
			$contenido.="<td>".$total_final."</td>";
            $contenido.="<td><input type='button' onclick='xajax_elim_product_guia($n_guia,".$row[4].")' value='Eliminar' class='formbutton2' >";
         $contenido.="</tr>";
          }     
		  echo $contenido; ?>
        </table>
            
            <? } ?>
            
        </center>
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
 
	<fieldset>
				<legend></legend>
              </fieldset>
	  </div></div>
    
     
  
      
       
       </form>
	  <div class="clear"></div>	
	</div>		

	<p class="footer">Mixvial Ltda</div>

			

</body>
</html>

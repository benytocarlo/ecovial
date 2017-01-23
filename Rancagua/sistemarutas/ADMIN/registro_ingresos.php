<?php include("conexion.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include("conexion.php"); 
$sqlcount="SELECT * FROM ingreso_petroleo ORDER BY id DESC LIMIT 1";
 $result = mysql_query($sqlcount); 
         while($row = mysql_fetch_row($result))
                                {
                               $vale=$row[0] + 1;
                                }
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Pesaje</title>

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
    
    	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar.js"></script>
    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK></head>
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
			<span class="Estilo1">Registro Interno de Petroleo</span>
			<fieldset>
				<legend></legend>
                </fieldset>
		<form action="registro_ingresos2.php" method="post" id="form">
		  <table width="" height="357" align="center">
 <tr>
                        <td colspan="3"><p><strong>Nro. Vale</strong></p>
                          <p>
                            <input name="vale" type="text" id="vale" value="<? echo $vale; ?>" readonly="readonly"/>
                        </p></td>
</tr>
 
                      <tr>
                        <td><strong>Item</strong></td>
                        <td colspan="2"><select name="item" id="item">
                          <option value="">Elija una Opci&oacute;n</option>
                          <option value="Planta">Planta</option>
                          <option value="Transporte">Transporte</option>
                          <option value="Equipo Asfalto">Equipo de Asfalto</option>
                        </select></td>
                      </tr>
                       <tr>
                        <td><strong>Recursos de Planta</strong></td>
                        <td colspan="2"><select name="r_planta" id="r_planta">
                       <option value="">Elija una Opci&oacute;n</option>
                       <option value="Caldera Rancagua">Caldera</option>
                          <option value="Cargador Frontal Rancagua">Cargador Frontal</option>
                          <option value="Generador Rancagua">Generador</option>
                            <option value="Limpieza Rancagua">Limpieza</option><br />
                          <option value="Planta Rancagua">Quemador Planta</option>
                        <option value="Quemador Rancagua">Quemador Portatil</option>
                        	<option value="Secador Rancagua">Secador</option>
                            <option value="Generador Planta Movil">Generador Planta Móvil</option>
                         </select></td>
                      </tr>
                        <tr>
                        <td><strong>Patente / Transporte</strong></td>
                        <td colspan="2"><select name="patente" id="patente">
                          <option value="">Elija una Opci&oacute;n</option>
       <? $sql ="SELECT * FROM camiones where patente != '' ORDER BY  patente ASC ";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                { ?>
                  <option value="<? echo $row[2]; ?>"> <? echo $row[2]; ?></option>
                  <?}?>
                        </select></td>
            </tr>
                        <tr>
                          <td><strong>Equipo de Asfalto</strong></td>
                          <td colspan="2"><select name="e_asfalto" id="e_asfalto">
                            <option value="">Elija una Opci&oacute;n</option>
                    <? $sql ="SELECT * FROM equipo where equipo != '' ORDER BY  equipo ASC ";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                { ?>
                            <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                            <?}?>
                          </select></td>
                        </tr>
                      <tr>
                        <td width="204"><strong>Producto</strong></td>
                       <td colspan="2"><select name="producto" id="producto">
                        <option value="Petroleo">Petroleo Diesel</option>
                       </select></td>
            </tr>
                      <tr>
                        <td><strong>Chofer/Operador</strong></td>
                        <td colspan="2"><select name="chofer" id="chofer">
                          <option value="">Elija una Opci&oacute;n</option>
               <? $sql ="SELECT DISTINCT nombre FROM chofer ORDER BY nombre ASC";
					echo $sql;
						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                          <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
                          <?}?>
                        </select></td>
                      </tr>
                      <tr>
                        <td><strong>Litros</strong></td>
                        <td colspan="2"><input type="text" name="litros" id="litros" /></td>
          </tr>
                      <tr>
                        <td><strong>Od&oacute;metro/Hor&oacute;metro</strong></td>
                        <td colspan="2"><input type="text" name="odo" id="odo" /></td>
                      </tr>
                      <tr>
                        <td><strong>Cliente</strong></td>
                        <td colspan="2"><select name="cliente" id="cliente">
                          <option value="">Elija una Opci&oacute;n</option>
                          <?$sql ="SELECT * FROM cliente order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                          <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                          <?}?>
                        </select></td>
                      </tr>
                     <tr>
                        <td><strong>Obra</strong></td>
                        <td colspan="2"><select name="obra" id="obra">
                          <option value="">Elija una Opci&oacute;n</option>
                          <?$sql ="SELECT * FROM obra order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                          <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                          <?}?>
                        </select></td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="centro"/></td>
   <td colspan="2"><input type="submit" name="send" class="formbutton" value="Guardar" /></td>
                      </tr>
                    </table>
	  </form>
	<fieldset>
	</fieldset>
		  </div>
	  <div class="clear"></div>	
	</div>		

	<p class="footer"></p>
</div>

			

</body>
</html>

<!DOCTYPE html lang="es">
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Constructora Rutas</title>
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link href="http://www.constructorarutas.cl/wp-content/uploads/2016/07/favicon-rutas.png" rel="shortcut icon" /> 
        <!-- END Icons -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">
        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- END Side Overlay -->
            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                            <div class="btn-group pull-right">
                                <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                                    <i class="si si-drop"></i>
                                </button>
                            </div>
                            <img src="http://www.constructorarutas.cl/wp-content/uploads/2016/07/LOGO-RUTAS-blanco_1a-2-05.png" width="150" style="padding-bottom:15px;">
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content">
                            <?php include("menu.php"); ?>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- END Header Navigation Right -->
				
                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                </ul>
				<ul class="nav-header pull-right">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <a href="dashboard.php" class="btn btn-sm btn-success enviar"><i class="fa fa-plus push-5-r"></i> Ir al Dashboard</a>

                    </li>
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->
            <!-- Main Container -->
            <main id="main-container" style="margin-top:60px;">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-12"><h1 class="page-heading"> Informe Detalle por Obra </h1>
                        </div>
                    </div>
                </div>
				<div class="content bg-white border-b">
                    <div class="row items-push text-uppercase">
                        <div class="col-xs-12 col-sm-12">
                            <div class="font-w700 text-gray-darker animated fadeIn">Obra</div>
                            <a class="h4 font-w700 text-primary animated flipInX" href="javascript:void(0)">
                            	<?php 
									$origen = $_POST["origen"];
									$idobra = $_POST["obra"]; 
									if($origen=="curico"){
										include("config_curico.php");
									}
									if($origen=="rancagua"){
										include("config_rancagua.php");
									}
									$sql ="SELECT * FROM obra where id='".$idobra."'";
								    $result = mysql_query($sql); 
								    while($row = mysql_fetch_row($result))
								    {
										echo $row[1];
									}
							    ?>
								
								
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Desde</div>
                            <a class="h4 font-w700 text-primary animated flipInX" href="javascript:void(0)"><?php echo $_POST["fechainicio"]; ?></a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Hasta</div>
                            <a class="h4 font-w700 text-primary animated flipInX" href="javascript:void(0)"><?php echo $_POST["fechatermino"]; ?></a>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row"></div>
                    <div class="row">
                      <div class="col-lg-12">
                          <!-- Header BG Table -->
                          <div class="block">
                                <div class="block-header">
                                    <h3 class="block-title">Detalle de Mezclas</h3>
                                </div>
                                <div class="block-content" style="padding:0px">
									<div class="table-responsive">
                                    <table class="table table-striped table-borderless table-header-bg">
                                        <thead>
                                            <tr>
                                                <th class="text-left" style="width: 15%;">Nº Guia</th>
	                                                 <th class="text-left" style="width: 15%;">Cant</th>
	                                                 <th class="text-left" style="width: 15%;">$$</th>
                                                <th class="text-left" style="width: 15%;">Patente</th>
												<th class="text-left" style="width: 15%;">Fecha</th>
												<th class="text-left" style="width: 15%;">Producto Comprado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											$obra  = $_POST["obra"];
											$fecha_inicio  = $_POST["fechainicio"];
											$fecha_final = $_POST["fechatermino"];
										   $sql2="select * from transportista tra,  pesaje ing_or   ,camiones cam where ing_or.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and ing_or.obra=".$obra." and ing_or.transportista=tra.id and ing_or.patente=cam.id and ing_or.nula!='si' order by ing_or.fecha_hora";


								   		//echo $sql2;
								   			$sumacantidad=0;
								   		  $sumatotal=0;
								   		  $entro1="no";
								   		  $result2 = mysql_query($sql2); 
				   						while($row = mysql_fetch_row($result2))
				   						{
				   							$guia=$row[2];
				   							$n_orden=$row[12];
				   							$fletero=$row[1];
				   							$fecha=$row[6];	
				   							$patente=$row[19];
				   							$tipo_mezcla=$row[15];
				   							$partidacontrol=$row[16];	
	
				   							$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$guia."' and ml.id=dp.producto order by dp.guia asc";
				   							//		echo $sql2list;
				   							$result2li = mysql_query($sql2list); 
				   							while($row = mysql_fetch_row($result2li))
				   							{
				   								if($tipo_mezcla=="emulsion" || $tipo_mezcla=="combustible")
				   								{
				   									if($tipo_mezcla=="emulsion")
				   										{
				   										$entro1="si";
				   										}
				   									if($tipo_mezcla=="combustible")
				   										{
				   										$entro2="si";
				   										}
				   								}
				   								else{
				   									$producto=$row[2];
				   									$cantidad=$row[6];
				   									$precio=$row[7];
				   									$total=$cantidad*$precio;
				   									$sumacantidad=$sumacantidad+$cantidad ;
				   									echo "<tr>";
				   									echo "<td>".$guia."</td>";
				   									echo "<td>".$cantidad."</td>";
				   									echo "<td>".number_format($precio, 0, '', '.')."</td>";
				   									echo "<td>".$patente."</td>";
				   									echo "<td>".$fecha."</td>";
				   									echo "<td>".$producto."</td>";
				   									echo "</tr>";
				   								}
				   							}
				   						}
										?>
							              <tr style="background-color: #a74343;color: white;font-weight: bold;">
							                <td>Total</td>
							                <td><p><?php echo $sumacantidad; ?></p></td>
							                <td>&nbsp;</td>
							                <td>&nbsp;</td>
							                <td>&nbsp;</td>
											<td>&nbsp;</td>
							              </tr>
                                        </tbody>
                                    </table>
									</div>
                                </div>
                            </div>
                            <!-- END Header BG Table -->
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                          <!-- Header BG Table -->
                          <div class="block">
                                <div class="block-header">
                                    <h3 class="block-title">Detalle de Emulsiones</h3>
                                </div>
                                <div class="block-content" style="padding:0px">
									<div class="table-responsive">
                                    <table class="table table-striped table-borderless table-header-bg">
                                        <thead>
                                            <tr>
                                                <th class="text-left" style="width: 15%;">Nº Guia</th>
	                                             <th class="text-left" style="width: 15%;">Cant</th>
	                                                 <th class="text-left" style="width: 15%;">$$</th>
                                                <th class="text-left" style="width: 15%;">Patente</th>
												<th class="text-left" style="width: 15%;">Fecha</th>
												<th class="text-left" style="width: 15%;">Producto Comprado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											$obra  = $_POST["obra"];
											$fecha_inicio  = $_POST["fechainicio"];
											$fecha_final = $_POST["fechatermino"];
										   $sql22="select * from transportista tra,  pesaje ing_or   ,camiones cam where ing_or.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and ing_or.obra=".$obra." and ing_or.transportista=tra.id and ing_or.patente=cam.id and ing_or.nula!='si' and ing_or.tipo_guia='emulsion' order by tra.id asc";
										   		 $sumacantidad=0;
										   		  $sumatotal=0;
										   		  $result2 = mysql_query($sql22); 
										   						while($row = mysql_fetch_row($result2))
										   						{
										   							$guia=$row[2];
										   							$n_orden=$row[12];
										   							$fletero=$row[1];
										   							$fecha=$row[6];	
										   							$patente=$row[19];
										   							$tipo_mezcla=$row[15];
										   							$partidacontrol=$row[14];
										   							$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$guia."' and ml.id=dp.producto order by dp.guia asc";
									
										   							$result2li = mysql_query($sql2list); 
										   							while($row = mysql_fetch_row($result2li))
										   							{
								
										   									$producto=$row[2];
										   									$cantidad=$row[6];
										   									$precio=$row[7];
										   									$total=$cantidad*$precio;
										   									$sumacantidad=$sumacantidad+$cantidad ;
										   									echo "<tr>";
										   									echo "<td height='24'>".$guia."</td>";
										   									echo "<td>".$cantidad."</td>";
										   									echo "<td>".number_format($precio, 0, '', '.')."</td>";
										   									echo "<td>".$patente."</td>";
										   									echo "<td>".$fecha."</td>";
										   									echo "<td>".$producto."</td>";
										   									echo "</tr>";
							
										   							}
										   						}
										?>
							            <tr style="background-color: #a74343;color: white;font-weight: bold;">
							              <td>Total</td>
							              <td><p><?php echo $sumacantidad; ?></p></td>
							              <td>&nbsp;</td>
							              <td>&nbsp;</td>
							              <td>&nbsp;</td>
										  <td>&nbsp;</td>
							            </tr>
                                        </tbody>
                                    </table>
									</div>
                                </div>
                            </div>
                            <!-- END Header BG Table -->
                        </div>
                    </div>
		             <?php if($entro2=="si") { ?>
	                     <div class="row">
	                       <div class="col-lg-12">
	                           <!-- Header BG Table -->
	                           <div class="block">
	                                 <div class="block-header">
	                                     <h3 class="block-title">Detalle de Combustible</h3>
	                                 </div>
	                                 <div class="block-content" style="padding:0px">
										 <div class="table-responsive">
	                                     <table class="table table-striped table-borderless table-header-bg">
	                                         <thead>
	                                             <tr>
	                                                 <th class="text-left" style="width: 15%;">Nº Guia</th>
	                                                 <th class="text-left" style="width: 15%;">Cant</th>
	                                                 <th class="text-left" style="width: 15%;">$$</th>
	                                                 <th class="text-left" style="width: 15%;">Patente</th>
	 												<th class="text-left" style="width: 15%;">Fecha</th>
	 												<th class="text-left" style="width: 15%;">Producto Comprado</th>
	                                             </tr>
	                                         </thead>
	                                         <tbody>
	 										<?php
	 											$obra  = $_POST["obra"];
	 											$fecha_inicio  = $_POST["fechainicio"];
	 											$fecha_final = $_POST["fechatermino"];
											   $sql23="select * from transportista tra,  pesaje ing_or   ,camiones cam where ing_or.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and ing_or.obra=".$obra." and ing_or.transportista=tra.id and ing_or.patente=cam.id and ing_or.nula!='si' and ing_or.tipo_guia='combustible' order by tra.id asc";
											   		 $sumacantidad=0;
											   		  $sumatotal=0;
											   		  $result2 = mysql_query($sql23); 
											   						while($row = mysql_fetch_row($result2))
											   						{
											   							$guia=$row[2];
											   							$n_orden=$row[12];
											   							$fletero=$row[1];
											   							$fecha=$row[6];	
											   							$patente=$row[19];
											   							$tipo_mezcla=$row[15];
											   							$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$guia."' and ml.id=dp.producto order by dp.guia asc";
									
											   							$result2li = mysql_query($sql2list); 
											   							while($row = mysql_fetch_row($result2li))
											   							{
								
											   									$producto=$row[2];
											   									$cantidad=$row[6];
											   									$precio=$row[7];
											   									$total=$cantidad*$precio;
											   									$sumacantidad=$sumacantidad+$cantidad ;
											   									echo "<tr>";
											   									echo "<td height='24'>".$guia."</td>";
											   									echo "<td>".$cantidad."</td>";
											   									echo "<td>".number_format($precio, 0, '', '.')."</td>";
											   									echo "<td>".$patente."</td>";
											   									echo "<td>".$fecha."</td>";
											   									echo "<td>".$producto."</td>";
											   									echo "</tr>";
							
											   							}
											   						}
	 										?>
								            <tr style="background-color: #a74343;color: white;font-weight: bold;">
								              <td>Total</td>
								              <td><p><?php echo $sumacantidad; ?></p></td>
								              <td>&nbsp;</td>
								              <td>&nbsp;</td>
								              <td>&nbsp;</td>
											  <td>&nbsp;</td>
								            </tr>
	                                         </tbody>
	                                     </table>
									 	</div>
	                                 </div>
	                             </div>
	                             <!-- END Header BG Table -->
	                         </div>
	                     </div>
				     <?php } ?>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

			            <!-- Footer -->
			            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
			                <div class="pull-left">
			                    <a class="font-w600" href="javascript:void(0)" target="_blank">Constructora Rutas</a> &copy; <span class="">2017</span>
			                </div>
			            </footer>
			            <!-- END Footer -->
			        </div>
			        <!-- END Page Container -->
			        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
			        <script src="assets/js/core/jquery.min.js"></script>
			        <script src="assets/js/core/bootstrap.min.js"></script>
			        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
			        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
			        <script src="assets/js/core/jquery.placeholder.min.js"></script>
					<script src="assets/js/app.js"></script>
			    </body>
			</html>
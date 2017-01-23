<?php if($_POST["origen"]=="sumatotal"){ 
	
} else { ?>
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
        	<?php 
				$origen = $_POST["origen"];
				if($origen=="curico"){
					include("config_curico.php");
				}
				if($origen=="rancagua"){
					include("config_rancagua.php");
				}
		    ?>
            <!-- Main Container -->
            <main id="main-container" style="margin-top:60px;">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-12"><h1 class="page-heading">Informe General</h1>
                        </div>
                    </div>
                </div>
				<div class="content bg-white border-b">
                    <div class="row items-push text-uppercase">
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
                                    <h3 class="block-title">Ventas</h3>
                                </div>
                                <div class="block-content">
                                    <table class="table table-striped table-borderless table-header-bg">
                                        <thead>
                                            <tr>
                                                <th class="text-left" style="width: 15%;">Producto</th>
                                                <th class="text-right" style="width: 15%;">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												$igual=0;
												
												$fecha_inicio  = $_POST["fechainicio"];
												$fecha_final = $_POST["fechatermino"];
												
												$sql2="select *,SUM(dp.litros)AS Total from pesaje pe ,detalle_pesaje dp where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.nula!='si' and pe.id=dp.guia and pe.tipo_guia!='servicio' group by dp.producto";
												//echo $sql2;
							            		$result2 = mysql_query($sql2); 
												while($row = mysql_fetch_row($result2))
												{
													$guia=$row[0];
													$cantidad=$row[20];
													$mezcla=$row[16];
													$sql2m="select * from mezclas where id='$mezcla'";
						           						$result2m = mysql_query($sql2m); 
														while($row = mysql_fetch_row($result2m))
														{
															$nombre_mezcla=$row[2];
															$tipo_me=$row[1];
														}
														if($tipo_me=="Emulsion" || $tipo_me=="Otro")
														{
															echo "<tr>";
															echo "<td class='text-left'>".$nombre_mezcla."</td>";
															echo "<td class='text-right''>".$cantidad."  Lts</td>";
															echo "</tr>";
														}else{
															echo "<tr>";
															echo "<td class='text-left'>".$nombre_mezcla."</td>";
															echo "<td class='text-right''>".$cantidad."  M3</td>";
															echo "</tr>";
														}
												}
											?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END Header BG Table -->
                        </div>
						
                        <div class="col-lg-12">
                            <!-- Header BG Table -->
                            <div class="block">
                                  <div class="block-header">
                                      <h3 class="block-title">Suministro de Petróleo en Planta</h3>
                                  </div>
                                  <div class="block-content">
                                      <table class="table table-striped table-borderless table-header-bg">
                                          <thead>
                                              <tr>
                                                  <th class="text-left" style="width: 15%;">Item</th>
                                                  <th class="text-right" style="width: 15%;">Litros</th>
                                              </tr>
                                          </thead>
                                          <tbody>
											  <?php
									  		$totalito=0;
									  		$cant=0;
									  		$full=0;
									  		$full_2=0;
									  		$sql22="select *,sum(litros) AS lt_pt from ingreso_petroleo  where fecha  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' group by item";
									  						 $result22 = mysql_query($sql22); 
									             			while($row = mysql_fetch_row($result22))
						
									  						{
									  							$item=$row[3];
									  							$lt_pt=$row[13];
									  							$totalito=$totalito+$lt_pt;
							
									  						echo "<tr>";
									  									echo "<td class='text-left'>".$item." </td>";
									  									echo "<td class='text-right'>".$lt_pt."</td>";
									  									echo "</tr>";
									  						}
											  ?>
											  <tr style="background-color: #a74343;color: white;font-weight: bold;">
											    <td class='text-left'><strong>Total:</strong></td>
											    <td class='text-right'><? echo $totalito; ?></td>
											   </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                              <!-- END Header BG Table -->
                          </div>
						  
	                      <div class="col-lg-12">
	                          <!-- Header BG Table -->
	                          <div class="block">
	                                <div class="block-header">
	                                    <h3 class="block-title">Ingresos</h3>
	                                </div>
	                                <div class="block-content">
                                      <table class="table table-striped table-borderless table-header-bg">
                                          <thead>
                                              <tr>
                                                  <th class="text-left" style="width: 15%;">Producto</th>
                                                  <th class="text-right" style="width: 15%;">Total</th>
                                              </tr>
                                          </thead>
                                          <tbody>
											  <?php
											  	
								  			$igual=0;
								  			$sql23="select *,SUM(dp.cantidad_total) AS Total from materias pe ,ingreso_materias dp where dp.fecha_guia  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.id=dp.materia  group by dp.materia";
								  			$result23= mysql_query($sql23); 
								  						while($row = mysql_fetch_row($result23))
								  						{
								  							$guia=$row[0];
								  							$cantidad=$row[21];
								  							$nombre_mezcla=$row[1];
							
								  									echo "<tr>";
								  									echo "<td class='text-left'>".$nombre_mezcla." </td>";
								  									echo "<td class='text-right'>".$cantidad."</td>";
								  									echo "</tr>";
					
							
								  						}
														
											  ?>
                                          
                                          </tbody>
                                      </table>
	                                </div>
	                            </div>
	                            <!-- END Header BG Table -->
	                        </div>
							
	                        <div class="col-lg-12">
	                            <!-- Header BG Table -->
	                            <div class="block">
	                                  <div class="block-header">
	                                      <h3 class="block-title">Servicio</h3>
	                                  </div>
	                                  <div class="block-content">
	                                      <table class="table table-striped table-borderless table-header-bg">
	                                          <thead>
	                                              <tr>
	                                                  <th class="text-left" style="width: 15%;">Producto</th>
	                                                  <th class="text-right" style="width: 15%;">Total</th>
	                                              </tr>
	                                          </thead>
	                                          <tbody>
	                                              
												  <?php
									  			$igual=0;
									  			$sql2="select *,SUM(dp.litros) AS Total from pesaje pe ,detalle_pesaje dp where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.nula!='si' and pe.id=dp.guia and pe.tipo_guia='servicio' group by dp.producto";
									              $result2 = mysql_query($sql2); 
									  						while($row = mysql_fetch_row($result2))
									  						{
									  							$guia=$row[0];
									  							$cantidad=$row[20];
									  							$mezcla=$row[16];
									  									echo "<tr>";
									  									echo "<td class='text-left'>".$mezcla." </td>";
									  									echo "<td class='text-right'>".$cantidad." M3</td>";
									  									echo "</tr>";
									  							$full=$litros*$precio;
									  						}
												  ?>
                                            
	                                          </tbody>
	                                      </table>
	                                  </div>
	                              </div>
	                              <!-- END Header BG Table -->
	                          </div>
                    </div>
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
			<?php } ?>
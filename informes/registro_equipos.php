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
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-image overflow-hidden" style="background-image: url('assets/img/photos/fresadora_rutas_2a-1.png');">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn sombra">Registro Constructora Rutas</h1>
                        <h2 class="h5 text-white-op animated zoomIn"> </h2>
                    </div>
                </div>
                <!-- END Page Header -->
				<?php include("config.php"); ?>
                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-primary">
                                    <h3 class="block-title">Registro Report Equipos Constructora Rutas</h3>
                                </div>
                                <div class="block-content">
                                    <form action="" class="form-horizontal push-5-t" id="formulario" name="formulario" method="POST">
                                        <div class="col-lg-12">
											<div class="alert alert-success alert-dismissable exito" style="display:none">
	                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                                        <h3 class="font-w300 push-15">Exito</h3>
	                                        <p>Registro insertado correctamente.</p>
	                                    	</div>
                                            <div class="form-group">
                                                <label class="col-xs-12" for="register1-username">Operador</label>
                                                <div class="col-xs-12">
                                                    <select class="form-control"  id="operador" name="operador">
															<option value="">Seleccionar Operador</option>
															<?php

   			
																$result=mysql_query("select operador from mant_maqtra where operador!=' ' order by operador asc",$conexion);
	
																while($row = mysql_fetch_array($result))
																{
																 if(!$row[0]==""){
																	printf("<option value='%s'>%s</option>",$row["0"] , $row["0"]);
													   			}
																}
													   			mysql_free_result($result);
															?>
													</select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12" for="register1-username">Equipo</label>
												<div class="col-xs-12">
                                                <select class="form-control"  id="equipo" name="equipo">
														<option value="">Seleccionar Equipo</option>
														<?php
														$result=mysql_query("select equipo from mant_maqtra where equipo!=' ' order by equipo asc",$conexion);
	
														while($row = mysql_fetch_array($result))
														{
														 if(!$row[0]==""){
															printf("<option value='%s'>%s</option>",$row["0"] , $row["0"]);
											   			}
														}
											   			mysql_free_result($result);
														?>
												</select>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12" for="register1-username">Total Horas</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="number" id="totalhoras" name="totalhoras" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12" for="register1-username">Hora Término: (Horometro)</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" id="horatermino" name="horatermino" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12" for="register1-username">Obra</label>
                                                <div class="col-xs-12">
                                                   <select class="form-control"  id="obra" name="obra">
														<option value="">Seleccionar Obra</option>
														<?php
														
														$result=mysql_query("select obra from mant_maqtra where obra!=' ' order by obra asc",$conexion);

														while($row = mysql_fetch_array($result))
														{
														 if(!$row[0]==""){
															printf("<option value='%s'>%s</option>",$row["0"] , $row["0"]);
											   			}
														}
											   			mysql_free_result($result);
														
														?>
												</select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-xs-12">
												<input type="hidden" name="action" id="action" value="equipo">
                                                <button class="btn btn-sm btn-success enviar" type="submit"><i class="fa fa-plus push-5-r"></i> Insertar Registro</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Bootstrap Register -->
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
		<script src="assets/js/core/jquery.validate.min.js"></script>
		<script src="assets/js/app.js"></script>
        <script type="text/javascript">
           $(document).ready(function($) {
            
              $( ".enviarform" ).click(function() {
                 $("#formulario").submit();
  			   /*
                 $(".enviarform").fadeOut();
                     $(".inputform").fadeOut();
                     $(".exito").fadeIn();
  			   */
              });
            
               $("#formulario").validate({
                 rules: {
                   operador  : { required: true},
                   equipo     : { required: true},
                   totalhoras   : { required: true},
				   horatermino   : { required: true},
				   obra  : { required: true}
					 
                 },
                 messages: {
                   operador  : { required:'Campo Obligatorio' },
                   equipo     : { required:'Campo Obligatorio' },
                   totalhoras   : { required:'Campo Obligatorio' },
				   horatermino   : { required:'Campo Obligatorio' },
				   obra   : { required:'Campo Obligatorio' }
                 },submitHandler: function() {
				   $(".enviar").fadeOut();
                   var data = {
                     formulario: $('#formulario').serialize()
                   };
                   var ajaxurl = "save_datos.php";
                   $.post(ajaxurl, data, function(rsp){
					 $('#formulario')[0].reset();
					 $( ".exito" ).fadeIn( 2000, function() {
					     $(".enviar").fadeIn();
						 $(".exito").fadeOut(4000);
					 });
                   });
                 }
               });
           });
        </script>
    </body>
</html>
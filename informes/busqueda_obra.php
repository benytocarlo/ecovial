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
                        <h1 class="h2 text-white animated zoomIn sombra">Informes Constructora Rutas</h1>
                        <h2 class="h5 text-white-op animated zoomIn"> </h2>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-success">
                                    <h3 class="block-title">Informe Detalle por Obras</h3>
                                </div>
                                <div class="block-content">
                                    <form class="form-horizontal push-5-t" action="informe_obra.php" method="post">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="col-xs-12" for="register1-username">Origen de Datos</label>
                                                <div class="col-xs-12">
                                                    <select class="form-control"  id="origen" name="origen">
														<option value="">Seleccionar Origen</option>
														<option value="rancagua">Rancagua</option>
														<option value="curico">Curico</option>
														<option value="sumatotal">Suma Total</option>
													</select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12" for="register1-username">Obra</label>
                                                <div class="col-xs-12">
                                                    <select class="form-control"  id="obra" name="obra">
														<option value="">Seleccionar Obra</option>
													</select>
                                                </div>
                                            </div>
 										  	<div class="form-group">
                                                <label class="col-xs-12" for="register1-username">Fecha Inicio</label>
                                                <div class="col-xs-12">
                                                    <input class="js-datepicker form-control" type="text" id="fechainicio" name="fechainicio" data-date-format="yyyy-mm-dd" placeholder="yy-mm-dd">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-12" for="register1-username">Fecha Termino</label>
                                                <div class="col-xs-12">
                                                     <input class="js-datepicker form-control" type="text" id="fechatermino" name="fechatermino" data-date-format="yyyy-mm-dd" placeholder="yy-mm-dd">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-plus push-5-r"></i> Generar Informe</button>
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
					<script src="assets/js/app.js"></script>
				    <script src="assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		            <script src="assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
		            <script src="assets/js/plugins/select2/select2.full.min.js"></script>
				    <script>
		               $(function () {
		                   // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
		                   App.initHelpers(['datepicker', 'colorpicker', 'select2']);
		               });
		           </script>
  		           <script type="text/javascript">
  		            $(document).ready(function($) {
  		               $( "#origen" ).change(function() {
						  var valor = $(this).find(":selected").val();
	                      var data = {
	                        action: valor
	                      };
	                      var ajaxurl = "getobras.php";
	                      $.post(ajaxurl, data, function(rsp){
							  $('#obra').html(rsp);
	   					 });
  		               });
					});
					</script>
			    </body>
			</html>
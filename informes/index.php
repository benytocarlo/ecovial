<?php if($_GET["logout"]=="true"){
	$_SESSION["tipo"]="";
}?>
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
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
		<style>
		body{ background-color:#0081ab;}
		</style>
    </head>
    <body>
        <!-- Login Content -->
        <div class="content overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <!-- Login Block -->
                    <div class="block block-themed animated fadeIn">
                        <div class="block-header bg-primary">
                            <h3 class="block-title">Ingreso Sistema de Informes</h3>
                        </div>
                        <div class="block-content block-content-full block-content-narrow">
                            <!-- Login Title -->
                            <h1 class="h2 font-w600 push-30-t push-5"></h1>
                            <p>
								<div class="form-group"><img src="http://www.constructorarutas.cl/wp-content/uploads/2016/07/LOGO-RUTAS-FINAL_2a-2-03.png" width="100" style="margin:0 auto;margin-left: 100px;/* height: 200px; */float: left;width: 100px;"></div></p>
                            <!-- END Login Title -->

                            <!-- Login Form -->
                            <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
							<form action="" class="js-validation-login form-horizontal push-30-t push-50" id="formulario" name="formulario" method="POST">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="text" id="username" name="username">
                                            <label for="username">Usuario</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="password" id="password" name="password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <button class="btn btn-block btn-yellow" style="background-color: #edcd21;" type="submit"> Iniciar Sessión</button>
                                    </div>
                                </div>
								<div class="form-group">
									<div class="alert alert-success alert-dismissable exito" style="display:none">
	                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                                <h3 class="font-w300 push-15">Exito</h3>
	                                <p>Inicio de Sessón Correcto.</p>
	                            	</div>
									
									<div class="alert alert-danger alert-dismissable fracaso" style="display:none">
	                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                                <h3 class="font-w300 push-15">Error</h3>
	                                <p>Los datos no corresponden, intente nuevamente.</p>
	                            	</div>
								</div>
                            </form>
                            <!-- END Login Form -->
                        </div>
                    </div>
                    <!-- END Login Block -->
                </div>
            </div>
        </div>
        <!-- END Login Content -->

        <!-- Login Footer -->
        <div class="push-10-t text-center animated fadeInUp">
            <small class="text-muted font-w600" style="color:white !important"><span class="js-year">2017</span> &copy; Constructura Rutas</small>
        </div>
        <!-- END Login Footer -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
		<script src="assets/js/core/jquery.validate.min.js"></script>
		<script src="assets/js/app.js"></script>
        <script type="text/javascript">
           $(document).ready(function($) {
            
               $("#formulario").validate({
	               errorClass: 'help-block text-right animated fadeInDown',
	               errorElement: 'div',
	               errorPlacement: function(error, e) {
	                   jQuery(e).parents('.form-group .form-material').append(error);
	               },
	               highlight: function(e) {
	                   jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
	                   jQuery(e).closest('.help-block').remove();
	               },
	               success: function(e) {
	                   jQuery(e).closest('.form-group').removeClass('has-error');
	                   jQuery(e).closest('.help-block').remove();
	               },
	               rules: {
	                   'username': {
	                       required: true,
	                       minlength: 3
	                   },
	                   'password': {
	                       required: true,
	                       minlength: 5
	                   }
	               },
	               messages: {
	                   'username': {
	                       required: 'Ingresa tu Usuario',
	                       minlength: 'Tu nombre de usuario debe consistir de al menos 3 caracteres'
	                   },
	                   'password': {
	                       required: 'Proporcione una contraseña',
	                       minlength: 'Tu contraseña debe tener al menos 5 caracteres de longitud'
	                   }
	               },submitHandler: function() {
				   $(".enviar").fadeOut();
                   var data = {
					   formulario: $('#formulario').serialize()
                   };
                   var ajaxurl = "getuser.php";
                   $.post(ajaxurl, data, function(rsp){
					   if(rsp=="correcto"){
	  					 $( ".exito" ).fadeIn( 2000, function() {
	  					     $(".enviar").fadeIn();
	  						 $(".exito").fadeOut(4000);
							 location.href = "dashboard.php";
	  					 });
					   } else{
  	  					 $( ".fracaso" ).fadeIn( 2000, function() {
  	  					     $(".enviar").fadeIn();
  	  						 $(".fracaso").fadeOut(4000);
  	  					 });
					   }
                   });
                 }
               });
           });
        </script>
    </body>
</html>
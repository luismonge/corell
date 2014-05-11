<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<title>Sistema de control de llamadas</title>	
		
		<!-- bootstrap -->
		<link href="<?php echo base_url('/public/css/bootstrap/bootstrap.min.css'); ?> " rel="stylesheet" type="text/css" />	
		<link href="<?php echo base_url('/public/css/bootstrap/bootstrap.css'); ?> " rel="stylesheet" type="text/css" />
		
		<!--    -->
		<link href="<?php echo base_url('/public/css/main_css.css'); ?> " rel="stylesheet" type="text/css" />
		
		

		<!--Popup -->
		<link href="<?php echo base_url('/public/css/popup/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="<?php echo base_url('/public/js/jquery.min.js') ?>"> </script>
		<script type="text/javascript" src="<?php echo base_url('/public/js/popup/script.js'); ?>"></script>
			
	</head>

	<body>
		<div id="page">			
			<div id="menu">			
				<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					<!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" id="home" href="#">Sistema control de llamadas</a>								
						</div>
						<div class="navbar-collapse collapse" style="height: 1px;">
							<ul class="nav pull-right">
								<a class="navbar-brand topopup" href="#">Iniciar Sesión</a>
                    		</ul>
						</div>															
					</div>
				</div>
			</div>
			
			<div id="toPopup">

				<div class="close"></div>
				<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
				<div id="popup_content">
					<!--your content start-->
					<?php echo validation_errors(); ?>
					<?php echo form_open('login/verify_login') ?>
					
					<form role="form">
						<div class="form-group">
							<label for="username">Nombre de usuario</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Ingrese nombre de usuario">
						</div>
						<div class="form-group">
							<label for="Password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>			
						<button type="submit" class="btn btn-primary">
							Iniciar Sesión
						</button>
					</form>

				</div>
				<!--your content end-->			

			</div>
			<!--toPopup end-->

			<div class="loader"></div>
			<div id="backgroundPopup"></div>
			
			<div id="header">
				<div id="image">
					
				</div>
			</div>
			
			<div id="content">
				<div id="main_content_admin">
					<div id="main_image">
						<h1>Sistema de control y registro de llamadas ITH</h1>
					</div>	
					
				</div>
			</div>
			<div id="footer">
				<div id="footer_image">
					<img src="<?php echo base_url('/public/images/logo2_armabit.png'); ?> ">
				</div>
				<p>
					Integrantes del equipo: <br/>
					Carlos Humberto Lopez Carrillo<br/>
					Martin Francisco Martinez Federico<br/>
					Luis Carlos Monge Castro<br/>
					Rene Gael Rivera Mendoza<br/>
					Manuel Armando Sierra Fimbres
				</p>
			</div>
		</div>
	</body>
    
	<script src="<?php echo base_url('/public/js/bootstrap/bootstrap.min.js'); ?>"></script>
</html>

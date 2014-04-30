<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sistema de control de llamadas</title>	
		
		<!-- bootstrap -->
		<link href="<?php echo base_url('/public/css/bootstrap/bootstrap.min.css') ?> " rel="stylesheet" type="text/css" />	
		<link href="<?php echo base_url('/public/css/bootstrap/bootstrap.css') ?> " rel="stylesheet" type="text/css" />
		
		<!--    -->
		<link href="<?php echo base_url('/public/css/main_css.css') ?> " rel="stylesheet" type="text/css" />
		
		<!--Popup -->
		<link href="<?php echo base_url('/public/css/popup/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="<?php echo base_url('/public/js/jquery.min.js') ?>"> </script>
		<script type="text/javascript" src="<?php echo base_url('/public/js/popup/script.js') ?>"></script>
		
		<!-- Recargar una parte de la pag -->
		<script type="text/javascript" src="<?php echo base_url('/public/js/reload.js') ?>"></script>	
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
							<a class="navbar-brand" id="home" href="<?= site_url('admin/home'); ?>">
								Administrador
						    </a>
						</div>
						<div class="navbar-collapse collapse" style="height: 1px;">
							<ul id="nav" class="nav navbar-nav" >									
									<li class="list">
											<a href="<?= site_url('admin_user/crud_user_controller/read_users'); ?>"> Usuarios</a>
									</li>
									<li class="list">
											<a href="<?= site_url('admin_calls/call_controller/read_calls'); ?>"> Llamadas</a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Tarifas <b class="caret"></b> </a>
										<ul id= "feeID" class="dropdown-menu">
											<li>
												<a href="<?= site_url( 'admin_fee/fee_controller/readFees' ); ?>" >Ver Tarifas</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="<?= site_url( 'admin_fee/fee_controller/modifiedFees' ); ?>" >Modificar Tarifas</a>
											</li>
										</ul> 
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Extensiones <b class="caret"></b> </a>
										<ul id = "extensionID" class="dropdown-menu">
											<li>
												<a href="<?= site_url( 'admin_ext/extension_controller/insert' ); ?>" >Agregar Extension</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="Extensiones/ModificarExtension.php">Modificar Extension</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="<?= site_url( 'admin_ext/extension_controller/deleteExtension' ); ?>" >Eliminar Extension</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="<?= site_url( 'admin_ext/extension_controller/readExtension' ); ?>" >Ver Extension</a>
											</li>
										</ul>
									</li>
									<li class="list">
										<a href="<?= site_url('/admin_graphics/crud_graphics_controller'); ?>"> Graficas</a>
									</li>
								</ul>
								<ul class="nav pull-right">
									<a id="logout" class="navbar-brand" href="<?= site_url('/login/only_authenticaded_users/logout'); ?>">Cerrar Sesión</a>
		                    	</ul>
		            	</div>											
					</div>
				</div>
			</div>			
			
			<div id="header">
				<div id="image">
					
				</div>
				<div id="login_text">
					Usted a iniciado sesión como: 
					<a href="#"> 
						<?php 
							if($this->session->userdata('logged_in'))
							{
								$session_data = $this->session->userdata('logged_in');
								echo $session_data['username'];						 				   												
							}					
						?> 
					</a>
				</div>
			</div>
			
			<div id="content">
				<div id="main_content_admin">	
						
				</div>
			</div>
			<div id="footer">
				<p>
					Integrantes del equipo: <br/>
					Carlos Humberto<br/>
					Martin Francisco<br/>
					Luis Carlos<br/>
					Rene Gael<br/>
					Manuel Armando 
				</p>
			</div>
		</div>
	</body>
    <script src="<?php echo base_url('/public/js/validate.js') ?>"></script>
	<script src="<?php echo base_url('/public/js/bootstrap/bootstrap.min.js') ?>"></script>
</html>
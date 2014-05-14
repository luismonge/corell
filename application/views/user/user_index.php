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
							<a class="navbar-brand" id="home" href="<?php echo site_url('admin/home'); ?>">
								Usuario
						    </a>
						</div>
						<div class="navbar-collapse collapse" style="height: 1px;">
								<ul class="nav pull-right">
									<a id="logout" class="navbar-brand" href="<?php echo site_url('/login/only_authenticaded_users/logout'); ?>">Cerrar Sesión</a>
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
				<div id="main_content">		
					<div id="content_">
							<form id="form1" method="get" class="form-inline" role="form" action=<?php echo site_url('admin_calls/call_controller/search_call'); ?>>
						<div class="form-group pull-right">						
							<select class="form-control" id="options">
								<option>Destino</option>
								<option>Origen</option>
								<option>Extension</option>
								<option>Usuario</option>
								<option>Fecha</option>
							</select>
							<input type="text" class="form-control" id="search" placeholder="Buscar" name="Buscar">				
							<button type="submit" class="btn btn-primary button" >Buscar</button>		
							<a href="<?php echo site_url('admin_calls/call_controller/read_calls'); ?>">		
								<button type="button" class="btn btn-primary button">Todos</button>
							</a>
						</div>
					</form>	

					<h1>Llamadas</h1>
					
					<div id="table_content" class="table-responsive">
						<table class="table table-hvoer">
							<th>ID Llamada</th>
							<th>Extension Origen</th>
							<th>Extension Destino </th>
							<th>Plan</th>
							<th>Fecha Inicio</th>
							<th>Fecha Contesta</th>
							<th>Fecha Fin</th>
							<th>Segundos Totales</th>
							<th>Segundos Contables</th>
							<th>Status</th>
							
							<tbody>
								<?php 	
									$segTotal = 0;			
									foreach ( $calls-> result() as $row ) 
									{

										$segTotal += $row -> seg_contesta_fin;

										echo "<tr class= 'info'>";
											echo "<td>".$row -> id_llamada."</td>";
											echo "<td>".$row -> origen."</td>";
											echo "<td>".$row -> destino."</td>";
											echo "<td>".$row -> tipo_plan."</td>";
											echo "<td>".$row -> fecha_inicio."</td>";
											echo "<td>".$row -> fecha_contestado."</td>";
											echo "<td>".$row -> fecha_fin_llamada."</td>";
											echo "<td>".$row -> seg_inicio_fin."</td>";
											echo "<td>".$row -> seg_contesta_fin."</td>";
											echo "<td>".$row -> status."</td>";
										echo "</tr>";									
									}
								 ?>
							</tbody>
						 </table>		 
					</div>

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
    <script src="<?php echo base_url('/public/js/validate.js') ?>"></script>
	<script src="<?php echo base_url('/public/js/bootstrap/bootstrap.min.js') ?>"></script>
</html>

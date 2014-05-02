<div id="main_content">	
	<div id="content_">			 
		<h3>Añadir usuario</h3>
		<form id="form_add" method="get" class="form" role="form" action=<?php echo site_url('admin_user/crud_user_controller/add_user'); ?>>
			<div id="form_content">		
				<div class="form-group">
					<label for="username" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
					</div>
				
					<label for="password" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="password" name="password" placeholder="Contraseña">
					</div> 
					
					<label for="nivel" class="col-sm-2 control-label">Nivel</label>
					<div class="col-sm-10">
						<select class="form-control" id="nivel">
							<option>usuario</option>
							<option>administrador</option>
						</select>
					</div> 			
					
			    	<div class="col-sm-offset-0 col-sm-10">
			      		<button id="btn_submit" type="submit" class="btn btn-primary">Añadir</button>	      		
			    	</div>
			  	</div>
			</div>
		 </form>
	</div>
	 <script type="text/javascript" src="<?php echo base_url('/public/js/reload.js') ?>"></script>	 
</div>
<div id="main_content">	
	 
	<h3>Añadir usuario</h3>
	 	
	<?php
		$attributes = array('id' => 'add_form'); 
		echo form_open('admin_user/crud_user_controller/add_user', $attributes) 
	?>
		<div class="form-group">
			<label for="username" class="col-sm-2 control-label">Usuario</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
			</div>
		</div>
		<div class="form-group">
			<label for="Password" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="Password" name="password" placeholder="Contraseña">
			</div>
		</div>	 
		<div class="form-group">
	    	<div class="col-sm-offset-2 col-sm-10">
	      		<button type="submit" class="btn btn-default">Añadir</button>
	      		<input type="hidden" name="hidden" id="hidden" value="<?= site_url('admin_user/crud_user_controller/read_users'); ?>" /> 
	    	</div>
	  	</div>
	 </form>
	 <script type="text/javascript" src="<?php echo base_url('/public/js/reload.js') ?>"></script>	 
</div>
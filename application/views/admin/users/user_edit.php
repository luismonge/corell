<div id="main_content">		 
	 
	 <h3>Editar usuario</h3>
	 
	 <?php 
		foreach ($users->result() as $row) {
			$username = $row->username;
			$pass = $row->pass;
			$nivel = $row->nivel_seguridad;
		}
	 ?>
	 
	<div class="form-group">
		<label for="username" class="col-sm-2 control-label">Usuario</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="username" value="<?php echo $username; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="Password" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="Password" value="<?php echo $pass; ?>">
		</div>
	</div>	 
		<div class="form-group">
		<label for="nivel" class="col-sm-2 control-label">nivel</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="nivel" value="<?php echo $nivel; ?>">
		</div>
	</div>	 
	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-primary">Actualizar</button>
    	</div>
  	</div>
  	
</div>
<!--<div id="main_content" class="styled-select">
		<form method="post" action="<?= site_url( '/fee_controller/updateFee' ); ?>">	
				<p>
					<label>
						ID Usuario
						<input type = "text" onkeypress="return isNumberKey(event)" class="form-control" id="inputSuccess1" name = "user" />
					</label>
				</p>
				<p>
					<label>
						Numero Extension
						<input type = "text" onkeypress="return isNumberKey(event)" class="form-control" id="inputSuccess1" name = "number" />
					</label>
				</p>
				<p>
					<label>
						Nombre Extension
						<input type = "text" class="form-control" id="inputSuccess1" name = "name" />
					</label>
				</p>
				<p>
					<label>
						<input type = "submit" class="btn btn-warning" value = "Insertar" />
						<input type = "reset" class="insertExt btn btn-danger" value = "Cancelar" />
					</label>
				</p>
			
		</form>
</div>-->

<div id="main_content">	
	 
	<h3>Añadir Extension</h3>
	 	
	
		<div class="form-group">
			<label for="num_extension" class="col-sm-2 control-label">Numero de extensión</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="num_extension" name="num_extension" placeholder="Número de extensión">
			</div>
		</div>
		<div class="form-group">
			<label for="nombre_extension" class="col-sm-2 control-label">Nombre de extension</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nombre_extension" name="nombre_extension" placeholder="Nombre de extension">
			</div>
		</div>	 
		<div class="form-group">
			<label for="username" class="col-sm-2 control-label">Nombre de usuario</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
			</div>
		</div>
		<div class="form-group">
	    	<div class="col-sm-offset-2 col-sm-10">
	      		<button type="submit" class="btn btn-primary">Añadir</button>
	      		<input type="hidden" name="hidden" id="hidden" value="<?= site_url('admin_user/crud_user_controller/read_users'); ?>" /> 
	    	</div>
	  	</div>
	 </form>
	 <script type="text/javascript" src="<?php echo base_url('/public/js/reload.js') ?>"></script>	 
</div>



<!--<div id="main_content_modify" class="styled-select">
		<form method="post" action="<?= site_url( '/fee_controller/updateFee' ); ?>">
				
				<p>
					<label class="insertExt">
						ID Usuario
						<input type = "text" onkeypress="return isNumberKey(event)" class="form-control" id="inputSuccess1" name = "user" />
					</label>
				</p>
				<p>
					<label class="insertExt">
						Numero Extension
						<input type = "text" onkeypress="return isNumberKey(event)" class="form-control" id="inputSuccess1" name = "number" />
					</label>
				</p>
				<p>
					<label class="insertExt">
						Nombre Extension
						<input type = "text" class="form-control" id="inputSuccess1" name = "name" />
					</label>
				</p>

			<input type = "submit" class="btn btn-warning" value = "Actualizar" />
			<input type = "reset" class="btn btn-danger" value = "Cancelar" />
		</form>
</div>-->





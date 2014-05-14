<div id="main_content">
	<div id="content_">
		<h3>Añadir Extension</h3>
		<form method="post" action="<?php echo site_url('admin_ext/extension_controller/insertExtension'); ?>">
			<div class="form-group">
				<label for="num_extension" class="col-sm-2 control-label">Numero de extensión</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" onkeypress="return isNumberKey(event)" id="numeroExtension" name="numeroExtension" placeholder="Número de extensión">
				</div>
			</div>
			<div class="form-group">
				<label for="nombre_extension" class="col-sm-2 control-label">Nombre de extension</label>
				<div class="col-sm-10">
					<input type="text" class="form-control"  id="nombreExtension" name="nombreExtension" placeholder="Nombre de extension">
				</div>
			</div>			
			<div class="form-group">
				<label for="username" class="col-sm-2 control-label">Nombre de usuario</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="idUsuario" name="idUsuario" placeholder="Nombre de usuario">
				</div>
			</div>
			<div class="col-sm-offset-0 col-sm-10">
			    <button id="btn_submit" type="submit" class="btn btn-success">Agregar</button>	      		
			    	<a href="">
			 			<button id="btn_return" class="btn btn-primary">Cancelar</button>
			    	</a>
			</div>
		 </form>
	</div>	 
</div>






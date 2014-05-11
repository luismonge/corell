<div id="main_content">	
	<div id="content_">	
		<h3>Modificar Extension</h3>
		<form method="post" action="<?= site_url('admin_ext/extension_controller/updateExtension'); ?>">
			<?php 
				foreach ( $extensions -> result() as $row ) 
				{
					$numeroExtension = $row->numero_extension;
					echo"<div class='form-group'>
							<label for='num_extension' class='col-sm-2 control-label'>Numero de extensión</label>
							<div class='col-sm-10'>
								<input type='text' class='form-control' onkeypress='return isNumberKey(event)' id='numeroExtension' name='numeroExtension' value=".$row -> numero_extension." >
							</div>
						</div>
					";
					echo"<div class='form-group'>
							<label for='nombre_extension' class='col-sm-2 control-label'>Nombre de extension</label>
							<div class='col-sm-10'>
								<input type='text' class='form-control'  id='nombreExtension' name='nombreExtension' value=".$row -> nombre_extension." >
							</div>
						</div>	 
					";
					echo"<div class='form-group'>
							<label for='nombre_extension' class='col-sm-2 control-label'>Nombre de Usuario</label>
							<div class='col-sm-10'>
								<input type='text' class='form-control'  id='idUsuario' name='idUsuario' value=".$row -> id_usuario." >
							</div>
						</div>	 
					";
					echo"<input type='hidden' id='oldNumeroExtension' name='oldNumeroExtension' value=".$row -> numero_extension." >";
				}
			?>
			<div class="col-sm-offset-0 col-sm-10">
			    <button id="btn_submit" type="submit" class="btn btn-success">Actualizar</button>	      		
			    	<a href="#">
			 			<button id="btn_return" class="btn btn-primary">Cancelar</button>
			    	</a>
			</div>
		</form>
	</div>
</div>


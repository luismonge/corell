<div id="main_content">		 
	 
	<div id="content_">
			 <h3>Editar usuario</h3>
	 
	 <?php 
		foreach ($users->result() as $row) {
			$username = $row->username;
			$pass = $row->pass;
			$nivel = $row->nivel_seguridad;
		}
	 ?>
	 <form id="form_edit" method="get" class="form<" role="form" action=<?php echo site_url('admin_user/crud_user_controller/edit_user'); ?>>

	 <div id="form_content">
	 	
	 	<div class="form-group">
			<label for="username" class="col-sm-2 control-label">Usuario</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="username" value="<?php echo $username; ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="nivel" class="col-sm-2 control-label">Rol</label>
			<div class="col-sm-10">
					<select class="form-control" id="nivel">
						<option><?php echo $nivel; ?></option>
						<option>
						<?php 
							if($nivel == "usuario")
							{
								echo "administrador";
							}
							else
							{
								echo "usuario";
							}
						?>
						</option>
					</select>
			</div>
		</div>	 
		<div class="col-sm-offset-0 col-sm-10">
		      <button id="btn_submit" type="submit" class="btn btn-success">Actualizar</button>	     
		      <a href="#">
			   		<button id="btn_return" class="btn btn-primary">Regresar</button>
			  </a>
		      <button id="btn_pass" type="button" class="btn btn-primary">Cambiar contraseña</button>	      		 		
		</div>

	 </div>
  	</form>
	</div>  		

</div>
	 <script type="text/javascript">
		$( 'div#main_content #form_edit' ).submit(function(){	
			var username = document.getElementById('username').value;		
			var nivel = document.getElementById('nivel').value;
			
			var page = $( this ).attr( 'action' );			
			$( '#content' ).load( page+"?username="+username+"&nivel="+nivel );		
			return false;
		});
	</script>

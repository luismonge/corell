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
			      		<button id="btn_submit" type="submit" class="btn btn-success">Añadir</button>	      		
			      		<a href="#">
			      			<button id="btn_return" class="btn btn-primary">Regresar</button>
			      		</a>
			    	</div>
			  	</div>
			</div>
		 </form>
	</div>
</div>


	 <script type="text/javascript">
		$( 'div#main_content #form_add' ).submit(function(){	
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;
			var nivel = document.getElementById('nivel').value;
			
			var page = $( this ).attr( 'action' );			
			$( '#content' ).load( page+"?username="+username+"&password="+password+"&nivel="+nivel );		
			return false;
		});
	</script>



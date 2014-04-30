<div id="main_content" class="styled-select">
		<form method="post" action="<?= site_url( '/fee_controller/updateFee' ); ?>">
			<div class="form-group">
				<select class="form-control input-lg" name = "planType" >
					<option selected> Area Local</option>
					<option> Plan Larga Distancia </option>
					<option> Plan Interno </option>
				</select>
			</div>
			<div class="form-gropu">				
				<label for="fee" class="col-sm-2 control-label">Usuario</label>
				<div class="col-sm-10">
					<input type = "text" onkeypress="return isNumberKey(event)" class="form-control" id="fee" name="fee" placeholder="Costo">
				</div>				
			</div>	 
			<div class="form-group">
			   	<div class="col-sm-offset-2 col-sm-10">
			   		<button type="submit" class="btn btn-default">Añadir</button>			   		
			   	</div>
			</div>	
			<div class="form-group">
			   	<div class="col-sm-offset-2 col-sm-12">			   		
			   		<button type = "reset" class="btn btn-danger" value = "Cancelar">Cancelar</button>
			   	</div>
			</div>			
		</form>
</div>






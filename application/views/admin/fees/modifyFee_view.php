<div id="main_content">	
	<div id="content_">			 
		<h3>Actualizar Tarifa</h3>
		<form id="form_add" method="post" class="form" role="form" action="<?php echo site_url( 'admin_fee/fee_controller/updateFee' ); ?>">
			<div id="form_content">		
				<div class="form-group">
					<label for="Tarifa" class="col-sm-2 control-label">Tarifa</label>
					<div class="col-sm-10">
						<select class="form-control" name = "planType">
							<option selected> Area Local</option>
							<option> Plan Larga Distancia </option>
							<option> Plan Interno </option>
						</select>
					</div>
					<div class="form-group">				
						<label for="fee" class="col-sm-2 control-label">COSTOxMIN</label>
						<div class="col-sm-10">
							<input type = "text" onkeypress="return isNumberKey(event)" class="form-control" id="costoMin" name="costoMin" placeholder="Costo">
						</div>				
					</div>	 
			    	<div class="col-sm-offset-0 col-sm-10">
					 	<button id="btn_submit" type="submit" class="btn btn-success">Actualizar</button>	      		
					    <a href="">
					 		Cancelar
					    </a>
					</div>
			  	</div>
			</div>
		 </form>
	</div>
</div>






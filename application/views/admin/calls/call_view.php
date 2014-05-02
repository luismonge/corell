<div id="main_content">		
	<div id="content_">
			<form id="form1" method="get" class="form-inline" role="form" action=<?php echo site_url('admin_calls/call_controller/search_call'); ?>>
		<div class="form-group pull-right">						
			<select class="form-control" id="option">
				<option>Destino</option>
				<option>Origen</option>
				<option>Extension</option>
				<option>Usuario</option>
				<option>Fecha</option>
			</select>
			<input type="text" class="form-control" id="search" placeholder="Buscar" name="Buscar">				
			<button type="submit" id="hola" class="btn btn-primary button" >Buscar</button>		
		</div>
	</form>	

	<h1>Llamadas</h1>
	
	<table class="table table-hover">
		<th>ID Llamada</th>
		<th> Numero Extension </th>
		<th> Destino Llamada </th>
		<th>Fecha</th>
		<th>Duración</th>
		<th>Plan</th>
		<th>Costo Estimado</th>
		
		<tbody>
			<?php 				
				foreach ( $calls-> result() as $row ) 
				{
					echo "<tr class= 'success'>";
						echo "<td >".$row -> id_llamadas."</td>";
						echo "<td>".$row -> num_ext."</td>";
						echo "<td>".$row -> destino_llamada."</td>";
						echo "<td >".$row -> fecha."</td>";
						echo "<td>".$row -> duracion."</td>";
						echo "<td>".$row -> id_plan."</td>";
						echo "<td>".$row -> costo_estimado."</td>";
						
					echo "</tr>";									
				}
			 ?>
		</tbody>
	 </table>

	</div>

	  <script type="text/javascript" src="<?php echo base_url('/public/js/reload.js') ?>"></script>	
</div>


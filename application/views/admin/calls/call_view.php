<div id="main_content">	
	<form id="form" class="form-inline" role="form">
		<div class="form-group">
			<label>
				<input type="radio" name="option" value="user"/>
				Usuario
			</label>
			<label>
				<input type="radio" name="option" value="ext"/>
				Extensión 
			</label>
			<label>
				<input type="radio" name="option" value="date"/>
				Fecha 
			</label>
			<label>
				 <input type="radio" name="option" value="plan"/>
				 Plan
			</label>		
			<input type="text" class="form-control" id="search" placeholder="Buscar">
			<a href="<?php site_url('admin_calls/call_controller/search_call?option'); ?>">		
				<button type="button" class="btn btn-primary button">Buscar</button>
			</a>
		</div>
	</form>
	
	
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
	

	<!--<table class="table table-hover">
		<th> Usuario </th>
		<th> Password </th>
		<th> Nivel </th>
		<th> Acciones </th>
	<?php 
		$editar = base_url('/public/images/icons/penciledit.png');
		$eliminar = base_url('/public/images/icons/userdelete.png');
		foreach ($users->result() as $row) {
			$username = $row->username;
			echo "<tr>";
				echo "<td>".$row->username."</td>";
				echo "<td>".$row->pass."</td>";
				echo "<td>".$row->nivel_seguridad."</td>";
				echo "<td>
				<a id='link' href=".site_url('admin_user/user_links_controller/edit_user?user='.$username.'')."><img src='$editar' alt='Editar'/> Editar </a>
				</td>
				<td>
				<a id='link' href=".site_url('admin_user/crud_user_controller/delete_user?user='.$username.'')."><img src='$eliminar' alt='Eliminar'/> Eliminar </a>
				</td>";
		}
	 ?>
	 </table>-->
	 <script type="text/javascript" src="<?php echo base_url('/public/js/reload.js') ?>"></script>	
</div>


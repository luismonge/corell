<div id="main_content">		
	<div id="content_">
			<form id="form1" method="get" class="form-inline" role="form" action=<?php echo site_url('admin_calls/call_controller/search_call'); ?>>
		<div class="form-group pull-right">						
			<select class="form-control" id="options">
				<option>Destino</option>
				<option>Origen</option>
				<option>Extension</option>
				<option>Usuario</option>
				<option>Fecha</option>
			</select>
			<input type="text" class="form-control" id="search" placeholder="Buscar" name="Buscar">				
			<button type="submit" class="btn btn-primary button" >Buscar</button>		
			<a href="<?= site_url('admin_calls/call_controller/read_calls'); ?>">		
				<button type="button" class="btn btn-primary button">Todos</button>
			</a>
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
</div>

	 <script type="text/javascript">
	 	$( 'div#main_content #form1' ).submit(function(){	
			var texto = document.getElementById('search').value.toLowerCase();;
			var seleccion = document.getElementById('options').value;

			/*for (var i = 0, length = radio.length; i < length; i++) {
				if (radio[i].checked)
				{
					var seleccion = radio[i].value;
				}
				
			};*/

			var page = $( this ).attr( 'action' );			
			$( '#content' ).load( page+"?search="+texto+"&option="+seleccion );		
			return false;
		});

		$( 'div#main_content a' ).click(function(){				
			var page = $( this ).attr( 'href' );	
			$( '#content' ).load( page );
			return false;
		});
	</script>


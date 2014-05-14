<div id="main_content">		
	<div id="content_" >
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
			<a href="<?php echo site_url('admin_calls/call_controller/read_calls'); ?>">		
				<button type="button" class="btn btn-primary button">Todos</button>
			</a>
		</div>
	</form>	

	<h1>Llamadas</h1>
	
	<div id="table_content" class="table-responsive">
			<table class="table table-hvoer">
				<th>ID Llamada</th>
				<th>Extension Origen</th>
				<th>Extension Destino </th>
				<th>Plan</th>
				<th>Fecha Inicio</th>
				<th>Fecha Contesta</th>
				<th>Fecha Fin</th>
				<th>Segundos Totales</th>
				<th>Segundos Contables</th>
				<th>Status</th>
				
				<tbody>
					<?php 	
						$segTotal = 0;			
						foreach ( $calls-> result() as $row ) 
						{

							$segTotal += $row -> seg_contesta_fin;

							echo "<tr class= 'info'>";
								echo "<td>".$row -> id_llamada."</td>";
								echo "<td>".$row -> origen."</td>";
								echo "<td>".$row -> destino."</td>";
								echo "<td>".$row -> tipo_plan."</td>";
								echo "<td>".$row -> fecha_inicio."</td>";
								echo "<td>".$row -> fecha_contestado."</td>";
								echo "<td>".$row -> fecha_fin_llamada."</td>";
								echo "<td>".$row -> seg_inicio_fin."</td>";
								echo "<td>".$row -> seg_contesta_fin."</td>";
								echo "<td>".$row -> status."</td>";
							echo "</tr>";									
						}
					 ?>
				</tbody>
			 </table>		 
		</div>

		<div>
			<h1>
				El total es: <span><?php echo $segTotal; ?></span>
			</h1>
		</div>

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


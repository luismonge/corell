<div id="main_content">	
	<div id="content_">
		<table class="table table-hover">
			<th>ID</th>
			<th> Plan </th>
			<th> Costo x Min </th>
			<tbody>
				<?php 
					$eliminar = base_url('/public/images/icons/borrar.png');
					foreach ( $fees -> result() as $row ) 
					{
						$nombrePlan = $row-> nombrePlan;
						echo "<tr class= 'success'>";
							echo "<td >".$row -> idPlan."</td>";
							echo "<td>".$row -> nombrePlan."</td>";
							echo "<td>".$row -> costoMin."</td>";
							echo "</tr>";									
					}
				 ?>
			</tbody>
		 </table>
	</div>
</div>

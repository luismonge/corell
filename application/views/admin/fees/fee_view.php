<div id="main_content">	
	<table class="table table-hover">
		<th>ID</th>
		<th> Plan </th>
		<th> Costo x Min </th>
		<tbody>
			<?php 
				$modificar = base_url('images/icons/penciledit.png');
				foreach ( $fees -> result() as $row ) 
				{
					echo "<tr class= 'success'>";
						echo "<td >".$row -> idPlan."</td>";
						echo "<td>".$row -> nombrePlan."</td>";
						echo "<td>".$row -> costoMin."</td>";
						echo "<td> <a href=''><img src='$modificar' alt='Modificar'/> Modificar </a>";
						
						echo "</tr>";									
				}
			 ?>
		</tbody>
	 </table>
</div>


<div id="main_content">	
	<table class="table table-hover">
		<th>Usuario</th>
		<th>Numero Extension</th>
		<th>Nombre Extension</th>
		<tbody>
			<?php 
				$insertar = base_url('images/icons/add.png');	
				$borrar = base_url('images/icons/borrar.png');
				$modificar = base_url('images/icons/penciledit.png');
				foreach ( $extensions -> result() as $row ) 
				{
					echo "<tr class= 'warning'>";
						echo "<td >".$row -> idUsuario."</td>";
						echo "<td>".$row -> numeroExtension."</td>";
						echo "<td>".$row -> nombreExtension."</td>";
						echo "<td> <a href=''><img src='$insertar' alt='Insertar'/>Insertar</a>";	
						echo "<td> <a href=''><img src='$modificar' alt='Modificar'/> Modificar </a>";
						echo "<td> <a href=''><img src='$borrar' alt='Borrar'/> Eliminar </a>";											
						echo "</tr>";
				}
			 ?>
		</tbody>
	 </table>
</div>


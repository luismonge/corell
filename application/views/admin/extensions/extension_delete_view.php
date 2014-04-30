<div id="main_content">	
	<table class="table table-hover">
		<th>Usuario</th>
		<th>Numero Extension</th>
		<th>Nombre Extension</th>
		<tbody>
			<?php 
				$borrar = base_url('images/icons/borrar.png');
				$path = "&lt;?= site_url( '/extension_controller/delete' ); ?&gt;";
				foreach ( $extensions -> result() as $row ) 
				{ 
						$id = $row -> idUsuario;
						echo "<tr class= 'warning'>"; 
						echo "<td>".$row -> idUsuario."</td>";
						echo "<td>".$row -> numeroExtension."</td>";
						echo "<td>".$row -> nombreExtension."</td>";
						echo"<td>
						<form id='$id' method = 'post' action='.$path.'>
						  <input type='hidden' name='eliminar' value='$id' /> 
						  <a name='$id' onclick='document.getElementById(event.target.name).submit();'> <img src='$borrar' alt='Borrar'/> Eliminar </a>
						</form>";
						echo "</tr>";
						
				}
			 ?>
		</tbody>
	 </table>
</div>


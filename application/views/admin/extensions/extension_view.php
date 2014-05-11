<div id="main_content">	
	<div id="content_">
	<form id="form1" method="get" class="form-inline" role="form" action=<?php echo site_url('admin_ext/extension_controller/searchExtension'); ?>>
		<div class="form-group pull-right">						
			<select class="form-control" id="options">
				<option>Usuario</option>		
				<option>NumeroExtension</option>	
				<option>NombreExtension</option>		
			</select>
			
			<div class="form-group" id="div_reload"> 
				<input type="text" class="form-control" id="search" placeholder="Buscar" name="Buscar">					
			</div>				
			
			<button type="submit" id="hola" class="btn btn-primary button" >Buscar</button>		

			<a href="<?= site_url( 'admin_ext/extension_controller/readExtension' ); ?>">		
				<button type="button" class="btn btn-primary button">Todos</button>
			</a>
		</div>
	</form>	
	<table class="table table-hover">
		<th>Usuario</th>
		<th>Numero Extension</th>
		<th>Nombre Extension</th>
		<th></th>
		<th></th>
		<tbody>
			<?php 
				$borrar = base_url('/public/images/icons/borrar.png');
				$modificar = base_url('/public/images/icons/penciledit.png');
				foreach ( $extensions -> result() as $row ) 
				{
					$numeroExtension = $row->numero_extension;
					echo "<tr class= 'warning'>";
						echo "<td >".$row -> id_usuario."</td>";
						echo "<td>".$row -> numero_extension."</td>";
						echo "<td>".$row -> nombre_extension."</td>";
						echo "<td> <a id='link' href=".site_url('admin_ext/extension_controller/modifyExtension?ext='.$numeroExtension.'')." ><img src='$modificar' alt='Modificar'/> Modificar </a>";
						echo "<td> <a id='link' href=".site_url('admin_ext/extension_controller/deleteExtension?ext='.$numeroExtension.'')."><img src='$borrar' alt='Borrar'/> Eliminar </a>";											
					echo "</tr>";
				}
			 ?>
		</tbody>
	 </table>
	 </div>
</div>

 <script type="text/javascript">
		$( 'div#main_content #link' ).click(function(){				
			var page = $( this ).attr( 'href' );	
			$( '#content' ).load( page );
			return false;
		});

		$( 'div#main_content a' ).click(function(){				
			var page = $( this ).attr( 'href' );	
			$( '#content' ).load( page );
			return false;
		});

		//Search Bar
		$( 'div#main_content #form1' ).submit(function(){	
			var texto = document.getElementById('search').value;
			var seleccion = document.getElementById('options').value;
			
			var page = $( this ).attr( 'action' );			
			$( '#content' ).load( page+"?search="+texto+"&option="+seleccion );		
			return false;
		});
</script>

<div id="main_content">	
	<div id="content_">
		<form id="form1" method="get" class="form-inline" role="form" action=<?php echo site_url('admin_user/crud_user_controller/search_user'); ?>>
		<div class="form-group pull-right">						
			<select class="form-control" id="options">
				<option>Usuario</option>		
				<option id="nivel">Nivel</option>		
			</select>
			
			<div class="form-group" id="div_reload"> 
				<input type="text" class="form-control" id="search" placeholder="Buscar" name="Buscar">					
			</div>				
			
			<button type="submit" id="hola" class="btn btn-primary button" >Buscar</button>		

			<a href="<?= site_url('admin_user/crud_user_controller/read_users'); ?>">		
				<button type="button" class="btn btn-primary button">Todos</button>
			</a>

			<a href="<?= site_url('admin_user/user_links_controller/add_user'); ?>">		
				<button type="button" class="btn btn-primary button">Añadir Usuario</button>
			</a>
		</div>
	</form>	
	
	<h1>Usuarios</h1>
	<table class="table table-hover">
		<th> Usuario </th>
		<th> Nivel </th>
		<th> Acciones </th>
	<?php 
		$editar = base_url('/public/images/icons/penciledit.png');
		$eliminar = base_url('/public/images/icons/userdelete.png');
		foreach ($users->result() as $row) {
			$username = $row->username;
			echo "<tr class= 'info'>";
				echo "<td>".$row->username."</td>";				
				echo "<td>".$row->nivel_seguridad."</td>";
				echo "<td>
				<a id='link' href=".site_url('admin_user/user_links_controller/edit_user?user='.$username.'')."><img src='$editar' alt='Editar'/> Editar </a>
				</td>
				<td>
				<a id='link' href=".site_url('admin_user/crud_user_controller/delete_user?user='.$username.'')."><img src='$eliminar' alt='Eliminar'/> Eliminar </a>
				</td>";			
		}
		
	 ?>
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

		//Buscador
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
	</script>
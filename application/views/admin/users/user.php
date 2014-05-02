<div id="main_content">	
	<div id="content_">
		<form id="form1" method="get" class="form-inline" role="form" action=<?php echo site_url('admin_user/crud_user_controller/search_user'); ?>>
		<div class="form-group pull-right">						
			<select class="form-control" id="option">
				<option>Usuario</option>		
				<option id="nivel">Nivel</option>		
			</select>
			
			<div class="form-group" id="div_reload"> 
				<input type="text" class="form-control" id="search" placeholder="Buscar" name="Buscar">					
			</div>
			
			
			
			<button type="submit" id="hola" class="btn btn-primary button" >Buscar</button>		
			<a href="<?= site_url('admin_user/user_links_controller/add_user'); ?>">		
			<button type="button" class="btn btn-primary button">Añadir Usuario</button>
		</a>
		</div>
	</form>	
	
	<h1>Usuarios</h1>
	<table class="table table-hover">
		<th> Usuario </th>
		<th> Password </th>
		<th> Nivel </th>
		<th> Acciones </th>
	<?php 
		$editar = base_url('/public/images/icons/penciledit.png');
		$eliminar = base_url('/public/images/icons/userdelete.png');
		foreach ($users->result() as $row) {
			$username = $row->username;
			echo "<tr class= 'success'>";
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
	 </table>
	</div>
	 <script type="text/javascript" src="<?php echo base_url('/public/js/reload.js') ?>"></script>	
</div>


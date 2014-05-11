<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Extension_model extends CI_Model
	{
	
		function __construct()
	    {
	        parent::__construct();
	        $this->load->database();
	    }
		
		function readExtension()
		{	
			$this->db->select('extension.numero_extension, extension.nombre_extension,usuario.username AS id_usuario');
			$this->db->from('extension');
			$this->db->join('usuario', 'extension.id_usuario = usuario.id_user','inner');
			$query = $this->db->get();
			return $query;
		}
		function readOnlyOneExtension( $extension )
		{

			$this->db->select('extension.numero_extension, extension.nombre_extension,usuario.username AS id_usuario');
			$this->db->from('extension');
			$this->db->join('usuario', 'extension.id_usuario = usuario.id_user','inner');
			$this->db->where('extension.numero_extension', $extension); 
			$query = $this->db->get();
			return $query;
		}
			
		
		function insertExtension( $id, $numero, $nombre )
		{

			$user = "'".$id."';";
			$query = $this->db->query("select id_user from usuario where username =".$user);
			$usuario = $query->row( 'id_user' );

			if ($query->num_rows() > 0)
			{

				$data = array(
				   'numero_extension' => $numero,
				   'nombre_extension' => $nombre,
				   'id_usuario' => $usuario
				);
				$this->db->insert('extension', $data);
			}
			else
				return "Nombre de Usuario Introducido No existe. Favor de colocar uno existente";	
		}
		
		function deleteExtension( $numeroExtension )
		{
			
			$this->db->where( 'numero_extension', $numeroExtension );
			$result = $this -> db -> delete( 'extension' ); 
			if( !$result )
			{
				return "Ha Ocurrido un Error. No Se Ha Podido Eliminar";
			}
			else
				return "Se Ha Eliminado Correctamente";
		}

		function updateExtension( $oldNumero, $xUser, $numero, $nombre )
		{
			$user = "'".$xUser."';";
			$query = $this->db->query("select id_user from usuario where username =".$user);
			$usuario = $query->row( 'id_user' );


			if ($query->num_rows() > 0)
			{
				$data = array(
				   'numero_extension' => $numero,
				   'nombre_extension' => $nombre,
				   'id_usuario' => $usuario
				);
				$this->db->where('numero_extension', $oldNumero);
				$this->db->update('extension', $data); 
			}
			else
				return "Nombre de Usuario Introducido No existe. Favor de colocar uno existente";	
		
		}

		function searchExtension( $search, $option )
		{
			$this->db->select('extension.numero_extension, extension.nombre_extension,usuario.username AS id_usuario');
			$this->db->from('extension');
			$this->db->join('usuario', 'extension.id_usuario = usuario.id_user','inner');

			switch ($option) 
			{
				case "Usuario":
					$this->db->where('usuario.username', $search); 
					break;

				case 'NumeroExtension':
					$this->db->where('extension.numero_extension', $search); 
					break;
				
				case 'NombreExtension':
					$this->db->where('extension.nombre_extension', $search); 
					break;
			}

			$query = $this->db->get();
			return $query;
		}



		
	}

?>
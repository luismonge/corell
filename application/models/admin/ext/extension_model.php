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
		
			
			$query = $this -> db -> get( 'Extension' );
			return $query;
			
		}
			
		function modifyByNumberExtension( $numero, $data )
		{	
			$this -> db -> where('numeroExtension', $numero);
			$result = $this -> db-> update( 'Extension', $data ); 
		
			if( !$result )
			{
				return "Ha Ocurrido un Error. No Se Ha Podido Actualizar";
			}
			else
				return "Se Ha Modificado Correctamente";
		}
		
		function modifyByNameExtension( $nombre, $data )
		{	
			$this -> db -> where('nombreExtension', $nombre);
			$result = $this -> db-> update( 'Extension', $data ); 
		
			if( !$result )
			{
				return "Ha Ocurrido un Error. No Se Ha Podido Actualizar";
			}
			else
				return "Se Ha Modificado Correctamente";
		}
		
		function insertExtension( $data )
		{
			$result = $this->db->insert('Extension', $data);
			
			if( !$result )
			{
				return "Ha Ocurrido un Error. No Se Ha Podido Insertar";
			}
			else
				return "Se Ha Insertado Correctamente";
			 	
		}
		
		function deleteExtension( $numeroExtension )
		{
			
			$this->db->where( 'numeroExtension', $numeroExtension );
			$result = $this -> db -> delete( 'Extension' ); 
			if( !$result )
			{
				return "Ha Ocurrido un Error. No Se Ha Podido Eliminar";
			}
			else
				return "Se Ha Eliminado Correctamente";
		}
		
		
	}

?>
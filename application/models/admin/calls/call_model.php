<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Call_model extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
	
	function read_call(){					
		$query = $this->db->get('llamada');
		return $query;
	}

	function search_call($search, $option)
	{
		$this->db->select('*');
		$this->db->from('llamada');
		
		switch ($option) {
			case 'Destino':
				$this->db->where('destino_llamada', $search);
				break;
			case 'Origen':
				# code...
				break;
			case 'Usuario':
				# code...
				break;
			case 'Extension':
				# code...
				break;
			case 'Fecha':
				# code...
				break;
			default:
				# code...
				break;
		}

		if($option == "")
		{
			$result = "";
		}
		else
		{
			$result = $this->db->get();	
		}
		
		return $result;
	}
	
}
?>
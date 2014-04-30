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
	
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
	
	function read_user($id){
		$this-> db-> where('username !=', $id);				
		$query = $this->db->get('usuario');
		return $query;
	}
	
	function read_one_user($id){
		$this-> db-> select('username, pass, nivel_seguridad');
		$this-> db-> from('usuario');
		$this-> db-> where('username', $id);		
		$query = $this->db->get();
				
		if ($query->num_rows() == 1)
		{
			return $query;
		}
		else {
			return false;
		}
		
		
	}
	
	function login($username, $password)
	{
		$this-> db-> select('username, pass');
		$this-> db-> from('usuario');
		$this-> db-> where('username', $username);
		$this-> db-> where('pass', MD5($password));
		$this-> db-> limit(1);		
		$query = $this->db->get();
		
		if ($query->num_rows() == 1)
		{
			return $query->result();
		}
		else {
			return false;
		}
		
	}

	function delete_user($id){
		$this-> db->where('username', $id);
		$this->db->delete('usuario');
	}

	function add_user($data){
		$this->db->insert('usuario', $data);
	}

	function borrarUsuario($data){
		$this->db->where('nocontrol',$data['nocontrol']);
		$this->db->delete('usuarios');
	}

}
?>
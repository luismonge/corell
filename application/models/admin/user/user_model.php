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
	
	function search_user($search, $option)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		//$this-> db-> where('username !=', $id);	

		switch ($option) {
			case "Usuario":
				$this->db->where('username', $search);

				break;
			
			case 'Nivel':
				$this->db->where('nivel_seguridad', $search);
				break;
		}

		$result = $this->db->get();	
		
		return $result;
	}

	function edit_user($data, $username)
	{
		$this->db->where('username', $username);
		$this->db->update('usuario', $data);
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
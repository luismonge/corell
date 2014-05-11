<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Verify_login extends CI_Controller {
	
	public function __construct() {
		parent::__construct();		
		$this->load->model('/admin/user/user_model', 'user');
	}
	
	public function index() 
	{		
		$this->load->library('form_validation');	
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_db');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('index');
		}
		else 
		{
			redirect('/login/only_authenticaded_users','refresh');	
		}
										
	}
	
	public function check_db($password)
	{
		$this->load->library('session');
		
		$username = $this->input->post('username');		
		$result = $this->user->login($username,$password);
		
		if($result)
		{
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'username' => $row->username,
					'rol' => $row->nivel_seguridad
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_db', 'Nombre de usuario o contraseña incorrecto');
			return False;
		}
	}

}


?>
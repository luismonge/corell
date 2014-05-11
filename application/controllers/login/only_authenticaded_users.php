<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
session_start();

class Only_authenticaded_users extends CI_Controller {
			
	public function __construct() {
		parent::__construct();	
		//$this->load->library('session');	
	}
	
	public function index() {
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');			
			if ($session_data['rol'] == "administrador") 
			{
				$this->load->view('admin/admin_index');
			}
			elseif ($session_data['rol'] == "usuario") {
				$this->load->model('/admin/calls/call_model', 'call_model');
				$call['calls'] = $this->call_model->read_call();			   						
				$this->load->view('user/user_index', $call);
			}
			
		}										
		else
		{
			redirect('main_controller', 'refresh');		
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('main_controller', 'refresh');	
	}

}


?>
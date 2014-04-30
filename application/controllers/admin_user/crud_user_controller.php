<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_user_controller extends CI_Controller {
	
	public $user_model;
	
	public function construct__()
	{
		parent::__construct();
		$this->load->model('/admin/user/user_model', 'user_model');
	}
	 
	public function index()
	{
		$this->load->view('index');			
	}

	public function read_users()
	{
		$this->load->model('/admin/user/user_model', 'user_model');
		
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
												 				  
			$user['users'] = $this->user_model->read_user($session_data['username']);			   
			$this->load->view('admin/users/user', $user);
		}
		else
		{
			redirect('main_controller', 'refresh');		
		}
	}
	
	public function add_user()
	{		
		
		if($this->session->userdata('logged_in'))
		{
			$this->load->model('/admin/user/user_model', 'user_model');
			
					
			$username = $this->input->post('username');
			$pass = $this->input->post('password');
	
			$data = array(
				'username' => $username,
				'pass' => MD5($pass)
			);
					
			$this->user_model->add_user($data);			   
			$this->read_users();
		}
		else 
		{
			redirect('main_controller', 'refresh');
		}	
	}
	
	public function delete_user()
	{					
		if($this->session->userdata('logged_in'))
		{
			$this->load->model('/admin/user/user_model', 'user_model');
			$username = $this->input->get('user');
			$this->user_model->delete_user($username);			   
			$this->read_users();
		}
		else 
		{
			redirect('main_controller', 'refresh');
		}
	}
	
	public function edit_user()
	{
		$this->load->model('/admin/user/user_model', 'user_model');
		
		if($this->session->userdata('logged_in'))
		{
			
		}
		else 
		{
			redirect('main_controller', 'refresh');
		}
	}
	

}
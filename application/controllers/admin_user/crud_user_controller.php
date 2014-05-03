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
				
		if($this->session->userdata('logged_in'))
		{
			$this->load->model('/admin/user/user_model', 'user_model');
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
			
					
			$username = $this->input->get('username');
			$pass = $this->input->get('password');
			$nivel = $this->input->get('nivel');
	
			$data = array(
				'username' => $username,
				'pass' => MD5($pass),
				'nivel_seguridad' => $nivel
			);
					
			$this->user_model->add_user($data);	

			$session_data = $this->session->userdata('logged_in');
			$user['users'] = $this->user_model->read_user($session_data['username']);			   
			$this->load->view('admin/users/user', $user);					   			
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
			$username = $this->input->get('username');			
			$nivel = $this->input->get('nivel');
	
			$data = array(
				'username' => $username,				
				'nivel_seguridad' => $nivel
			);

			$this->user_model->edit_user($data, $username);	

			$session_data = $this->session->userdata('logged_in');
			$user['users'] = $this->user_model->read_user($session_data['username']);			   
			$this->load->view('admin/users/user', $user);					   			

		}
		else 
		{
			redirect('main_controller', 'refresh');
		}
	}

	public function search_user()
	{
		$this->load->model('/admin/user/user_model', 'user_model');
		
		$search = $this->input->get('search',TRUE);
		$option = $this->input->get('option',TRUE);

		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
												 				  
			$user['users'] = $this->user_model->search_user($search, $option);			   
			$this->load->view('admin/users/user', $user);
		}
		else
		{
			redirect('main_controller', 'refresh');		
		}
	}
	

}
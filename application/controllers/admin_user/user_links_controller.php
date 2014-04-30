<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_links_controller extends CI_Controller {	
	
	public function construct__()
	{
		parent::__construct();		
	}
	 
	public function index()
	{
		$this->load->view('index');			
	}

	public function add_user()
	{		
		
		if($this->session->userdata('logged_in'))
		{
			$this->load->helper('form');				   
			$this->load->view('admin/users/user_add');
		}
		else 
		{
			redirect('main_controller', 'refresh');	
		}	
	}
	
	public function edit_user()
	{
		if($this->session->userdata('logged_in'))
		{
			$this->load->model('/admin/user/user_model', 'user_model');	
			$username = $this->input->get('user');
			$user['users'] = $this->user_model->read_one_user($username);								
			$this->load->view('admin/users/user_edit', $user);
		}
		else 
		{
			redirect('main_controller', 'refresh');	
		}
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Call_controller extends CI_Controller {
	
	public $user_model;
	
	public function construct__()
	{
		parent::__construct();
		
	}
	 
	public function index()
	{
		$this->load->view('index');			
	}

	public function read_calls()
	{
		$this->load->model('/admin/calls/call_model', 'call_model');
		
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
												 				  
			$call['calls'] = $this->call_model->read_call();			   
			$this->load->view('admin/calls/call_view', $call);
		}
		else
		{
			redirect('main_controller', 'refresh');		
		}
	}
	
	public function search_call()
	{
		$this->load->model('/admin/calls/call_model', 'call_model');
		
		$search = $this->input->get('search',TRUE);
		$option = $this->input->get('option',TRUE);

		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
												 				  
			$call['calls'] = $this->call_model->search_call($search, $option);			   
			$this->load->view('admin/calls/call_view', $call);
		}
		else
		{
			redirect('main_controller', 'refresh');		
		}

	
	}
	
	
}
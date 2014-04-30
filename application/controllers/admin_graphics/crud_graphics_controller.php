<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_graphics_controller extends CI_Controller {

	 
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
	public function index() {
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/graphics/graphics');		
		}
		else 
		{
			redirect('main_controller', 'refresh');	
		}										
	}		
}
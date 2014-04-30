<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Main_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct();		
	}
	
	public function index() {
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/admin_index');
		}
		else 
		{
			$this->load->helper('form');	
			$this->load->view('index');	
		}										
	}

}


?>
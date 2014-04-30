<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Home extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}
	
	public function index() {
		if($this->session->userdata('logged_in'))
		{
			$this->load->view('admin/admin_content');		
		}
		else 
		{
			redirect('main_controller', 'refresh');	
		}										
	}	
	
}


?>
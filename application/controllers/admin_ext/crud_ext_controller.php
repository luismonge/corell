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
			$user['users'] = $this->user_model->read_user();			   
			$this->load->view('admin/users/user', $user);
		}
		else
		{
			redirect('main_controller', 'refresh');		
		}
	}

	/*public function insertardatos(){
		
		$this->load->helper('form');
		$this->load->model('Modelodb');

		
		$nombre = $this->input->post('nombre');
		$nocontrol = $this->input->post('nocontrol');
		$direccion = $this->input->post('direccion');
		$maestro = $this->input->post('maestro');
		$materia = $this->input->post('materia');

		$data = array(
			'nombre' => $nombre,
			'nocontrol' => $nocontrol,
			'direccion' => $direccion,
			'maestro' => $maestro,
			'materia' => $materia,
		);
		
		
		$this->Modelodb->insertarUsuario($data);

		$this->load->view('paginadeinicio');
	}

	public function actualizardatos(){
		
		$this->load->helper('form');
		$this->load->model('Modelodb');

		
		$nombre = $this->input->post('nombre');
		$nocontrol = $this->input->post('nocontrol');
		$direccion = $this->input->post('direccion');
		$maestro = $this->input->post('maestro');
		$materia = $this->input->post('materia');

		$data = array(
			'nombre' => $nombre,
			'nocontrol' => $nocontrol,
			'direccion' => $direccion,
			'maestro' => $maestro,
			'materia' => $materia,
		);

		$this->Modelodb->actualizarUsuario($data);

		$this->load->view('paginadeinicio');
	}

	public function borrardatos(){
		$this->load->helper('form');
		$this->load->model('Modelodb');

		
		$nocontrol = $this->input->post('nocontrol');


		$data = array(
			'nocontrol' => $nocontrol,
		);

		$this->Modelodb->borrarUsuario($data);

		$this->load->view('paginadeinicio');
	}

*/
}
<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	
	class Extension_controller extends CI_Controller
	{
		
		public function __construct()
		{   
			parent::__construct();
		}
		
		public function readExtension()
		{	
			$this -> load -> model( 'admin/ext/extension_model' );
			$extension[ 'extensions' ] = $this -> extension_model -> readExtension();
			$this->load -> view( 'admin/extensions/extension_view', $extension );			
		}
		
		public function deleteExtension()
		{
			$extension = $this->input->get( 'ext' );
			$this -> load -> model( 'admin/ext/extension_model' );
			$this -> extension_model -> deleteExtension( $extension );		
			$this->readExtension();		
		}
		
		public function insert()
		{
			$this->load -> view( 'admin/extensions/extension_insert_view' );	
		}
		
		public function insertExtension()
		{
			
			$nombre = $_POST[ 'nombreExtension' ];
			$numero = $_POST[ 'numeroExtension' ];
			$id = $_POST[ 'idUsuario' ];

			$this -> load -> model( 'admin/ext/extension_model' );
			$extension = $this -> extension_model -> insertExtension( $id, $numero, $nombre );	
			$this->load->view('admin/admin_index');
		}
		
		public function modifyExtension()
		{
			$ext = $this->input->get( 'ext' );
			$this -> load -> model( 'admin/ext/extension_model' );
			$extension[ 'extensions' ] = $this -> extension_model -> readOnlyOneExtension( $ext );			
			$this->load -> view( 'admin/extensions/extension_update_view', $extension );
			
		}
		public function updateExtension()
		{
			$nombre = $_POST[ 'nombreExtension' ];
			$numero = $_POST[ 'numeroExtension' ];
			$usuario = $_POST[ 'idUsuario' ];
			$oldNumero = $_POST[ 'oldNumeroExtension' ];
			
			$this -> load -> model( 'admin/ext/extension_model' );
			$this -> extension_model -> updateExtension($oldNumero, $usuario, $numero, $nombre );	
			$this->load->view('admin/admin_index');
		}
		public function searchExtension()
		{

			$search = $this->input->get('search');
			$option = $this->input->get('option');

			$this -> load -> model( 'admin/ext/extension_model' );			
			$extension[ 'extensions' ] = $this -> extension_model -> searchExtension( $search, $option );
			$this->load -> view( 'admin/extensions/extension_view', $extension );	
		}
		
			
		
		
		
	}

?>
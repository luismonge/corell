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
		
		public function delete()
		{
			echo $_POST[ 'eliminar' ];
		}
		
		public function deleteExtension()
		{
			/*$numero = $_POST[ 'numeroExtension' ];
			
			$this -> load -> model( 'extension_model' );
			$extension = $this -> extension_model -> deleteExtension( $numero );*/
			$this -> load -> model( 'admin/ext/extension_model' );
			$extension[ 'extensions' ] = $this -> extension_model -> readExtension();
			$this->load -> view( 'admin/extensions/extension_delete_view', $extension );		
				
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
			
			$data = array(
			   'numeroExtension' => $numero,
			   'nombreExtension' => $nombre,
			   'idUsuario' => $id
			);
					
			$this -> load -> model( 'admin/ext/extension_model' );
			$extension = $this -> extension_model -> insertExtension($data);			
		}
		
		
		public function modifiedExtension()
		{
			$this -> load -> view( 'admin/fees/modifyFee' );
		}
		
		public function updateByNumberExtension()
		{
			$nombre = $_POST[ 'nombreExtension' ];
			$numero = $_POST[ 'numeroExtension' ];
			$id = $_POST[ 'idUsuario' ];
			
			$data = array(			  
			   'nombreExtension' => $nombre,
			   'idUsuario' => $id
			);
			
			$this -> load -> model( 'admin/ext/extension_model' );
			$extension = $this -> extension_model -> modifyExtension($numero,$data);	
		}
		
		
		public function updateByNameExtension()
		{
			$nombre = $_POST[ 'nombreExtension' ];
			$numero = $_POST[ 'numeroExtension' ];
			$id = $_POST[ 'idUsuario' ];
			
			$data = array(			  
			   'numeroExtension' => $numero,
			   'idUsuario' => $id
			);
			
			$this -> load -> model( 'admin/ext/extension_model' );
			$extension = $this -> extension_model -> modifyExtension($nombre,$data);	
		}
		
	}

?>
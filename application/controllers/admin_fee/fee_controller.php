<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	
	class Fee_controller extends CI_Controller
	{
		
		public function construct__()
		{   
			parent::_construct();
		}
		
		public function readFees()
		{
			$this -> load -> model( 'admin/fee/fee_model' );
			$fee[ 'fees' ] = $this -> fee_model -> fees();
			$this -> load -> view( 'admin/fees/fee_view', $fee );
		}
		
		public function modifiedFees()
		{
			$this -> load -> view( 'admin/fees/modifyFee_view' );
			
		}
		
		public function updateFee()
		{
			
			$plan = $_POST[ 'planType' ];
			$costo = $_POST[ 'costoMin' ];
			
			$data = array(
               'costoMin' => $costo
            );
			
			$this -> load -> model( 'admin/fee/fee_model' );
			$update = $this -> fee_model -> modifyFee( $plan, $data );
			
			$this->load->view('admin/admin_index');	
			$this->load->view('index');	
			
		}
		
		
		
				
	}

?>
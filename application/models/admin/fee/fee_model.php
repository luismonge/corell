<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Fee_model extends CI_Model
	{
	
		function __construct()
	    {
	        parent::__construct();
	        $this->load->database();
	    }
		
		function fees()
		{
			$query = $this -> db -> get( 'TarifasTelefonicas' );
			return $query;
			
		}
			
		function modifyFee( $plan, $data )
		{	
			$this->db->where('nombrePlan', $plan);
			$result = $this->db->update('TarifasTelefonicas', $data); 
		
			if( !$result )
			{
				return "Ha Ocurrido un Error. No Se Ha Podido Actualizar";
			}
			else
				return "Todo Ha salido Bien";
					
				
			
		}
	}

?>
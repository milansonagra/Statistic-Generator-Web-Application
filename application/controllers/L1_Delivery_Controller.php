<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class L1_Delivery_Controller extends CI_controller {

		public function index() {
			$this->load->view('Forms_for_input_data/Form_Delivery_View');
		}

		private function validation() {

			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('indoor_number','Indoor Number','required');
			$this->form_validation->set_rules('delivery_date','Delivery Date','required');
			$this->form_validation->set_rules('child_wight','Child Wight','required|less_than_equal_to[500]');
			$this->form_validation->set_rules('week_admit','Week Admit','required');
			$this->form_validation->set_rules('mobile_number','Mobie Number','required|exact_length[10]');
			$this->form_validation->set_rules('tifin_day','Number Of Tifin','required|number');
			$this->form_validation->set_rules('doctor','Doctor','required','Select the Doctor');
			$this->form_validation->set_rules('nurse','Nurse','required','Select the Nurse');
		}

		public function submit() {

			$this->validation();
			
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('Forms_for_input_data/Form_Delivery_View');
			}
			else {
				$this->load->model('Hospital_Model');
				$this->Hospital_Model->form_delivery();
				
				echo "Entered successfully!";
				$this->load->view('Forms_for_input_data/Form_Delivery_View');
			}
		}		
	}	
?>
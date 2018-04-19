<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class L1_Diagnosis_Controller extends CI_controller {

		private $feilds;

		public function index() {

			$GLOBALS['feilds'] = array(
				'indoor_number' => NULL
			);

			$this->load->view('Forms_for_input_data/Form_Diagnosis_View');
		}

		private function validation() {

			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('indoor_number','Indoor Number','required');
			$this->form_validation->set_rules('diag_detail','Diagnosis Detail','required');
			$this->form_validation->set_rules('doctor','Doctor','required','Select the Doctor');
			$this->form_validation->set_rules('nurse','Nurse','required','Select the Nurse');
		}

		public function submit() {

			$this->validation();

			$GLOBALS['feilds'] = arrray(
				'indoor_number' = $this->input->post('indoor_number')
			);

			if($this->form_validation->run() == FALSE) {
				$this->load->view('Forms_for_input_data/Form_Diagnosis_View',$feilds);
			}
			else {
				$this->load->model('Hospital_model');
				$this->Hospital_model->form_diagnosis_info();

				echo "Entered successfully!";
				$this->load->view('Forms_for_input_data/Form_Diagnosis_View');
			}
		}
	}
?>
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class L1_Discharge_Info_Controller extends CI_controller {

		private $feilds;

		public function __construct() {
			parent::__construct();

			$GLOBALS['feild'] = array(
				'indoor_number' => NULL,
				'remark' => NULL
			);
		}

		public function index() {

			$this->load->view('Forms_for_input_data/Form_Discharge_Info_View',$GLOBALS['feilds']);
		}

		private function validation() {

			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('indoor_number','Indoor Number','required|max_length[10]');
			$this->form_validation->set_rules('discharge_type','Diagnosis type','required');
			$this->form_validation->set_rules('d_t','Date and time','required');
		}

		public function submit() {

			$this->validation();

			$GLOBALS['feilds'] = array(
				'indoor_number' => $this->input->post('indoor_number'),
				'remark' => $this->input->post('remark')
			);
			
			if($this->form_validation->run() == FALSE) {
				$this->load->view('Forms_for_input_data/Form_Discharge_Info_View',$GLOBALS['feilds']);
			}
			else {
				$this->load->model('Hospital_Model');
				$this->Hospital_Model->form_discharge_information();

				echo "Entered successfully!";
				$this->load->view('Forms_for_input_data/Form_Discharge_Info_View');
			}
		}
	}
?>
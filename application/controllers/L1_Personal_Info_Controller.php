<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class L1_Personal_Info_Controller extends CI_controller {

		private $fields;

		public function __construct() {
			parent::__construct();
		
			$GLOBALS['fields'] = array(
				'serial_number' => NULL,
				'indoor_number' => NULL,
				'name' => NULL,
				'sex' => NULL,
				'age' => NULL,
				'cast' => NULL,
				'profession' => NULL,
				'address' => NULL,
				'd_t' => NULL,
				'108_in' => NULL,
				'remark' => NULL		
			);
		}

		public function index() {

			$this->load->view('Forms_for_input_data/Form_Personal_Information_View',$GLOBALS['fields']);

		}

		private function validation() {
			
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('serial_number','Serial Number','required|max_length[10]');
			$this->form_validation->set_rules('indoor_number','Indoor Number','required|max_length[10]');
			$this->form_validation->set_rules('name','Name','required|alpha');
			$this->form_validation->set_rules('age','Age','required|less_than_equal_to[370]|max_length[3]');
			$this->form_validation->set_rules('cast','Cast','required|alpha');
			$this->form_validation->set_rules('profession','Profession','required|alpha');
			$this->form_validation->set_rules('address','Address','required');
			$this->form_validation->set_rules('d_t','Date and time','required');

			$this->form_validation->set_rules('indoor_number','Indoor Number','required|max_length[10]');
			$this->form_validation->set_rules('diag_detail','Diagnosis Detail','required');
			$this->form_validation->set_rules('doctor','Doctor','required','Select the Doctor');
			$this->form_validation->set_rules('nurse','Nurse','required','Select the Nurse');
		}

		public function submit() {
			
			$this->validation();

			$GLOBALS['fields'] = array(
				'serial_number' => $this->input->post('serial_number'),
				'indoor_number' => $this->input->post('indoor_number'),
				'name' => $this->input->post('name'),
				'sex' => $this->input->post('sex'),
				'age' => $this->input->post('age'),
				'cast' => $this->input->post('cast'),
				'profession' => $this->input->post('profession'),
				'address' => $this->input->post('address'),
				'd_t' => $this->input->post('d_t'),
				'108_in' => $this->input->post('108_in'),
				'remark' => $this->input->post('remark')						
			);
						
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('Forms_for_input_data/Form_Personal_Information_View',$GLOBALS['fields']);
			}
			else {
				$this->load->model('Hospital_Model');
				$this->Hospital_Model->form_personal_information();
				
				echo "Entered successfully!";
				$this->load->view('Forms_for_input_data/Form_Personal_Information_View');
			}
		}
	}
?>
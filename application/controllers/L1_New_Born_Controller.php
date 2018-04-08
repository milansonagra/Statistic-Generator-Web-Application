<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class L1_New_Born_Controller extends CI_controller  {

		public function index() {

			$this->load->view('Forms_for_input_data/From_New_Born_View');
		}	

		private  function validation() {

			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('indoor_number','Indoor Number','required');
			$this->form_validation->set_rules('name','Name','required|alpha');
			$this->form_validation->set_rules('Diagnosis','Diagnosis','required');
			$this->form_validation->set_rules('age','Age','required');

		}	

		public function submit() {
			$this->validation();

			if($this->form_validation->run() == FALSE) {
				$this->load->view('Forms_for_input_data/From_New_Born_View');
			}
			else {
				$this->load->model('Hospital_Model');
				$this->Hospital_Model->form_new_born();

				echo "Entered successfully!";
				$this->load->view('Forms_for_input_data/From_New_Born_View');
			}
		}
	}
?>
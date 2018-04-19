<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class L1_New_Born_Controller extends CI_controller  {

		private $feilds;

		public function __construct() {
			parent::__construct();

			$GLOBALS['feilds'] = array(
				'indoor_number' => NULL,
				'name' => NULL,
				'age' => NULL,
				'remark' => NULL
			);
		}

		public function index() {

			$this->load->view('Forms_for_input_data/From_New_Born_View',$GLOBALS['feilds']);
		}	

		private  function validation() {

			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');

			$this->form_validation->set_rules('indoor_number','Indoor Number','required');
			$this->form_validation->set_rules('name','Name','required|alpha');
			$this->form_validation->set_rules('Diagnosis','Diagnosis','required');
			$this->form_validation->set_rules('age','Age','required|less_than_equal_to[370]');

		}	

		public function submit() {
			$this->validation();

			$GLOBALS['feilds'] = array(
				'indoor_number' => $this->input->post('indoor_number'),
				'name' => $this->input->post('name'),
				'age' => $this->input->post('age'),
				'remark' => $this->input->post('remark')
			);

			if($this->form_validation->run() == FALSE) {
				$this->load->view('Forms_for_input_data/From_New_Born_View',$GLOBALS['feilds']);
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
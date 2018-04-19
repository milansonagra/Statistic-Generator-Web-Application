<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class L1_Delivery_Controller extends CI_controller {

		private $feilds;

		public function __construct() {
			parent::__construct();

			$GLOBALS['feilds'] = array(
				'indoor_number' => NULL,
				'child_wight' => NULL,
				'week_admit' => NULL,
				'mobile_number' => NULL,
				'tifin_day' => NULL,
				'tifin_noon' => NULL,
				'tifin_night' => NULL,
				'sweeperservent' => NULL,
				'ashaworker' => NULL,
				'remark' => NULL
			);
		}

		public function index() {
			
			$this->load->view('Forms_for_input_data/Form_Delivery_View',$GLOBALS['feilds']);
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
			$this->form_validation->set_rules('tifin_noon','Number Of Tifin','required|number');
			$this->form_validation->set_rules('tifin_night','Number Of Tifin','required|number');
			$this->form_validation->set_rules('doctor','Doctor','required','Select the Doctor');
			$this->form_validation->set_rules('nurse','Nurse','required','Select the Nurse');
		}

		public function submit() {

			$this->validation();
			
			$GLOBALS['feilds'] = array(
				'indoor_number' => $this->input->post('indoor_number'),
				'child_wight' => $this->input->post('child_wight'),
				'week_admit' => $this->input->post('week_admit'),
				'mobile_number' => $this->input->post('mobile_number'),
				'tifin_day' => $this->input->post('tifin_day'),
				'tifin_noon' => $this->input->post('tifin_noon'),
				'tifin_night' => $this->input->post('tifin_night'),
				'sweeperservent' => $this->input->post('sweeperservent'),
				'ashaworker' => $this->input->post('ashaworker'),
				'remark' => $this->input->post('remark')
			);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('Forms_for_input_data/Form_Delivery_View',$GLOBALS['feilds']);
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
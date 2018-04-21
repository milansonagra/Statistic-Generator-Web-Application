<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Hospital_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->db->query('USE hospital');
	}	
	private function insert($table_name,$data) {

		$this->db->insert($table_name,$data);	
	}

	public function count_age($age,$age_in) {
		if($age_in == 'Y'){
			$age *= 365;
		}
		return $age;
	}

	public function form_personal_information() {
		$pimary_info = array(
			'SERIAL_NUMBER' => $this->input->post('serial_number'),
			'INDOOR_NUMBER' => $this->input->post('indoor_number'),
			'NAME' => $this->input->post('name'),
			'SEX' => $this->input->post('sex'),
			'AGE' => $this->count_age($this->input->post('age'),$this->input->post('age_in')),
			'CAST' => $this->input->post('cast'),
			'PROFESSION' => $this->input->post('profession'),
			'ADDRESS' => $this->input->post('address'),
			'108IN' => $this->input->post('108_in') == 'yes'?'yes':'no',
			'OPERATOR_NUMBER' => $this->session->userdata('user_id'),
			'UPDATE_DATE_TIME' => date("Y-m-d h:i:sa")
		);
		$this->insert('personal_information',$pimary_info);

		$primary_indoor_info = array(
			'ID_NUMBER' => 1,
			'INDOOR_NUMBER' => $this->input->post('indoor_number'),
			'ADMISSION_DATE_TIME' => $this->input->post('d_t'),
			'DIAGNOSIS_NUMBER' => 12,
			'REMARK' => $this->input->post('remark'),
			'OPERATOR_NUMBER' => $this->session->userdata('user_id'),
			'UPDATE_DATE_TIME' => date("Y-m-d h:i:sa")
		);
		$this->insert('primary_indoor_info',$primary_indoor_info);

		$diagnisis_info = array(
			'ID_NUMBER' => 1,
			'INDOOR_NUMBER' => $this->input->post('indoor_number'),
			'DIAGNOSIS_NUMBER' => 123,
			'DIAGNOSIS_DETAIL' => $this->input->post('diag_detail'),
			'DOCTOR_NUMBER' => $this->input->post('doctor'),
			'NURSSING_STAFF_NUMBER' => $this->input->post('nurse'),
			'REMARK' => $this->input->post('remark'),
			'OPERATOR_NUMBER' => $this->session->userdata('user_id'),
			'UPDATE_DATE_TIME' => date("Y-m-d h:i:sa")
		);
		$this->insert('diagnosis',$diagnisis_info);
	}

	public function form_new_born() {
		$new_born = array(
			'ID_NUMBER' => 1,
			'INDOOR_NUMBER' => $this->input->post('indoor_number'),
			'MC_NUMBER' => 2,
			'NAME' => $this->input->post('name'),
			'DIAGNOSIS_NUMBER' => $this->input->post('Diagnosis'),
			'REMARK' => $this->input->post('remark'),
			'OPERATOR_NUMBER' => $this->session->userdata('user_id'),
			'UPDATE_DATE_TIME' => date("Y-m-d h:i:sa")
		);
		$this->insert('new_born',$new_born);
	}

	public function form_delivery() {
		$delivery = array(
			'ID_NUMBER' => 1,
			'INDOOR_NUMBER' => $this->input->post('indoor_number'),
			'DATE_FO_DELIVERY' => $this->input->post('delivery_date'),
			'TYPE_OF_DELIVERY' => $this->input->post('delivery_type'),
			'MC_NUMBER' => 1,
			'CHILD_SEX' => $this->input->post('sex'),
			'CHILD_WIGHT' => $this->input->post('child_wight'),
			'WEEK_OF_ADMIT' => $this->input->post('week_admit'),
			'MOBILE_NUMBER' => $this->input->post('mobile_number'),
			'NUMBER_OF_TIFIN_DAY' => $this->input->post('tifin_day'),
			'NUMBER_OF_TIFIN_NOON' => $this->input->post('tifin_noon'),
			'NUMBER_OF_TIFIN_NIGHT' => $this->input->post('tifin_night'),
			'DOCTOR_NUMBER' => $this->input->post('doctor'),
			'NURSSING_STAFF_NUMBER' => $this->input->post('nurse'),
			'SWEEPER_SERVENT' => $this->input->post('sweeperservent'),
			'ASHA_WORKER' => $this->input->post('ashaworker'),
			'REMARK' => $this->input->post('remark'),
			'OPERATOR_NUMBER' => $this->session->userdata('user_id'),
			'UPDATE_DATE_TIME' => date("Y-m-d h:i:sa")
		);
		$this->insert('delivery',$delivery);
	}

	public function form_discharge_information() {
		$discharge_info = array(
			'ID_NUMBER' => 1,
			'INDOOR_NUMBER' => $this->input->post('indoor_number'),
			'DISCHARGE_TYPE' => $this->input->post('discharge_type'),
			'DISCHARGE_DATE_TIME' => $this->input->post('d_t'),
			'108OUT' => $this->input->post('108_out') == 'yes'?'yes':'no',
			'OPERATOR_NUMBER' => $this->session->userdata('user_id'),
			'UPDATE_DATE_TIME' => date("Y-m-d h:i:sa")
		);
		$this->insert('discharge_information',$discharge_info);
	}
}
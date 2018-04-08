<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Hospital_Model extends CI_Model {
	
	private function insert($table_name,$data) {

		$this->load->database();
		$this->db->query('USE hospital');
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
			'OPERATOR_NUMBER' => 123,
			'UPDATE_DATE_TIME' => date("Y-m-d h:i:sa")
		);
		
		$this->insert('personal_information',$pimary_info);

		$primary_indoor_info = array(
			'INDOOR_NUMBER' => $this->input->post('indoor_number'),
			'ADMISSION_DATE_TIME' => $this->input->post('d_t'),
			'DIAGNOSIS_NUMBER' => 12,
			'REMARK' => $this->input->post('remark'),
			'OPERATOR_NUMBER' => 123,
			'UPDATE_DATE_TIME' => date("Y-m-d h:i:sa")
		);
		$this->insert('primary_indoor_info',$primary_indoor_info);
	}

	public function form_diagnosis_info() {
		$diagnisis_info = array(
			'INDOOR_NUMBER' => $this->input->post('indoor_number'),
			'DIAGNOSIS_NUMBER' => 123,
			'DIAGNOSIS_DETAIL' => $this->input->post('diag_detail'),
			'DOCTOR_NUMBER' => $this->input->post('doctor'),
			'NURSSING_STAFF_NUMBER' => $this->input->post('nurse'),
			'REMARK' => $this->input->post('remark'),
			'OPERATOR_NUMBER' => 123,
			'UPDATE_DATE_TIME' => date("Y-m-d h:i:sa")
		);
		$this->insert('diagnosis',$diagnisis_info);
	}

	public function form_new_born() {
		$new_born = array(
			'INDOOR_NUMBER' => $this->input->post('indoor_number'),
			'MC_NUMBER' => 2,
			'NAME' => $this->input->post('name'),
			'DIAGNOSIS_NUMBER' => $this->input->post('Diagnosis'),
			'REMARK' => $this->input->post('remark'),
			'OPERATOR_NUMBER' => 123,
			'UPDATE_DATE_TIME' => date("Y-m-d h:i:sa")
		);
		$this->insert('new_born',$new_born);
	}

	public function form_discharge_information() {
		$discharge_info = array(
			'INDOOR_NUMBER' => $this->input->post('indoor_number'),
			'DISCHARGE_TYPE' => $this->input->post('discharge_type'),
			'DISCHARGE_DATE_TIME' => $this->input->post('d_t'),
			'108OUT' => $this->input->post('108_out') == 'yes'?'yes':'no',
			'OPERATOR_NUMBER' => 123,
			'UPDATE_DATE_TIME' => date("Y-m-d h:i:sa")
		);
		$this->insert('discharge_information',$discharge_info);
	}
}
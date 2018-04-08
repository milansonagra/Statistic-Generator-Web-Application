<?php
class Temp extends CI_Controller {
	public function index() {
		echo "hi -1 ";
		$this->load->view('Temp');
	}
	public function fun() {
		echo "hello - 2-";
				$d = $this->input->post('a');
echo "<pre>";
	print_r($d);
		echo "</pre>";
	}
}
?>
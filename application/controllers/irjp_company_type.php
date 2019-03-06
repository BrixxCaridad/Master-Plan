<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class irjp_company_type extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->load->model('company_model');
	  }
	public function index()
	{
		$this->load->model('company_model');
		if(isset($_GET['type_query']) && $_GET['type_query']!=''){
			$type = $this->company_model->search_type($_GET['type_query']);
			foreach ($type as $t) {
				$hold = array(
					'Type_No' => $t['Type_No'],
					'Type' => $t['Type']
				);
				$hold2[] = $hold;
			}
			$data["type"] = $hold2;
		}
		else
		{
			$type = $this->company_model->all_type();
			foreach ($type as $t) {
				$hold = array(
					'Type_No' => $t['Type_No'],
					'Type' => $t['Type']
				);
				$hold2[] = $hold;
			}
			$data["type"] = $hold2;
		}
		$headerdata['title'] = "SITA | Types of Company";
		$this->load->view('include/header', $headerdata);
			$this->load->view('include/ficnavbar2');
		$this->load->view('irjp/type',$data);
		$this->load->view('include/footer');
	}
	function get_type_no(){
		$no = $this->company_model->get_ai_type();
		foreach($no as $n){
			$hold = array(
				'AI' => $n['AUTO_INCREMENT']
			);
			$hold2[] = $hold;
		}
		$data['ai'] = $hold2;
		// print_r($no);
		echo json_encode($no);
	}
	function add_type(){
		$type_no = $this->input->post('type_no');
		$type = $this->input->post('type');
		$this->company_model->create_type($type_no,$type);
  }
	function delete_type(){
		$type_no = $this->input->post('type_no');
		$this->company_model->delete_type($type_no);
	}
	function get_type(){
		$type_no = $this->input->post('type_no');
		$type = $this->company_model->get_type($type_no);
		foreach ($type as $t) {
			$hold = array(
				'Type_No' => $t['Type_No'],
				'Type' => $t['Type']
			);
			$hold2[] = $hold;
		}
		$data["type"] = $hold2;
		echo json_encode($data);
	}

	function edit_type(){
		$type_no = $this->input->post('type_no');
		$type = $this->input->post('type');
		$this->company_model->edit_type($type_no,$type);
  }
}

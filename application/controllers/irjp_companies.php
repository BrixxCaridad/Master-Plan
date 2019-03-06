<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class irjp_companies extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->load->model('company_model');
	  }
	public function index()
	{
		$this->load->model('company_model');
		if(isset($_GET['comp_query']) && $_GET['comp_query']!=''){
			$data["display_company"] = $this->company_model->search_company($_GET['comp_query']);
		}
		else
		{
			$data["display_company"] = $this->company_model->display_company();
		}
		$type = $this->company_model->all_type();
		foreach ($type as $t) {
			$hold = array(
				'Type_No' => $t['Type_No'],
				'Type' => $t['Type']
			);
			$hold2[] = $hold;
		}
		$data["type"] = $hold2;
		// $data["display_nature"] = $this->company_model->display_nature();
		// $data["display_btype"] = $this->company_model->display_btype();
		$headerdata['title'] = "SITA | Companies";
		$this->load->view('include/header', $headerdata);
			$this->load->view('include/ficnavbar2');
		$this->load->view('irjp/companies',$data);		
		$this->load->view('include/footer');
	}
	function add_company(){
		$code = $this->input->post('code');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$tel = $this->input->post('tel');
		$new_type = $this->input->post('new_type');
		$this->company_model->create_company($code,$name,$address,$tel);
		for($a=0;$a<count($new_type);$a++){
			$this->company_model->create_classification($code,$new_type[$a]);
		}
  }
	function get_company(){
		$code = $this->input->post('code');
		$comp = $this->company_model->get_company($code);
		$type = $this->company_model->get_company_classification($code);
		foreach($comp as $d){
			$hold = array(
			'Company_Code' => $d['Company_Code'],
			'Company_Name' => $d['Company_Name'],
			'Company_Address' => $d['Company_Address'],
			'Company_Phone' => $d['Company_Phone'],
		);
		$hold2[] = $hold;
		}
		$data['company'] = $hold2;
		foreach ($type as $t) {
			$hold3 = array(
				'Type_No' => $t['Type_No'],
				'Type' => $t['Type']
			);
			$hold4[] = $hold3;
		}
		$data["type"] = $hold4;
		$type_all = $this->company_model->all_type();
		foreach ($type_all as $t) {
			$hold5 = array(
				'Type_No' => $t['Type_No'],
				'Type' => $t['Type']
			);
			$hold6[] = $hold5;
		}
		$data["type_all"] = $hold6;
		echo json_encode($data);
	}

	function get_available_type(){
		$type = $this->company_model->all_type();
		foreach ($type as $t) {
			$hold = array(
				'Type_No' => $t['Type_No'],
				'Type' => $t['Type']
			);
			$hold2[] = $hold;
		}
		$data["type"] = $hold2;
		echo json_encode($hold2);
	}
	function delete_company(){
		$code = $this->input->post('code');
		$this->company_model->delete_company($code);
	}
	function edit_company(){
		$code = $this->input->post('code');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$tel = $this->input->post('tel');
		$new_type = $this->input->post('new_type');
		$this->company_model->edit_company($code,$name,$address,$tel);
		$this->company_model->delete_classification($code);
		for($a=0;$a<count($new_type);$a++){
			$this->company_model->create_classification($code,$new_type[$a]);
		}
  }
}

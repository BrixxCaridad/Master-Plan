<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class type_search extends CI_Controller {


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
}

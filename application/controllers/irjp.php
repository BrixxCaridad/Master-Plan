<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class irjp extends CI_Controller {

	
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('sita/irjp');
	}

	public function company()
	{
		$this->load->model('company_model');
		if(isset($_GET['action'])){
			if($_GET['action']=='add'){
				$company_info = array(
					'comp_name'=>$_POST['comp_name'],
					'comp_telno'=>$_POST['comp_telno'],
					'comp_add'=>$_POST['comp_add'],
					'nature'=>$_POST['nature'],
					'btype_id'=>$_POST['btype']
				);
				$this->company_model->add_company($company_info);
				redirect(base_url('companies'),'refresh');
			}
		}
	}

}

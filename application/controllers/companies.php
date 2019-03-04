<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class companies extends CI_Controller {


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
		// $data["display_nature"] = $this->company_model->display_nature();
		// $data["display_btype"] = $this->company_model->display_btype();
		$headerdata['title'] = "SITA | Companies";
		$this->load->view('include/header', $headerdata);
		$this->load->view('include/navbar2');
		$this->load->view('sita/companies',$data);
		$this->load->view('include/footer');
	}
}

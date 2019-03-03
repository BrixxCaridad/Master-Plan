<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class depinfo extends CI_Controller {

	public function index()
	{
		$this->load->model('sita_model');
		$data["display_dep"] = $this->sita_model->display_dep();
		$headerdata['title'] = "SITA | Deployment Information";
		$this->load->view('include/header',$headerdata);		
		$this->load->view('include/navbar2');
		$this->load->view('sita/depinfo',$data);
	}
	
	public function delete($id)
	{
		$this->load->model('sita_model');
		$this->sita_model->delete_dep_byid($id);	
		redirect(base_url() . "depinfo");
	}
	
	public function edit($id)
	{
		$this->load->model('sita_model');
		$data["display_dep"] = $this->sita_model->display_dep_byid($id);				
		$headerdata['title'] = "SITA | Deployment Info Update";
		$this->load->view('include/header',$headerdata);
		$this->load->view('include/navbar2');
		$this->load->view('sita/update_depinfo',$data);
	}
	
	public function update()
	{
		$this->load->model('sita_model');
		//find company code
		$dep_info=array(
			//'Company_Code' => $_POST['add_depcomp'],
			'Date_Deployed' => $_POST['add_datedep'],
			'Date_Ending' => $_POST['add_endtrain'],
			'Visit_Date' => $_POST['add_datevisit'],
			'Status' => $_POST['add_status']
		);
		$this->sita_model->update_dep_byid($_POST['id'],$dep_info);	
		redirect(base_url() . "depinfo");
	}
	
	
	
	
	// public function view_dep()
	// {
		// $this->load->model('dep_info_model');
		
		// $data["view_dep"] = $this->dep_info_model->view_dep();
		
		// $this->load->view('include/header');
		// $this->load->view('include/navbar2');
		// $this->load->view('sita/depinfo',$data);
		// $this->load->view('include/footer');
	// }
	
	
	
}

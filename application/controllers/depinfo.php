<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class depinfo extends CI_Controller {

	public function index()
	{
		$this->load->model('sita_model');
		$data["display_dep"] = $this->sita_model->display_dep();		
		$this->load->view('include/header');
		$this->load->view('include/navbar2');
		$this->load->view('sita/depinfo',$data);
	}
	
	public function delete_data()
	{
		$id = $this->uri->segment(3);
		$this->load->model('dep_info_model');
		
		$this->dep_info_model->delete_data($id);
		
		redirect(base_url() . "depinfo");
	}
	
	public function edit($id)
	{
		$this->load->model('sita_model');
		$data["display_dep"] = $this->sita_model->display_dep_byid($id);				
		$this->load->view('include/header');
		$this->load->view('include/navbar2');
		$this->load->view('sita/update_depinfo',$data);
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

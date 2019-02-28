<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class depinfo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		
		
		$this->load->model('dep_info_model');
		
		$data["display_dep"] = $this->dep_info_model->display_dep();		
		$this->load->view('include/header');
		$this->load->view('include/navbar2');
		$this->load->view('sita/depinfo',$data);
		$this->load->view('include/footer');
		
		
		//$this->load->view('include/footer');
	}
	
	public function delete_data()
	{
		$id = $this->uri->segment(3);
		$this->load->model('dep_info_model');
		
		$this->dep_info_model->delete_data($id);
		
		redirect(base_url() . "depinfo");
	}
	
	public function view_dep()
	{
		$id = $this->uri->segment(3);
		$this->load->model('dep_info_model');
		
		$this->dep_info_model->view_dep($id);
		
		
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

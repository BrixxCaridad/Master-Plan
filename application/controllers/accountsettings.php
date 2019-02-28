<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accountsettings extends CI_Controller {

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
		// $this->load->view('include/header');
		// $this->load->view('sita/accountsettings');
		
		
		$this->load->model('accountsettings_model');
		
		$data["display_info"] = $this->accountsettings_model->display_info();		
		$this->load->view('include/header');
		$this->load->view('include/navbar2');
		$this->load->view('sita/accountsettings',$data);
		$this->load->view('include/footer');
		
		//$this->load->view('include/footer');
	}
}

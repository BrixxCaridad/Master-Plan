<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_login extends CI_Controller {
 
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
	// public function __construct() {
	// 	parent::__construct();
	
	// 	$this->load->model('users_model');
	// }

	// public function index()
	// {
	// 	$users = $this->users_model->get_usersstud();
	// 	$this->load->view('include/header');
	// 	$this->load->view('sita/slogin');
	// 	//$this->load->view('include/footer');
		
	// 	//print_r($users);
	// }

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('login_model');
	}

	public function index()
	{
		
		$this->load->view('include/header');
		$this->load->view('sita/adminlogin');
		//$this->load->view('include/footer');
		
		//print_r($users);
	}
	
}	

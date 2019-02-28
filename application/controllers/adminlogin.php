<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminlogin extends CI_Controller {

	public function __construct() {
		parent::__construct();
	
		$this->load->model('users_model');
	}

	public function index()
	{
		$users = $this->users_model->get_usersfic();
		$this->load->view('include/header');
		$data['title'] = 'SITA | Admin Login';
		$this->load->view('sita/adminlogin', $data);
		//$this->load->view('include/footer');
		
		//print_r($users);
	}

	public function login()
	{
		$data['title'] = 'SITA | Admin Login';
		$this->load->view("adminlogin", $data);
		if($this->session->userdata('fic_uname') !='')
		{
			$this->load->view('include/header');
			$this->load->view('sita/adminlogin');
		}
		else
		{
			redirect(base_url . 'adminlogin/login');
		}
	}

	function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fic_uname', 'fic_uname', 'required');
		$this->form_validation->set_rules('fic_password', 'fic_password', 'required');
		if($this->form_validation->run())
		{
			$fic_uname = $this->input->post('fic_uname');
			$fic_password = $this->input->post('fic_password');

			$this->load->model('Users_model' );
			if($this->Users_model->login($fic_uname, $fic_password))
			{
				$session_data = array('fic_uname' => $fic_uname);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'adminlogin/enter');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid username or Password');
				redirect(base_url() . 'adminlogin/login');
			}
		}
		else
		{
			$this->login();
		}
	}

	function enter()
	{
		if($this->session->userdata('username') !='')
		{
			$this->load->view('include/header');
			$this->load->view('sita/adminlogin');
		}
		else
		{
			redirect(base_url . 'adminlogin/login');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('fic_uname');
		redirect(base_url() . 'adminlogin/login');
	}
}

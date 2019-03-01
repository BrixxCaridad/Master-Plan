<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/navbar2');  
		$this->load->view('sita/dashboard');
		//$this->load->view('include/footer');
	}

	public function calendar()
	{
		$this->load->view('include/header');
		$this->load->view('sita/calendar');
		
		//$this->load->view('include/footer');
	}
}

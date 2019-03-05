<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forms extends CI_Controller {

	public function index()
	{
		redirect(base_url('requirements'),'refresh');
	}

	function guideline()
	{
		$this->load->view('include/header');
		$this->load->view('printables/irjpform_1');
	}
	function waiver()
	{
		$this->load->view('include/header');
		$this->load->view('printables/waiver');
	}
	function application()
	{
		$this->load->view('include/header');
		$this->load->view('printables/application');
	}
	function reqplacement()
	{
		$this->load->view('include/header');
		$this->load->view('printables/req_placement');
	}
}

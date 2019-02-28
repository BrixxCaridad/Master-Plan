<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class error extends CI_Controller {

	public function index()
	{
		$headerdata['title'] = "SITA | Error Page";
		$this->load->view('include/header',$headerdata);
		$this->load->view('sita/error_page');
		$this->load->view('include/footer');
	}
}

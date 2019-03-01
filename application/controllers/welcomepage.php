<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcomepage extends CI_Controller {
 
 	public function __construct(){
		parent::__construct();
		$this->load->model('sita_model','sita');

	}
	public function index()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
			redirect(base_url('dashboard'), 'refresh');			
		}
		$this->load->view('include/header');
		$this->load->view('sita/login');
	}
}

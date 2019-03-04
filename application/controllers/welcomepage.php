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
			if($this->session->userdata('account_type')=='Faculty')
			{
				redirect(base_url('fic'), 'refresh');			
			}
			else{
				redirect(base_url('dashboard'), 'refresh');			
			}
		}
		$this->load->view('include/header');
		$this->load->view('sita/login');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class irjpform_1 extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header');
		$data['student_name']='FELIX SIMON BARREDO';
		$data['course']='BSIT';
		$this->load->view('printables/irjpform_1',$data);
	}
}

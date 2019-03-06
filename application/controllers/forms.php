<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forms extends CI_Controller {
	 public function __Construct() {
        parent::__Construct();     
     
       	$this->load->model('student_model','student');
    } 

	public function index()
	{
		// Array ( [0] => Array ( [Student_ID] => 15-023-087 [Course_Code] => BSIT [Access_Level_Code] => STUD [Student_Lastname] => Balot [Student_Firstname] => Erwin [Student_Middlename] => Brown [Password] => 12345678 [Cellphone] => 09261524172 [Civil_Stat] => Single [Religion] => Catholic [Telephone] => 123213 [Major] => [Address] => 1232 manila [Sex] => Male [Age] => 19 ) )
		redirect(base_url('requirements'),'refresh');
	}

	public function placement()
	{
		$data['detail'] = $this->student->get_student();
		$headerdata['title'] = "SITA | Placement";
		$this->load->view('include/header',$headerdata);
		$this->load->view('printables/recommendation', $data);
	}

	function guideline()
	{
		$data['detail'] = $this->student->get_student();
		$header['title'] = 'IRJP Form';
		$this->load->view('include/header',$header);
		$this->load->view('printables/irjpform_1',$data);
	}
	function waiver()
	{
		$data['detail'] = $this->student->get_student();
	    $header['title'] = 'Waiver';
		$this->load->view('include/header',$header);
		$this->load->view('printables/waiver',$data);
	}
	function application()
	{
			$header['title'] = 'application';
			$data['detail'] = $this->student->get_student();
		$this->load->view('include/header',$header);
		
		$this->load->view('printables/application',$data);
	}
	function reqplacement()
	{
			$header['title'] = 'replacement';
			$data['detail'] = $this->student->get_student();
		$this->load->view('include/header',$header);
		
		$this->load->view('printables/req_placement',$data);
	}
}

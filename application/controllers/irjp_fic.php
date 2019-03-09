<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class irjp_fic extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	    // $this->load->model('irjp_fic_visit');
			$this->load->model('company_model');
	  }
	public function index()
	{
		if(isset($_GET['search_query']) && $_GET['search_query']!=''){
			// $visit = $this->company_model->search_visit($_GET['search_query']);
			$visit = $this->company_model->search_fic($_GET['search_query']);
		}
		else
		{
			$fic = $this->company_model->get_all_fic();
		}
		foreach ($fic as $v) {
			$hold = array(
				'Faculty_ID' => $v['Faculty_ID'],
				'Faculty_Name' => $v['Faculty_Lastname'].', '.$v['Faculty_Firstname'],
			);
			$hold2[] = $hold;
		}
		$data["fic"] = $hold2;
		// $data["display_nature"] = $this->company_model->display_nature();
		// $data["display_btype"] = $this->company_model->display_btype();
		$headerdata['title'] = "SITA | Facut in Charge";
		$this->load->view('include/header', $headerdata);
			$this->load->view('include/ficnavbar2');
		$this->load->view('irjp/fic',$data);
		$this->load->view('include/footer');
	}
	public function fic_students($id){
		$fic = $this->company_model->get_fic_student($id);
		foreach ($fic as $v) {
			$hold = array(
				// 'Faculty_ID' => $v['Faculty_ID'],
				// 'Faculty_Name' => $v['Faculty_Lastname'].', '.$v['Faculty_Firstname'],
				'Sit_No' => $v['Sit_No'],
				'Company_Name' => $v['Company_Name'],
				'Faculty_ID' => $v['Faculty_ID'],
				'Visit' => $v['Visit_Date'],
				'Faculty_Name' => $v['Faculty_Lastname'].', '.$v['Faculty_Firstname'],
				'Student_ID' => $v['Student_ID'],
				'Student_Name' => $v['Student_Lastname'].', '.$v['Student_Lastname']
			);
			$hold2[] = $hold;
		}
		if(isset($hold2)){
			$data["sit"] = $hold2;
		} else{
			$data["sit"] = null;
		}
		$headerdata['title'] = "SITA | Facut in Charge";
		$this->load->view('include/header', $headerdata);
		$this->load->view('include/ficnavbar2');
		$this->load->view('irjp/fic_students',$data);
		$this->load->view('include/footer');
	}
}

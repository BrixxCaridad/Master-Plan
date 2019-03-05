<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ficaccountcon extends CI_Controller {
public function __Construct() {
        parent::__Construct();     
      
$this->load->model('Requirements_model','requirements');
    
    } 
	public function index()
	{
		$this->load->model('faculty_model');
		$data["display_info"] = $this->faculty_model->get_info_by_id($_SESSION['account_id']);
		$data["display_college"] = $this->faculty_model->get_college($_SESSION['account_id']);
		 $data['requirements'] = $this->requirements->withReq($_SESSION['account_id']);
           $data['menu'] =count($data['requirements']);
		$this->load->view('include/header');
		$this->load->view('include/ficnavbar2',$data);
		$this->load->view('fic/ficaccount',$data);	
		//$this->load->view('include/footer');
	}

	public function edit_personalinfo()
	{
		if(isset($_POST['pass']) && $_POST['pass']!=''){
			$newinfo = array(
				'Faculty_Lastname' => $_POST['lname'],
				'Faculty_Firstname' => $_POST['fname'],
				'Faculty_Middlename' => $_POST['mname'],
				'College_Code' => $_POST['coll'],
				'Password' => $_POST['pass']
			);
		}
		else{
			$newinfo = array(
				'Faculty_Lastname' => $_POST['lname'],
				'Faculty_Firstname' => $_POST['fname'],
				'Faculty_Middlename' => $_POST['mname'],
				'College_Code' => $_POST['coll']
			);
		}
		$this->load->model('faculty_model');
		$this->faculty_model->update_info_by_id($_SESSION['account_id'],$newinfo);
		redirect(base_url('ficaccountcon'),'refresh');
	}
	
	
	
}

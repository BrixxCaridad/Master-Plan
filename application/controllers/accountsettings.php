<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accountsettings extends CI_Controller {


	public function index()
	{
		$this->load->model('sita_model');
		$data["display_info"] = $this->sita_model->display_studentinfo_byid($_SESSION['account_id']);
		$headerdata['title'] = "SITA | Account Settings";		
		$this->load->view('include/header',$headerdata);
		$this->load->view('include/navbar2');
		$this->load->view('sita/accountsettings',$data);
		$this->load->view('include/footer');
	}

	public function personalinfo()
	{
		$this->load->model('sita_model');
		$data["display_info"] = $this->sita_model->display_studentinfo_byid($_SESSION['account_id']);	
		$header['title'] = 'Account Settings';
		$this->load->view('include/header',$header);
		$this->load->view('include/navbar2');
		$this->load->view('sita/personalinfo',$data);
		//$this->load->view('include/footer');
	}

	public function edit_personalinfo()
	{
		$this->load->model('sita_model');
		if(isset($_POST)){
			$studentinfo = array(
				'Student_Firstname'=>$_POST['s_fname'],
				'Student_Lastname'=>$_POST['s_lname'],
				'Student_Middlename'=>$_POST['s_mname'],
				'Birthday'=>$_POST['s_birthday'],
				'Cellphone'=>$_POST['s_cellphone'],
				'Civil_Stat'=>$_POST['s_status'],
				'Religion'=>$_POST['s_religion'],
			);
			$this->sita_model->update_studentinfo_byid($_SESSION['account_id'],$studentinfo);	
			redirect(base_url('accountsettings'),'refresh');
		}
	}
}

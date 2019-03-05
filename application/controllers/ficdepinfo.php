<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ficdepinfo extends CI_Controller {
public function __Construct() {
        parent::__Construct();     
      
$this->load->model('Requirements_model','requirements');
    
    } 
	public function index()
	{
		$this->load->model('faculty_model');
		if(isset($_SESSION['account_type'])){
			if($_SESSION['account_type']=='Student'){
				$data["display_dep"] = $this->faculty_model->display_dep_byfic($_SESSION['account_id']);	
			}
			elseif($_SESSION['account_type']=='Faculty'){
				$data["display_dep"] = $this->faculty_model->display_dep_byfic($_SESSION['account_id']);	
			}
		}	
		else{
			$data["display_dep"] = $this->faculty_model->display_dep_byfic();	
		}
		  $data['requirements'] = $this->requirements->withReq($_SESSION['account_id']);
           $data['menu'] =count($data['requirements']);
		$this->load->view('include/header');
        $this->load->view('include/ficnavbar2',$data); 
		$this->load->view('fic/ficdepinfo',$data);
	}
	
	public function delete($id)
	{
		$this->load->model('faculty_model');
		$this->faculty_model->delete_dep_byid($id);	
		redirect(base_url() . "ficdepinfo");
	}
	
	public function edit($id)
	{
		$this->load->model('faculty_model');
		
		$data["display_company"] = $this->faculty_model->display_company();
		$data["display_dep"] = $this->faculty_model->display_dep_byid($id);				
		$this->load->view('include/header');
        $this->load->view('include/ficnavbar2'); 
		$this->load->view('sita/update_depinfo',$data);
	}
	
	public function update()
	{
		$this->load->model('faculty_model');
		//find company code
		$dep_info=array(
			'Company_Code' => $_POST['com'],
			'Date_Deployed' => $_POST['add_datedep'],
			'Date_Ending' => $_POST['add_endtrain'],
			'Visit_Date' => $_POST['add_datevisit'],
			'Status' => $_POST['add_status']
		);
		$this->faculty_model->update_dep_byid($_POST['id'],$dep_info);	
		redirect(base_url() . "ficdepinfo");
	}
	
	
	
	
	// public function view_dep()
	// {
		// $this->load->model('dep_info_model');
		
		// $data["view_dep"] = $this->dep_info_model->view_dep();
		
		// $this->load->view('include/header');
		// $this->load->view('include/navbar2');
		// $this->load->view('sita/depinfo',$data);
		// $this->load->view('include/footer');
	// }
	
	
	
}

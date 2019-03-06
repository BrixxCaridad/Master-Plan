<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ficgpscon extends CI_Controller {
public function __Construct() {
        parent::__Construct();     
      
$this->load->model('Requirements_model','requirements');
    
    } 
	public function index()
	{

 $data['requirements'] = $this->requirements->withReq($_SESSION['account_id']);
        $data['menu'] =count($data['requirements']);
		$this->load->view('include/header'); 
		$this->load->view('include/ficnavbar2',$data);
		$this->load->view('fic/ficgps');
	}
	
	
	
}

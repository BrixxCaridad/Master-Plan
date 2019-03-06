<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ficemailcon extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public function __Construct() {
        parent::__Construct();     
        /*if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }

        if($this->session->userdata('role') != 'admin' && ('role') == 'admin' ){
            redirect(base_url());
        }*/
		$this->load->model('faculty_model','ficm');
        $this->load->model('Requirements_model','requirements');
       	$this->load->model('course_model','course');
       	$this->load->model('Requirement_status','status');
    } 
	
	public function index()
	{
		$data['data'] = $this->requirements->withReq($_SESSION['account_id']);
		$data['menu'] =count($data['data']);
		$data['req'] = $this->requirements->read_req();
		$data['courses'] = $this->course->get_course();
		$this->load->view('include/header');
	    $this->load->view('include/ficnavbar2',$data); 
		$this->load->view('fic/ficemail',$data);
		
		//$this->load->view('include/footer');
	}
	function Student_Status(){
		echo json_encode($this->status->read_status($_POST));
	}
	
	
	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {


	public function __Construct() {
        parent::__Construct();     
        $this->load->model('faculty_model');
      
    } 

    public function index()
	{
		$data = array(
            /*'formTitle' => 'Deployment Information',
            'title' => 'Deployment Information',*/
            'users' => $this->faculty_model->get_student_list(),
            //'type' => $this->irjp_model->get_student_num(),
        );

		$this->load->view('include/header');
		$this->load->view('fic/ficdashboard',$data);

		
		//$this->load->view('include/footer');
	}

	function accountsettings(){
        $this->ajax_checking();


        $postData = $this->input->post();
        $insert = $this->faculty_model->add_student($postData);
        if($insert['status'] == 'success')
            $this->session->set_flashdata('success', 'Student '.$postData['s_lname'].' has been successfully added!');

        echo json_encode($insert);
    }
}

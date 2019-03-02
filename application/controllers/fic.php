<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fic extends CI_Controller {

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

	function add_student(){
        $this->ajax_checking();


        $postData = $this->input->post();
        $insert = $this->faculty_model->add_student($postData);
        if($insert['status'] == 'success')
            $this->session->set_flashdata('success', 'Student '.$postData['s_lname'].' has been successfully added!');

        echo json_encode($insert);
    }


    function update_student_details(){
        $this->ajax_checking();

        $postData = $this->input->post();
        $update = $this->faculty_model->edit_student_details($postData);
        if($update['status'] == 'success')
            $this->session->set_flashdata('success', 'Student '.$postData['s_lname'].'`s details have been successfully updated!');

        echo json_encode($update);
    }


    function deactivate_client($comp_id,$comp_name){
        $this->ajax_checking();
        $update = $this->faculty_model->archive_company($comp_name,$comp_id);

        $comp_name=str_replace("%20"," ",$comp_name);
        $comp_name=str_replace("%60","`",$comp_name);
        
        if($update['status'] == 'success')
            $this->session->set_flashdata('success', 'Company '.$comp_name.' has been successfully archived!');
        
        echo json_encode($update);
    }
}

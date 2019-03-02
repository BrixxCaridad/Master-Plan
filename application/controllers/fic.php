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

        $this->load->model('faculty_model','ficm');
      
    } 

    public function index()
	{
     
       $data['data'] = $this->ficm->get_student_list($_SESSION['account_id']);

        $this->load->view('include/ficnavbar2'); 
		$this->load->view('include/header');
		$this->load->view('fic/ficdashboard',$data);
  
		$this->load->view('include/footer');
	}

	function add_student(){
       // Array ( [id_num] => aaaaaaa [s_lname] => bbbb [f_fname] => cccc [m_mname] => dddddd )
      
        $data = array('id' =>$_POST['id_num'],'lname'=>$_POST['s_lname'],'fname'=>'f_fname','mname'=>$_POST['m_lname']);
        $this->ficm->add_student($data);
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

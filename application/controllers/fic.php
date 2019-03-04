<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fic extends CI_Controller {
	
	public function __Construct() {
        parent::__Construct();     
        /*if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }

        if($this->session->userdata('role') != 'admin' && ('role') == 'admin' ){
            redirect(base_url());
        }*/

        $this->load->model('faculty_model','ficm');
       $this->load->model('course_model','course');
    } 

    public function index()
	{
     
       $data['data'] = $this->ficm->get_student_list($_SESSION['account_id']);
		$data['courses'] = $this->course->get_course();
        $this->load->view('include/header');
  
        $this->load->view('include/ficnavbar2'); 
		$this->load->view('fic/ficdashboard',$data);
		$this->load->view('include/footer');
	}
    function check_user(){
    $data=array(
        array('field'=>'name','label'=>'ID number','rules'=>'trim|required|is_unique[student.Student_ID]'));
        $this->form_validation->set_rules($data);
        $this->form_validation->set_message('is_unique', 'Username already exist');
        if ($this->form_validation->run()===FALSE){
                    $error=validation_errors();
                    echo $error;
                
        }
        else{
           echo  'true';
        }



    }
	function add_student(){
       // Array ( [id_num] => aaaaaaa [s_lname] => bbbb [f_fname] => cccc [m_mname] => dddddd )
        $data = array('Student_ID' =>$_POST['id_num'],'Student_Lastname'=>$_POST['s_lname'],'Student_Firstname'=>$_POST['f_fname'],'Student_Middlename'=>$_POST['m_mname'],'Course_Code' => $_POST['course'],'Access_Level_Code'=>'STUD','Password'=>'12345678');
        $this->ficm->add_student($data);

        


        
        redirect('/fic');
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

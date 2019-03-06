<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class  faculty_model extends CI_Model {

    function __construct(){ 
        parent::__construct();
        $this->load->model('sita_model','sita');
    }

    function update_dep_byid($id,$data)
    {
        $this->db->where('Sit_No', $id);
        $this->db->update("sit",$data);
    }
    
    function delete_dep_byid($id)
    {
        $this->db->where('Sit_No', $id);
        $this->db->delete("sit");
    }

    function display_company()
    {
        $this->db->select("*");
        $this->db->from("company");
        $query = $this->db->get();
        return $query;      
    }

    function display_dep_byid($id)
    {
        $this->db->select("*");
        $this->db->from("sit");
        $this->db->join('company', 'sit.Company_Code = company.Company_Code', 'inner');
        $this->db->join('faculty', 'sit.Faculty_ID = faculty.Faculty_ID', 'inner');
        $this->db->where('Sit_No', $id);
        $query = $this->db->get();
        
        return $query;      
    }

    function display_dep_byfic($id){
        $this->db->select('*');
        $this->db->from('sit');
        $this->db->where('sit.Faculty_ID', $id);
        $this->db->join('student', 'sit.Student_ID = student.Student_ID', 'left');
        $this->db->join('faculty', 'sit.Faculty_ID = faculty.Faculty_ID', 'left');
        $this->db->join('company', 'sit.Company_Code = company.Company_Code', 'left');
        $query = $this->db->get();
        return $query;
    }


    function get_student_list($id){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->join('course', 'student.Course_Code = course.Course_Code', 'left');
        $this->db->join('department', 'course.Department_Code = department.Department_Code', 'left');
        $this->db->where('student.Student_ID NOT IN (SELECT sit.Student_ID FROM sit)');
        $this->db->where('department.College_Code',$_SESSION['college_code']);
        $query = $this->db->get();
        
        return $query->result_array();
    }


    function get_stud_by_id($id){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('id', $id);
        $query=$this->db->get();
        return $query->result_array();
    }

    function get_info_by_id($id){
        $this->db->select('*');
        $this->db->from('faculty');
        $this->db->where('Faculty_ID', $id);
        $query=$this->db->get();
        return $query;  
    }

    function get_college(){
        $this->db->select('*');
        $this->db->from('college');
        $query=$this->db->get();
        return $query;  
    }

    function update_info_by_id($id,$data){
        $this->db->where('Faculty_ID', $id);
        $this->db->update('faculty', $data);        
    }


    function add_student($data){
            
         $this->db->insert('student',$data);
         $deployment = array('Student_ID'=>$data['Student_ID']);
         $this->db->insert('pre_deployment_path',$deployment);
         $this->db->insert('pre_deployment_status',$deployment);

         return $insert_id = $this->db->insert_id();
      
    }
    

    function validate_student($postData){
        $this->db->where('id_num', $postData['id_num']);
        $this->db->from('student');
        $this->db->join('course', 'students.course_id = course.course_id');
        $query=$this->db->get();
        if ($query->num_rows() == 0)
            return true;
        else
            return false;
    }


    function edit_student_details($postData){

        $oldData = $this->get_stud_by_id($postData['id']);

        if($oldData[0]['id_num'] == $postData['id_num'])
            $validate = true;
        else
            $validate = $this->validate_student($postData);
        $postData=str_replace("'", "`", $postData);
        
        if($validate){
            $data = array(
                'id_num' => $postData['id_num'],
                's_lname' => $postData['s_lname'],
                's_fname' => $postData['s_fname'],
                's_mname' => $postData['s_mname'],
                
                                    );

            $this->db->where('id', $postData['id']);
            $this->db->update('students', $data);

       
            /*$module = "Client Management";
            $activity = "update client ".$oldData[0]['c_name']."`s details ";
            $this->insert_log($activity, $module);
            return array('status' => 'success', 'message' => '');
        }else{
            return array('status' => 'exist', 'message' => '');
        }*/
        }
    }


    function archive_company($comp_name,$comp_id){

        $data = array(
            'comp_status' => 0,
        );
        $this->db->where('comp_id', $comp_id);
        //$this->db->where('contact_id', $contact_id);
        $this->db->update('company', $data);

        $comp_name=str_replace("%20"," ",$comp_name);
        $comp_name=str_replace("%60","`",$comp_name);

       /* $module = "Client Management";
        $activity = "delete client ".$c_name;
        $this->insert_log($activity, $module);
        return array('status' => 'success', 'message' => '');*/

    }
}
    

?>